<?php
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
</head>
<body>

<?php

if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='$password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Incorrect Username or password</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<h1>Welcome, Login here</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
<p>Forgot Password? <a href='resetpassword.php'>Reset Here</a></p>
</div>
<?php } ?>
</body>
</html>