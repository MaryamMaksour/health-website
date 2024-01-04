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
	
	
		$resul=mysqli_query($con,"SELECT * FROM employees WHERE nameEmp = '$name' ");
		
	  if(mysqli_num_rows($resul)<1){	
			echo "<center> <h1 id='top'> Employee does not found </h1><br><br>";
			echo "<form method ='post' action='emp.php'><input type='submit' name='sub' value='BACK' id='but'></form></center>";

		 
		}
   else{   echo '<div class="row">
				<div class="col">';
		   echo"<h2> employee information:</h2><br><br>";
	   foreach($resul as $results){

	    echo "<b> IP: </b>" . $results['IPemp'] . "<br> <br> ";   
        echo "<b>Name: </b>" . $results['nameEmp'] . " <br><br> ";
        echo "<b>Department: </b>" . $results['departEmp'] . " <br><br> ";
		echo "<b>Age: </b>" . $results['ageEmp'] . " <br><br> ";
		echo "<b>Salary: </b>" . $results['salaryEmp'] . " <br><br> ";
		echo "<b>Address: </b>" . $results['addressEmp'] . " <br><br> ";
		echo "<b>Phone: </b>" . $results['phoneEmp'] . " <br><br> ";
	    }
	
		
		echo'<br><form method="post" action="delemp.php" >
<input type="submit" value=" Delete " name="delete" id="but">
</form>
';
	 echo '</div>';  
	 
echo"<div class='col'>";
echo"
<h3>
if you want to update:</h3><br>
<form method='post' action='delemp.php'>
<table>
	<tr><td>Name:</td><td><input type='text' title='Enter employee name  ' name='nameEmp' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Department:</td><td><input type='text' title='Enter employee department  ' name='departEmp' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Age:</td><td><input type='text' title='Enter employee age  ' name='ageEmp'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Salary:</td><td><input type='text' title='Enter employee salary  ' name='salaryEmp' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Address:</td><td><input type='text' title='Enter employee address  ' name='addressEmp' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Phone:</td><td><input type='text' title='Enter employee phone  ' name='phoneEmp' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td><br></td></tr>
	<tr><td><input type ='submit' value='Update' name='update' id='but'></td>
</table>
</form>
</div ></div>";
	
	 echo " <form method ='post' action='dr.php'id='left'> <input type='submit' name='back' value= 'BACK HOME' id='back' ></form>";
	}
		

?>

</body>
</html>