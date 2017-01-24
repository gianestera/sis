<?php
	if (isset($_POST['register']))
		{
			$studentNo = $_POST['sid'];
			$lastname = $_POST['ln'];
			$firstname = $_POST['fn'];
			$emailAddress = $_POST['email'];
			$password = $_POST['pwd'];
			$birthDate = $_POST['bday'];

		}
	else
		{
			header('location: register.php');
		}

?>


<html>
	<head>
		<title><?php echo $firstname . " " . $lastname?>
		</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body background="one.jpg">
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
				<h1 class="text-center" style="font-size:60px;"><font color="purple" face="Arial">Welcome, <?php echo $firstname . " " . $lastname?>!</font></h1>
			</div>
		</div>
		</div>
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
			<h2 class="text-center" style="font-size:20px;"><font color="black" face="Arial">Student ID number: <?php echo $studentNo ?></font></h2>
			
		
		</div>
		</div>
		</div>
		
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
			<h2 class="text-center" style="font-size:20px;"><font color="black" face="Arial">Last name: <?php echo $lastname?> </font></h2>
		</div>
		</div>
		</div>
		
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
			<h2 class="text-center" style="font-size:20px;"><font color="black" face="Arial">First name: <?php echo $firstname?> </font> </h2>
		</div>
		</div>
		</div>
		
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
			<h2 class="text-center" style="font-size:20px;"><font color="black" face="Arial">Password: <?php echo $password ?> </font> </h2>
		</div>
		</div>
		</div>
		
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
			<h2 class="text-center" style="font-size:20px;"><font color="black" face="Arial">Birthday: <?php echo $birthDate ?> </font></h2>
		</div>
		</div>
		</div>
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
			<h2 class="text-center" style="font-size:20px;"><font color="black" face="Arial">Time: <?php echo date('c') ?> </font></h2>
		</div>
		</div>
		</div>
		
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
			<h2 class="text-center" style="font-size:20px;"><font color="black" face="Arial">Thank you for signing up!</font></h2>
		</div>
		</div>
		</div>
		
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="well">
			<h2 class="text-center" style="font-size:20px;"><font color="black" face="Arial"><center><A HREF="register.php"><font color ="purple">Log out</font></A></font></h2>
		</div>
		</div>
		</div>
		
		
		
	</body>
</html>

