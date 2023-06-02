<?php

require_once('env.php');

class RoomsManager
{
    public $conn;

    public function __construct()
    {
        global $DB;
        $this->conn = new mysqli($DB['SERVER'], $DB['USER'], $DB['PASS'], $DB['NAME']);
    }

    public function executeQuery($query, $param = [])
    {
        $stmt = $this->conn->prepare($query);
        count($param) !== 0 && $stmt->bind_param($param['type'], ...$param['value']);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

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
        $idList = implode(",", $ocuppiedRooms);
        $query_availables = "select * from rooms where _id not in (?)";
        $available_result = $this->executeQuery($query_availables, ['type' => 's', 'value' => $idList]);
        $availableRooms = $this->sanitizateRoom($available_result);
        return $availableRooms;
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

$roomManager = new RoomsManager();
