<?php
    include("include/conn.php");
?>


<html>
<head>



<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
        }*/
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#pic')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function get_Age() {
    var today = new Date();
    
    var d = document.getElementById("birth");
	var birthDate = new Date(d.value);
	birthDate.value= d.value;
	var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
	var ages = document.getElementById("age");
	ages.value = age;
	
	
}
function checkHobby () {
    // body...
    var checkedValue =""; 
var inputElements = document.getElementsByClassName('messageCheckbox');
for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].checked){
            checkedValue+=" ";
           checkedValue += inputElements[i].value;
      }
}
var other= document.getElementById("otherHobbyText").value;
checkedValue+=" ";
checkedValue+=other;
//alert("hehe");
//alert(checkedValue);
var abc=document.getElementById("hobby123");
abc.value=checkedValue;
alert(document.getElementById("hobby123").value);
}        
               
    </script>


    
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
<a href="#" class="myButton">about</a><br>
</div>

<div id="section">
    <h3 style=" margin-left:400px; font-size:30px; font-family:Comic Sans MS; color: #0099ff;"> Student Registration</h3><br>

   <form name="student_form" action="dataentry.php" onsubmit="return validateform()" method="POST" style="color:white; paddin-left:50px;" enctype="multipart/form-data" >
        
             
          
            <table border= "1px solid black" width="70%" id="table">
            

                  <tr>
                                                        
                                                        <td><a   class="col">
                                                        First name:</td>            
                                                       <td> <input type="text" name="fname" >
                                                        </a></td>
                                                        <td> <a  class="col">
                                                        Middle name:</td>
                                                        <td><input type="text" name="mname" >
                                                        </a></td>
                    </tr><tr>

                                                        <td><a class="col">
                    
                                                        Last name:</td>
                                                        <td><input type="text" name="lname" > </a></td>    
                    
                    
                                                                <td><a  class="col">
                                                        Contact no.:</td>
                                                           <td><input type="phone" name="phone">
                                                        </a></td>
                                                        </tr><tr>
                                                        <td style="text-align:left; padding-left: 0px;"><a id="mail" class="col" >
                                                          Email:</td>
                                                           <td><input type="email" name="emailaddress">
                                                        </a></td>
                                                       <td> <a   class="col"  >
                                                         Date of birth:</td>
                                                           <td><input type="date" name="dob" id="birth" onchange="get_Age();">
                                                        </a></td>
                    </tr>
                    <tr>

                                                        <td><a  class="col">
                                                            Gender:</td>
                                                        <td><a class="col"><input type="radio" name="gender" value="male" > Male
                                                        <input type="radio" name="gender" value="female"> Female</a>

                                                        </a></td>
                                                        <td>
                                                        	
                                                        
                                                         <a  class="col"><label for="age">Age: </label> </td><td></a>
   														 <input type="text" name="age" value="" id="age" /><br/></td></tr>
                                                        <td>

                                                        <a id="address"  class="col">
                                                        Address:</td>
                                                        <td><textarea rows="1" cols="22" name="address"></textarea>
                                                        </a></td>
                                                        </tr><tr>
                                                       
                                                        <td>
                                                        <a  class="col"> Country:</a>
                                                        </td>
                                                        <td><input type="text" name="country"></td>
                                                    <td><a  class="col">
                                                            state:</td>
                                                            <td>
                                                       <select name="state">
                                                            <option value="">- Select State -</option>
                                                                    <option value="Andhra Pradesh">
                                        Andhra Pradesh                            </option>
                                                                    <option value="Arunachal Pradesh ">
                                        Arunachal Pradesh                            </option>
                                                                    <option value="Assam">
                                        Assam                            </option>
                                                                    <option value="Bihar">
                                        Bihar                            </option>
                                                                    <option value="Chhattisgarh">
                                        Chhattisgarh                            </option>
                                                                    <option value="Goa">
                                        Goa                            </option>
                                                                    <option value="Gujarat">
                                        Gujarat                            </option>
                                                                    <option value="Haryana">
                                        Haryana                            </option>
                                                                    <option value="Himachal Pradesh">
                                        Himachal Pradesh                            </option>
                                                                    <option value="J&K">
                                        Jammu and Kashmir                            </option>
                                                                    <option value="Jharkhand">
                                        Jharkhand                            </option>
                                                                    <option value="Karnataka">
                                        Karnataka                            </option>
                                                                    <option value="Kerala">
                                        Kerala                            </option>
                                                                    <option value="Madhya Pradesh">
                                        Madhya Pradesh                            </option>
                                                                    <option value="Maharashtra">
                                        Maharashtra                            </option>
                                                                    <option value="Manipur">
                                        Manipur                            </option>
                                                                    <option value="Meghalaya">
                                        Meghalaya                            </option>
                                                                    <option value="Mizoram">
                                        Mizoram                            </option>
                                                                    <option value="Nagaland">
                                        Nagaland                            </option>
                                                                    <option value="Odisha">
                                        Odisha                            </option>
                                                                    <option value="Punjab">
                                        Punjab                            </option>
                                                                    <option value="Rajasthan">
                                        Rajasthan                            </option>
                                                                    <option value="Sikkim">
                                        Sikkim                            </option>
                                                                    <option value="Tamil Nadu">
                                        Tamil Nadu                            </option>
                                                                    <option value="Telangana">
                                        Telangana                            </option>
                                                                    <option value="Tripura">
                                        Tripura                            </option>
                                                                    <option value="Uttar Pradesh">
                                        Uttar Pradesh                            </option>
                                                                    <option value="Uttarakhand">
                                        Uttarakhand                            </option>
                                                                    <option value="West Bengal">
                                        West Bengal                            </option>
                                                                    <option value="Andaman and Nicobar">
                                        Andaman and Nicobar Islands                            </option>
                                                                    <option value="Chandigarh">
                                        Chandigarh                            </option>
                                                                    <option value="Dadar and Nagar Haveli">
                                        Dadra and Nagar Haveli                            </option>
                                                                    <option value="Daman and Diu">
                                        Daman and Diu                            </option>
                                                                    <option value="Lakshadweep">
                                        Lakshadweep                            </option>
                                                                    <option value="New Delhi">
                                       New Delhi                           </option>
                                                                    <option value="Puducherry">
                                        Puducherry                            </option>
                                                                  </select><br>
                                                        </select>
                                                        </a></td>

                </tr><tr>
                                                        <td><a  class="col">
                                                            City/Town:</td>
                                                            <td><input type="text" name="city">
                                                        </a></td>

                                                        <td>
                                                            <a  class="col">
                                                                Pin Code:
                                                                <td><input type="digits" name="pincode"></td>
                                                            </a>
                                                        </td>
                </tr>

                <tr>

                                                        <td><a for="photo" id="pic"  class="col">Upload your Photo:</td>
                                                        <td><input type="hidden" name="MAX_FILE_SIZE" value="9000000" onclick="return readURL();"/>
                                                        <input type="file" name="photo" value="" /></a></td>


                                                        <td id="col" >
                                                            Hobbies:</td>
                                                        <td>
                                                        <a id="col" onClick="checkhobby();"   >
                                                        <input type="checkbox" name="hobby" value="Singing" class="messageCheckbox" >Singing
                                                        <input type="checkbox" name="hobby"  value="Dancing" class="messageCheckbox">Dancing<br>
                                                        <input type="checkbox" name="hobby" value="sports" class="messageCheckbox">Sports
                                                        <input type="checkbox" name="hobby" value="Writting" class="messageCheckbox">Writting<br>
                                                        <input type="checkbox" name="hobby" value="Exercising" class="messageCheckbox">Exercising
                                                        <input type="checkbox" name="hobby" value="Reading" class="messageCheckbox">Reading</a>
                                                        <a for="hobbies" class="col">
                                                            <br><input type="checkbox" id="hobby123" onclick="otherHobbies(this)">Other
                                                        </a>
                                                        <div id="shwbox" style="display: none">
                                                            <textarea rows="1" cols="25" placeholder="Please Mention here..."></textarea>
                                                        </div>
                                                        </td>
                </tr>                                       

                <tr>

                                                       <td> <a  class="col">
                                                            Registration no.:</td>
                                                           <td><input type="text" id="re" name="reg"  onchange=" set_year()" >

                                                        </a></td>
                                                        <td><a  class="col" >

                                                            Branch Name:</td>
                                                                    <td><select name="branch" onclick="branch_change() "id="bname" >
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
                    </tr><tr>

                                                        </a></td>
                                                        <td><a id="sem"  class="col">
                                                            Semester:</td>
                                                                    <td><select name="sem">
                                                                        <option value="none">--Select--</option>
                                                                        <option value="1">1st Semester</option>
                                                                         <option value="2">2nd Semester</option>
                                                                         <option value="3">3rd Semester</option>
                                                                         <option value="4">4th Semester</option>
                                                                         <option value="5">5th Semester</option>
                                                                         <option value="6">6th Semester</option>
                                                                         <option value="7">7th Semester</option>
                                                                         <option value="8">8th Semester</option>
                                                                    </select>
                                                        </a></td>
                
                                                        <td><a  class="col">
                                                            Roll no.:</td>
                                                                <td><input name="year" type="text" size="1" class="input" id="yr" maxlength="50" value="">
                                                                <input name="bname" type="text" size="1" id="branch" maxlength="50" value="">
                                                                <input name="roll" type="text" size="1" class="input" maxlength="50" value="">

                                                        </a></td>
                </tr>  
                                            
                <tr>                                    
                                                        
                                                         <td><a  class="col">
                                                            Username:</td>
                                                            <td><input type="text" name="usrname">
                                                        
                                                         </a></td>   
                                                       <td> <a id="pass"  class="col">
                                                             Password:</td>
                                                       <td> <input type="password" name="pswd"></td>
                </tr><tr>

                                                      <td><a  class="col">
                                                            Confirm Password:</td>
                                                       <td> <input type="password" name="pswd">

                                            </a></td>
                                            
                </tr>
             

    </table>
    


<br><br>
            <input type="submit" name="submit" value="submit" id="submit">
           
           
            

        </form>
        
</div>



<div id="footer">
Copyright © IT Department
</div>



</body>
</html>
