<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EAE</title>
</head>
<body>
 <html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Task-Modern Academy</title>
      <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
      <link rel="stylesheet" href="A-Send Task/css/bootstrap.min.css">

    <link rel="stylesheet" href="A-Send Task/css/bootstrap.min.css">
    <link rel="stylesheet" href="A-Send Task/css/all.min.css">
    <link rel="stylesheet" href="A-Send Task/css/A-Send Task.css">

</head>

<body class="bg-light">
      
 <?php require 'Nav.php';?>

    <div class="d-flex main">

        <!-- sidebar -->

        <aside class="px-3 pt-3 sidebar vh-100 flex-shrink-0">
            <div class="d-flex flex-column">
                <a href="../A-Send Task/A-Send Task.html"
                    class="text-decoration-none d-flex justify-content-center align-items-center">
                    
                     
                </a>

                <ul class="p-0  list-unstyled mt-3 d-inline flex-column">
                  

                    <li class="nav-item">
                        <a  href="http://localhost/EAE/A-Dashboard.php" class="d-inline align-items-center  py-3  text-decoration-none here" type="button"
                            >
                            <i class="fa-solid fa-house-chimney list-icon fa-fw"></i>
                            <span class="list-text ">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  href="http://localhost/EAE/ins_task.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">Tasks</span>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a  href="http://localhost/EAE/InsertEmploey.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">New Emploeyee</span>
                        </a>
                    </li class="nav-item">
                      <li>
                        <a  href="http://localhost/EAE/InsertDepartment.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">InsertDepartment</span>
                        </a>
                    </li>
                     <li>
                        <a  href="http://localhost/EAE/ViewEmploeyee.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">ViewEmploeyee</span>
                        </a>
                    </li>
                    <li>
                        <a  href="http://localhost/EAE/InsertDegisnation.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">InsertDegisnation</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a  href="http://localhost/EAE/profile.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-user list-icon fa-fw"></i>
                            <span class="list-text">profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../A-Rating/A-Rating.html" class="d-inline align-items-center  py-3  text-decoration-none" type="button">
                          <i class="fa-regular fa-star fa-solid list-icon fa-fw  "></i>
                          <span class="list-text ">Rating</span>
                        </a>
                      </li>
                  
                
                </ul>
            </div>
        </aside>

        <!-- End of sidebar -->


        <section class="container-fluid  ps-4">
          <!--   <div class="row">

                

                <nav class="col-lg-12 py-4 px-3">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-lg-5 col-sm-12 search d-flex order-lg-0 order-sm-1">
                        </div>

                        <div id="user-box" class="col-lg-5 col-sm-12 m-sm-auto m-lg-0 mt-lg-0 mb-sm-4 profile d-flex order-lg-0 order-sm-0">
                            <div class="user-info d-flex align-items-center pe-2">
                                <a href="#" class="text-decoration-none d-flex flex-column">
                                    <span id="userName" class="user-name">Ahmed Essam</span>
                                    <small>Admin Profile</small>
                                </a>

                            </div>
                            <div class="user-image">
                                <a href="#">
                                    <img id="user-photo" src="../A-Send Task/img/profile man.png" alt="user photo">
                                </a>

                            </div>
                        </div>
                    </div>
                </nav>
            </div> -->

            <!-- End of navbar -->

            <!-- profile section -->

            <section class="profile-main  mt-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="profile d-flex flex-column align-items-center mb-2">

                         <div id="details" class="container-form mt-5 bg-secondary">
  
                            
          <h1 class="text-center ml-5">New Employee</h1>

  
        <form method="POST" enctype="multipart/form-data" class="bg-secondary ">
                        <label for="manger" class="fw-bold" class="text-primary">Name</label>
                        <input type="text" name="Name" class="form-control">
                  
        <div class="mb-3">
          
            <label for="subject" class="form-label subject fw-bold"class="text-primary">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="Email" placeholder="Enter Email">
          </div>   
          <div class="mb-3">
          
            <label for="subject" class="form-label subject "class="text-primary">Department</label>
            <select class="form-control form-select" name="Department">
            	<?php 
    			  	      require 'DB.php';
    			  	        $show=$db->prepare("SELECT * FROM department ");
                             $show->execute();
                             foreach ($show as $key ) {
                             	echo '<option value='.$key['Department'].'>'. $key['Department'].'</option>'; 
                             }
    			  	 ?>>
            	
            </select>
                     </div> 
                     <div class="mb-3">
          
            <label for="subject" class="form-label subject fw-bold"class="text-primary">Designation</label>
            <select class="form-control form-select" name="Designation">
            	<?php 
    			  	      require 'DB.php';
    			  	        $show=$db->prepare("SELECT * FROM degisnation ");
                             $show->execute();
                             foreach ($show as $key ) {
                             	echo '<option value='.$key['Degisnation'].'>'. $key['Degisnation'].'</option>'; 
                             }
    			  	 ?>
            	
            </select>
                     </div>           
        <div class="mb-3">
            <label for="formFile" class="form-label fw-bold"class="text-primary">Avatar</label>
            <input class="form-control" type="file" name="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label ">ID</label>
                  <input type="passsword" min="8" class="form-control" id="formGroupExampleInput" name="password" >
          </div>
          
   
         
          
        <input  class="align-items-end" type="submit" value="submit" name="submit">
        </form>
      </div> 

      <?php 
            require 'DB.php'; 
            if(isset($_POST['submit'])){
                $file=$_FILES['file']['name'];
     
                $filetmp=$_FILES['file']['tmp_name'];
                $Insertemploeyee=$db->prepare("INSERT INTO emploeyee (	Name,Email,Department,Designation,image ,password) VALUES (:Name,:Email,:Department,:Designation,:image ,:password)");
                $Insertemploeyee->bindparam("Name",$_POST['Name']);
                  $Insertemploeyee->bindparam("Email",$_POST['Email']);
                    $Insertemploeyee->bindparam("Department",$_POST['Department']);
                     $Insertemploeyee->bindparam("Designation",$_POST['Designation']);
                       $Insertemploeyee->bindparam("image",$file);
                     $Insertemploeyee->bindparam("password",$_POST['password']);
                     if ($Insertemploeyee->execute()) {
                       move_uploaded_file($filetmp, "images/$file");
                     }
        

   }

      ?>



    </div>
  </div>
    </div>
</section>

            <!-- End of profile section -->

        </section>
    </div>


    <!-- profile card -->


    <!-- end of profile card -->

    <!-- change passward card -->


    <!-- end of change passward card -->


</html>
</body>
</html>