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
              <h3 class="text-center p-3  bg-danger text-white">View all Emploeyee</h3>
<table class="table table-dark table-striped">
     <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">inage</th>
      <th scope="col">Name</th>
       <th scope="col">Email</th>
        <th scope="col">Department</th>
         <th scope="col">Designation</th>


    
    </tr>
  </thead>
  <tbody>
    <?php 
    require 'DB.php';
    $x=1;
    $show=$db->prepare("SELECT * FROM emploeyee");
    $show->execute();
    foreach ($show as $key ) {  ?>
     <tr class="text-center">
      <td scope="row"><?php echo $x;?></td>
            <td class="text-center"><img src="images/<?php echo $key['image'];?>" style="width: 100px; height: 100px;" ></td>
      <td class="text-center"><?php echo $key['Name'];?></td>
            <td class="text-center"><?php echo $key['Email'];?></td>
                  <td class="text-center"><?php echo $key['Department'];?></td>
                  <td class="text-center"><?php echo $key['Designation'];?></td>


     <td class="text-center">
         <form method="POST"> <a href="<?php echo  'cities/edit.php?id='.$key['city_id'];?>" name="edit" class="btn btn-info">Edite</a>
            <button  type="submit" value="<?php echo $key['id']?>" name="remove" class="btn btn-danger">Remove</button></form>
        
     </td>
    </tr>

  </tbody>
    <?php $x++; }?>
</table>

</table></div>
        

   }

      ?>



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
    <?php 
        if (isset($_POST['remove'])) {
   $remove=$db->prepare('DELETE FROM emploeyee WHERE id =:id');
   $remove->bindparam(":id",$_POST['remove']);
   if ($remove->execute()) {
       echo "<script>alert('Done DELETE')</script>";
         echo "<script> window.open('http://localhost/EAE/ViewEmploeyee.php','_self')</script>";


   }
   else{
              echo "<script>alert(' NOT Done DELETE')</script>";
  
  } }
?>



      ?>