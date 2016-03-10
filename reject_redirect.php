
<?php
include("include/conn.php");
$id=$_GET['id'];

?>
<?php

	$del=mysql_query("DELETE FROM newrequests WHERE id = $id;");
	header("Location:adminpanel.php");
?>