
<?php

$db_name='hospital';
	$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
	$db=mysqli_select_db($con,$db_name)
		or die ("error in DB connect");
		if(!empty($_POST['insert'])){
			
	$name=$_POST["nameNur"];
	$depart=$_POST['departNur'];
	$age=$_POST['ageNur'];
	$salary=$_POST['salaryNur'];
	$address=$_POST['addressNur'];
	$phone=$_POST['phoneNur'];
	
}

	$res=mysqli_query($con,"INSERT INTO nurses (nameNur,departNur,ageNur,salaryNur,addressNur,phoneNur) VALUES('$name','$depart','$age','$salary','$address','$phone')")
		or die("error");
	Header("Location:nur.php");



?>

