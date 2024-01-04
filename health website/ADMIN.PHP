<html>
<head>

<link rel="stylesheet" type="text/css"
href="style.css">
<style>
body{

background-image:url("system.jpg");
	background-repeat: no-repeat;
	background-size:1600px 750px;
	padding: 150px;
}

</style>
</head>

<body>
<?php

if($_POST['pass']=="12345")
	Header("Location:system.html");
else
{
	echo "<center><br><br><h2>incorrect password </h2><br> <br>";
	echo'<form method="post" action="ADMIN.html">
	<input type ="submit" value=" BACK " id="back">
	</form> </center>';
}

?>

</body>
</html>