<?php
  include_once "conns.php";

  if(isset($_POST['submit'])){
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

    $query1 = mysqli_query($connection, "SELECT * FROM st_data WHERE reg_number = '$reg_number'");

    if(mysqli_num_rows($query1) > 0){
      $message[] = 'User Already Exit!';
    }else{
      if($reg_number != $creg_number){
        $message[] = 'Comfirm Registration Number Not March!';
      }
      elseif ($image_size > 20000000) {
        $message[] = 'Image Size Is Too Large!';
      }
      else{
        
          $upload = mysqli_query($connection, "INSERT INTO st_data(`reg_number`, `first_name`, `surname`, `other_name`, `gender`, `date_birth`, `year`, `sessions`, `term`, `classs`, `mail`, `parent_gsm`, `nin_number`, `image`) VALUES('$reg_number','$first_name','$surname','$other_name','$gender','$date_birth','$year','$sessions','$term','$classs','$mail','$parent_gsm','$nin_number','$image')");
          if($upload){
            move_uploaded_file($image_tmp_name,$image_folder);
            $message[] = 'Registration Successfully!';
            header('location:home.php');

          }
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
          
            <p class="mb-2 mt-4">REGISTRATION PANEL</p>
            <label for="userName" class="text-primary">Enter Registration Number:</label>
            <input type="text" name="reg_number" class="form-control mt-2 mb-3 form-control-lg" placeholder="Enter Registration Number" required/>
            <label for="parentName" class="text-primary">Confirm Registration Number:</label>
            <input type="text" name="creg_number" class="form-control mt-2 mb-3 form-control-lg" placeholder="Confirm Registration Number" required/>
            <label for="firstname" class="text-primary">Enter First Name:</label>
            <input type="text" name="first_name" class="form-control mt-2 mb-3 form-control-lg" placeholder="Enter First Name" required/>
            <label for="phoneNumber" class="text-primary">Enter Surname:</label>
            <input type="text" name="surname" class="form-control mt-2 mb-3 form-control-lg" placeholder="Enter Surname" required/>
            <label for="userName" class="text-primary">Enter Other Name:</label>
            <input type="text" name="other_name" class="form-control mt-2 mb-3 form-control-lg" placeholder="Enter Other Name"/>
            <label for="gender" class="text-primary">Gender</label>
            <Select name="gender" class="form-control mt-2 mb-3 form-control-lg" required>
              <option hidden>None</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </Select>
            <label for="dateOfBirth" class="text-primary">Date Of Birth:</label>
            <input type="date" name="date_birth" value="Date_Of_Birth" class="form-control mt-2 mb-3 form-control-lg" placeholder="Enter Username" required/>
            <label for="year" class="text-primary">Year</label>
            <Select name="year" class="form-control mt-2 mb-3 form-control-lg" required>
                <option hidden>None</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
                <option>2031</option>
                <option>2032</option>
                <option>2033</option>
                <option>2034</option>
                <option>2035</option>
                <option>2036</option>
                <option>2037</option>
                <option>2038</option>
                <option>2039</option>
                <option>2040</option>
                <option>2041</option>
                <option>2042</option>
                <option>2043</option>
                <option>2044</option>
                <option>2045</option>
                <option>2046</option>
                <option>2047</option>
                <option>2048</option>
                <option>2049</option>
                <option>2050</option>
            </Select>
            
          
        </div>
        <div class="col-sm-4 bg-light border rounded">
          <label for="session" class="mt-5 text-primary">Session</label>
          <select name="sessions" class="form-control mt-2 mb-3 form-control-lg" required>
            <option hidden>None</option>
            <option>2022/2023</option>
            <option>2023/2024</option>
            <option>2024/2025</option>
            <option>2025/2026</option>
            <option>2026/2027</option>
            <option>2027/2028</option>
            <option>2028/2029</option>
            <option>2029/2030</option>
            <option>2030/2031</option>
            <option>2031/2032</option>
            <option>2032/2033</option>
            <option>2033/2034</option>
            <option>2034/2035</option>
            <option>2035/2036</option>
            <option>2036/2037</option>
            <option>2037/2038</option>
            <option>2038/2039</option>
            <option>2039/2040</option>
            <option>2040/2041</option>
            <option>2041/2042</option>
            <option>2042/2043</option>
            <option>2043/2044</option>
            <option>2044/2045</option>
            <option>2045/2046</option>
            <option>2046/2047</option>
            <option>2047/2048</option>
            <option>2048/2049</option>
            <option>2049/2050</option>
          </select>
          <label for="term" class="text-primary">Term</label>
          <select name="term" class="form-control mt-2 mb-3 form-control-lg" required>
            <option hidden>None</option>
            <option>First Term</option>
            <option>Second Term</option>
            <option>Third Term</option>
          </select>
          <label for="class" class="text-primary">Class</label>
          <select name="classs" class="form-control mt-2 mb-3 form-control-lg" required>
            <option hidden>None</option>
            <option>SS 1A</option>
            <option>SS 1B</option>
            <option>SS 1C</option>
            <option>SS 1D</option>
            <option>SS 1E</option>
            <option>SS 1F</option>
            <option>SS 1G</option>
            <option>SS 1H</option>
            <option>SS 1K</option>
          </select>
          <label for="userName" class="text-primary">Enter Email Address:</label>
          <input type="email" name="mail" placeholder="Enter Email Address" class="form-control mt-2 mb-3 form-control-lg" required>
          <label for="userName" class="text-primary">Enter Parent's  G.S.M:</label>
			    <input type="number" name="parent_gsm" placeholder="Parent's  G.S.M" class="form-control mt-2 mb-3 form-control-lg" required>
          <label for="userName" class="text-primary">Enter NIN Number:</label>
		    	<input type="number" name="nin_number" placeholder="NIN Number" class="form-control mt-3 mb-2 form-control-lg" required>
          <label for="userName" class="text-primary">Upload Image:</label>
			    <input type="file" name="image" accept="image/jpeg, image/jpg, image/png" class="form-control mt-2 mb-3 form-control-lg">
			
          <button type="submit" name="submit" class="btn btn-primary mt-2 float-end hover">Submit</button>
        </div>
      
    </div>
</div>
</div>
</div>
</div>
</form>
      
      
                          
</body>
</html>
<!--<div class="container mt-3">
    <h2>Alerts</h2>
    <p>The button with class="btn-close" and data-bs-dismiss="alert" is used to close the alert box.</p>
    <p>The alert-dismissible class aligns the button to the right.</p>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Success!</strong> This alert box could indicate a successful or positive action.
    </div>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
    </div>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
    </div>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
    </div>
    <div class="alert alert-primary alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Primary!</strong> Indicates an important action.
    </div>
    <div class="alert alert-secondary alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Secondary!</strong> Indicates a slightly less important action.
    </div>
    <div class="alert alert-dark alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Dark!</strong> Dark grey alert.
    </div>

    <div class="container mt-3">
        <h2>Basic Progress Bar</h2>
        <p>To create a default progress bar, add a .progress class to a container element and add the progress-bar class to its child element. Use the CSS width property to set the width of the progress bar:</p>
        <div class="progress">
          <div class="progress-bar" style="width:70%"></div>
        </div>
      </div>
      

      <div class="container mt-3">
        <h2>Spinners</h2>
        <p>To create a spinner/loader, use the <code>.spinner-border</code> class:</p>
                                              
        <div class="spinner-border"></div>
      </div>
      

      <div class="container mt-3">
        <h2>Pagination</h2>
        <p>To create a basic pagination, add the .pagination class to an ul element. Then add the .page-item to each li element and a .page-link class to each link inside li:</p>                  
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </div>
      

      <div class="container mt-3">
        <h3>Modal Example</h3>
        <p>Click on the button to open the modal.</p>
        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
          Open modal
        </button>
      </div>
    -->  
      <!-- The Modal 
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          -->
            <!-- Modal Header 
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
          -->
      
            <!-- Modal body
            <div class="modal-body">
              Modal body..
            </div>
          -->
            <!-- Modal footer
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          -->
      