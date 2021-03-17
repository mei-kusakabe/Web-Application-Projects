<?php include('server.php'); ?>
<html>
   <head>
      <style>
         .error {color: #FF0000;}
         body,
  html {
    margin:0;
    padding: 0;
    font-family: cursive;
    font-size: 15px;
  }

  body{
    background-color: #fff;
  }
  .main{
    height: 1200px;
    width: 1200px;
    background-color:white;
  }

  .heading{
    height: 50px;
    width: 300px;

  }
  .heading h2{
    color: red;
    font-family: cursive;

  }
  
  .info input{
    height: 40px;
    width: 260px;
    margin: 8px 18px;
    background-color: transparent;
    border: 1px solid gray;
    text-align: center;
    outline: none;
    font-family: cursive;

  }
  button:on click{
    border: none;
  }
  
      </style>
   </head>
   
   <body onload="generateCaptcha()">
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr =$dobErr=$fnameErr=$contactErr=$passwordErr="";
         $name = $email =$fname=$password= $gender=$contact=$dob= $class = $course =$fname= $subject=$blood =$division= "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }

             if (empty($_POST["fname"])) {
               $fnameErr = " Father Name is required";
            }else {
               $fname = test_input($_POST["fname"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }

            if (empty($_POST["password"])) {
              $passwordErr = "Password is required";
            }
            else {
               $password = test_input($_POST["password"]);

               //password validation
              if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password )){
               $passwordErr = "Your password is strong.";
               } 
                 else {
               $passwordErr = "Your password is not safe.";
               }
            }
           

            if (empty($_POST["dob"])) {
               $dob = "";
            }else {
               $dob = test_input($_POST["dob"]);
            }

             if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }

            
            if (empty($_POST["blood"])) {
               $blood = "";
            }else {
               $blood = test_input($_POST["blood"]);
            }


            if (empty($_POST["division"])) {
               $division = "";
            }else {
               $division = test_input($_POST["division"]);
            }


            if (empty($_POST["contact"])) {
               $contactErr = "Contact No is required";
            }else {
               $contact = test_input($_POST["contact"]);
            }
            
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
       <center>
    
      <h2 style="height: 25px;
    width: 300px;color: red";>Donor Registration</h2>
    &nbsp;
      <p style="color: red">* required field.</p>
      <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       
         <table>
           
            <tr>
               <td>Donor Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Father's Name:</td>
               <td><input type = "text" name = "fname">
                  <span class = "error">* <?php echo $fnameErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Password: </td>
               <td><input type = "password" name = "password">
                  <span class = "error">* <?php echo $passwordErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Date of Birth:</td>
               <td> <input type = "date" name = "dob">
                  <span class = "error"><?php echo $dobErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Blood-group: </td>
               <td>
            <select class = "input" name = "blood">
                <option value = "A+">A+</option>
                <option value = "A-">A-</option>
                <option value = "B+">B+</option>
                <option value = "B-">B-</option>
                <option value = "AB+">AB+</option>
                <option value = "AB-">AB-</option>
                <option value = "O+">O+</option>
                <option value = "O-">O-</option>
            </select> </br>
          </td>
            </tr>

             <tr>
               <td>Division: </td>
                <td>
                  <select class = "input" name = "division">
                              <option value="Barishal">Barishal</option>
                              <option value="Chattagram">Chattagram</option>
                              <option value="Dhaka">Dhaka</option>
                              <option value="Khulna">Khulna</option>
                              <option value="Rajshahi">Rajshahi</option>
                              <option value="Sylhet">Sylhet</option>
                              <option value="Rangpur">Rangpur</option>
                              <option value="Mymensingh">Mymensingh</option>
               </select>
               </td>
            </tr>

            <tr>
               <td>Contact No:</td>
                <td> <input type = "text" name = "contact">
                  <span class = "error"><?php echo $contactErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Captcha:</td>
               <td>
           <input type="text" id="captcha" disabled/>
             </td>
           </tr>
          
          <tr>
             <td>Enter Number:</td>
            <td>
           <input type="text" id="inputText" placeholder="" /><br><br>
            </td>
         </tr>
            
         <tr>
          <td>
           <button onclick="generateCaptcha()">Refresh</button><br><br>
         </td>
         </tr>
           
          <tr>
          <td>
        <!--<button onclick="check()">Register as donor</button>-->
        <button type="submit"  onclick ="check()" name="donor" class="btn"> Register as donor</button>
          </td>
         </tr>
           
         <tr>
          <td>
            <a href="home.html">Back to Home</a>
          </td>
          </tr>
         
         </table>
        
      </form>

      <script>
              var captcha;
            function generateCaptcha() {
                 var a = Math.floor((Math.random() * 10));
                 var b = Math.floor((Math.random() * 10));
                 var c = Math.floor((Math.random() * 10));
                var d = Math.floor((Math.random() * 10));

          captcha=a.toString()+b.toString()+c.toString()+d.toString();
             
             document.getElementById("captcha").value = captcha;
              }

                function check(){
                      var input=document.getElementById("inputText").value;
                      if(input==captcha){ 
                  alert("Registration Successful"); 
                }else{
                      alert("Wrong captcha number! try again!");
                    }
                        }
      </script>
      
       </center>
      
   </body>
</html>