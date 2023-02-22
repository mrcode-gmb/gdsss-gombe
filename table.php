
<!DOCTYPE html>
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
<div class="divB" align="center">

<?php
include_once 'conns.php';

if (isset($_GET['submit'])) {
$id = $_GET['id'];
$first_name = $_GET['first_name'];
$classs = $_GET['classs'];
$date_birth = $_GET['date_birth'];
$query = mysql_query("UPDATE st_data SET
first_name ='$first_name', classs = '$classs', date_birth = '$date_birth' where id='$id'", $connection);
}
$query = mysql_query("SELECT * FROM update_st", $connection);
while ($row = mysql_fetch_array($query)) {

}
?>
<?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("SELECT * FROM update_st WHERE id = $update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' /><br>";
echo "<br />";
echo "<label>" . "First Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='first_name' value='{$row1['first_name']}' />";
echo "<br />";
echo "<label>" . "Class:" . "</label>" . "<br />";
echo"<input class='input' type='classs' name='pnumber' value='{$row1['classs']}' />";
echo "<br />";
echo "<label>" . "Date Of Birth:" . "</label>" . "<br />";
echo"<input class='input' type='password' name='date_birth' value='{$row1['date_birth']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Recoard Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
	mysql_close($connection);
?>
</body>
</html>
