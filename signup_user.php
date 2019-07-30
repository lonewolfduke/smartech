<html>
  
    <html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up User</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"> -->
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/Pe-icon-7-stroke.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
      
</head>

<?php
include("includes/stylelogin.php");
?>
    

<body class="text-center" id="body">
<link rel="stylesheet" href="style.css">

          </nav>
          

      <div class="container">    
    <form class="form-signup" action="" method="post">
  <!-- <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
  <h1 class="h3 mb-3 font-weight-normal">Sign Up User
  </h1>
  <?php
  include ("includes/config.php");
  if(isset($_POST['signup'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string ($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // $encrpt_password = md5($password);

    $sql = "INSERT INTO user_db (firstname, lastname, email, password)
    VALUES ( '$firstname', '$lastname', '$email', '$password')";
    $result= mysqli_query($conn, $sql);
    if ($result == TRUE) {
      echo "new record created";
    } else {
      echo "failed".mysqli_connect_error();
    }
  }
  ?>

  <label for="inputfirstname" class="sr-only">enter firstname</label>
  <input type="firstname" id="text" class="form-control" placeholder="Firstname" name="firstname" required autofocus>

  <label for="inputlastname" class="sr-only">enter lastname</label>
  <input type="lastname" id="text" class="form-control" placeholder="Lastname" name="lastname" required autofocus>

  <label for="create password" class="sr-only">create password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Create password" name="password" required>


<label for="input" class="sr-only">enter email</label>
  <input type="email" id="input email" class="form-control" placeholder="Enter email" name="email" required autofocus>




  <!-- <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div> -->
  <button class="btn btn-lg btn-primary btn-block" name="signup" type="submit">Sign Up</button>
</div>
  
</form>
</body>
</html>


         