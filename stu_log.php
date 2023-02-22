<?php

    include_once "conns.php";
    session_start();

    if(isset($_POST['submit'])){
        $parent_gsm = $_POST['parent_gsm'];
        $reg_number = $_POST['reg_number'];
        
        $select = mysqli_query($connection, "SELECT * FROM st_data WHERE parent_gsm = '$parent_gsm' AND reg_number = '$reg_number'");

           while( $row = mysqli_fetch_assoc($select)){
            $id = $row['id'];
            $first_name = $row['first_name'];
            $surname = $row['surname'];
            $other_name = $row['other_name'];
            $image = $row['image'];
            $reg_number = $row['reg_number'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['surname'] = $row['surname'];
            $_SESSION['other_name'] = $row['other_name'];
            $_SESSION['image'] = $row['image'];
            $_SESSION['id'] = $row['id'];
        }
        if(mysqli_num_rows($select) > 0){

            header('location:student_profile.php');
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
                font-style: oblique;
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
            .label{
                font-family: normal;
                font-style: normal;
            }
        </style>
</head>
<body class="container-fluid bg-primary">
    <form method="POST">
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
                        <label for="admissionNumber" class="label form-label-control mb-3 lbl">Admission Number</label>
                        <input type="number" name="reg_number" class="form-control form-control-lg" placeholder="Registration Number" required="provide admission"/>
                        <label for="phoneNumber" class="label form-label-control mb-3 lbl">Phone Number</label>
                        <input type="number" name="parent_gsm" class="form-control form-control-lg" placeholder="Parent_Gsm" required/>
                        
                        <div class="form-check mb-3 mt-2">
                            <label class="label form-check-label lbl">
                                <input type="checkbox" name="remember" class="form-check-input"/>Remember me
                            </label>
                            
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary mt-2 float-end hover">Visit !</button>
                </div>
                <div class="col-sm-4 bg-primary mt-5"></div>
            </div>
        </div>

    </form>
</body>
</html>