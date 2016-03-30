<?php
include('include/conn.php');

	session_start();
?>
<?php
	
	$l=mysql_query("select * from admin where username = '$_POST[usrname]' and password = '$_POST[pswd]'");
	$res=mysql_fetch_array($l);
	$rows=mysql_num_rows($l);
	if($rows > 0)
	{
		$_SESSION["username"]=$res["username"];
		$_SESSION["password"]=$res["password"];
		$_SESSION["id"]="admin";
		header('Location: adminpanel.php');
	}
	else{
		
		
		header('Location:admin.php');	
	}
		
?>