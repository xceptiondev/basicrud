<?php 
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Reset Password Page</title>
</head>
<body>
<?php

if (isset($_POST['username'])){

$username = stripslashes($_REQUEST['username']);  
$password = stripslashes($_REQUEST['password']);
 
$query = mysqli_query($con, " SELECT * FROM users  WHERE username = '$username' ");
$rowno = mysqli_fetch_assoc($query);

if($username == $username) {
    
$result = mysqli_query($con, " UPDATE gradlist set password = '$password' where username = '$username' ");
    ?>
  
<?php


    exit;
}
  else 
  {
    ?>
  
  <script type="text/javascript">
    alert("Try again");
  </script>

<?php
  }
}
mysqli_close($con);

?>
<h1>Reset Password Page</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="password" name="password" placeholder="Enter new password" required /><br>
<input name="submit" type="submit" value="Reset" />
</form>

    </div>
  </form>
</body>
</html>

