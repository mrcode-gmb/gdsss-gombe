<?php
  include_once "conns.php";

  $my_id = $_GET['id'];

  $select = mysqli_query($connection, "SELECT * FROM st_data WHERE id = '$my_id'");

  $row = mysqli_fetch_array($select);


  if(isset($_POST['edit'])){
    $reg_number = $_POST['reg_number'];
    $creg_number = $_POST['creg_number'];
    $first_name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $other_name = $_POST['other_name'];
    $gender =  $_POST['gender'];
    $date_birth =  $_POST['date_birth'];
    $year = $_POST['year'];
    $sessions = $_POST['sessions'];
    $term =  $_POST['term'];
    $classs = $_POST['classs'];
    $mail = $_POST['mail'];
    $parent_gsm = $_POST['parent_gsm'];
    $nin_number = $_POST['nin_number'];
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_st/'.$image;

    // $query1 = mysqli_query($connection, "SELECT * FROM st_data WHERE nin_number = '$nin_number'");

    
      if($reg_number != $creg_number){
        $message[] = 'Comfirm Registration Number Not March!';
      }
      elseif ($image_size > 20000000) {
        $message[] = 'Image Size Is Too Large!';
      }
      else{
        
          $upload = mysqli_query($connection, "UPDATE st_data SET reg_number = '$reg_number', first_name = '$first_name', surname = '$surname', other_name = '$other_name', gender = '$gender', date_birth = '$date_birth', year = '$year', sessions = '$sessions', term = '$term', classs = '$classs', mail = '$mail', parent_gsm = '$parent_gsm', nin_number = '$nin_number', image = '$image' WHERE id = '$my_id'");
          if($upload){
            move_uploaded_file($image_tmp_name,$image_folder);
            $message[] = 'Registration Successfully!';

          }
      }
    

   
  }



  




?>








<!DOCTYPE html>
<html>
<head><title>Student Registration</title>
  <link href="bootstrap/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
  h3{
    font-weight: bold;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;
    font-style: normal;
    font-size: 1.2rem;
    color: blue;
  }
  p{
    text-align: center;
    font-size: 1.2rem;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    font-style: normal;
    color: blue;
  }
  label{
    font-weight: bolder;
    color: ;
    font-family: sans-serif;
    font-style: normal;
    font-size: 1.1rem;
  }
  




</style>  
</head>
<body class="container-fluid bg-primary">
<form method="POST" action="" enctype="multipart/form-data">
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-4 bg-light text-center  rounded">
          <h3 class="mt-3">GOVERNMENT DAY SCIENCE SECONDARY SCHOOL GOMBE.</h3>
            <img src="images/logo.png" class="thumbnail rounded img-fluid mt-5" width="200" height="300"/>
            <?php
                    if(isset($message)){
                        foreach($message as $message){
                            echo '<div class="alert alert-danger">'.$message.'</div>';
                        }
                    }
                ?>
      
        </div>
        <div class="col-sm-4 bg-light border">
          
            <p class="mb-2 mt-4">EDIT STUDENT RECOARD</p>
            <label for="userName" class="text-primary">Registration Number:</label>
            <input type="text" name="reg_number" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['reg_number'];?>" required/>
            <label for="parentName" class="text-primary">Confirm Registration Number:</label>
            <input type="text" name="creg_number" class="form-control mt-2 mb-3 form-control-lg"required/>
            <label for="firstname" class="text-primary">First Name:</label>
            <input type="text" name="first_name" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['first_name'];?>" required/>
            <label for="phoneNumber" class="text-primary">Enter Surname:</label>
            <input type="text" name="surname" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['surname'];?>" required/>
            <label for="userName" class="text-primary">Other Name:</label>
            <input type="text" name="other_name" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['other_name'];?>">
            <label for="gender" class="text-primary">Gender</label>
            <input type="text" name="gender" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['gender'];?>" required>
            <label for="dateOfBirth" class="text-primary">Date Of Birth:</label>
            <input type="text" name="date_birth" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['date_birth'];?>" required/>
            <label for="year" class="text-primary">Year</label>
            <input type="text" name="year" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['year'];?>" required>
            
          
        </div>
        <div class="col-sm-4 bg-light border rounded">
          <label for="session" class="mt-5 text-primary">Session</label>
          <input type="text" name="sessions" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['sessions'];?>" required>
          <label for="term" class="text-primary">Term</label>
          <input type="text" name="term" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['term'];?>" required>
          <label for="class" class="text-primary">Class</label>
          <input type="text" name="classs" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['classs'];?>" required>
          <label for="userName" class="text-primary">Email Address:</label>
          <input type="email" name="mail" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['mail'];?>" required>
          <label for="userName" class="text-primary">Parent's  G.S.M:</label>
			    <input type="number" name="parent_gsm" class="form-control mt-2 mb-3 form-control-lg" value="<?php echo $row['parent_gsm'];?>" required>
          <label for="userName" class="text-primary">NIN Number:</label>
		    	<input type="number" name="nin_number" class="form-control mt-3 mb-2 form-control-lg" value="<?php echo $row['nin_number'];?>" required>
          <label for="userName" class="text-primary">Upload Image:</label>
			    <input type="file" name="image" accept="image/jpeg, image/jpg, image/png" value="<?php echo $row['image'];?>" class="form-control mt-2 mb-3 form-control-lg">
			
          <button type="submit" name="edit" class="btn btn-primary mt-2 float-end hover">Update</button>
        </div>
      
    </div>
</div>
</div>
</div>
</div>
</form>
      
      
                          
</body>
</html>
