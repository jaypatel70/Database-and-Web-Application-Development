<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Create insert</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amazondb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    // gets the value from the input box and stores it in a variable
    $genre = $_POST['genre'];
// $sql statement now passes the value of the variable
$sql = "INSERT INTO genretbl (genreID, genre) VALUES ('', '$genre')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>

</html>
