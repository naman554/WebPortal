<?php
    include("include/conn.php");
?>


<html>
<head>



<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
       function validateform(){
            var x = document.forms["student_form"]["fname"].value;
            if(x== null || x== ""){
                alert("Firstname must be filled out.");
                return false;
            }

            var y = document.forms["student_form"]["lname"].value;
            if(y== null || y== ""){
                alert("Lastname must be filled out.");
                return false;
            }
            var z = document.forms["student_form"]["phone"].value;
            if(z== null || z== ""){
                alert("Phone number must be filled out.");
                return false;
            }
            var p = document.forms["student_form"]["emailaddress"].value;
            if(p == null || p == ""){
                alert("Email address must be filled out.");
                return false;
            }
            var q = document.forms["student_form"]["dob"].value;
            if(q == null || q == ""){
                alert("Date of birth must be filled out.");
                return false;
            }
            var r = document.forms["student_form"]["reg"].value;
            if(r.length !=8){
                alert("Registration number must be filled out.");
                return false;
            }
            var s = document.forms["student_form"]["usrname"].value;
            var t = document.forms["student_form"]["pswd"].value;

            if(s == null || s == "" || t == null || t == ""){
                alert("Fill up login details.");
                return false;
            }
            
        }
         
        function otherHobbies (hobbies) {
            var shwbox = document.getElementById("shwbox");
            shwbox.style.display = hobbies.checked ? "block" : "none";
        }
       
        function set_year(){
            var x=document.getElementById("re");
            var y =x.value;
            var z=y.slice(2,4);
            var a=document.getElementById("yr");
             a.value=z;
        }
        function branch_change(){
              // alert("hehe");
            var x=document.getElementById("bname");
            //alert(x.value);
            var y=document.getElementById("branch");
            y.value=x.value;
        }
               
    </script>


    
</head>
<body  style="background-image:url(pictures/bgimg.jpg); background-repeate:no-repeate;">



    <div class="image">
        <img src="pictures/logo.png" style="width:150px;height:150px; float:right;">

    </div>
     <h1 style="float:left; margin:50px; font-size:50px; color:rgb(0, 63, 179);">NIT DURGAPUR</h1>
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
<a href="#" class="myButton">about</a><br>
</div>

<div id="section">
    <h3 style="color:white; margin-left:400px; font-size:30px; font-family:Comic Sans MS; color: #0099ff;"> Student Registration</h3><br>

   <form name="student_form" action="dataentry.php" onsubmit="return validateform()" method="POST" style="color:white; paddin-left:50px;" enctype="multipart/form-data" >
        <fieldset style="border-color:#0099ff"><legend style="color:#0099ff;">Personal</legend>
            <label>
            First name:
            <input type="text" name="fname" >
            </label>
            <label>
            Middle name:
            <input type="text" name="mname" >
            </label>
            <label>
            Last name:
            <input type="text" name="lname" > <br> <br> </label>
            <label>
              Contact no.:
               <input type="phone" name="phone">
            </label>
            <label id="mail">
              Email:
               <input type="email" name="emailaddress">
            </label>
            <label id="birth" >
             Date of birth:
               <input type="date" name="dob"><br><br>
            </label>
            <label >
                Gender:
            <input type="radio" name="gender" value="male" > Male
            <input type="radio" name="gender" value="female"> Female

            </label>

            <label id="address">
            Address:
            <textarea rows="1" cols="22" name="address"></textarea>
            </label>
           
               
            <label for="photo" id="pic">Upload your Photo:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
            <input type="file" name="photo" value="" /><br /><br>

            <label>
                Hobbies:
            <input type="checkbox" name="singing">Singing
            <input type="checkbox" name="dance">Dancing
            <input type="checkbox" name="sports">Sports
            <input type="checkbox" name="writting">Writting
            <input type="checkbox" name="exercise">Exercising
            <input type="checkbox" name="reading">Reading
            <label for="hobbies">
                <input type="checkbox" id="ohobbies" onclick="otherHobbies(this)">Other
            </label>
            <div id="shwbox" style="display: none">
                <textarea rows="1" cols="25" placeholder="Please Mention here..."></textarea>
            </div>
            </label>
            

        </fieldset><br><br><br>
        <fieldset style="border-color:#0099ff"><legend style="color:#0099ff;">Academics</legend>

            <label>
                Registration no.:
               <input type="text" id="re" name="reg"  onchange=" set_year()" >

            </label>
            <label onclick="branch_change() "id="bname" name="branch">

                Branch Name:
                        <select >
                            <option selected >--select--
                            <option >CSE
                             <option >IT
                             <option >EC
                             <option >EE
                             <option >EE
                             <option >ME
                             <option >CHE
                             <option >MME
                             <option >CE
                        </select>
                    
            </label>
            <label id="sem">
                Semester:
                        <select>
                            <option value="none">--Select--</option>
                            <option value="1">1st Semester</option>
                             <option value="2">2nd Semester</option>
                             <option value="3">3rd Semester</option>
                             <option value="4">4th Semester</option>
                             <option value="5">5th Semester</option>
                             <option value="6">6th Semester</option>
                             <option value="7">7th Semester</option>
                             <option value="8">8th Semester</option>
                        </select><br><br>
            </label>  
            <label>
                Roll no.:
                    <input name="area[]" type="text" size="1" class="input" id="yr" maxlength="50" value="">
                    <input name="area[]" type="text" size="1" id="branch" maxlength="50" value="">
                    <input name="area[]" type="text" size="1" class="input" maxlength="50" value="">

            </label>  

        </fieldset><br><br><br>
        <fieldset style="border-color:#0099ff;"><legend style="color:#0099ff;">Login Details </legend>
            
             <label>
                Username:
                <input type="text" name="usrname">
            
             </label>   
            <label id="pass">
                 Password:
            <input type="password" name="pswd">

            </label>

        </fieldset><br><br>

            
           
           <input type="submit" name="submit" value="submit">
            

        </form>
        
</div>

<div id="footer">
Copyright © IT Department
</div>



</body>
</html>
