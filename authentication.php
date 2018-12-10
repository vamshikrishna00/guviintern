
<!DOCTYPE html >
<html>

  
<?php  
 require('db_connect.php');

if (isset($_POST['USERNAME']) and isset($_POST['PASSWORD'])){
	
// Assigning POST values to variables.
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM table2 WHERE username='$USERNAME' and Password='$PASSWORD'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified') </script>";

echo "welcome to our website";
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>
<center>
<link rel="stylesheet" type="text/css" href="style2.css">
<h1>welcome to guvi</h1>

<form id="login-form" method="post" action="userpage.html" >
<input type='submit' name='Submit' value='Submit' />
</center>

</form>
</html>
