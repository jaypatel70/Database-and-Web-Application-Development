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

    $sql = "SELECT genreID, genre from genretbl";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
?>
    <table>
        <tr>
            <td><b>GenreID</b></td>
            <td><b>Genre</b></td>
            <td>Update Link</td>
            <td>Delete Link</td>
        </tr>
        <?php
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row["genreID"];?></td>
            <td><?php echo $row["genre"];?></td>
            <td><a href="update-genre.php?genreID=<?php echo $row["genreID"];?>">Update</a></td>
            <td><a href="delete-genre.php?genreID=<?php echo $row["genreID"];?>">Delete</a></td>
           
        </tr>
        <?php
        }
   ?>
    </table>
    <?php
    } else {
   ?>
    <p>0 results</p>
    <?php
    }
    $conn->close();
?>

</body>

</html>
