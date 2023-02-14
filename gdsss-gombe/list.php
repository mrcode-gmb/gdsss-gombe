
<!DOCTYPE html>
<html>
    <head>

        <title>Student Data</title>
        <!-- <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
        <script src="bootstrap-4.6.2-dist/js/jquery.slim.min.js"></script>
        <script src="bootstrap-4.6.2-dist/js/popper.min.js"></script>
        <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
        <style>
            .head{
                border: 1px solid yellow;
                
            }
            h3{
                font-family: sans-serif;
                font-weight: bold;
                font-size: 30px;
            }
        
            
            
        </style>
    </head>
    <body>
        <div class="container-fluid bg-primary p-3">
            <h3 class="text-light ml-2">STUDENT DATA</h3>
        </div>
        
        <!-- <div class="container-fluid bg-primary">
            <ul class="pagination float-end">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div> -->     
            <div class="container shadow-lg mt-4">
                <table class="table table-responsive table-striped table-hover">
                    <thead>
                    <tr>    
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
    <?php
    include_once"conns.php";
    
    session_start();
    

    $result = mysql_query("SELECT * FROM st_data", $connection);

    if(mysql_num_rows($result) > 0 ) {
        
        while ($row = mysql_fetch_assoc($result)) {
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



                echo '<tr>
                        <td>'.$reg_number.'</td>
                        <td>'.$first_name.'</td>
                        <td>'.$surname.'</td>
                        <td>'.$other_name.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$date_birth.'</td>
                        <td>'.$year.'</td>
                        <td>'.$sessions.'</td>
                        <td>'.$term.'</td>
                        <td>'.$classs.'</td>
                        <td>'.$mail.'</td>
                        <td>'.$parent_gsm.'</td>
                        <td>'.$nin_number.'</td>
                        <td>'."<b><a href='stu_update.php?update={$row["id"]}'>Update</a></b>".'</td>
                        <td>'."<b><a href='validation.php'>Delete</a></b>".'</td>
                        </tr>';
            }   
    }
    


?>
                </tbody>
                    
                


            </table>
            
        </div>

                   <!--  <button class="btn btn-danger" data-toggle="modal" data-target="#myModals">Moda</button>
                    <div  class="modal fade" id="myModals">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-title">
                                        <h3>Are You Sure You Want To Delete</h3>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger">'."<b><a href='delete.php?id={$row["id"]}' class='text-danger m-1'>Delete</a></b>".'</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

</body>
</html>
