<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "farm_bid_db";

// Database Connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$timezone = new DateTimeZone('Asia/Kolkata');
$currentDate = new DateTime();
$currentDate->setTimezone($timezone);

$sql = "SELECT * FROM auction_item_tbl";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
        $currentId = $row['id'];
        $currentTime = $currentDate->format('d-m-Y H:i:s');
        $auctionEndedTime = date('d-m-Y H:i:s', strtotime($row['end_time']));
        $auctionStartTime = date('d-m-Y H:i:s', strtotime($row['start_time']));
        // echo "Current ".$currentTime."<br>";
        // echo "Auction ".$auctionEndedTime;
        if($currentTime >= $auctionStartTime && $currentTime <= $auctionEndedTime)
        {
            $sql = "UPDATE auction_item_tbl SET status = 'On_Going', highest_bidder = 'On_Going' WHERE id = $currentId";
            $conn->query($sql);
        }
        else if ($currentTime > $auctionEndedTime && $row['start_time'] != 'requested...')
        {
            $sql = "UPDATE auction_item_tbl SET status = 'Ended', highest_bidder = 'No One' WHERE id = $currentId";
            $conn->query($sql);
        }
  }
}
?>