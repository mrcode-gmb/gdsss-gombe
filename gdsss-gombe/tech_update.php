<?php
	include "conns.php";

	$my_id = $_GET['id'];

	$select = mysqli_query($connection, "SELECT * FROM update_st WHERE id = '$my_id'");

	$row = mysqli_fetch_array($select);


	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$pnumber = $_POST['pnumber'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$image = $_FILES['image']['name'];
		$image_size = $_FILES['image']['size'];
		$image_tmp_name = $_FILES['image']['tmp_name'];
		$image_folder = 'uploaded_img/'.$image;

		$query1 = mysqli_query($connection, "SELECT * FROM update_st WHERE password = $password");

		if(mysqli_num_rows($query1) > 0){
			$message[] = 'User Already Exit';
		}else{
			if($password != $cpassword){
				$message[] = 'Confirm Password Not March!';
			}elseif($image_size > 20000000){
				$message[] = 'Image Size Is To Large';
			}else{
				$insert = mysqli_query($connection, "UPDATE update_st SET name = '$name', pnumber = '$pnumber', password = '$password', image = '$image' WHERE id = '$my_id'");
		

				if($insert){
					move_uploaded_file($image_tmp_name, $image_folder);
					$message[] = 'Registration Seccessfully';
					header('location:admin.php');
				}else{
					$message[] = 'Registration Failed';
				}
			}
		}
	}



	




?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>register form</title>
	<link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
	<style>
        
        .lbl{

                font-size: 15px;
                font-weight: bold;
                color: rgb(0, 95, 220);
                font-style: oblique;

            }
            
         h4{
                font-size: 20px;
                font-weight: bold;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                text-align: center;
            }
            .label{
                font-style: normal;
            }
    </style>
</head>
<body class="bg-primary">
	 <div class="container-fluid">
        <div class="row">
                <div class="col-sm-4 bg-primary mt-5">
                </div>
                <div class="col-sm-4 bg-light mt-5 rounded">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <h4 class="text-primary mb-4 mt-5">ADD TEACHER RECORD</h4>
                        <?php
                        if(isset($message)){
                            foreach($message as $message){
                                echo '<div class="alert alert-danger">'.$message.'</div>';
                                }
                            }
                        ?>
                        <label for="fullname" class="label form-label-control mb-1 mt-2 lbl">Enter Full Name:</label>
                        <input type="text" name="name" class="label form-control form-control-lg mt-3" value="<?php echo $row['name'];?>" required>
                        <label for="phoneNumber" class="label form-label-control  mb-1 mt-2 lbl">Enter Phone Number:</label>
                        <input type="text" name="pnumber" class="form-control form-control-lg mt-3" value="<?php echo $row['pnumber'];?>" required>
                        <label for="password" class="label form-label-control mb-1 mt-2 lbl">Enter Password:</label>
                        <input type="text" name="password" class="label form-control form-control-lg mt-3" value="<?php echo $row['password'];?>" required>
                        <label for="password" class="label form-label-control mb-1 mt-2 lbl">Enter Confirm Password:</label>
                        <input type="text" name="cpassword" class="label form-control form-control-lg mt-3" placeholder="Comfirm Password" required>
                        <label for="image" class="label form-label-control mb-1 mt-2 lbl">Upload Image:</label>
                        <input type="file" name="image" class="form-control form-control-lg mt-3" accept="image/jpeg, image/jpg, image/png">
                        <button name="submit" class="btn bg-primary text-light mt-3 mb-3 mr-3 rounded float-end hover">Save !</button>
                    </form>
                </div>
                <div class="col-sm-4 bg-primary mt-5"></div>
        </div>
    </div>

	


	
</body>

</html>



<!-- <!DOCTYPE html>
<html>
<head>
<title>Update Record</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Student Update Record</h2>
</div>
<div class="divB">
<div class="divD">
<p>Select User</p>
?php
// include_once 'conns.php';

// if (isset($_GET['submit'])) {
// $id = $_GET['id'];
// $name = $_GET['name'];
// $pnumber = $_GET['pnumber'];
// $password = $_GET['password'];
// $query = mysql_query("UPDATE update_st SET
// name ='$name', pnumber = '$pnumber', password = '$password' where id='$id'", $connection);
// }
// $query = mysql_query("SELECT * FROM update_st", $connection);
// while ($row = mysql_fetch_array($query)) {
// echo "<b><a href='update.php?update={$row['id']}'>{$row['name']}</a></b>";
// echo "<hr/ style='width: 100%;'>";
// echo "<br />";
// }
// ?>
// </div>?php
// if (isset($_GET['update'])) {
// $update = $_GET['update'];
// $query1 = mysql_query("SELECT * FROM update_st WHERE id = $update", $connection);
// while ($row1 = mysql_fetch_array($query1)) {
// echo "<form class='form' method='get'>";
// echo "<h2>Update Form</h2>";
// echo "<hr/>";
// echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' /><br>";
// echo "<br />";
// echo "<label>" . "Name:" . "</label>" . "<br />";
// echo"<input class='input' type='text' name='name' value='{$row1['name']}' />";
// echo "<br />";
// echo "<label>" . "Phone Number:" . "</label>" . "<br />";
// echo"<input class='input' type='number' name='pnumber' value='{$row1['pnumber']}' />";
// echo "<br />";
// echo "<label>" . "Password:" . "</label>" . "<br />";
// echo"<input class='input' type='password' name='password' value='{$row1['password']}' />";
// echo "<br />";
// echo "<input class='submit' type='submit' name='submit' value='update' />";
// echo "</form>";
// }
// }
// if (isset($_GET['submit'])) {
// echo '<div class="form" id="form3"><br><br><br><br><br><br>
// <Span>Recoard Updated Successfuly......!!</span></div>';
//}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>?php
	mysql_close($connection);
?>
</body>
</html> -->
