<?php
include_once '../database/db-connection.php'; 

$id = $_GET['id'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];


$sql = "UPDATE `auction_item_tbl` SET `start_time`= '$start_time', `end_time`='$end_time', `status`='Assigned' WHERE id=$id";

if ($conn->query($sql) === TRUE) 
{
  echo "Record updated successfully";
  header('Location: auction.php');
}
 else

 {
  echo "Error updating record: " . $conn->error;
}


?>