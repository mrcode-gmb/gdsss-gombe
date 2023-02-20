<?php
	include_once"conns.php";

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$pnumber = $_POST['pnumber'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$image = $_FILES['image']['name'];
		$image_size = $_FILES['image']['size'];
		$image_tmp_name = $_FILES['image']['tmp_name'];
		$image_folder = 'uploaded_img/'.$image;

		$query1 = mysqli_query($connection, "SELECT * FROM update_st WHERE pnumber = $pnumber");

		if(mysqli_num_rows($query1) > 0){
			$message[] = 'User Already Exit';
		}else{
			if($password != $cpassword){
				$message[] = 'Confirm Password Not March!';
			}elseif($image_size > 20000000){
				$message[] = 'Image Size Is To Large';
			}else{
				$insert = mysqli_query($connection, "INSERT INTO `update_st`(`name`, `pnumber`, `password`, `image`) VALUES('$name', '$pnumber', '$password', '$image')");
		

				if($insert){
					move_uploaded_file($image_tmp_name, $image_folder);
					$message[] = 'Registration Seccessfully';
					header('location:log.php');
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
                        <input type="text" name="name" class="label form-control form-control-lg mt-3" placeholder="Enter Full Name" dat-tagle="" required>
                        <label for="phoneNumber" class="label form-label-control  mb-1 mt-2 lbl">Enter Phone Number:</label>
                        <input type="number" name="pnumber" class="form-control form-control-lg mt-3" placeholder="Enter Phone Number" required>
                        <label for="password" class="label form-label-control mb-1 mt-2 lbl">Enter Password:</label>
                        <input type="password" name="password" class="label form-control form-control-lg mt-3" placeholder="Password" required>
                        <label for="password" class="label form-label-control mb-1 mt-2 lbl">Enter Confirm Password:</label>
                        <input type="password" name="cpassword" class="label form-control form-control-lg mt-3" placeholder="Comfirm Password" required>
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
