<?php
$room = $_GET["ROOM"];
$id = $_GET["ID"];


header('Access-Control-Allow-Origin: *');
$mysqli = new mysqli('badda3mon.beget.tech', 'badda3mon_hostel', '71pgwTk%', 'badda3mon_hostel');
$myArray = array();

if($room){
    if ($result = $mysqli->query("SELECT * FROM Students WHERE ROOM=$room")) {
        $tempArray = array();
        while ($row = $result->fetch_object()) {
            $tempArray = $row;
            array_push($myArray, $tempArray);
        }
        echo json_encode($myArray);
    }
}
else if($id){
    if ($result = $mysqli->query("SELECT * FROM Students WHERE ID=$id")) {
        $tempArray = array();
        while ($row = $result->fetch_object()) {
            $tempArray = $row;
            array_push($myArray, $tempArray);
        }
        echo json_encode($myArray);
    }
}



$result->close();
$mysqli->close();
