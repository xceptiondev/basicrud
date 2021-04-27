<?php
//include auth.php file on all secure pages
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
<p>This is your Student Portal</p>

<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>