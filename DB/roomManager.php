<?php

require_once 'config.php';

class RoomManager extends DB_Manager
{
    public function getAllRooms($limit = 6, $page = 1)
    {
        $offset = ($page - 1) * $limit;
        $result = $this->executeQuery("select * from rooms limit $limit offset $offset");
        return $this->sanitizateRoom($result);
    }

    public function getRoom($id)
    {
        try {
            $result = $this->executeQuery("select * from rooms where _id = ?", ['type' => 'i', 'value' => [$id]]);
            if ($result->num_rows) {
                return $this->sanitizateRoom($result)[0];
            } else {
                throw new Error('404: Room not found');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getOfferRooms()
    {
        $result = $this->executeQuery('select * from rooms where offer=true');
        return $this->sanitizateRoom($result);
    }

    public function getAvailableRooms($in = "2000-1-1", $out = "2030-12-31")
    {
        $query_occupiedRooms = "select roomId from bookings where 
            checkIn > ? and checkIn < ? or 
            checkOut > ? and checkOut < ? or
            checkIn > ? and checkOut < ? or
            checkIn < ? and checkOut > ?";
        $ocuppied_result = $this->executeQuery($query_occupiedRooms, ['type' => 'ssssssss', 'value' => [$in, $out, $in, $out, $in, $out, $in, $out]]);
        if ($ocuppied_result->num_rows === 0) return $this->getAllRooms(10, 1);
        for ($ocuppiedRooms = array(); $row = $ocuppied_result->fetch_assoc(); $ocuppiedRooms[] = $row['roomId']);
        $length = count($ocuppiedRooms);
        $query_availables = "select * from rooms where _id not in (" . str_repeat("?, ", $length - 1) . "?)";
        $available_result = $this->executeQuery($query_availables, ['type' => str_repeat('i', $length), 'value' => $ocuppiedRooms]);
        $availableRooms = $this->sanitizateRoom($available_result);
        return $availableRooms;
    }

    public function checkAvailability($roomId, $in, $out)
    {
        $availables = $this->getAvailableRooms($in, $out);
        $isAvailable = false;
        foreach ($availables as $room) {
            if ($room['_id'] == $roomId) $isAvailable = true;
        }
        return $isAvailable;
    }

    private function sanitizateRoom($data)
    {
        for ($formatData = array(); $row = $data->fetch_assoc(); $formatData[] = $row) {
            $row['amenities'] = explode(',', $row['amenities']);
            $row['photos'] = explode(',', $row['photos']);
        }
        return $formatData;
    }
}

$roomManager = new RoomManager($connection);
