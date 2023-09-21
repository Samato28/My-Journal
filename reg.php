<?php

if(isset($_POST['Firstname']))
{
  $Firstname = $_POST['Firstname'];
  $Lastname = $_POST['Lastname'];
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];

  include 'db.php';
   
  $resultId = insert_query($connection ,"reg_page", ["Firstname"=>$Firstname,"Lastname"=>$Lastname, "Username"=>$Username, "Password"=>$Password]);
  
  if ($resultId > -1) {
    header("location: index.php");
  }
  else{
    echo "connection failed";
  }



}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/reg.css">
    <title>Registration page</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row reg">
            <div class="col-md-12">
                <form action="reg.php" method="post">
                    <div class="form-group" id="form">
                        <input type="text" class="form-control" id="Firstname" name='Firstname' placeholder="First-Name" required>
                      </div>

                      <div class="form-group">

                        <input type="text" class="form-control" id="Lastname" name='Lastname' placeholder="Last-Name" required>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" id="Username" name='Username' placeholder=" Username" required>
                      </div>

                      <div class="form-group">
                        <input type="password" class="form-control" id="Password" name='Password' placeholder="Password" required>
                      </div>

                      <div>
                        <button class="btn" name="signup">SIGNUP</button>
                      </div>

                      <div class="out">
                        <span>
                          Already have an account? <a class="log" href="http://localhost/my%20journal/  ">Login Now </a>
                        </span>
                      </div>
                    
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/reg.js"></script>
    <script src="js/bootstrap.min.js.map"></script>
  </body>
