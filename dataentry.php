<?php
    include("include/conn.php");
?>


<?php


    if(isset($_POST['submit'])){
    	
        $reg = mysql_query("INSERT INTO `registration`(`fname`, `mname`, `lname`, `phone`, `email`, `dob`, `address`, `registration`, `username`, `password`) VALUES ('$_POST[fname]','$_POST[mname]','$_POST[lname]',$_POST[phone],'$_POST[emailaddress]','$_POST[dob]','$_POST[address]',$_POST[reg],'$_POST[usrname]','$_POST[pswd]')");
    }
   


      
?>
