<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
  <title></title>
</head>
<body class="bg-danger">
    <?php require 'Nav2.php';?>
    <h1 class="text-center  text-white mt-5">Login administrator</h1>
    <div class="login-box">
  <div class="login-logo">
    <a href="#" class="text-white"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card bg-danger mt-5" >
  
    <body class="bg-danger">
    <div class="card-body login-card-body bg-secondary container mt-5">
      <form action="" id="login-form" class="bg-secondary" method="POST" enctype="multipart/form-data">
       
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" required placeholder=" Enter Your Email">
          <div class="input-group-append">
            <div class="input-group-text">
            
            </div>
          </div>
        </div>
       
        <div class="input-group mb-3">
          <input type="password" class="form-control w-50" name="password" required placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="signUp">Sign up</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

</body>
</html>
   <?php 
                               require 'DB.php';
                               if (isset($_POST['signUp'])) {
                               
                                          $file=$_FILES['file']['name'];
     
                                          $filetmp=$_FILES['file']['tmp_name'];
                               
                               $InsertAdmin=$db->prepare("INSERT INTO admin(name,email,Image,password) VALUES (:name,:email,:Image,:password)");
                               $InsertAdmin->bindparam("name",$_POST['name']);
                               $InsertAdmin->bindparam("email",$_POST['email']);
                              $InsertAdmin->bindparam("Image",$file);
                               $InsertAdmin->bindparam("password",$_POST['password']);
                              if ($InsertAdmin->execute()) {
                                    echo "<script>alert('Welcome Our Site ^_^') </script>";
                              echo "<script> window.open('http://localhost/A-Dashboard/A-Dashboard.php','_self')</script>";
                               move_uploaded_file($filetmp, "images/$file");
                              }
                              else{
                              echo "<script>alert('Welcome Ou') </script>";
                              }
                             }

                    ?>



