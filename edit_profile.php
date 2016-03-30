<?php
    include("include/conn.php");
     session_start();
?>


<?php
  
    if(isset($_SESSION['i']))
    {
    
      
     
   
?>

<?php
        if(isset($_POST["submit"]))
        {

            $update=mysql_query("UPDATE `registered` SET `phone`=$_POST[phone],`email`='$_POST[emailaddress]',`address`='$_POST[address]',`country`='$_POST[country]',`city`='$_POST[city]',`pincode`=$_POST[pincode],`password`='$_POST[pswd]' where id='$_SESSION[i]' ");
        }
?>
<?php
       $a=mysql_query("SELECT * FROM `registered` WHERE id='$_SESSION[i]'");
       $u = mysql_fetch_assoc($a);

?>



<html>
<head>



<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
         
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
    <h3 style=" margin-left:500px; font-size:30px; font-family:Comic Sans MS; color: #0099ff;"> Edit Profile</h3><br>

   <form method="POST" style="color:white; paddin-left:50px;" enctype="multipart/form-data" >
        
             
          
            <table border= "1px solid black" width="70%" id="table">
            

                  <tr>
                                                        
                                                        <td><a   class="col">
                                                        Name:</td>            
                                                       <td> <input type="text" name="name" value=<?php echo $u["name"]; ?> disabled >
                                                        </a></td>
                                                        
                    
                                                                <td><a  class="col">
                                                        Contact no.:</td>
                                                           <td><input type="phone"  value=<?php echo $u["phone"]; ?> name="phone">
                                                        </a></td>
                                                        </tr><tr>
                                                        <td style="text-align:left; padding-left: 0px;"><a id="mail" class="col" >
                                                          Email:</td>
                                                           <td><input type="email" name="emailaddress" value=<?php echo $u["email"]; ?>>
                                                        </a></td>
                                                       <td> <a   class="col"  >
                                                         Date of birth:</td>
                                                           <td><input type="date" name="dob" id="birth" onchange="get_Age();" value=<?php echo $u["dob"]; ?> disabled>
                                                        </a></td>
                    </tr>
                    <tr>

                                                        <td><a  class="col">
                                                            Gender:</td>
                                                        <td><a class="col"><input type="radio" name="gender" disabled> Male
                                                        <input type="radio" name="gender" disabled> Female</a>

                                                        </a></td>
                                                        <td>
                                                        	
                                                        
                                                         <a  class="col"><label for="age">Age: </label> </td><td></a>
   														 <input type="text" name="age" value=<?php echo $u["age"]; ?> id="age" disabled /><br/></td></tr>
                                                        <td>

                                                        <a id="address"  class="col">
                                                        Address:</td>
                                                        <td><input type="text" name="address" value=<?php echo $u["address"]; ?>></textarea>
                                                        </a></td>
                                                        </tr><tr>
                                                       
                                                        <td>
                                                        <a  class="col"> Country:</a>
                                                        </td>
                                                        <td><input type="text" name="country" value=<?php echo $u["country"]; ?>></td>
                                                    <td><a  class="col">
                                                            state:</td>
                                                            <td>
                                                       <select name="state" disabled >
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
                                                            <td><input type="text" name="city" value=<?php echo $u["city"]; ?>>
                                                        </a></td>

                                                        <td>
                                                            <a  class="col">
                                                                Pin Code:
                                                                <td><input type="digits" name="pincode" value=<?php echo $u["pincode"]; ?>></td>
                                                            </a>
                                                        </td>
                </tr>

                <tr>

                                                        <td id="col"><label for="photo">Upload your Photo: </label></td>
                                                        <td><input type="file" id="files"  name="file[]" disabled />
                                                        <img id="image"/></td>


                                                        <td id="col" >
                                                            Hobbies:</td>
                                                        <td>
                                                        <a id="col" onClick="checkHobby();" >
                                                         
                                                        Dancing<input type="checkbox" class="messageCheckbox" name="dance" value="Dancing" disabled />
                                                        Singing<input type="checkbox" name="singing" class="messageCheckbox" value="Singing" disabled />
                                                        Sports<input type="checkbox" class="messageCheckbox" name="hobbies" value="Sports" disabled/>
                                                        Art<input type="checkbox" name="hobbies" class="messageCheckbox" value="Art" disabled/>
                                                        <label for="hobbies">Other
                                                                    <input type="checkbox" id="ohobbies" name="hobbies"onClick="otherHobbies(this)">
                                                                </label>

                                                                <div id="shwbox" style="display: none"> 
                                                                    <textarea rows="5" id="otherHobbyText" cols="25" placeholder="Please Mention here..."></textarea>
                                                                </div>
                                                                </label><br><br><br>
                                                                  
                                                    <input type="hidden" id="hobby123" name="finalHobby" value="tararara">


                                                        </td>
                </tr>                                       

                <tr>

                                                       <td> <a  class="col">
                                                            Registration no.:</td>
                                                           <td><input type="text" id="re" name="reg"  onchange=" set_year()" value=<?php echo $u["registration_no"]; ?> disabled>

                                                        </a></td>
                                                        <td><a  class="col" >

                                                            Branch Name:</td>
                                                                    <td ><select name="branch" onclick="branch_change() "id="bname"   disabled>
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
                                                       
                
                                                        <td><a  class="col">
                                                            Roll no.:</td>
                                                                <td ><input name="year" type="text" size="1" class="input" id="yr" maxlength="50" disabled>
                                                                <input name="bname" type="text" size="1" id="branch" maxlength="50" disabled>
                                                                <input name="roll" type="text" size="1" class="input" maxlength="50" disabled>

                                                        </a></td>
                                                 
                                                        
                                                         <td><a  class="col">
                                                            Username:</td>
                                                            <td><input type="text" name="usrname" value=<?php echo $u["username"]; ?> disabled>
                                                        
                                                         </a></td> 
                    </tr> <tr> 
                                                       <td> <a id="pass"  class="col">
                                                             Password:</td>
                                                       <td> <input type="text" name="pswd" value=<?php echo $u["password"]; ?>></td>
                

                                                      
                                            
                </tr>
             

    </table>
    


<br><br>
            <input type="submit" name="submit" value="submit" id="submit">
           
           
            

        </form>
        <a href="studentpanel.php" style="color:white;padding-left: 50px;">Back to profile?</a>

        
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




<?php
  }
    else
    {
    
      header('Location:student.php');
    }
?>

</html>
