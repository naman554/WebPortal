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

    </div>
     <h1 style="float:left; margin:50px; font-size:50px; color:white;">NIT DURGAPUR</h1>
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
<a href="about.php" class="myButton">about</a><br>
</div>

<div id="section">
   <h3 style="color:white; margin-left:400px; font-size:40px; font-family:Comic Sans MS; color: #0099ff;"> WebPortal</h3><br>
   <div>
      <table width="50%" id="notice" bgcolor="white">
        <th style="font-size: 20px;">Notice Board</th> 
        <?php
          $a = mysql_query("SELECT * FROM `notice`;");
          while($b=mysql_fetch_assoc($a))
          {
            $c=$b['notice'];
            echo '<tr><td>&#8226'.$c.'</td></tr>';
          }
        ?>    
      </table>

   </div>
   
   
</div>

<div id="footer">
Copyright © IT Department

</div>

</body>
</html>
