  <?php

    if(isset($_POST['Firstname']))
    {
      $Username = $_POST['Username'];
      $Password = $_POST['Password'];

      include 'db.php';
    }
  ?>
  
  <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <title>Journal</title>
      </head>

      <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                  <div class="txt">
                   <h1 class="time">Time Journal</h1>
                  </div>

                  <div class="jn">
                   <span class="jonal">Welcome to your personal and secured Journal. Time Journal helps you connect to your
                    self and self realization.
                   </span>
                </div>
              </div>

              <div class="col-md-6">
                <form>
                  <div>
                   <div class="use">
                    <input type="text" class="text" name="username" id="username" placeholder="Username">
                   </div>
                    <div class="use">
                       <input type="password" class="pas" name="password" id="password" placeholder="password">
                    </div>
                   </div>
                  <div>
                    <button class="log">Log in</button>
                  </div>
                  <div class="forg">
                    <a class="for" href="/">Forgotten Password</a>
                  </div>
                  <p>
                    <hr>
                  </p>
                  
                  <div class="new">
                    <a class="create" href="reg.php">Create new account</a>
                  </div>
                </form>
              </div>
            </div>
            
        </div>


        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/bootstrap.min.js.map"></script>
      </body>
    </html>
