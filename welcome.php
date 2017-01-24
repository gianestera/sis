<?php
	if (isset($_POST['register']))
		{
			$studentNo = $_POST['sid'];
			$lastname = $_POST['ln'];
			$firstname = $_POST['fn'];
			$emailAddress = $_POST['email'];
			$password = $_POST['pwd'];
			$birthDate = $_POST['bday'];

			echo "Welcome, " . $firstname .
				" " . $lastname . "!<br/>".
				'Your ID number is: '.$studentNo.
				'.<br/>
				Your email address is: '.$emailAddress.
				'.<br/>
				Your password is: '.$password.
				'.<br/>
				Your birthday is: '.$birthDate.
				'.<br/><br/>
				The time is: ' . date('c');
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
	<body background="infra.jpg">
		<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
			<h1 class="text-center" style="font-size:45px;"><font color="lightblue" face="Arial">Welcome, <?php echo $firstname . " " . $lastname?>!</font></h1>
			<h2 class="text-center" style="font-size:30px;"><font color="black" face="Arial">Your Student ID number is: <?php echo $studentNo ?></font></h2>
			<h2 class="text-center" style="font-size:40px;"><font color="black" face="Arial"> </h2>
			<h2 class="text-center" style="font-size:40px;"><font color="black" face="Arial"> </h2>
			<h2 class="text-center" style="font-size:40px;"><font color="black" face="Arial"> </h2>
			<h2 class="text-center" style="font-size:40px;"><font color="black" face="Arial"> </h2>
		</div>
		</div>
		</div>
	</body>
</html>

