<?php
include ("event_controls.php");
$Id= $_GET['id'];
echo $Id;
$sql = "DELETE FROM events WHERE id= $Id";
// $result = mysqli_query($conn, $sql);
if(mysqli_query($conn, $sql)){
    echo"event deleted";
}

header("location:view_all_events.php");

?>