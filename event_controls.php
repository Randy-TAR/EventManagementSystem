<!-- connecting to the data base -->
<div>
    <?php
    $db_server="localhost";
    $db_user= "root";
    $db_pass= "";
    $db_name= "event management db";
    $conn ="";
    try {
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    }
    catch (mysqli_sql_exception) {
        echo "Data Base could not connect try again";
    }
    if($conn){
        echo "db connted";
    }
    ?>
</div>
<?php
// include 'create_event.php';
if(isset($_POST["add_event"])) {
// if($_SERVER["REQUEST_METHOD"]== "POST"){
// Colecting the inputs from the form 
    $Id= $_POST['Id'];
    $name= filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING);
    $organisers= filter_input(INPUT_POST,"organisers", FILTER_SANITIZE_STRING);
    $date = $_POST['date'];
    $location =filter_input(INPUT_POST,"location", FILTER_SANITIZE_STRING);
    $description =filter_input(INPUT_POST,"description", FILTER_SANITIZE_STRING);
// Adding an event into the data base
    $sql = "INSERT INTO events (Id, name, organisers, `date`, `location`, `description`, `creation date`) 
    VALUES (NULL, '$name', '$organisers', '$date', '$location', '$description', current_timestamp())";
    try {
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    catch (mysqli_sql_exception){
    echo "event already exist";
    }
    include "view_all_events.php";
    mysqli_close($conn);
}
?>
