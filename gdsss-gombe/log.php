 <?php

	include "conns.php";
    
	session_start();

	if(isset($_POST['submit'])){
		$pnumber = $_POST['pnumber'];
		$password = $_POST['password'];
		
		$select = mysqli_query($connection, "SELECT * FROM update_st WHERE pnumber = '$pnumber' AND password = '$password'");

			while($row = mysqli_fetch_assoc($select)){
                $name = $row['name'];
                $image = $row['image'];
                $password = $row['password'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['image'] = $row['image'];
        }
        
		if(mysqli_num_rows($select) > 0){

			header('location:tech_profile.php');
		}else{
			$message[] = 'Invalid Login Details';

		}



	}




?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login form</title>
	<link href="bootstrap/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
	<style>
            .lbl{

                font-size: 15px;
                font-weight: bold;
                color: rgb(0, 95, 220);

            }
            im{
                margin-left: 140px;
                margin-bottom: 20px;
                width: 80px auto;
                height: 70px;
                border-radius: 20px;
            }
            .border{
                border-radius: 5px;
            }
        </style>
</head>
	<body class="container-fluid bg-primary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 bg-primary mt-5">
                </div>
                <div class="col-sm-4 bg-light mt-5 p-5 border">
                    <center><img src="images/user.jpeg" alt="default_avatar" class="rounded-circle" width="100" height="80"></center>
                    <?php
                		if(isset($message)){
                    		foreach($message as $message){
                        		echo '<div class="alert alert-danger">'.$message.'</div>';
                    		}
                		}
            		?>
                    <form method="POST" enctype="multipart/form-data" action="">
                        <label for="phoneNumber" class="form-label-control mb-3 lbl">Phone Number</label>
                        <input type="number" name="pnumber" class="form-control form-control-lg" placeholder="Phone Number" required>
                        <label for="password" class="form-label-control mb-3 lbl">Password</label>
                        <input type="text" name="password" class="form-control form-control-lg" placeholder="Password" required>
                        
                        <div class="form-check mb-3 mt-2">
                            <label class="form-check-label lbl">
                                <input type="checkbox" name="remember" class="form-check-input" required>Remember me
                            </label>
                            
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary mt-2 float-end hover">Visit !</button>
                



                    </form>
                </div>
                <div class="col-sm-4 bg-primary mt-5"></div>
            </div>
        </div>












    </body>
</html>