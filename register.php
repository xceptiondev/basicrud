<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// Insert values into the database.
if (isset($_REQUEST['username'])){
        
 $username = stripslashes($_REQUEST['username']);
        
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $query = "INSERT into `users` (username, password, email)
 VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Successfully Registered</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Welcome to Registration Page</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" />
<p>Already registered? <a href='login.php'>Login Here</a></p>
</form>
</div>
<?php } ?>
</body>
</html>