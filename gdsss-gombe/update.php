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
<div class="divB">
<div class="divD">
<p>Select User</p>
<?php
include_once 'conns.php';

if (isset($_GET['submit'])) {
$id = $_GET['id'];
$name = $_GET['name'];
$pnumber = $_GET['pnumber'];
$password = $_GET['password'];
$query = mysql_query("UPDATE update_st SET
name ='$name', pnumber = '$pnumber', password = '$password' where id='$id'", $connection);
}
$query = mysql_query("SELECT * FROM update_st", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='update.php?update={$row['id']}'>{$row['name']}</a></b>";
echo "<hr/ style='width: 100%;'>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("SELECT * FROM update_st WHERE id = $update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' /><br>";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='name' value='{$row1['name']}' />";
echo "<br />";
echo "<label>" . "Phone Number:" . "</label>" . "<br />";
echo"<input class='input' type='number' name='pnumber' value='{$row1['pnumber']}' />";
echo "<br />";
echo "<label>" . "Password:" . "</label>" . "<br />";
echo"<input class='input' type='password' name='password' value='{$row1['password']}' />";
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
