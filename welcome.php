<html>
	<head>
		<title><?php echo $firstname . " " . $lastname?>
		</title>
	</head>
	<body background="infra.jpg">
		<h2>
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
		</h2>





	</body>
</html>

