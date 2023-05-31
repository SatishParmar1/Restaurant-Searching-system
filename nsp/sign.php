
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Signup </title>
	<link rel="stylesheet" href="login/css/style.css">	
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
    // echo "Success connecting to the db";

    // Collect post variables
    $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  $mobile_number = $_POST['mobile_number'];
  $gender = $_POST['gender'];
  $sql = "INSERT INTO `login`.`signup` (`first_name`, `last_name`, `email`, `password`, `mobile_number`, `gender`) VALUES ('$first_name', '$last_name', '$email', '$password', '$mobile_number', '$gender');";
  //echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        echo "<h1>";
        echo "Sign-Up Successful";
        echo "</h1>";
        // Flag for successful insertion
        $insert = true;
    }
    else{
       // echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

	<!-- container div -->
	<div class="container">

		<!-- upper button section to select the login or signup form -->
               <div class="slider"></div>
		<div class="btn">
			<button class="login">RMSystem</button>
		</div>

		<!-- Form section that contains the signup form -->
                             <form  action="sign.php" method ="post">	
	       
                        <div class="form-section">
			<!--Signup for teacher -->
			
			        <div class="signup-box">
				<input type="text" class="name ele" name ="first_name" placeholder="First name">
				<input type="text" class="name ele" name="last_name" placeholder="Last name">	
				<input type="email" class="email ele" name="email" placeholder="john@gmail.com">	
				<input type="password" class="password ele" name="password" placeholder="password">
			       <input type="number" class="name ele" name="mobile_number" placeholder="Mobile No:">
                            <span>Gender: <input type="radio" name="gender" value="male"> Male
                               <input type="radio" name="gender" value="female"> Female 
                            <input type="radio" name="gender" value="other"> Other </span>
				<button class="clkbtn">Signup</button>
			        </div>
		
		          </div>
                              </form>
	</div>
	<script src="login/javascript/index.js"></script>
</body>


</html>
