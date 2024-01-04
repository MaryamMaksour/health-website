<html>
<head>
<link rel="stylesheet" type="text/css"
href="style.css">
<link rel="stylesheet" type="text/css"
href="table.css">
<style>
body{

background-image:url("system2.jpg");
	background-repeat: no-repeat;
	background-size:1600px 750px;
}
</style>
<title>
nurses
</title>
</head>

<body>

<div class="container">
<div class="navbar">
<nav>
<ul>
<li><a href="manag.php">MANAGERS</a></li>
<li><a href="dr.php">DOCTORS</a></li>
<li><a href="nur.php">NURSES</a></li>
<li><a href="pat.php">PATIENTS</a></li>
<li><a href="emp.php">EMPLOYEES</a></li>

</ul>
</nav>

</div>
</div>

<div class="search">
<br>
<form method='post' action='eddnur.php'>
	<input type='text' title='Enter nurse name  ' name='search' id="text" required>	<input type='submit' name='sear' value= '  Search  '  id="ok"> 
	</form>

</div>
<?php

$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
	$db=mysqli_select_db($con,'hospital')
		or die ("error in DB connect");


$result="SELECT nameNur FROM nurses";
$query=mysqli_query($con,$result);
 if(mysqli_num_rows($query)>=1){
		   echo' <center>';
		   echo"<h2> Nurses Name:</h2><br><br>";
	   foreach($query as $results){
		   echo"<table><tr><td><h4>";
		 echo $results['nameNur']."</h4>";
			echo"</td></tr></table>";
			}
			echo '</center>';
		}
	   else{

	echo "Error";
	   }
	echo "<br><br><br>";
	
	
?>
<center>

	<form method="post" action="insertnur.html">
		
		<input type="submit" value="Insert new nurse" name="insert" id="but">
		
	</form>	
				</center>
				
				<form method="post" action="system.html">
		<input type="submit" value=" BACK HOME " name="back" id="back">
	</form>
	
	
</body></html>