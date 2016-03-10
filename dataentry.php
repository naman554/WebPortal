<?php
    include("include/conn.php");



?>


<?php
      

            
          
      


        $name = $_POST["fname"].' '.$_POST["mname"].' '.$_POST["lname"];
        echo $name;
		$rll = $_POST["year"].'/'.$_POST["bname"].'/'.$_POST["roll"];
        echo $rll;
        
      
       
    


    if(isset($_POST["submit"])){
        echo "jhfsdmfkj";
    	
        $reg = mysql_query("INSERT INTO `newrequests`(`name`, `phone`, `email`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `registration_no`, `branch`, `semester`, `roll_no`, `username`, `password`) VALUES ('$name',$_POST[phone],'$_POST[emailaddress]','$_POST[dob]','$_POST[gender]','$_POST[address]','$_POST[country]','$_POST[state]','$_POST[city]',$_POST[pincode],$_POST[reg],'$_POST[branch]',$_POST[sem],'$rll','$_POST[usrname]','$_POST[pswd]');");
    }
   

die();
      
?>
<?php
    $uploaddir = `pictures/`;
    $uploadfile = $uploaddir . basename($_FILES[`photo`][`name`]);
//echo `<pre>`;
//echo"<br>lolwa re";
    if (move_uploaded_file($_FILES[`photo`][`tmp_name`], $uploadfile)) {
   // echo "File is valid, and was successfully uploaded.\n";
    } 
    else {
    echo "Possible file upload attack!\n";
    }

    $photoname=$_FILES["photo"]["name"];

?>
