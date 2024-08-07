<?php
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$conn = new mysqli('localhost','root','','fullstack');
if ($conn->connect_error) { 
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into jaimin(email,password,confirm_password) values(?,?,?)");
   $stmt->bind_param("sss", $email, $password,$confirm_password);
   $stmt->execute();
   echo"registration Successfully";
   echo '<script> window.location.href="signin.html";</script>';
   exit();
   $stmt->close();
   $conn->close();

} 

?>