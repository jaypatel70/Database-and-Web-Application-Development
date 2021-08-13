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

    $genreid = $_GET['genreID'];

// Fetch genre data based on genreID
$sql = "SELECT * FROM genretbl WHERE genreID=$genreid";
$result = $conn->query($sql);
while($row =$result->fetch_assoc()) 
{
	$genre = $row['genre'];
}
    ?>
    <form name="update_user" method="post" action="">
        <table border="1">
            <tr>
                <td>genre</td>
                <td><input type="text" name="genre" value="<?php echo $genre; ?>"></td>
            </tr>

            <tr>
                <td><input type="hidden" name="genreID" value="<?php echo $_GET['genreID'];?>"></td>
                <td><input type="submit" name="update" value="update genre"></td>
                
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['update']))
{	
	$genreid = $_POST['genreID'];
	
	$genre=$_POST['genre'];

	// update genre data
	$sql = ("UPDATE genretbl SET genre='$genre' WHERE genreID=$genreid");
	$result = $conn->query($sql);
	// Redirect to homepage to display updated genre in list
	header("Location: read-genre.php");
}
?>
    <?php
    $conn->close();
?>

</body>

</html>
