<?php
    include("include/conn.php");
?>


<?php
if(isset($_POST["submit"]))
{
  $getuploadfiles="";
  $validExtensions = array(".gif", ".jpeg", ".jpg", ".png",".GIF",".JPEG",".JPG",".PNG", ".SWF", ".swf");
  for($i=0;$i<=count($_FILES["file"]["name"])-1;$i++)
  {
    $filename=$_FILES["file"]["tmp_name"][$i];
    $fileExtension = strrchr($_FILES['file']['name'][$i], ".");
    if (in_array($fileExtension, $validExtensions)) 
    {
      $newName = time() . '_' . $_FILES['file']['name'][$i];
      $destination = 'uploads/' . $newName;
      if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $destination)) 
      {
        $getuploadfiles=$getuploadfiles.$newName.'';
      }
    } 
  }
 // echo "insert into products(photo,password) values ('$getuploadfiles','$_POST[password]','$_POST[firstname]','$_POST[lastname]','$_POST[branch]','$_POST[yearofjoining]','$_POST[roll]','$_POST[dob]','$_POST[reg]','$_POST[dayscholar],'$_POST[gender]'')";
}


?>

<?php
      

            
          
      
        //echo $getuploadfiles;
       

        $name = $_POST["fname"].' '.$_POST["mname"].' '.$_POST["lname"];
       echo $name;
		    $rll = $_POST["year"].'/'.$_POST["bname"].'/'.$_POST["roll"];
    echo $rll;
        echo "jhgfdh";
        echo $_POST['hobbies'];
        
        
      
      // die();
            $reg = mysql_query("INSERT INTO `newrequests`( `name`, `phone`, `email`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `registration_no`, `branch`, `semester`, `roll_no`, `username`, `password`, `age`, `photo`, `hobbies`) VALUES ('$name',$_POST[phone],'$_POST[emailaddress]','$_POST[dob]','$_POST[gender]','$_POST[address]','$_POST[country]','$_POST[state]','$_POST[city]',$_POST[pincode],$_POST[reg],'$_POST[branch]',$_POST[sem],'$rll','$_POST[usrname]','$_POST[pswd]',$_POST[age],'$getuploadfiles','$_POST[hobbies]');");

            if(!$reg){
              //echo "error";
              die("Duplicate entries are not allowed.Please go back and correct.");
            
            }
           else{
              header("Location:index.php");
              
              }
      
?>

