
<?php

$db_name='hospital';
	$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
	$db=mysqli_select_db($con,$db_name)
		or die ("error in DB connect");
		if(!empty($_POST['insert'])){
			
	$name=$_POST["nameEmp"];
	$depart=$_POST['departEmp'];
	$age=$_POST['ageEmp'];
	$salary=$_POST['salaryEmp'];
	$address=$_POST['addressEmp'];
	$phone=$_POST['phoneEmp'];
	if(empty($_POST['nameEmp']) || empty($_POST['departEmp']) || empty($_POST['ageEmp'])||empty($_POST['salaryEmp'])||empty($_POST['addressEmp'])||empty($_POST['phoneEmp']))
{
	echo"<div class ='form1'><center><h1>insert all information</h1><br> <br>
	<h3>to goback clik here</h3>";
	echo "<form method ='post' action='insertemployee.html'><input type='submit' name='sub' value='clik here' id='but'></form></center></div>";
	
}
else{
	$res=mysqli_query($con,"INSERT INTO employees (nameEmp,departEmp,ageEmp,salaryEmp,addressEmp,phoneEmp) VALUES('$name','$depart','$age','$salary','$address','$phone')")
		or die("error");
	Header("Location:emp.php");

}
}
?>

