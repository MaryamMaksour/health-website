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
	
		

		$resul=mysqli_query($con,"SELECT * FROM drs WHERE nameDr = '$name' ");
		
	  if(mysqli_num_rows($resul)<1){	echo "<center> <h1 id='top'> Doctor does not found </h1><br><br>";

		 			echo "<form method ='post' action='dr.php' id ='left'><input type='submit' name='sub' value='BACK' id='but'></form>";

		}
   else{
     echo' <div class="row">
<div class="col">';
		   echo"<h2> Doctor information:</h2><br><br>";
	   foreach($resul as $results){
	    echo "<b> IP: </b>" . $results['IPD'] . "<br> <br> ";   
        echo "<b>Name: </b>" . $results['nameDr'] . " <br><br> ";
        echo "<b>specialty: </b>" . $results['specialty'] . " <br><br> ";
		echo "<b>Age: </b>" . $results['ageDr'] . " <br><br> ";
		echo "<b>Salary: </b>" . $results['salaryDr'] . " <br><br> ";
		echo "<b>Address: </b>" . $results['addressDr'] . " <br><br> ";
		echo "<b>Phone: </b>" . $results['phoneDr'] . " <br><br> ";
	   } 
	
	  
			
		echo'<form method="post" action="deldr.php" >
<input type="submit" value=" Delete " name="delete" id="but"></form> </div>';
		
echo "
<div class='col'><h2>
if you want to update</h2> <br>
<form action='deldr.php' method='post'>
<table>
	<tr><td>Name:</td><td><input type='text' title='Enter doctor name  ' name='nameDr' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Medical specialty:</td><td><input type='text' title='Enter doctor specialty  ' name='specialty' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Age:</td><td><input type='text' title='Enter doctor age  ' name='ageDr'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Salary:</td><td><input type='text' title='Enter doctor salary  ' name='salaryDr' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Address:</td><td><input type='text' title='Enter doctor address  ' name='addressDr'id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td>Phone:</td><td><input type='text' title='Enter doctor phone  ' name='phoneDr' id='text' required></td></tr>
	<tr><td><br></td></tr>
	<tr><td><br></td></tr>
	<tr><td><input type ='submit' value='Update' name='update' id='but'></td> </tr>
</table>
</form></div>
";echo"</div>";
    echo " <form method ='post' action='dr.php'id='left'> <input type='submit' name='back' value= '  BACK HOME  ' id='back' ></form>";

   }	
   
?>

</body>
</html>