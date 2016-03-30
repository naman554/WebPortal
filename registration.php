<?php
    include("include/conn.php");
?>


<html>
<head>



<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">

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
 var branch1=document.registration.branch;
function formvalidation()

 { 
   var userid=document.registration.uid;
    var passwd=document.registration.pwd;
    var firstname=document.registration.fname;
    var lastname=document.registration.lname;
    var email=document.registration.email;
    var umsex=document.registration.msex;
    var ufsex=document.registration.fsex;

   var r =document.registration.regn;
    
   var phone=document.registration.mob;
        if (allLetter1(firstname))
        
         {
             if(allLetter2(lastname))
             { 
              
              
              if(checkGender(this))
              {
              
                 if(ValidateEmail(email))
                 {
                  if(valmob(phone))
                  {
                    
                    
                if(branchselect(branch1))
               {
                 if(regselect(r,8))
                  {
                     if(userid_validation(userid,5,12))
                   {
                         if(passwd_validation(passwd,7,12))
                        {
                            
                             
                                
                           
                       }
                       }
                    }
             }
         }
         }
         }
        }
        }
        
        
        return false;
 }

function allLetter1(firstname)
 {
    var letters = /^[A-Za-z]+$/;
    if(firstname.value.match(letters))
    {
        return true;
    }
    else
    {
        
        alert("Firstname must have alphabet characters only");
        firstname.focus();
        return false;
        
    }
    }
    function allLetter2(Middle)
 {
    var letters = /^[A-Za-z]+$/;
    if(lastname.value.match(letters))
    {
        return true;
    }
    else
    {
        
        alert("Middle Name must have alphabet characters only");
        lastname.focus();
        return false;
        
    }
}
   function allLetter3(lastname)
 {
    var letters = /^[A-Za-z]+$/;
    if(lastname.value.match(letters))
    {
        return true;
    }
    else
    {
        
        alert("Lastname must have alphabet characters only");
        lastname.focus();
        return false;
        
    }
}
    function calculateAge() {

        var inputDate = document.getElementById("dob1");
        if (inputDate.value == "" || inputDate.value == null) {
            alert("Date of birth Entry shouldn't be empty");
            
            dob1.focus();
            return false;
        }
        else {
            //Now find the Age based on the Birth Date
            getAge(new Date(inputDate.value));
        }

 }
      function checkGender(){
            if(!document.getElementsByName("sex")[0].checked && !document.getElementsByName("sex")[1].checked)
        {
            alert("Select Male/Female");

            return false;
        }
        else{
             return true;
        }
       
    }
         
    function ValidateEmail(emailaddress)
 {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(emailaddress.value.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        email.focus();
        return false;
    }
}
function Valmob(phone)
{ 
  var phone_format = /^[0-9]+$/;
  if(phone.value.match(phone_format))
            {
              return true;
            }
    else
    {
          alert("Phone number must be only numbers");
                phone.focus();
                return false;
        
    }
    
     
}
   function branchselect(branch1)
        {
    if(branch1.value == "Default")
    {
     alert('Select your branch from the list');

    branch1.focus();
    return false;
    }
    else
    {
    return true;
    }
    }
    function regselect(r,ln)
    { 
     var regn_len=r.value.length;
      if(regn_len == 0 || regn_len != ln)
                {
                alert("Registration number must be filled out.");
                r.focus();
                 return false;
                 }
       else{
        return true;
       }
        
      
    } 

    function Pincode(r) {
        var len = r.value.length;
    if (len == 0 )
        {
            alert("pincode should not be empty");
            r.focus();
            return false;
        }
        else{
            return true;
        }
    }
     function Country(l) {
        var con_len = l.value.length;
    if (con_len == 0 )
        {
            alert("Country name should not be empty");
            l.focus();
            return false;
        }
        else{
            return true;
        }
    }

     function place(m) {
        var place_len = m.value.length;
    if (place_len == 0 )
        {
            alert("City/Town should not be empty");
            m.focus();
            return false;
        }
        else{
            return true;
        }
    }


    
    


function userid_validation(userid,mx,my)
 {
    var userid_len = userid.value.length;
    if (userid_len == 0 || userid_len >= my || userid_len < mx)
        {
            alert("User Id should not be empty / length be between "+mx+" to "+my);
            userid.focus();
            return false;
        }
        else{
            return true;
        }
    
 }
 function passwd_validation(passwd,mx,my)
 {
    var passwd_len = passwd.value.length;
    if (passwd_len == 0 ||passwd_len >= my || passwd_len < mx)
        {
            alert("Password should not be empty / length be between "+mx+" to "+my);
            passwd.focus();
            return false;
        }
       else{
        return true;
       }
   
 }
 

function passwordcheck(){
	hob();
var a = document.getElementById("password");
var b = document.getElementById("password1");
if(a.value!=b.value)
alert("password do not match")

}

 function otherHobbies (hobbies) {
            var shwbox = document.getElementById("shwbox");
            shwbox.style.display = hobbies.checked ? "block" : "none";
        }


