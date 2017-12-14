<html>
<head>
<style type="text/css">
p
{
      font-family: 'Bubblegum Sans';
      font-size: 25px;
      font-style: italic;
}
.veci
{
      font-size: 22px;
}
.usrat
{
	padding: 30px;
}
.content {padding:40px 0px}
.custom-info{

padding: 30px;
} 
</style>
<title> Radionica </title>
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<button onclick="window.location.href='index.html'" class="btn btn-danger"> Nazad </button>
<div class="container">
<div class="col-md-8">
<b><p align="center" class="veci"> Dobrodošli u radionicu, pripremite alat! </p></b> </br>
</div>
<div class="col-md-4">
<img src = "slike/alat.png"/>
</div>
</div>
<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saznajsve";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/
require 'db.php';

$sql = "SELECT * FROM radionica ORDER BY id ASC
LIMIT 0,5;";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)) {
		echo '<div class="container">';
		echo '<div class="row">';

        echo " <div class = 'col-md-6 custom-info text-left'>   <div class='content'> <p class = 'veci'> "   . $row["nazivkvara"].  " </p></div></div><iframe width='400' height='225' src= " . $row["urlvidea"]. "frameborder='0' allowfullscreen></iframe><br><hr>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

}
else
{
	echo 'Nema popravaka';
}

mysqli_close($conn);
?>
</body>
</html>