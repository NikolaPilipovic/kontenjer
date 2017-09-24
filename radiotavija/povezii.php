<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tavija";

$odkoga = $_POST['odkoga'];
$zakoga = $_POST['zakoga'];
$pjesmica = $_POST['pjesmica'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tavija (odkoga, zakoga, pjesmica)
VALUES ('$odkoga', '$zakoga', '$pjesmica')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>