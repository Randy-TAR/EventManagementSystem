<h1>hello world</h1>
<?php
include("event_controls.php");
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $upname= $_POST['name'];
    $uporganisers= $_POST['organisers'];
    $update = $_POST['date'];
    $uplocation =$_POST['location'];
    $updescription =$_POST['description'];
// echo "".$upname."".$uporganisers.''.$update.''.$uplocation.''.$updescription.''.$id.'';
$sql = "UPDATE events SET name= '$upname', organisers= '$uporganisers', date= '$update', location= '$uplocation', description= '$updescription' WHERE id='$id'  ";
if (mysqli_query($conn, $sql)) {
    echo "New update  successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
else {
    echo 'form not submitted';
}
header("location:view_all_events.php");
?>

