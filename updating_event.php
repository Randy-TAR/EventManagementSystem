<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
include("event_controls.php");
session_start();
$Id= $_GET['id'];
$_SESSION['Id'] =$_GET['id'];
// echo $Id;
$sql = "SELECT id, name, organisers, date, location, description FROM events WHERE id='$Id'";
$result= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
</head>
<body>
<form action="updating1.php" method="post">
        Name: <br>
        <input type="text" name="name" value="<?php echo $row['name']?>" required><br>
        Organisers: <br>
        <input type="text" name="organisers" value="<?php echo $row['organisers']?>" required><br>
        Date: <br>
        <input type="date" name="date" value="<?php echo $row['date']?>" required><br>
        Location: <br>
        <input type="text" name="location" value="<?php echo $row['location']?>"><br>
        Description: <br>
        <textarea name="description" value="<?php echo $row['description']?>" cols="" rows="5" ></textarea><br>
        <input type="hidden" name="id" value="<?php echo $Id;?>"></a>
        <button type="submit">submit</button>
        <?php
        echo '<button><a href="./Home.html">Home</a></button>';
        ?>
       </form>
</body>
</html>

