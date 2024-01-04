<?php

session_start();

$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
$db=mysqli_select_db($con,'hospital')
		or die ("error in DB connect");
if(!empty($_POST['delete'])){
	
		mysqli_query($con,"DELETE  FROM drs WHERE nameDr = '$_SESSION[name]'")
			or die ("error");
		Header("Location:dr.php");
}
	if(!empty($_POST['update'])){
		
				$res=mysqli_query($con," UPDATE  drs SET nameDr='$_POST[nameDr]' , specialty='$_POST[specialty]' , ageDr='$_POST[ageDr]' ,
				salaryDr='$_POST[salaryDr]',addressDr='$_POST[addressDr]' ,phoneDr='$_POST[phoneDr]'	WHERE  nameDr='$_SESSION[name]' ")
		or die ("error");
		
	Header("Location:dr.php");
	}
	

?>