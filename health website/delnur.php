<?php

session_start();

$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
$db=mysqli_select_db($con,'hospital')
		or die ("error in DB connect");

	if(!empty($_POST['delete'])){
	
		mysqli_query($con,"DELETE  FROM nurses WHERE nameNur = '$_SESSION[name]'")
			or die ("error");
	Header("Location:nur.php");}
		if(!empty($_POST['update'])){
		
				$res=mysqli_query($con," UPDATE  nurses SET nameNur='$_POST[nameNur]' , departNur='$_POST[departNur]' , ageNur='$_POST[ageNur]' ,
				salaryNur='$_POST[salaryNur]',addressNur='$_POST[addressNur]' ,phoneNur='$_POST[phoneNur]'	WHERE  nameNur='$_SESSION[name]' ")
		or die ("error");
		
	Header("Location:nur.php");
	}
	


?>