<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
<h1>Dashboard</h1>
<?php
$username = $_SESSION["username"];
echo "Welcome " .$username; ?><br><?php
$query = "SELECT * From users where username = '$username'";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

echo "Your Course is " .$row ['course']


?>

<h3>Select Course</h3>
	<input type="radio" name="course" value="PHP">PHP<br>
	<input type="radio" name="course" value="PYTHON">PYTHON<br>
	<input type="radio" name="course" value="JAVA">JAVA<br>
	<input name="submit" type="submit" value="Submit" />
	</form>

<p><a href="index.php">Home</a>
<a href="logout.php">Logout</a></p>
</div>
</body>
</html>