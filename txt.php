<?php
	require_once"conn.php";

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$sql = "INSERT INTO `user_id`(`username`, `email`, `pass`) VALUES('$username', '$email', '$pass')";
		if (mysqli_query($conn,$sql)) {

			$message[] = 'Registration Succefully';
		}else{
			$message[] = 'Registration Failed';
		}
	}





?>



<!DOCTYPE html>
<html>
<head>
	<title>Hoverly</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.head{
			width: 100%;
			height: 30vh;
			background: blue;
			border-bottom-left-radius: 100%;
			border-bottom-right-radius: 100%;
		}
		.form{
			width: 50%;
			height: 50vh;
			margin-left: 25%;
			background: white;
			box-shadow: 0 0 10px blue;
			margin-top: -23px;
			display: block;
			text-align: center;
			justify-content: center;
			align-content: center;
		}
		.form input{
			width: 90%;
			padding: 10px;
			margin: 10px;
			border: none;
			background: #efefef;
		}
		.form button{
			border: none;
			padding: 10px;
			background: blue;
			width: 50%;
			border: none;
			border-radius: 5px;
			color: white;
			font-weight: bolder;


		}
		.form button:hover{
			color: blue;
			border: solid blue;
			background: white;


		}
		.footer{
			width: 100%;
			height: 30vh;
			background: blue;
			border-top-left-radius: 100%;
			border-top-right-radius: 100%;
			margin-top: -10px;
			background-size: cover;
		
		}
		.message{
			background: red;
			width: 80%;
			padding: 10px;
			border: none;
			border-radius: 3px;
			color: white;
			font-weight: bolder;
			margin-left: 8%;
			font-size: 20PX;
		}
		.left{
			background: blue;
			width: 10%;
			height: 20vh;
			float: left;
			margin-top: -17%;
			margin-left: 70px;
			border-radius: 50%;
		}
		.right{
			background: blue;
			width: 10%;
			height: 20vh;
			float: right;
			margin-top: -17%;
			margin-right: 70px;
			border-radius: 50%;


		}
		.left:hover{
			background: white;
			border: solid blue;
		}
		.right:hover{
			background: white;
			border: solid blue;
		}
	</style>
</head>
<body>
	<div class="head">
		
		
	</div>
	<div class="form">
		<form method="POST">
			<?php
				if(isset($message)){
					foreach($message as $message){
						echo '<div class="message">'.$message.'</div>';
					}
				}
			?>
			
			<input type="text" name="username" placeholder="Username" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="password" name="pass" placeholder="Password" required>
			<button name="submit">Submit</button>

		</form>
		
	</div>
	<div class="left">
		
	</div>
	<div class="right">
		
	</div>
	<div class="footer">
		
	</div>
</body>
</html>