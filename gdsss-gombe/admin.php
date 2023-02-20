
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
                font-size: 2.3rem;
            }
        
            
            
        </style>
    </head>
    <body>
        <!-- <div class="container-fluid bg-primary jumbotron head">
            <h3 class="p-5 text-light">TEARCHERS DATA</h3>
        </div>
        
        <div class="container-fluid bg-primary">
            <ul class="pagination float-end">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
             -->
             <div class="container-fluid" style="width: 90%;">
                <div class="card mt-2 mx-auto">
                <div class="card-dody">
                        <table class="table table-dark table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Full_Name</th>
                                <th>Phone_Number</th>
                                <th>Password</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
            <?php
            include "conns.php";

            session_start();

            $sql = mysqlI_query($connection, "SELECT * FROM update_st");

            if(mysqlI_num_rows($sql) > 0 ) {
                
                while ($row = mysqlI_fetch_assoc($sql)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $pnumber = $row['pnumber'];
                        $password = $row['password'];
                        $image = $row['image'];
                        $_SESSION['id'] = $row['id'];


                        echo "<tr>
                                <td>$name</td>
                                <td>$pnumber</td>
                                <td>$password</td>
                                <td><a href='uploaded_img/$image'><img src='uploaded_img/$image' accept='image/jpeg, image/jpg, image/png' width='40' height='40'></a></td>
                                <td>
							  	<a href='tech_update.php? id=$id' class='btn btn-primary'>Edit</a>
							  </td>
							  <td>
							  	<a href='#' class='btn btn-danger' data-target='#mymodal$id' data-toggle='modal'>Delete</a>
							  </td>
							  <div class='modal fade' id='mymodal$id'>
								<div class='modal-dialog'>
									<div class='modal-content'>
										<div class='modal-header'>
											<div class='modal-title'>
												<h4>Hi Muhammda Umar Kabir!</h4>
											</div>
										</div>
										<div class='modal-body'>
											<p>Are You Sure You Want To Delete The Recoard From The School Or Not!!</p>
										</div>
										<div class='modal-footer'>
											<a href='#' class='btn btn-primary' data-dismiss='modal'>Cancle</a>
											<a href='delete.php? id=$id' class='btn btn-danger'>Delete</a>
										</div>
									</div>
								</div>
								</div>
                                </tr>";
                        
                    }	
            }
            


        ?>
                        </tbody>
                            
                        


                    </table>
            
                    </div>
            </div>
        </div>
     <!-- <div  class="modal fade" id="myModals">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <p>Are You Sure You Want To Delete!!</p>
                    </div>
                </div>
                <div class="modal-footer">
                  
                </div>
            </div>
        </div>
    </div>
 -->


</body>
</html>

