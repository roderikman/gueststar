<html><head><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!-- Optimizing for mobile devices --></head>
<body>
<?php
function connect() {
    	$host=""; 
	$user=""; 
	$pass=""; 
	$dbname="";
	$con=mysqli_connect($host,$user,$pass,$dbname);
	$dt1=date("jS \of F Y");
	if (mysqli_connect_errno($con))
	{
		echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
	}
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql="INSERT INTO guestbook(name,email,date) VALUES('$name','$email','$dt1')"; //Adding values into database
	if (!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	else
	echo "Thank you!";
	mysqli_close($con);
}

connect();

?>
<br>
<a href="http://www.roderik.fi/gueststar">Click here to go back!</a>
</body>
</html>