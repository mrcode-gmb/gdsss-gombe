<!DOCTYPE html>
<html>
<head>
  <title>Search Bar</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
  
  <script src="bootstrap-4.6.2-dist/js/jquery.slim.min.js"></script>
  <script src="bootstrap-4.6.2-dist/js/popper.min.js"></script>
  <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
  	*{
  		margin: 0;
  		padding: 0;
  	}
  		label{
  			font-size: 20px;
        font-family: tahoma;

  		}  		



  	}
  </style>
</head>
<body>
	<form method="POST">
    <div class="card"> 
      <div class="card-header">
        <label>Search Student Records</label>
      </div>
      <div class="card-body">
         <input type="text" name="search" placeholder="Search" class="form-control">
      </div>
      <div class="card-footer">
        <input type="submit" name="submit" value="Search" class="btn btn-primary">
      </div>
    </div>
	</form>
</body>
</html>
 
     
      
<?php

$connection = new PDO("mysql:host=localhost;dbname=sstwo",'root','');
if (isset($_POST['submit'])) {
	$str = $_POST['search'];

	$sth = $connection->prepare("SELECT * FROM st_data WHERE reg_number = '$str'");
	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th>Reg_number</th>
                 <th>First_Name</th>
                 <th>Surname</th>
                 <th>Other_Name</th>
                 <th>Gender</th>
                 <th>Date_Of_Birth</th>
                 
			</tr>
			<tr>
				<td><?php echo $row->reg_number;?></td>
				<td><?php echo $row->first_name;?></td>
				<td><?php echo $row->surname;?></td>
				<td><?php echo $row->other_name;?></td>
				<td><?php echo $row->gender;?></td>
				<td><?php echo $row->date_birth;?></td>
				
			</tr>
			<tr>
				<th>Year</th>
                 <th>Session</th>
                 <th>Term</th>
                 <th>Class</th>
                 <th>Mail</th>
                 <th>Parent_GSM</th>
                 
			</tr>
			<tr>
				<td><?php echo $row->year;?></td>
				<td><?php echo $row->sessions;?></td>
				<td><?php echo $row->term;?></td>
				<td><?php echo $row->classs;?></td>
				<td><?php echo $row->mail;?></td>
				<td><?php echo $row->parent_gsm;?></td>

			</tr>
	
		</table>
	</div>
	<?php

	}

	else{
		echo '<div class="alert alert-primary alert-link">Search Result Not Found!
    <button class="close" data-dismiss="alert">&times;</button>
    </div>';
	}
}


?>









<!-- script -->


<!-- <script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("search").innerHTML="";
    document.getElementById("search").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("search").innerHTML=this.responseText;
      document.getElementById("search").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","arh.php?id="+str,true);
  xmlhttp.send();
}
</script>
 -->