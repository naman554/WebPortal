
<?php
include("include/conn.php");
$id=$_GET["id"];

?>
<?php

	$del=mysql_query("SELECT * FROM newrequests WHERE id = $id;");
	$r = mysql_fetch_assoc($del);
	$in = mysql_query("INSERT INTO `registered`(`name`, `phone`, `email`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `registration_no`, `branch`, `semester`, `roll_no`, `username`, `password`) VALUES ('$r[name]',$r[phone],'$r[email]','$r[dob]','$r[gender]','$r[address]','$r[country]','$r[state]','$r[city]',$r[pincode],$r[registration_no],'$r[branch]',$r[semester],'$r[roll_no]','$r[username]','$r[password]');");
	$a = mysql_query("DELETE FROM `newrequests` WHERE id=$id;");
	header("Location:adminpanel.php");

?>