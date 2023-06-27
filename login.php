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
  <?php  session_start();?>
</head>
<body class="bg-danger" >
    <?php require 'Nav2.php';?>

</div>
  </div>
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
            <button type="submit" class="btn btn-primary btn-block" name="signUp">Sign in</button>
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
                               $Login=$db->prepare("SELECT * FROM admin WHERE Email=:Email AND password=:password");
                              $Login->bindparam("Email",$_POST['email']);
                            $Login->bindparam("password",$_POST['password']);
                             $Login->execute();
                                 if ($Login->rowcount()==1) {
                                   $user=$Login->fetchObject();
                                   if($user->ACTIVED==="0"){
                                        
                                         $_SESSION['admin']=$user;
                                          echo "<script> alert('succesful')</script>";
                                        //  header("location:http://localhost/EAE/A-Dashboard.php"); 
          
                                   echo "<script> window.open('http://localhost/EAE/A-Dashboard.php','_self')</script>";

       }
          }

                               
                              
                             }

                    ?>



