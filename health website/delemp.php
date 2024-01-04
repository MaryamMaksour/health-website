<?php

session_start();

$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
$db=mysqli_select_db($con,'hospital')
		or die ("error in DB connect");

	if(!empty($_POST['delete'])){

	
		mysqli_query($con,"DELETE  FROM employees WHERE nameEmp = '$_SESSION[name]'")
			or die ("error");
		Header("Location:emp.php");
	}
	if(!empty($_POST['update'])){
		
		$res=mysqli_query($con," UPDATE  employees SET nameEmp='$_POST[nameEmp]' , departEmp='$_POST[departEmp]' , ageEmp='$_POST[ageEmp]' , salaryEmp='$_POST[salaryEmp]',
			addressEmp='$_POST[addressEmp]' ,phoneEmp='$_POST[phoneEmp]'	WHERE  nameEmp='$_SESSION[name]' ")
		or die ("error");
		
	Header("Location:emp.php");
	}



?>