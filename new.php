<?php
	include("include/conn.php");

?>

<?php
	echo '<div class="panel panel-default" style="margin-left:50px; margin-right:50px;" >';
	echo '<div class="panel-heading" style="padding-left:400px;" >Registered Students</div>'; 
	echo '<table class="table">';
	echo '<th>Name</th>';
	echo '<th>Roll NO.</th>';
	echo '<th> Email</th>';
	echo '<th >Registration No.</th>';
	echo '<th >Contact</th>';
	echo '<th >Gender</th>';
	echo '<th>DOB </th>';
	echo '<th>Operation</th>';
	$new = mysql_query("SELECT * from newrequests");
	while($a = mysql_fetch_assoc($new))
	{

		echo '<tr><td>'.$a["name"].'</td>';
		echo '<td>'.$a["roll_no"].'</td>';
		echo '<td>'.$a["email"].'</td>';
		echo '<td>'.$a["registration_no"].'</td>';
		echo '<td>'.$a["phone"].'</td>';
		echo '<td>'.$a["gender"].'</td>';
		echo '<td>'.$a["dob"].'</td>';
		echo '<td colspan="3"><a href="accept_redirect.php?id='.$a["id"].'"><button type="button" class="btn btn-default btn-lg">Accept </button></a> ';
		echo '<a href="view.php?id='.$a["id"].'"><button type="button" class="btn btn-default btn-lg" >View </button></a>';
		echo '<a href="reject_redirect.php?id='.$a["id"].'"><button type="button" class="btn btn-default btn-lg">Reject </button></a></td></tr>';
		
	}
	echo '</table>';
	echo '<div id="response"></div>';
	echo '</div>';


?>