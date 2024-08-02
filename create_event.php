<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
   <form action="event_controls.php" method="post">
    <input type="hidden" name="Id">
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
    <input type="submit" name="add_event" value="Add Event">
   </form> 
</body>
</html>