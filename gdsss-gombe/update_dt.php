<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
	<link href="bootstrap/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="bg-primary">


	<div class="container">
		<div class="row">
			<div class="mt-5 offset-lg-1 col-lg-10">
				<div class="card">
					<form method='GET' action="" enctype="multipart/form-data">
						<div class="card-head text-lg text-center text-primary" style="font-size: 2.3rem; font-weight: bolder;">STUDENT RECORD</div>
						<div class="card-body">
						<div class="row">
							<?php
include_once 'conns.php';

if (isset($_GET['submit'])) {
$id = $_GET['id'];
$reg_number = $_GET['reg_number'];
$first_name = $_GET['first_name'];
$surname = $_GET['surname'];
$other_name = $_GET['other_name'];
$gender = $_GET['gender'];
$date_birth = $_GET['date_birth'];
$year = $_GET['year'];
$sessions = $_GET['sessions'];
$term = $_GET['term'];
$classs = $_GET['classs'];
$mail = $_GET['mail'];
$parent_gsm = $_GET['parent_gsm'];
$nin_number = $_GET['nin_number'];
$query = mysql_query("UPDATE st_data SET
reg_number ='$reg_number', first_name = '$first_name', surname = '$surname' other_name ='$other_name', gender = '$gender', date_birth = '$date_birth' year ='$year', sessions = '$sessions', term = '$term', classs = '$classs', mail = '$mail', parent_gsm ='$parent_gsm', nin_number='$nin_number' where id = '$id'", $connection);
}
$query = mysql_query("SELECT * FROM update_st", $connection);
while ($row = mysql_fetch_array($query)) {

}
?>
<?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("SELECT * FROM st_data WHERE id = $update", $connection);
while ($row1 = mysql_fetch_array($query1)) {

					echo "<div class='col-5 m-3'><div class='form-group'>
								<input class='form-control form-control-lg' type='hidden' name='id' value='{$row1['id']}' />
									<input type='text' name='reg_number' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['reg_number']}'>
								</div></div>
							
							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='first_name' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['first_name']}'>
								</div>
								
							</div>
							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='surname' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['surname']}'>
								</div>
								
							</div>
							
							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='other_name' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['other_name']}'>
								</div>
								
							</div>
						
							<div class='col-11 m-3'>
								<div class='form-group'>
									<input type='text' name='gender' class='form-control form-control-lg' style='font-size: 2.3rem; width: 95.5%;'' value='{$row1['gender']}'>
								</div>
								
							</div>
							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='date_birth' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['date_birth']}'>
								</div>
								
							</div>
							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='year' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['year']}'>
								</div>
								
							</div>
							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='sessions' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['sessions']}'>
								</div>
								
							</div>
							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='term' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['term']}'>
								</div>
								
							</div>

							<div class='col-11 m-3'>
								<div class='form-group'>
									<input type='text' name='classs' class='form-control form-control-lg' style='font-size: 2.3rem; width: 95.5%;'' value='{$row1['classs']}'>
								</div>
								
							</div>

							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='mail' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['mail']}'>
								</div>
								
							</div>
							<div class='col-5 m-3'>
								<div class='form-group'>
									<input type='text' name='parent_gsm' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['parent_gsm']}'>
								</div>
								
							</div>
							<div class='col-11 m-3'>
								<div class='form-group'>
									<input type='text' name='nin_number' class='form-control form-control-lg' style='font-size: 2.3rem; width: 95.5%;'' value='{$row1['nin_number']}'>
								</div>
								<input class='btn btn-block btn-primary' type='submit' name='submit' value='update' />
								";
}
}
if (isset($_GET['submit'])) {
echo '<div class="alert alert-info"><br><br><br><br><br><br>
<Span>Recoard Updated Successfuly......!!</span></div>';
}
?>
<?php
	mysql_close($connection);
?>

						</div>
					</form>
				</div>
				
			</div>

			</div>
		</div>
	</div>
	</div>
</body>
</html>