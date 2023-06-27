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
       <!--      <div class="row">

              

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
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4" style="width:50% ">
              <!-- Card -->
              <div class="row" >
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 col-md-5"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total Emploeyee
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  <?php 
                  require 'DB.php'; 
                  $selectRow=$db->prepare("SELECT * FROM emploeyee ");
                  $selectRow->execute();
                  $selectRow=$selectRow->rowcount();
                  echo $selectRow; 
                  ?>
                    <!-- 6389 -->
                  </p>
                </div>
              </div>
              <!-- Card -->
                <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 col-md-5"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                      fill-rule="evenodd"
                      d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                <span>  <i class="fa-solid fa-apartment"></i></span>  
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total Department
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  <?php 
                  require 'DB.php'; 
                  $selectRow=$db->prepare("SELECT * FROM department ");
                  $selectRow->execute();
                  $selectRow=$selectRow->rowcount();
                  echo $selectRow; 
                  ?>
                    <!-- 6389 -->
                  </p>
                </div>
              </div> </div>
              <!-- Card -->
                 <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 col-md-4"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    ></path>

                <span>  <i class="fa-solid fa-apartment"></i></span>  
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total Degisnation
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  <?php 
                  require 'DB.php'; 
                  $selectRow=$db->prepare("SELECT * FROM  degisnation ");
                  $selectRow->execute();
                  $selectRow=$selectRow->rowcount();
                  echo $selectRow; 
                  ?>
                    <!-- 6389 -->
                  </p>
                </div>
              </div> </div>
              <!-- Card -->


    </div>
  </div>
    </div>
</section>

            <!-- End of profile section -->

        </section>
    </div>




</html>
</body>
</html>
