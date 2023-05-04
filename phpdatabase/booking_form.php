<?php

	$bookname=$_POST['txtname'];
	$bookemail=$_POST['txtemail'];
	$bookphone=$_POST['txtphone'];
	$bookplace=$_POST['txtplace'];
	$bookpricerange=$_POST['txtprice-range'];
	$bookcheckin=$_POST['txtcheckin'];
	$bookcheckout=$_POST['txtcheckout'];
	$bookguests=$_POST['txtguests'];
	$bookroomtype=$_POST['txtroom-type'];
	$cn=mysqli_connect("localhost","root");
	$db=mysqli_select_db($cn,"ds_bookingform");
	$qry="insert into bookingform values('$bookname','$bookemail','$bookphone','$bookplace','$bookpricerange','$bookcheckin','$bookcheckout','$bookguests','$bookroomtype')";
	$done=mysqli_query($cn,$qry);
	if($done)
	{
		echo "<center><h1>Success, You will get our respond in e-mail so keep looking!</center></h1>";
	}
	else
	{
		echo "<center><h1>Failed please enter information again or try again later</center></h1>";
	}
?>