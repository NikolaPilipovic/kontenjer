<?php

//require_once('include/util.php');
$odkoga = $_POST['odkoga'];
$zakoga = $_POST['zakoga'];
$pjesmica = $_POST['pjesmica'];
echo $odkoga.$zakoga.$pjesmica;
$con = mysqli_connect("localhost", "root", "", "tavija");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "insert into message(odkoga,zakoga,pjesmica) values('$odkoga', '$zakoga' ,'$pjesmica')";
mysqli_query($con,$sql);
mysqli_close($con);
echo "successful"
?>