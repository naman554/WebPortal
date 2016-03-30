<?php
    include("include/conn.php");
      session_start();
?>

<?php
  
    if(isset($_SESSION['id']))
    {
   
   
  
?>
<html>
<head>



<link rel="stylesheet" type="text/css" href="style.css">
 
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
  <script src="bs/js/jquery.min.js"></script>
  <script src="bs/js/bootstrap.min.js"></script>

<script type="text/javascript">
  function newreq () {
  
    var xhttp; 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("response").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "new.php", true);
  xhttp.send();
}

function registered () {
  
    var xhttp; 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("response").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "registered_student.php", true);
  xhttp.send();
}
function notice () {
  
    var xhttp; 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("response").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "notice_ajax.php", true);
  xhttp.send();
}


</script>>
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
<a href="about.php" class="myButton">about</a><br>
</div>

<div id="section">

<div class="btn-group btn-group-justified" role="group" aria-label="..." style="padding-left:50px;padding-right:50px;padding-top:50px; "  >
  <div class="btn-group" role="group" >
    <button type="button" class="btn btn-default" onClick="return newreq();">New Requests</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" onClick="return registered();">Registered Students</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      update
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="registration.php">Insert</a></li>
      <li><a onclick="return notice();">Notice</a></li>
     
    </ul>
  </div>
</div><div id="response"></div>
</div>
 
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
    
      header('Location:admin.php');
    }
?>