</script>
</head>
               
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
                                                       <td> <input type="text" name="fname"  onblur="allLetter1(this)">
                                                        </a></td>
                                                        <td> <a  class="col">
                                                        Middle name:</td>
                                                        <td><input type="text" name="mname" onblur="allLetter2(this)" >
                                                        </a></td>
                    </tr><tr>

                                                        <td><a class="col">
                    
                                                        Last name:</td>
                                                        <td><input type="text" name="lname" onblur="allLetter3(this)" > </a></td>    
                    
                    
                                                                <td><a  class="col">
                                                        Contact no.:</td>
                                                           <td><input type="phone" name="phone"  onblur="Valmob(phone)">
                                                        </a></td>
                                                        </tr><tr>
                                                        <td style="text-align:left; padding-left: 0px;"><a id="mail" class="col" >
                                                          Email:</td>
                                                           <td><input type="email" name="emailaddress" onblur="ValidateEmail(emailaddress)">
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
                                                        <td><input type="text" name="country" onblur="Country(this);"></td>
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
                                                            <td><input type="text" name="city" onblur="place(this);">
                                                        </a></td>

                                                        <td>
                                                            <a  class="col">
                                                                Pin Code:
                                                                <td><input type="digits" name="pincode" onblur="Pincode(this);"></td>
                                                            </a>
                                                        </td>
                </tr>

                <tr>

                                                       <td id="col"><label for="photo">Upload your Photo: </label></td>
                                                        <td><input type="file" id="files"  name="file[]"/>
                                                        <img id="image"/></td>



                                                       <td id="col" >
                                                            Hobbies:</td>
                                                        <td>
                                                       
            <div id="hob" class="col">
              <input type="checkbox" name="hobb"  id="id1" value="Painting" style="font-family:courier;">Painting<br>
              <input type="checkbox" name="hobb"  id="id2" value="Dancing" style="font-family:courier;">Dancing<br>
              <input type="checkbox" name="hobb"  id="id3" value="Reading" style="font-family:courier;">Reading<br>
              <input type="checkbox" name="hobb" id="id4" value="Cooking" style="font-family:courier;">Cooking<br>
              <input type="checkbox" name="hobb"  id="id5" value="Playing" style="font-family:courier;">Playing<br>
              <input type="checkbox" name="hobb" a id="oth" value="others" onclick="other()" />Others<br>
              <textarea class="form-control" name="hobbi" id="extrah" style="display:none;"></textarea>
              <textarea name="hobbies" id="ho" style="display:none;"></textarea>
            </div>


                                                        </td>
                </tr>                                       

                <tr>

                                                       <td> <a  class="col">
                                                            Registration no.:</td>
                                                           <td><input type="text" id="re" name="reg" onchange="year1();" onblur="regselect(this,ln);" >

                                                        </a></td>
                                                        <td><a  class="col" >

                                                            Branch Name:</td>
                                                                    <td><select name="branch" id="bcode" onchange="branchcode();" onblur="branchselect(branch1);">
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


                                                                <script>
                                                            function branchcode(){
                                                                     var x = document.getElementById("bcode");
                                                                         var y = document.getElementById("branch");
                                                                         
                                                                         if(x.value == "BT")
                                                                         y.value="BT";
                                                                         else if(x.value == "CHE")
                                                                         y.value="CHE";
                                                                         else if(x.value == "CSE")
                                                                         y.value="CSE";
                                                                         else if(x.value == "IT")
                                                                         y.value="IT";
                                                                         else if(x.value == "MME")
                                                                         y.value="MME";
                                                                         else if(x.value == "MME")
                                                                         y.value="MME";
                                                                         else if(x.value == "EE")
                                                                         y.value="EE";
                                                                         else if(x.value == "ECE")
                                                                         y.value="ECE";
                                                                         else if(x.value == "CE")
                                                                         y.value="CE";
                                                                         }
                                                                         function year1(){
                                                                         var p = document.getElementById("re");
                                                                         var q = document.getElementById("yr");
                                                                         q.value = p.value.substring(2,4);
                                                              }
                                                            </script>

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
                                                            <td><input type="text" name="usrname"  onblur="userid_validation(this)">
                                                        
                                                         </a></td>   
                                                       <td> <a id="pass"  class="col">
                                                             Password:</td>
                                                       <td> <input type="password" name="pswd" id="password" ></td>
                </tr><tr>

                                                      <td><a  class="col">
                                                            Confirm Password:</td>
                                                       <td> <input type="password" name="pswd" id="password1" onchange="passwordcheck()">

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
 <script>
document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
        document.getElementById("image").width = "100";
        document.getElementById("image").height = "100";
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>
<script type="text/javascript">
    
    function hob() {
    var checkboxes = document.getElementsByName('hobb');
          var vals = "";
          for (var i=0, n=checkboxes.length;i<n;i++)
          if (checkboxes[i].checked)
          {
            if(checkboxes[i].value!="others")
            {
              vals += checkboxes[i].value+",";
            }
            else
            {
              vals += document.getElementById("extrah").value;
            }
          }
         //alert(vals);
         //heckboxes.value = vals;
         var t = document.getElementById("ho");
         t.value = vals;
  }

     function other(){
      //alert("othes is checked");
      var h = document.getElementById("oth");
     	var show = document.getElementById("extrah");
     	show.style.display = h.checked ? "block" : "none";
     }

</script>>
</html>
