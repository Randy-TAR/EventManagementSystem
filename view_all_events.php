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
    include_once("event_controls.php");
    // include("event_controls.php");
    $sql= "SELECT * FROM events ";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["name"] . "<br>";
            echo $row["organisers"] . "<br>";
            echo $row["date"] . "<br>";
            echo $row["location"] . "<br>";
            echo $row["description"] . "<br>";
            ?>
            <div>
                <form action="./updating1.php" method="post">
                </form>
                <button><a href='updating_event.php?id=<?php echo $row['Id']; ?>' method='get' >Update Event</a></button>
                <button><a href='deleting_event.php?id=<?php echo  $row['Id']; ?>' method='get'>Delete Event</a></button> <hr>
            </div>
        <?php }
        if(isset($_POST['upd'])==true){
        echo "you want to update";?>
        <form action="updating_event.php" method="post">
        Name: <br>
        <input type="text" name="name" required><br>
        Organisers: <br>
        <input type="text" name="organisers" required><br>
        Date: <br>
        <input type="date" name="date" required><br>
        Location: <br>
        <input type="text" name="location"><br>
        Description: <br>
        <textarea name="description" cols="" rows="5"></textarea><br>
        <button><a href='updating_event.php?id=<?php echo $row['Id']; ?>' method='get' >Update Event</a></button>
       </form> 
       <?php
        }
        else{
            // echo "update not happenning";
        }
        }
        else {
            echo "0 results";
        }
echo '<button><a href="./create_event.php">Add Event</a></button>';
echo '<button><a href="./Home.html">Home</a></button>';

// die;
?>
</div>
