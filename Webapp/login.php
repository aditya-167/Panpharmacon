<?php
$servername = "localhost";
$username = "id9049625_root";
$password = "12345";
$dbname = "id9049625_hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['name'])){
    $usernames = $_POST['name'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];	
}
$sql= "SELECT * FROM user_info WHERE Username = '$usernames' AND Password = '$password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
echo "<br>";
if(isset($check)){
include 'account.php';
}else{
echo 'No such record exist in the database'."<br><br>";
echo "login failed";
}
$conn->close();
?>