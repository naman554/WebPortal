<?php
    include("include/conn.php");
?>
<html>
<head>



<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body  style="background-image:url(pictures/bgimg.jpg); background-repeate:no-repeate;">



    <div class="image">
        <img src="pictures/logo.png" style="width:150px;height:150px; float:left;">

    </div id="nit">
     <h1 style="float:left; margin:50px; font-size:50px; color:white; ">NIT DURGAPUR</h1>
    <br><br><br><br><br><br><br><br>

<div id="header">
    
    <ul>
        <li class="menu"><a href="index.php"  style="text-decoration:none; color:rgb(0, 63, 179); "><b>HOME<b></a></li>
         <li class="menu"><a href="about.php" style="text-decoration:none;color:rgb(0, 63, 179);">ABOUT</a></li>
          <li class="menu"><a href="contact.php" style="text-decoration:none; color:rgb(0, 63, 179);">CONTACTS</a></li>
    </ul>
</div>

<div id="nav">
    <br><br>
<a href="student.php" class="myButton">student</a><br>
<a href="admin.php" class="myButton">admin</a><br>
<a href="about.php" class="myButton">about</a><br><br>
</div>

<div id="section">
   <h3 style="color:white; margin-left:500px; font-size:30px; font-family:Comic Sans MS; color: #0099ff;"> Student login</h3><br><br><br><br>

   <div id="adm">
        <form  action="student_redir.php" method="POST">

            Username:<br><br>
            <input type="text" name="usrname"><br><br>
            Password:<br><br>
            <input type="password" name="pswd"><br>
            <input type="submit" name="submit" value="submit" id="gobtn" class="mybtn">

             
        </form>
        <a href="registration.php" id="gobtn" class="mybtn" value="newuser" name="submit">new user?</a>

        
   </div>
   
  
</div>

<div id="footer">
Copyright © IT Department

</div>

</body>
</html>
