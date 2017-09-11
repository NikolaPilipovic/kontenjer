<?php

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT link FROM igrice where id = " . $id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$link = $row['link'];

mysqli_close($conn);
?>

<html>
<head>
 <title> Game </title> </head>
 <style>

 </style>
<body>
<div align="right">
<object width="550px" height="400px">
<param name="movie" value="<?= $link ?>">
<embed src="" width="550px" height="400px">
</embed>
</object>
<div>
</body>
</html>