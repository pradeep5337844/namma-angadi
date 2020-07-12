<?php
$name = filter_input(INPUT_POST, 'name');
$gender = filter_input(INPUT_POST, 'gender');
$phone = filter_input(INPUT_POST, 'phone');
$username = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($name)){
if (!empty($gender)){
if (!empty($phone)){
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (name,gender,phone,username, password)
values ('$name','$gender','$phone','$username','$password')";
if ($conn->query($sql)){
echo "registration successful";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
}
$conn->close();
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "emailid should not be empty";
die();
}
}
else{
echo "phone number should not be empty";
die();
}
}
else{
echo "Gender should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
?>