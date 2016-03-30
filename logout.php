<?php
include('include/conn.php');

session_start();


?>
<?php
	
		if(isset($_SESSION['id']))
		{
			session_destroy();
			header('Location:index.php');
		}
		else
		{
		
			header('Location:index.php');
		}
	
?>