<?php

require_once('env.php');

$servername = $DB['SERVER'];
$username = $DB['USER'];
$password = $DB['PASS'];
$database = $DB['NAME'];

function prettyPrint($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

function queryDB($conection, $query, $param = [])
{
    $stmt = $conection->prepare($query);
    count($param) !== 0 && $stmt->bind_param($param['type'], $param['value']);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

class RoomsManager
{
    public $conn;

    public function __construct()
    {
        global $DB;
        $this->conn = new mysqli($DB['SERVER'], $DB['USER'], $DB['PASS'], $DB['NAME']);
    }

    public function getAllRooms()
    {
        $result = queryDB($this->conn, "select * from rooms");
        return $this->sanitizateRoom($result);
    }

    public function getRoom($id)
    {
        $result = queryDB($this->conn, "select * from rooms where _id = ?", ['type' => 'i', 'value' => $id]);
        return $this->sanitizateRoom($result);
    }
    public function getOfferRooms()
    {
        $result = queryDB($this->conn, 'select * from rooms where offer=true');
        return $this->sanitizateRoom($result);
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
