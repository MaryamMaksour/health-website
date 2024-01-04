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
	
		
		
		$resul=mysqli_query($con,"SELECT * FROM nurses WHERE nameNur = '$name' ");
		
	  if(mysqli_num_rows($resul)<1){	echo "<center> <h1 id='top'> Nurses does not found </h1><br><br>";

		  			echo "<form method ='post' action='nur.php'><input type='submit' name='sub' value='BACK' id='but'></form></center>";

		}
   else{

   echo' <div class="row">
<div class="col">';
		   echo"<h2> Nurse information:</h2><br><br>";
	   foreach($resul as $results){
	    echo "<b> IP: </b>" . $results['IPNUR'] . "<br> <br> ";   
        echo "<b>Name: </b>" . $results['nameNur'] . " <br><br> ";
        echo "<b>Department: </b>" . $results['departNur'] . " <br><br> ";
		echo "<b>Age: </b>" . $results['ageNur'] . " <br><br> ";
		echo "<b>Salary: </b>" . $results['salaryNur'] . " <br><br> ";
		echo "<b>Address: </b>" . $results['addressNur'] . " <br><br> ";
		echo "<b>Phone: </b>" . $results['phoneNur'] . " <br><br> ";
	    }
		echo'<form method="post" action="delnur.php" >
<input type="submit" value=" Delete " name="delete" id="but"></form> ';
		
echo '</div>';
		
echo "<div class='col'><h2>
if you want to update </h2><br>
<form action='delnur.php' method='post'>
<table>
	<tr><td>Name:</td><td><input type='text' title='Enter nurses name  ' name='nameNur' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Department:</td><td><input type='text' title='Enter nurses department  ' name='departNur' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Age:</td><td><input type='text' title='Enter nurses age  ' name='ageNur' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Salary:</td><td><input type='text' title='Enter nurses salary  ' name='salaryNur'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Address:</td><td><input type='text' title='Enter nurses address  ' name='addressNur'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Phone:</td><td><input type='text' title='Enter nurses phone  ' name='phoneNur'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td><br></td></tr>
	<tr><td><input type ='submit' value='Update' name='update' id='but'></td> </tr>
</table>
</form>
	</div>
</div>	
";
		   echo " <form method ='post' action='nur.php'id='left'> <input type='submit' name='back' value= '  BACK HOME  ' id='back' ></form>";
	}
		
?>

</body>
</html>