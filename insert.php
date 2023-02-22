<?php

    include 'config.php';

    $message1 = '';
    $message2 = '';
    $message3 = '';
    $message4 = '';
    $message5 = '';

    if(isset($_POST['save'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $pass =  $_POST['password'];

        if($fname == ''){
            $message1 = '<div class="text-danger">First Name Is Required</div>';
        }
        elseif($lname == ''){
            $message2 = '<div class="text-danger">Last Name Is Required</div>';
        }
        else{
            if($email == ''){
                $message3 = '<div class="text-danger">Email Is Required</div>';
            }
            elseif($pass == ''){
                $message4 = '<div class="text-danger">Password Is Required</div>';
            }
            else{
                
                if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass)){
                    $message5 = '<div class="alert alert-success">Registration Good</div>';

                    $insert = "INSERT INTO ourclass(first_name,last_name,email,password) VALUES  ('$fname','$lname','$email','$pass')";
                    $query = mysqli_query($connect,$insert);
                }
            }
        }
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <title>insert</title>
    <style>
        .form{
            width: 30%;
            margin: auto;
            margin-top: 12%;
        }
    </style>
</head>
<body class="bg-light">
    <div class="form bg-white shadow-lg">
        <div class="container pb-3">
            <form action="" method="POST">
                <div class="header">
                    <h4 class="form-label text-primary text-center">Registration Form</h4>
                </div>
                <div class="body">
                    <?php echo $message5;?>
                    <div class="form-group">
                        <label for="" class="form-label">First Name:</label>
                        <input type="text" name="first_name" class="form-control" value="<?php if(isset($_POST['save'])){ echo $_POST['first_name'];}?>">
                        <span><?php echo $message1;?></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Last Name:</label>
                        <input type="text" name="last_name" class="form-control" value="<?php if(isset($_POST['save'])){ echo $_POST['last_name'];}?>">
                        <span><?php echo $message2;?></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email Address:</label>
                        <input type="email" name="email" class="form-control" value="<?php if(isset($_POST['save'])){ echo $_POST['email'];}?>">
                        <span><?php echo $message3;?></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" value="<?php if(isset($_POST['save'])){ echo $_POST['password'];}?>">
                        <span><?php echo $message4;?></span>
                    </div>
                </div>
                <div class="footer">
                    <button class="btn btn-primary btn-block" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>