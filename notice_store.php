<?php
    include("include/conn.php");
?>

<?php
	if(isset($_POST['submit']))
	{
		mysql_query("INSERT INTO `notice`(`notice`) VALUES ('$_POST[notice]');");
		header("Location:adminpanel.php");
	}
?>