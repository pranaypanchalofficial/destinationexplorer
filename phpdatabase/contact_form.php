<?php

	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$subject=$_POST['txtsubject'];
	$message=$_POST['txtmessage'];
	$cn=mysqli_connect("localhost","root");
	$db=mysqli_select_db($cn,"ds_contactform");
	$qry="insert into contact values('$name','$email','$subject','$message')";
	$done=mysqli_query($cn,$qry);
	if($done)
	{
		echo "<center><h1>Success</center></h1>";
	}
	else
	{
		echo "<center><h1>Fail</center></h1>";
	}
?>