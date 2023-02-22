<?php
	include_once 'conns.php';

	session_start();
	if (isset($_GET['id'])) {
		unset($st_data);
		session_destroy();
		header('location:stu_log.php');
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>profile page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-primary">
	<div class="profile">
		<?php 

			// $image = $_GET['image'];

			$select = mysqli_query($connection, "SELECT * FROM st_data WHERE id =''");

			if (mysqli_num_rows($select) > 0) {
				$_SESSION = mysqli_num_rows($select);
			}

			if ($_SESSION['image'] == "") {
				echo '<img src="images/user.jpeg" alt="Image Not Exixt">';
			}else{
				echo '<img src="uploaded_st/'.$_SESSION['image'].'" accept="image/jpeg, image/jpg, image/png">';
			}

		  ?>
		<h3>Hi, <?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['surname']; ?> <?php echo $_SESSION['other_name']; ?></h3>
		<p>Welcome To Gdsss Gombe</p>
		<a href="stu_log.php?logout=<?php echo $_SESSION['id']; ?>" class="text bg-warning">Logout</a>
		<a href="home.php" class="bg-primary">Dashbaord !!!</a>

		<!-- <form action="" method="POST">
		<input type="hidden" name="image">
		</form>
		 -->

		
	</div>

</body>
</html>