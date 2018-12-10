<!DOCTYPE html>

<html>
<head>
<style>

table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
 <h1 align="center">personal deatils</h1> 
 
<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Name = $_POST['Name'];
$dept= $_POST['dept'];
$Gender= $_POST['Gender'];
$location = $_POST['location'];
$Email = $_POST['Email'];
$Collegeid= $_POST['Collegeid'];
$MobileNo= $_POST['MobileNo'];
$Area= $_POST['Area'];
echo $Name;echo '<br>';
echo $dept;echo '<br>';
echo $Gender;echo '<br>';
echo $location;echo '<br>';
echo $MobileNo;echo '<br>';

$sql = "INSERT INTO table3 (Name,dept,Gender,location,Email,Collegeid,MobileNo,Area  ) VALUES ('$Name','$dept','$Gender ','$location','$Email','$Collegeid','$MobileNo','$Area ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql1 = "select Name,dept,Gender,location,Email,Collegeid,MobileNo,Area  from  table3";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>dept</th><th>Gender</th><th>location</th><th>Email</th><th>Collegeid</th><th>MobileNo</th><th>Area</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["dept"]." </td><td>".$row["Gender"]."</td><td>".$row["location"]."</td><td>".$row["Email"]."</td><td>".$row["Collegeid"]."</td><td>".$row["Mobileno"]."</td><td>".$row["Area"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 

</body>

</html>
