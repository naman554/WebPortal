<?php
    include("include/conn.php");
?>


<?php
		
	

    if(isset($_POST['submit'])){
    	
        $reg = mysql_query("INSERT INTO `registration`(`fname`, `mname`, `lname`, `phone`, `email`, `dob`, `address`, 
        	`registration`, `username`, `password`,`gender`, `branch`, `semester`) VALUES ('$_POST[fname]','$_POST[mname]','$_POST[lname]',$_POST[phone],
        	'$_POST[emailaddress]','$_POST[dob]','$_POST[address]',$_POST[reg],'$_POST[usrname]','$_POST[pswd]','$_POST[gender]','$_POST[branch]',
        	'$_POST[sem]')");
    }
   


      
?>
<?php
    $uploaddir = 'pictures/';
    $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
//echo '<pre>';
//echo"<br>lolwa re";
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
   // echo "File is valid, and was successfully uploaded.\n";
    } 
    else {
    echo "Possible file upload attack!\n";
    }

    $photoname=$_FILES["photo"]["name"];

?>
