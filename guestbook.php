<?php
	$host=""; 
	$user=""; 
	$pass=""; 
	$dbname=""; 
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$result = mysqli_query($con,"SELECT id,name,date FROM guestbook");
	while($row = mysqli_fetch_array($result))
	{ ?>
	<h1><?php echo $row['name']; ?></h1>
	<h2><?php echo $row['date']; ?></h2>
	<a href="delete.php?userid=<?php echo $row["id"]; ?>">Delete</a>
	<?php } 
		mysqli_close($con);
?>