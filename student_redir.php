<?php
include('include/conn.php');

	session_start();
?>
<?php
	
	$l=mysql_query("select * from registered where username = '$_POST[usrname]' and password = '$_POST[pswd]'");
	$res=mysql_fetch_array($l);
	$rows=mysql_num_rows($l);
	if($rows > 0)
	{
		$_SESSION["username"]=$res["username"];
		$_SESSION["password"]=$res["password"];
		$_SESSION["i"]=$res["id"];
		header('Location: studentpanel.php');
	}
	else{
		
		
		header('Location:student.php');	
	}
		
?>