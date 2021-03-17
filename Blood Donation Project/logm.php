<?php include('memregdb.php'); ?>
<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Member Login</title>
</head>

<style>
  body,
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
  .logIn{
    height: 50px;
    width: 300px;
  }
  .logIn button{
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
    <form name = "loginmem" class = "form"  action = "logm.php" method = "POST" >

    <div class="heading">
      <h1>LOGIN</h1>
    </div>


    <div class="info">

      <div class="user">
        <input type="text" name="email" placeholder="Email" required>
      </div>

      <div class="password">
        <input type="password"  name="pass_1" placeholder="Password" required>
      </div>

       <div class="logIn">
        <button class="log_button" onclick="window.open('index.php');">
         <b>Log in</b>
       </button>
       </div>  

     </div> 

  
  <div class="remember">
    <input type="checkbox" id="remember" name="remember me">
    <label for="scales">Remember me</label>
    <p><center>Don't have an account?</center></p>
    <a href="regm.php"><center>Create an account</center></a>
  </div>
</form>

</div>


<div class="nav-links">
  <ul>
        <a href="home.html"><center>Back to Home</center></a>
</ul>
</div>


  

</body>
</html>

 