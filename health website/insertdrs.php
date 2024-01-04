
<?php

$db_name='hospital';
	$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
	$db=mysqli_select_db($con,$db_name)
		or die ("error in DB connect");
		if(!empty($_POST['insert'])){
			
	$name=$_POST["nameDr"];
	$depart=$_POST['specialty'];
	$age=$_POST['ageDr'];
	$salary=$_POST['salaryDr'];
	$address=$_POST['addressDr'];
	$phone=$_POST['phoneDr'];
	if(empty($_POST['nameDr']) || empty($_POST['specialty']) || empty($_POST['ageDr'])||empty($_POST['salaryDr'])||empty($_POST['addressDr'])||empty($_POST['phoneDr']))
{
	echo"<div class ='form1'><center><h1>insert all information</h1><br> <br>
	<h3>to goback clik here</h3>";
	echo "<form method ='post' action='insertadmin.html'><input type='submit' name='sub' value='clik here' id='but'></form></center></div>";
	
}
else{
	$res=mysqli_query($con,"INSERT INTO drs (nameDr,specialty,ageDr,salaryDr,addressDr,phoneDr) VALUES('$name','$depart','$age','$salary','$address','$phone')")
		or die("error");
	Header("Location:dr.php");

}
}
?>

