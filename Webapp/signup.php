<?php
$servername = "localhost";
$username = "id9049625_root";
$password = "12345";
$dbname = "id9049625_hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "connected";
}
if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['phone_num']) &&isset($_POST['password'])){
	
    $name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phones = $_POST['phone_num'];
	$allergy = $_POST['allergy'];
	$blood_group = $_POST['blood_group'];
	$date = $_POST['dob'];
	$sql = "INSERT INTO user_info (Name, Username, Password, Phone, Allergy, Blood_Group,DOB)
	VALUES ('$name', '$username', '$password','$phones','$allergy','$blood_group','$date')";
}
if ($name!="" && $username !="" && $password!= "" && $conn->query($sql) === TRUE) {
    echo "New record created successfully"."<br><br>";
	echo '<a href = "index.html"><input type = "button" value = "Login"></a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>