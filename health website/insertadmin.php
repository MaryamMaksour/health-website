
<?php

$db_name='hospital';
	$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
	$db=mysqli_select_db($con,$db_name)
		or die ("error in DB connect");
		if(!empty($_POST['insert'])){
			
	$name=$_POST["name"];
	$depart=$_POST['depart'];
	$age=$_POST['age'];
	$salary=$_POST['salary'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	if(empty($_POST['name']) || empty($_POST['depart']) || empty($_POST['age'])||empty($_POST['salary'])||empty($_POST['address'])||empty($_POST['phone']))
{
	echo"<div class ='form1'><center><h1>insert all information</h1><br> <br>
	<h3>to goback clik here</h3>";
	echo "<form method ='post' action='insertadmin.html'><input type='submit' name='sub' value='clik here' id='but'></form></center></div>";
	
}
else{
	$res=mysqli_query($con,"INSERT INTO admin (name,depart,age,salary,address,phone) VALUES('$name','$depart','$age','$salary','$address','$phone')")
		or die("error");
	Header("Location:manag.php");

}
}
?>

