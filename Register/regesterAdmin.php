 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>log in - Modern Academy</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    </head>


    <body>

        <!-- Section Form Sign up & Log in -->
        <section>
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form method="POST">
                        <h1>Create Account</h1>
                        
                        <input id="name"     type="text" name="name" />
                         <input id="name"     type="file" name="file" />
                
                        <input id="email"    type="email" name="email" placeholder="Email" required />
                        <input id="password" type="password" name="password" placeholder="Password" required />
                    

                        <button type="submit" name="signUp">Sign Up</button>
                    </form>
                    <?php 
                               require '../DB.php';
                               if (isset($_POST['signUp'])) {
                                echo "string";
                             //              $file=$_FILES['file']['name'];
     
                             //              $filetmp=$_FILES['file']['tmp_name'];
                               
                             //   $InsertAdmin=$db->prepare("INSERT INTO admin(name,Email,Image,password) VALUES (:name,:Email,:Image,:password)");
                             //   $InsertAdmin->bindparam("name",$_POST['name']);
                             //  $InsertAdmin->bindparam("email",$_POST['email']);
                             //  $InsertAdmin->bindparam("Image",$file);
                             //  $InsertAdmin->bindparam("password",$_POST['password']);
                             //  if ($InsertAdmin->execute()) {
                             //        echo "<script>alert('Welcome Our Site ^_^') </script>";
                             //  echo "<script> window.open('http://localhost/A-Dashboard/A-Dashboard.php','_self')</script>";
                             //   move_uploaded_file($filetmp, "../images/$file");
                             //  }
                             //  else{
                             //    echo "string";
                             //  }
                             }

                    ?>
                </div>
                <div class="form-container LOG-IN-container">
                    <form action="#">
                        <h1>LOG IN</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                        <span>or use your account</span>
                        <input id="email" type="email" name="email" placeholder="Email" required />
                        <input id="password" type="password" name="password" placeholder="Password" required />
                        <a href="#">Forgot your password?</a>
                        <button>LOG IN</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost" id="login">LOG IN</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Hello, Friend!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer>
                <p>
                    Created with by My Team <i class="fa fa-heart"></i>
                </p>
            </footer>
            
            

        </section>

        


        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>