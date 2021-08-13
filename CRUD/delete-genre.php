<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    // Get genreid from URL to delete that genre
$genreid = $_GET['genreID'];
 
// Delete genre row from table based on given genreid
$sql = ("DELETE FROM genretbl WHERE genreID=$genreid");
 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();
// After delete redirect to Home, so that latest genre list will be displayed.
header("Location:read-genre.php");

    ?>
</body>

</html>
