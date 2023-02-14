<?php?>

<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<link rel="stylesheet" type="text/css" href="../texts/bootstrap-4.6.2-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="card mt-2 mx-auto">
	<div class="card-dody">
	<table class="table table-responsive table-dark table-striped table-hover">
		<tr>
			<th>S/N</th>
			<th>Reg_number</th>
            <th>First_Name</th>
            <th>Surname</th>
            <th>Other_Name</th>
            <th>Gender</th>
            <th>Date_Of_Birth</th>
            <th>Year</th>
            <th>Session</th>
            <th>Term</th>
            <th>Class</th>
            <th>Mail</th>
            <th>Parent_GSM</th>
            <th>NIN_Number</th> 
			<th colspan="2">Action</th>
		</tr>
		
			<?php
				require_once "conn.php";
    
    			session_start();
				$select = "SELECT * FROM st_data";
				$result = mysqli_query($conn, $select);
				$sn=0;

				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						$sn++;
						$id = $row['id'];
                		$reg_number = $row['reg_number'];
                		$first_name = $row['first_name'];
                		$surname = $row['surname'];
                		$other_name = $row['other_name'];
                		$gender = $row['gender'];
                		$date_birth = $row['date_birth'];
                		$year = $row['year'];
                		$sessions = $row['sessions'];
                		$term = $row['term'];
                		$classs = $row['classs'];
                		$mail = $row['mail'];
                		$parent_gsm = $row['parent_gsm'];
                		$nin_number = $row['nin_number'];
                		$image = $row['image'];
                		$_SESSION['reg_number'] = $row['reg_number'];
                		$_SESSION['classs'] = $row['classs'];
                		$_SESSION['id'] = $row['id'];
						echo "<tr><td>".$sn."</td>
							  <td>".$reg_number."</td>
                        	  <td>".$first_name."</td>
                        	  <td>".$surname."</td>
                        	  <td>".$other_name."</td>
                        	  <td>".$gender."</td>
                        	  <td>".$date_birth."</td>
                        	  <td>".$year."</td>
                        	  <td>".$sessions."</td>
                        	  <td>".$term."</td>
                        	  <td>".$classs."</td>
                        	  <td>".$mail."</td>
                        	  <td>".$parent_gsm."</td>
                        	  <td>".$nin_number."</td>
							  <td>
							  	<a href='stu_update.php?update=$id' class='btn btn-primary'>Edit</a>
							  </td>
							  <td>
							  	<a href='delete.php? id=$id' class='btn btn-danger'>Delete</a>
							  </td></tr>";

					}
				}





			?>
		
	</table>
	</div>
	</div>
</div>
</body>
</html>
