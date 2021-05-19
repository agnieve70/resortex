<?php

include "connection.php";

class Resort extends Connection{

 public function __construct()
 {
     parent::__construct();
 }
 public function getLocations()
 {
    $sql = "SELECT * FROM location";

    $result = $this->conn->query($sql);
    $rows = array();
    $data = array();
    foreach($result as $row)
    {
      $rows['location_id'] = $row['location_id'];
      $rows['location'] = $row['location'];

      $data[] = $rows;
    }
    return $data;
    $this->conn->close();
 }
 public function getResorts($id)
 {
    $sql = "SELECT * FROM resort WHERE location_id = $id";

    $result = $this->conn->query($sql);

    $rows = array();
    $data = array();
    foreach($result as $row)
    {
      $rows['resort_id'] = $row['resort_id'];
      $rows['location_id'] = $row['location_id'];
      $rows['resort'] = $row['resort'];
      $rows['description'] = $row['description'];
      $rows['ratings'] = $row['ratings'];
      $rows['resort_img'] = $row['resort_img'];

      $data[] = $rows;
    }
    return $data;
    $this->conn->close();
 }
 
 public function getResortDetails($id)
 {
    $sql = "SELECT * FROM resort WHERE resort_id = ".$id;

    $result = $this->conn->query($sql);
    $rows = array();
    $data = array();
    foreach($result as $row)
    {
      $rows['resort_id'] = $row['resort_id'];
      $rows['location_id'] = $row['location_id'];
      $rows['resort'] = $row['resort'];
      $rows['description'] = $row['description'];
      $rows['ratings'] = $row['ratings'];
      $rows['resort_img'] = $row['resort_img'];

      $data[] = $rows;
    }
    return $data;
    $this->conn->close();
 }
}