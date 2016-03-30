<?php
    include("include/conn.php");
    session_start();
?>

<?php
  
    if(isset($_SESSION['i']))
    {
    
      
     
    
  
?>


<html>
<head>



<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body  style="background-image:url(pictures/bgimg.jpg); background-repeate:no-repeate;">



    <div class="image">
        <img src="pictures/logo.png" style="width:150px;height:150px; float:left;">

    </div>
      <h1 style="float:left; margin:50px; font-size:50px; color:white;">NIT DURGAPUR</h1>
    <br><br><br><br><br><br><br><br>

<div id="header">
    
     <ul>
         <li class="menu"><a href="index.php"  style="text-decoration:none; color:rgb(0, 63, 179); "><b>HOME<b></a></li>
         <li class="menu"><a href="about.php" style="text-decoration:none;color:rgb(0, 63, 179);">ABOUT</a></li>
          <li class="menu"><a href="contact.php" style="text-decoration:none; color:rgb(0, 63, 179);">CONTACTS</a></li>
          <li class="menu"><a href="logout.php" style="text-decoration:none; color:rgb(0, 63, 179); float:right;">Logout</a></li>
    </ul>
</div>

<div id="nav">
  <a href="student.php" class="myButton">student</a><br>
  <a href="admin.php" class="myButton">admin</a><br>
  <a href="about.php" class="myButton">about</a><br><br>
</div>

<div id="section">
  <h3 style="color:white; margin-left:400px; font-size:30px; font-family:Comic Sans MS; color: #0099ff;">Student Details</h3>
       <table  width="40%" id="notice" bgcolor="white"  class="student">
       
         <?php
              $a=mysql_query("SELECT * FROM `registered` WHERE id='$_SESSION[i]'");
              $user = mysql_fetch_assoc($a);
              echo '<tr><td>Name:'.$user['name'].'</td><td rowspan="3"><img src="uploads/'.$user["photo"].'" style="max-width:200px; max-height:100px; float:right;"></td></tr>';
             
              //echo '<tr><td>Name:'.$user['name'].'</td>';
              echo '<td>Contact:'.$user['phone'].'</td>';
              
              echo '<tr><td>Email:'.$user['email'].'</td></tr>';
              echo '<tr><td>Date of birth:'.$user['dob'].'</td>';
              
              echo '<td>Age:'.$user['age'].'</td></tr>';
              echo '<tr><td>Gender:'.$user['gender'].'</td>';
              
              echo '<td>Address:'.$user['address'].'</td></tr>';
              echo '<tr><td>Country:'.$user['country'].'</td>';
             
              echo '<td>State:'.$user['state'].'</td></tr>';
              echo '<tr><td>City:'.$user['city'].'</td>';
              echo '<td>Pincode:'.$user['pincode'].'</td></tr>';
              echo '<tr><td>Hobbies:'.$user['hobbies'].'</td>';
              echo '<td>Registration_no:'.$user['registration_no'].'</td><tr>';
              echo '<tr><td>Branch:'.$user['branch'].'</td>';
              echo '<td>Semester:'.$user['semester'].'</td><tr>';
              echo '<td>Roll_no:'.$user['roll_no'].'</td></tr>';

         ?>

       </table>
       <a href="edit_profile.php" style="color:white;padding-left: 50px;">Edit profile?</a>

    
</div>

<div id="footer">
Copyright © IT Department
</div>

</body>
</html>
<?php
  }
    else
    {
    
      header('Location:student.php');
    }
?>