<html>
<head>
<link rel="stylesheet" type="text/css"
href="style.css">
<style>
body{

background-image:url("system2.jpg");
	background-repeat: no-repeat;
	background-size:1600px 750px;
}
</style>
<title>
manager
</title>
</head>

<body>

<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
$db=mysqli_select_db($con,'hospital')
		or die ("error in DB connect");
		$_SESSION['search']=$_POST['search'];
		$name=trim($_SESSION['search']);
		$_SESSION['name']=$name;
	
		
		
		$resul=mysqli_query($con,"SELECT * FROM patient WHERE namePat = '$name' ");
		
	  if(mysqli_num_rows($resul)<1){	
	  echo "<center> <h1 id='top'> Doctor does not found </h1><br><br>";
			echo "<form method ='post' action='pat.php'><input type='submit' name='sub' value='BACK' id='but'></form></center>";

		
		}
   else{  
   echo' <div class="row">
<div class="col">';
		 echo"<h2> Patient information:</h2>";
	   foreach($resul as $results){
	    echo "<b> IP: </b>" . $results['IPpat'] . "<br> <br>";   
        echo "<b>Name: </b>" . $results['namePat'] . " <br> <br>";
        echo "<b>diseases: </b>" . $results['disease'] . " <br> <br>";
		echo "<b>Age: </b>" . $results['agePat'] . " <br><br> ";
		echo "<b>Address: </b>" . $results['addressPat'] . " <br><br> ";
		echo "<b>Phone: </b>" . $results['phonePat'] . " <br><br> ";
		
	 }

	
		echo'<br><form method="post" action="delpat.php" >
					<input type="submit" value=" Delete " name="delete" id="but">
			</form></div>';

echo"<div class='col'><h3>
if you want to update</h3><br>
<form action='delpat.php' method='post'>
<table>
	<tr><td>Name:</td><td><input type='text' title='Enter patient name ' name='namepat' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Doctor's name:</td><td><input type='text' title='Enter Doctors name  ' name='nameDR'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Age:</td><td><input type='text' title='Enter patient age  ' name='agepat'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Diseases:</td><td><input type='text' title='Enter patient Diseases  ' name='dis'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Address:</td><td><input type='text' title='Enter patient address  ' name='addresspat'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Phone:</td><td><input type='text' title='Enter patient phone  ' name='phonepat'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td><br></td></tr>
	<tr><td><input type ='submit' value='UPDATE' name='update' id='but'></td></tr>
</table>
</form>

</div></div>
";
  	   echo " <form method ='post' action='pat.php' > <input type='submit' name='back' value= '  BACK HOME  ' id='back' ></form>";
 }
		
?>

</body>
</html>