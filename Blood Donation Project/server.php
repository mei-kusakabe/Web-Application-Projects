<?php
session_start();

//initialising variables

$servername = "localhost";
$email = "";
$password = "";

$errors = array();

//connect to db
$db = mysqli_connect('localhost','root','','blood_donation')or die("could not connect to database");

//register users
 if(isset($_POST['register'])){
	$email = mysqli_real_escape_string($db, $_POST['email']);
    $pass_1 = mysqli_real_escape_string($db, $_POST['pass_1']);
    $pass_2 = mysqli_real_escape_string($db, $_POST['pass_2']);


//form validation
//CHECK DB FOR EXISTING MEMBER WITH SAME EMAIL
$member_check_query ="SELECT * FROM Member WHERE  email='$email' LIMIT 1";

$results = mysqli_query($db,$member_check_query);
$member = mysqli_fetch_assoc($results);

if($member)
{

    if($member['email'] === $email)
    	{
    		array_push($errors,"This email id already has a registered Member");
    	}

}


//Register the user if no error

if(count($errors)== 0 )
{
	$password = password_hash($pass_1, PASSWORD_DEFAULT);
	$query = "INSERT INTO member (email,password) VALUES ('$email','$password')";

	mysqli_query($db,$query);
	$_SESSION['email'] = $email;
	$_SESSION['success'] = "You are now  logged in";

	header("location:index.php");
}

}
//logout
   if(isset($_GET['logout']))
   {
	session_destroy();
	unset($_SESSION['email']);
	header('location:index.php');
   }


   //donor reg
   $errors = array();

$db = mysqli_connect('localhost','root','','blood_donation')or die("could not connect to database");

    if(isset($_POST['donor'])){
    	 $email = mysqli_real_escape_string($db, $_POST['email']);
    	 $name = mysqli_real_escape_string($db, $_POST['name']);
         $fname= mysqli_real_escape_string($db, $_POST['fname']);
         $password = mysqli_real_escape_string($db, $_POST['password']);
         $dob= mysqli_real_escape_string($db, $_POST['dob']);
         $gender = mysqli_real_escape_string($db, $_POST['gender']);
         $blood = mysqli_real_escape_string($db, $_POST['blood']);
         $division = mysqli_real_escape_string($db, $_POST['division']);
         $contact = mysqli_real_escape_string($db, $_POST['contact']);



//form validation
//CHECK DB FOR EXISTING donor WITH SAME EMAIL
$donor_check_query ="SELECT * FROM donor WHERE  email='$email' LIMIT 1";

$results1 = mysqli_query($db,$donor_check_query);
$donor= mysqli_fetch_assoc($results1);

if($donor)
{

    if($donor['email'] === $email)
    	{
    		array_push($errors,"This email id already has a registered donor");
    	}

}


//Register the user if no error

if(count($errors)== 0 )
{
	$password = password_hash($password, PASSWORD_DEFAULT);
	$query1 = "INSERT INTO donor (email,name,fname,password,dob,gender,blood,division,contact) 
	          VALUES 
	          ('$email','$name','$fname','$password','$dob','$gender','$blood','$division','$contact')";

	mysqli_query($db,$query1);
	$_SESSION['email'] = $email;
	$_SESSION['success'] = "You are now  logged in as donor";

	header("location:index.php");
}

}
$db->close();

?>
