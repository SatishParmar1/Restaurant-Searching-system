
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form </title>
  <link rel="stylesheet" href="login/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
<?php
$insert = false;
if(isset($_POST['email'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

 // Collect post variables

    $username = $_POST['email'];
    
    $password = $_POST['password'];
  
    $sql = "INSERT INTO `login`.`login1` (`username`,`password`) VALUES ('$username','$password');";

    if($con->query($sql) == true){
      
      // Flag for successful insertion
      $insert = true;
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }

  // Close the database connection
  $con->close();
}
?>


  <div class="container">
     <div class="wrapper">
       <header>Login Form</header>
          <form action ="one.php" method ="post">
              <div class="field email">
                 <div class="input-area">
                 <input type="email" name = "email" placeholder="Email Address">
                 <i class="icon fas fa-envelope"></i>
                 <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                 <div class="error error-txt">Email can't be blank</div>
             </div>
                 <div class="field password">
                    <div class="input-area">
                    <input type="password" name ="password" placeholder="Password">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                      <div class="error error-txt">Password can't be blank</div>
                </div>
                   <div class="pass-txt"><a href="sign.html">Forgot password?</a></div>
                   <input type="submit" value="login" >
        </form>
      <div class="sign-txt">Not a member? <a href="sign.php">Signup now</a></div>
</div>

</body>
</html>
