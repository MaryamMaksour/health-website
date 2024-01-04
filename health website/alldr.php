<html>
<head>
<link rel="stylesheet" type="text/css"
href="style.css">

<link rel="stylesheet" type="text/css"
href="table.css">
<title>
All doctors
</title>
<style>
body{
background-color:#dbeaff;
background-image:url("back.png");
	background-repeat: no-repeat;
	background-size:1500px 750px;
}
</style>
</head>

<body>

<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
$db=mysqli_select_db($con,'hospital')
		or die ("error in DB connect");
	$resul=mysqli_query($con,"SELECT * FROM drs");
	echo"<center> <h1 id='top'>Our doctors</h1><br><br>";
	echo"<table >
	<tr><th><h3> Name </h3></th> <th><h3>Spcialty</h3></th> <th><h3>Email</h3></th>";
	  foreach($resul as $results){
		  echo'
		  
		  <tr>
		  <td><b>'.$results['nameDr'].'</b></td><td><b>'.$results['specialty'].'</b></td><td><b>'.$results['Dremail'].'</b></td>
		  </tr>
		  ';
	  }	
	  echo "</table></center>";
	  echo'
		<form method="post" action="find.html"><input type="submit" value="   BACK   " id="back"></form>
	  ';
		
		
?>