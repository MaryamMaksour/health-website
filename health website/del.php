<?php

session_start();

$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
$db=mysqli_select_db($con,'hospital')
		or die ("error in DB connect");

	
	if(!empty($_POST['delete'])){
		mysqli_query($con,"DELETE  FROM admin WHERE name = '$_SESSION[name]'")
			or die ("error");
		Header("Location:manag.php");
	}
		if(!empty($_POST['update'])){
		
				$res=mysqli_query($con," UPDATE  admin SET name='$_POST[name]' , depart='$_POST[depart]' , age='$_POST[age]' ,
				salary='$_POST[salary]',address='$_POST[address]' ,phone='$_POST[phone]'	WHERE  name='$_SESSION[name]' ")
		or die ("error");
		
	Header("Location:manag.php");
	}
	


?>