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
                  

                    <li>
                        <a  href="http://localhost/EAE/A-Dashboard.php" class="d-inline align-items-center  py-3  text-decoration-none here" type="button"
                            >
                            <i class="fa-solid fa-house-chimney list-icon fa-fw"></i>
                            <span class="list-text ">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a  href="http://localhost/EAE/ins_task.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">Tasks</span>
                        </a>
                    </li> 
                     <li>
                        <a  href="http://localhost/EAE/InsertEmploey.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">NewEmploeyee</span>
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
                        <a  href="http://localhost/EAE/InsertDepartment.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">InsertDepartment</span>
                        </a>
                    </li>
                    <li>
                        <a  href="http://localhost/EAE/InsertDegisnation.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">InsertDegisnation</span>
                        </a>
                    </li>
                    
                    <li>
                        <a  href="http://localhost/EAE/profile.php" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-user list-icon fa-fw"></i>
                            <span class="list-text">profile</span>
                        </a>
                    </li>
                    <li>
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
            <div class="row">

                <!v>

            <!-- End of navbar -->

            <!-- profile section -->

            <section class="profile-main  mt-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="profile d-flex flex-column align-items-center mb-2">

                         <div id="details" class="container-form mt-5 bg-secondary">
  
                            
          <h1 class="text-center ml-5">Insert Degisnation</h1>

  
        <form method="POST"  class="bg-secondary ">
                       
            	
          
                     <div class="mb-3">
          
            <label for="subject" class="form-label subject fw-bold"class="text-primary">Insert Degisnation</label>
             <input type="text" class="form-control" id="formGroupExampleInput" name="Degisnation" placeholder="Enter Degisnation">
            
                     </div>          
        
          

         
          
        <input  class="align-items-end" type="submit" value="submit" name="submit">
        </form>
      </div> 

      <?php 
            require 'DB.php'; 
            if(isset($_POST['submit'])){
                  $Insert=$db->prepare("INSERT INTO degisnation (Degisnation ) VALUES (:Degisnation )");
                  $Insert->bindparam("Degisnation",$_POST['Degisnation']);
                  $Insert->execute();

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