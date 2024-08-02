<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
</body>
</html>
<div>
    <?php
    // include("event_controls.php");
    $sql= "SELECT * FROM events ";
    $result=mysqli_query($conn,$sql);
    // print_r ($result);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["name"] . "<br>";
            echo $row["organisers"] . "<br>";
            echo $row["date"] . "<br>";
            echo $row["location"] . "<br>";
            echo $row["description"] . "<br>";
            print_r($row); ?>
            <div>
                <button><a href='updating_evet.php' name='update_event' value='..'>Update Event</a></button>
                <button><a href='deleting_event.php?id=<?php echo  $row['Id']; ?>' method='get' value=''>Delete Event</a></button> <hr>
            </div>
        <?php }
    }
    else {
        echo "0 results";
    }
echo '<button><a href="./create_event.html">Add Event</a></button>';
// die;
?>
</div>
