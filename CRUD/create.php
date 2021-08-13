<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">

    <title>Create a record</title>
</head>

<body>
    <?php
    // Variables holding login details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amazondb";

// Create connection and passing the variables into the mysqli function
$conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection is valid
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $sql variable holding the SQL statement
$sql = "INSERT INTO genretbl (genreID, genre) VALUES ('', 'fiction')";

    // If the query is successful output the message
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    // Close connection
$conn->close();
?>

</body>

</html>