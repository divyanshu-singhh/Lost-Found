
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
  <link rel="stylesheet" href="assets/css/Article-List.css">
  <link rel="stylesheet" href="assets/css/Footer-Dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="assets/css/Loading-Page-Animation-Style.css">
  <link rel="stylesheet" href="assets/css/Logo.css">
  <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
  <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/Team-Clean.css">
  <link rel="stylesheet" href="assets/css/Testimonials.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Lost-Found</title>
</head>
<body style="/*background-color:#CCD1D1;*/">
  <div class="d-inline float-none">
      <nav class="navbar navbar-light navbar-expand-md">
          <div class="container-fluid"><a class="navbar-brand" href="#" id="brand-logo"> </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse"
                  id="navcol-1">
                  <ul class="nav navbar-nav ml-auto"></ul>
              </div>
          </div>
      </nav>
      <nav class="navbar navbar-dark navbar-expand bg-dark navigation-clean-button" data-bs-hover-animate="pulse" style="border-radius:42px;/*width:993px;*/height:66px;">
          <div class="container"><a class="navbar-brand text-dark bg-light" href="#" data-bs-hover-animate="flash" style="border-radius:16px;">Lost or found</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
              <div
                  class="collapse navbar-collapse" data-bs-hover-animate="pulse" id="navcol-1">
                  <ul class="nav navbar-nav justify-content-center align-self-center m-auto">
                      <li class="nav-item" role="presentation"><a class="nav-link active" href="lost details.html" target="blank" style="border-radius:5px;">Lost something</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link active" href="found details.php" target="_blank" style="border-radius:20px;">Found something</a></li>


                      </li>
                  </ul><span class="navbar-text actions"> <a href="login.php" class="btn btn-light action-button">Login</a></span></div>
              </div>
       </nav>
  </div>
  <div class="container">
    <div class="d-flex justify-content-center">
      <form method="post">
      <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Name" name="uname" required>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
        </div>
        <div class="form-group"> 
            <label for="MobileNO">Mobile No</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Mobie No" name="mobilenumber" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
        </div>  
        </form>
    </div>
  </div>
</body>
</html>
<?php
    if(isset($_POST['signup'])){
        include('dbcon.php');
        $username=$_POST['uname'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $mobilenumber=$_POST['mobilenumber'];
        $qry="INSERT INTO `info`(`uname`, `Email`, `MobileNumber`, `password`) VALUES ('$username','$email','$mobilenumber','$password')";
        $run=mysqli_query($con,$qry);
        if($run==true){
            ?>
            <script>
                alert('Sign up Succesfully')
            </script>
            <?php
        }
    }
?>