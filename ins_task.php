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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                <!-- navbar -->

            
            <!-- End of navbar -->

            <!-- profile section -->

            <section class="profile-main  mt-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="profile d-flex flex-column align-items-center mb-2">

                         <div id="details" class="container-form mt-5 bg-secondary">
  
                            

  
        <form method="POST" enctype="multipart/form-data" class="bg-secondary ">
            
          <label for="manger" class="fw-bold" class="text-primary">Assign to</label>
            <select id="manger" class="form-select " aria-label="Default select example" name="manger">
            <option value="all ">Select emploeyee </option>
            <option value="Doctor">DR/Ahmed </option>
            <option value="Doctor">DR/mohammed </option>
            <option value="Doctor">DR/ali </option>
            <option value="Doctor">DR/raouf </option>
            <option value="officer">Mr/sami</option>
            <option value="officer">Mr/samer</option>
            <option value="officer">Mr/Emad</option>
        </select> 
        <div class="mb-3">
          
            <label for="subject" class="form-label subject fw-bold"class="text-primary">Subject...</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="Subject" placeholder="name subject">
          </div>          
        <div class="mb-3">
            <label for="formFile" class="form-label fw-bold"class="text-primary">Default file input</label>
            <input class="form-control" type="file" name="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label fw-bold"class="text-primary">Start Time</label>
            <input class="form-control" type="date" name="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label fw-bold"class="text-primary">End Time</label>
            <input class="form-control" type="date" name="file" id="formFile">
          </div>

         
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Task Discription </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Comment"></textarea>
          </div>
        <input  class="align-items-end" type="submit" value="submit" name="submit">
        </form>
      </div> 

      <?php 
            require 'DB.php'; 
            if(isset($_POST['submit'])){
                $file=$_FILES['file']['name'];
                $fileType=$_FILES['file']["type"];
                $filetmp=$_FILES['file']['tmp_name'];
        $Insert=$db->prepare("INSERT INTO task (manger,Subject,fileName,file,filetype,comment) VALUES(:manger,:Subject,:fileName,:comment)");
        $Insert->bindparam("manger",$_POST['manger']);
         $Insert->bindparam("Subject",$_POST['Subject']);
         $Insert->bindparam("fileName",$file); 
          $Insert->bindparam("file",$filetmp);
          $Insert->bindparam("filetype",$fileType);
             $Insert->bindparam("comment",$_POST['Comment']);
            if ($Insert->execute()) {
                  move_uploaded_file($filetmp, "../fils/$file");
            }
            else{
                echo "string";
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

    <div class="profile-container d-none">
        <i id="card-close" class="fa-solid fa-xmark"></i>
        <div class="profile-card">
            <div class="card" style="width: 18rem;">
                <img id="user-card-image" src="../A-Dashboard/img/profile man.png" class="card-img-top w-100"
                    alt="user-photo">
                <div class="card-body">
                    <h5 id="cardName" class="card-title fw-bolder">Ahmed Essam</h5>
                    <small id="cardEmail">example@gmail.com</small>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item "><a href="../A-profile/A-profile.html" class="fw-bold text-decoration-none text-black">Profile</a>
                    </li>
                    <li class="list-group-item "><a id="change-password-list" href="#"
                            class="fw-bold text-decoration-none text-black">Change passward</a>
                    </li>
                    <li class="list-group-item "><a id="cardSignOut" href="../../Register/index.html"
                            class="fw-bold text-decoration-none text-black">Signout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- end of profile card -->

    <!-- change passward card -->


    <!-- end of change passward card -->

    <script src="../A-Send Task/js/jquery-3.6.0.slim.min.js"></script>
    <script src="../A-Send Task/js/bootstrap.bundle.min.js"></script>
    <script src="../A-Send Task/js/navbar.js"></script>
    <script src="../A-Send Task/js/profile_user_name.js"></script>
    <script src="../A-Send Task/js/change-password.js"></script>
    <script src="../A-Send Task/js/stuProfileMat.js"></script>
    <script src="../A-Send Task/js/SignOut.js"></script>
</body>

</html>