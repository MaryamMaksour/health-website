<html>
<head>
<link rel="stylesheet" type="text/css"
href="style.css">
<link rel="stylesheet" type="text/css"
href="table.css">
<title>
Doctor
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
		
		
	$resul=mysqli_query($con,"SELECT * FROM drs WHERE specialty='$_POST[Service]'");
echo"<center id='top' >	<table>
		   <tr>
		  <th>Name</th><th>Specialty</th><th>Email</th>
		  </tr>";
	  foreach($resul as $results){
		  echo'
		  <center >
		
		  <tr>
		  
		  <td><b>'.$results['nameDr'].'</b></td>
		  <td><b>'.$results['Dremail'].'</b></td>
		  <td><b>'.$results['addressDr'].'</b></td>
		  
		  </tr>
		  
		 
		
		  ';
	  }	
	echo"</table>";
		
	   echo'  <br><br><br>
		<form method="post" action="find.html"><input type="submit" value="   BACK   " id="back" ></form>
	  </center> ';
	