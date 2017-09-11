<html>
<head>
<style>
body, a:hover, td:hover {
	cursor: url("cu.png"), default;
	
}

table
{
	  border-radius: 1em;
}



.tdi
{
width: 80px;
height: 80px;
}
.autoResizeImage{
  display:block; 
  width:100%; 
  height:100%;
  padding: 0px; 
  margin: 0px;

}
.logo{
     float:left;
   display:block;
   padding-left: 15px;
   height:110px;

}

.pic:hover { opacity: 0.3; filter: alpha(opacity=30); cursor: url("cu.png"), default;} 

</style>
<head>
<body>
<?php
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

$sql = "SELECT id, img, link FROM igrice";
$result = mysqli_query($conn, $sql);
echo '<div>';
echo '<a href = "index.php"><img class="logo" src = "slike/logo1.png"/></a><td></td>';
echo '</div>';
$br = 0;
if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
	echo '<TABLE cellspacing="0" BORDER="15" CELLPADDING="0" CELLSPACING="3" BORDERCOLOR="#FFA500" width="90%" align="center" >';
	echo '<tr>';
    while($row = mysqli_fetch_assoc($result)) {
		$br++;
		echo '<td  class="tdi" >';
        echo "<a href = '/igrajmo/igrassad/igra.php?id=" . $row["id"] . "'>" . '<div class="pic"><img class="autoResizeImage" align="center"  src ='.$row["img"].'/></div>'. "</a>";
		echo '</td>';
		if ($br > 12)
		{
			echo '</tr>';
			echo '<tr>';
			$br = 0;
		}
		
    }
}

else {
    echo "0 results";
}
echo '</table>';

mysqli_close($conn);
?>
</body>
</html>