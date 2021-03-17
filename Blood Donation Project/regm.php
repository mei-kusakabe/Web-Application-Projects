<?php include('memregdb.php'); ?>
<?php include('server.php'); ?>
<!DOCTYPE html>
<head>
<title>Member Registration</title>
</head>
<style>
  Body,
  html {
    margin:0;
    padding: 0;
    font-family: cursive;
  }
  body{
    background-color: #fff;
  }
  .main{
    height: 420px;
    width: 300px;
    background-color:white;
    box-shadow: 5px 5px 10px #b2b2b2;
    margin: 100px 550px;
  }
  .heading{
    height: 50px;
    width: 300px;

  }
  .heading h1{
    text-align: center;
    color: black;
    font-family: cursive;

  }
  .user .password{
    height: 50px;

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
  .regmem{
    height: 50px;
    width: 300px;
  }
  .regmem button{
    height: 40px;
    width: 260px;
    margin: 5px 18px;
    background-color:red;
    border: 1px solid #33cc33;
    font-family: cursive;
  }
  button:on click{
    border: none;
  }
  .remember input{
    margin-left: 18px;
    margin-top: 15px;
  }
  label{
    font-size: 12px;
  }
  .remember a{
    margin-left: 85px;
    font-size: 15px;
  }
</style>
<body>

  <div class="main">
    <div class="heading">
      <h1>Register</h1>
    </div>
    <form name = "registermem" class = "form"  action = "regm.php" method = "POST" onsubmit = "return checkPassword()">

      <?php include('errors.php'); ?>


   
    <div class="info">
      
      <div class="user">
        <input type="text" name="email" placeholder="Email" required>
      </div>

      <div class="password">
        <input type="password"  name="pass_1" placeholder="Password" required>
      </div>
      <div class="confirmpassword">
        <input type="password"  name="pass_2" placeholder="Confirm Password" required>
      </div>

      <div class="regmem">
        <center>
           <button type="submit" name="register" class="btn"> Register</button>
        </center>
       
     </div> 
       </form>
   </div>

   <a href="logm.php"><center>Log in</center></a>
 </div>

 <a href="home.html"><center>Back to Home</center></a>
</body>

<script>
        function checkPassword() {
            var p1 = document.forms["registermem"]["pass_1"].value;
            var p2 = document.forms["registermem"]["pass_2"].value;
            if (p1 != p2) {
                alert("Sorry, the passwords didn't match!");
                return false;
            }
        }
</script>

</html>

