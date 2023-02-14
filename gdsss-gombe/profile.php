<?php
	include_once'conns.php';

	session_start();
	if (isset($_GET['logout'])) {
		unset($st_data);
		session_destroy();
		header('location:log.php');
		
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


			$select = mysql_query("SELECT * FROM update_st WHERE id =''", $connection);

			if (mysql_num_rows($select) > 0) {
				$_SESSION = mysql_num_rows($select);
			}

			if ($_SESSION['image'] == '') {
				echo '<img src="users.png">';
			}else{
				echo '<img src="uploaded_img/'.$_SESSION['image'].'" accept="image/jpeg, image/jpg, image/png">';
			}

		  ?>
		<h3>Hi, <?php echo $_SESSION['name']; ?></h3>
		<p>Welcome To Gdsss Gombe</p>
		<a href="log.php?logout=<? echo $update_st; ?>" class="text bg-warning">Logout</a>
		<a href="home.php" class="bg-primary">Dashbaord !!!</a>
		

		
	</div>

</body>
</html>