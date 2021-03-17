<?php include('server.php'); ?>
<html>
<head>
	<title>Homepage for Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>This is the homepage</h1>
	<br>
	<div class="content">
			<?php if(isset($_SESSION['success'])) : ?>
			<h3>
		<?php
			echo $_SESSION['success'];
			unset($_SESSION['success']);

	     ?>
	     
		   </h3>
	  
    <?php endif ?>



<?php if(isset($_SESSION["email"])): ?>

	<p>Welcome <strong><?php echo $_SESSION["email"]; ?></strong></p>
    <p><a href="home.html?logout='1'" style="color: red;">Logout</a></p>
	

<?php endif ?>
</div>

</body>
</body>
</html>
