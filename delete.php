<html><head><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!-- Optimizing for mobile devices --></head>
<body>
<?php
function connect() {
    	$host=""; 
	$user=""; 
	$pass=""; 
	$dbname=""; 
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
$sql = "DELETE FROM guestbook WHERE id='" . $_GET["userid"] . "'"; // Delete the name
if (mysqli_query($con, $sql)) {
    echo "Deleted successfully";
} else {
    echo "Error deleting: " . mysqli_error($con);
}
mysqli_close($conn);
}
 connect();
?>
<br>
<a href="http://www.roderik.fi/gueststar">Click here to go back!</a>
</body>
</html>