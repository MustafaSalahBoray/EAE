<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
      <link rel="stylesheet" href="A-Send Task/css/bootstrap.min.css">
    <link rel="stylesheet" href=".A-Send Task/css/all.min.css">
    <link rel="stylesheet" href="A-Send Task/css/A-Send Task.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EAE</title>

</head>
<body class="bg-light">
   <aside class="px-3 pt-3 sidebar vh-100 flex-shrink-0">
            <div class="d-flex flex-column">
                <a href="../A-Send Task/A-Send Task.html"
                    class="text-decoration-none d-flex justify-content-center align-items-center">
                    
                     
                </a>

                <ul class="p-0  list-unstyled mt-3 d-inline flex-column">
                  

                    <li>
                        <a  href="../A-Dashboard/A-Dashboard.html" class="d-inline align-items-center  py-3  text-decoration-none here" type="button"
                            >
                            <i class="fa-solid fa-house-chimney list-icon fa-fw"></i>
                            <span class="list-text ">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a  href="../A-Send Task/A-Send Task.html" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
                            >
                            <i class="fa-solid fa-book-open-reader list-icon fa-fw fw-bold here "></i>
                            <span class="list-text fw-bold here">Tasks</span>
                        </a>
                    </li>
                    
                    <li>
                        <a  href="../A-profile/A-profile.html" class="d-inline align-items-center  py-3  text-decoration-none" type="button"
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

        
            <!-- End of navbar -->

            <!-- profile section -->

  
                            

  
        <form method="POST">
            
          <label for="manger" class="fw-bold">Mangers</label>
            <select id="manger" class="form-select" aria-label="Default select example" name="manger">
            <option value="all ">Select manger </option>
            <option value="Doctor">DR/Ahmed </option>
            <option value="Doctor">DR/mohammed </option>
            <option value="Doctor">DR/ali </option>
            <option value="Doctor">DR/raouf </option>
            <option value="officer">Mr/sami</option>
            <option value="officer">Mr/samer</option>
            <option value="officer">Mr/Emad</option>
        </select> 
        <div class="mb-3">
          
            <label for="subject" class="form-label subject fw-bold">Subject...</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="Subject" placeholder="name subject">
          </div>          
        <div class="mb-3">
            <label for="formFile" class="form-label fw-bold">Default file input</label>
            <input class="form-control" type="file" name="file" id="formFile">
          </div>

         
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Comment of tasks</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Comment"></textarea>
          </div>
        <input  class="align-items-end" type="submit" value="submit" name="submit">
        </form>
      </div> 

      <?php 
            require '../DB.php'; 
            if(isset($_POST['submit'])){
                $file=$_FILES['file']['name'];
                //$fileType=$_FILES['file']["type"];
                $filetmp=$_FILES['file']['tmp_name'];
        $Insert=$db->prepare("INSERT INTO task (manger,Subject,fileName,file,filetype,comment) VALUES(:manger,:Subject,:fileName,:comment)");
        $Insert->bindparam("manger",$_POST['manger']);
         $Insert->bindparam("Subject",$_POST['Subject']);
         $Insert->bindparam("fileName",$file); 
         //  $Insert->bindparam("file",$filetmp);
         //  $Insert->bindparam("filetype",$fileType);
             $Insert->bindparam("comment",$_POST['Comment']);
            if ($Insert->execute()) {
                 // move_uploaded_file($filetmp, "../fils/$file");
            }
            else{
                echo "string";
            }


   }

      ?>



    </div>
  </div>
    </div>



</body>
</html>
                            
   
          


