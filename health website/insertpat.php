
<?php

$db_name='hospital';
	$con=mysqli_connect("127.0.0.1","root","")
		or die ("error in server connect");
	$db=mysqli_select_db($con,$db_name)
		or die ("error in DB connect");
		if(!empty($_POST['insert'])){
			
	$name=$_POST["namepat"];
	$drname=$_POST['nameDR'];
	$age=$_POST['agepat'];
	$dis=$_POST['dis'];
	$address=$_POST['addresspat'];
	$phone=$_POST['phonepat'];
	if(empty($_POST['namepat']) || empty($_POST['nameDR']) || empty($_POST['agepat'])||empty($_POST['dis'])||empty($_POST['addresspat'])||empty($_POST['phonepat']))
{
	echo"<div class ='form1'><center><h1>insert all information</h1><br> <br>
	<h3>to goback clik here</h3>";
	echo "<form method ='post' action='insertpat.html'><input type='submit' name='sub' value='clik here' id='but'></form></center></div>";
	
}
else{
	$res=mysqli_query($con,"INSERT INTO patient (namePat,nameDr,agePat,disease,addressPat,phonePat) VALUES('$name','$drname','$age','$dis','$address','$phone')")
		or die("error");
	Header("Location:pat.php");

}
}
?>

