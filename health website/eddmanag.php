<?php
session_start();
?>
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

$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
$db=mysqli_select_db($con,'hospital')
		or die ("error in DB connect");
		$_SESSION['search']=$_POST['search'];
		$name=trim($_SESSION['search']);
		$_SESSION['name']=$name;
	
	
		
if(!empty($_POST['sear'])){
	
		 
		$resul=mysqli_query($con,"SELECT * FROM admin WHERE name = '$name' ");
		
	  if(mysqli_num_rows($resul)<1){	echo "<center><br><br><br> <h1 id='top'> manager does not found </h1><br><br>";
			echo "<form method ='post' action='manag.php'><input type='submit' name='sub' value='BACK' id='but'></form></center>";

		
		}
   else{
   echo' <div class="row">
<div class="col">';
 
		   echo"<h2> manager information:</h2><br><br>";
	   foreach($resul as $results){
	    echo "<b> IP: </b>" . $results['IP'] . "<br> <br> ";   
        echo "<b>Name: </b>" . $results['name'] . " <br><br> ";
        echo "<b>Department: </b>" . $results['depart'] . " <br><br> ";
		echo "<b>Age: </b>" . $results['age'] . " <br><br> ";
		echo "<b>Salary: </b>" . $results['salary'] . " <br><br> ";
		echo "<b>Address: </b>" . $results['address'] . " <br><br> ";
		echo "<b>Phone: </b>" . $results['phone'] . " <br><br> ";
	   }
	
	   
	  
	
		echo'<form method="post" action="del.php" id="left"><br>
<input type="submit" value=" Delete " name="delete" id="but"></form> ';
 echo '</div>';
  echo '<div class="col">';

		echo"<br><br><h2> if you want to update</h2><br><br>
		
		<form action='del.php' method='post'>
<table>
	<tr><td>Name:</td><td><input type='text' title='Enter manager name  ' name='name' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Department:</td><td><input type='text' title='Enter manager department  ' name='depart' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Age:</td><td><input type='text' title='Enter manager age  ' name='age' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Salary:</td><td><input type='text' title='Enter manager salary  ' name='salary' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Address:</td><td><input type='text' title='Enter manager address  ' name='address' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Phone:</td><td><input type='text' title='Enter manager phone  ' name='phone' id='text' required></td></tr>
	<tr><td><br></td></tr>
	
	<tr><td><br></td></tr>
	<tr><td><input type ='submit' value='Update' name='update' id='but'></td> </tr>
</table>
</form>";
 echo '</div>';
echo"</div>";
				 echo " <form method ='post' action='manag.php' > <input type='submit' name='BACK HAME' value= '  Back  'id='back' ></form>";

		}
		}
?>


</body>
</html>