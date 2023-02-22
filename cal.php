<?php
	if(isset($_POST['answer'])){
		$v1 = $_POST['v1'];
		$v2 = $_POST['v2'];

		$v3 = $v1 + $v2;

		echo $v3;
	


	}



?>




<!DOCTYPE html>
<html>
<head>
	<title>calcuka</title>
</head>
<body>
	<div>
		<form method="POST">
			<div>
				<input type="number" name="v1" placeholder="value1"><br><br>
				<input type="number" name="v2" placeholder="value2"><br><br>
				<button name="answer">Answer</button>
			</div>
		</form>

</body>
</html>