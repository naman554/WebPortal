
<?php
include("include/conn.php");
$id=$_GET['id'];

?>
<?php

	$del=mysql_query("DELETE FROM registered WHERE id = $id;");
	header("Location:adminpanel.php");
?>