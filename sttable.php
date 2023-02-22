
<!DOCTYPE html>
<html>
<head>
<title>Update Record</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="bootstrap/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
	label{
		color: white;
		font-family: tahoma;
		font-size: 1.4rem;
		font-weight: bolder;
		margin-left: 20px;
	}
</style>
</head>
<body class="bg-primary">
<div class="container">
<div class="row">
<div class="card-head text-lg text-center text-primary" style="font-size: 2.3rem; font-weight: bolder;">
<h2>Student Update Record</h2>
</div>
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
$date_birth = $_GET['date_birth'];
$classs = $_GET['classs'];
$query = mysql_query("UPDATE st_data SET
first_name ='$first_name', reg_number ='$reg_number', surname ='$surname', other_name ='$other_name', date_birth ='$date_birth', classs = '$classs' where id='$id'", $connection);
}
$query = mysql_query("SELECT * FROM st_data", $connection);
while ($row = mysql_fetch_array($query)) {

}
?>
<?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("SELECT * FROM st_data WHERE id = $update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form  class='row' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' /><br>";
echo "<br />";
echo "<label>" . "Registration Number:" . "</label>" . "<br />";
echo"<div class='col-12 m-3'><div class='form-group'><input type='text' name='reg_number' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['reg_number']}'></div></div>";
echo "<br />";
echo "<label>" . "First Name:" . "</label>" . "<br />";
echo"<div class='col-12 m-3'><div class='form-group'><input type='text' name='first_name' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['first_name']}'></div></div>";
echo "<label>" . "Surname:" . "</label>" . "<br />";
echo"<div class='col-12 m-3'><div class='form-group'><input type='text' name='surname' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['surname']}'></div></div>";
echo "<br />";
echo "<label>" . "Other Name:" . "</label>" . "<br />";
echo"<div class='col-12 m-3'><div class='form-group'><input type='text' name='other_name' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['other_name']}'></div></div>";
echo "<br />";
echo "<label>" . "Date Birth:" . "</label>" . "<br />";
echo"<div class='col-12 m-3'><div class='form-group'><input type='text' name='date_birth' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['date_birth']}'></div></div>";
echo "<br />";
echo "<label>" . "Class:" . "</label>" . "<br />";
echo"<div class='col-12 m-3'><div class='form-group'><input type='text' name='classs' class='form-control form-control-lg' style='font-size: 2.3rem;'' value='{$row1['classs']}'></div></div>";
echo "<input class='btn btn-info text-danger m-3 p-3' style='font-size: 1.5rem; font-weight: bolder;' type='submit' name='submit' value='Update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="alert alert-info"><br><br><br><br><br><br>
<Span>Recoard Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</div>
</div><?php
	mysql_close($connection);
?>
</body>
</html>
?>