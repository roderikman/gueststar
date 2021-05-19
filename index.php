<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!-- Optimizing for mobile devices -->
<title>The GuestStar</title>
<link rel="stylesheet" href="style.css" />
<script> // Checking if form is empty
function validateForm() {
  var text = document.forms["guestbook"]["name"].value;
  if (text == "" || text == null) {
    alert("Please write your name!");
    return false;
  }
}
</script>
</head>
<body>
<div id="logo"> <h1>The GuestStar</h1></div>
By Roderik. This is a guestbook where everyone can write their name.<br> 
<div id="mainarea"> <form name="guestbook" method="post" action="add.php" onsubmit="return validateForm()"><br>
Name:<input type="text" name="name"/><br />
Email:<input type="text" name="email"/><br />
<input type="submit" value="Add your name!" /> 
<!-- In this form you add your name and your email -->
</form>
<h2>Names</h2>
<!-- Showing names by php script by including guestbook.php - page -->
<?php include 'guestbook.php';?>

</div>
</body>
<html>