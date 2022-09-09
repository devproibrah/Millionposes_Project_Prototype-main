<?php  
      
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];
$email=$_POST['email'];
$tel=$_POST['telephone'];
$username=$_POST['uname'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$message1="new account created, Sign in now";
 
session_start();
$_SESSION['flogin']= $message1;
$conn= new MySQLi('localhost','root','','mposes');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
       $sql = "INSERT INTO registration (fname, lname, gender,nationalit   \y,email,telephone,username,password,cpassword)
VALUES ('$fname', '$lname', '$gender','$nationality','$email','$tel','$username','$password','$cpassword')";

if ($conn->query($sql) === TRUE) {
  session_start();
  $_SESSION['flogin']= $message1;
  header("location:loginH.php");

  echo "New record created successfully";
} else {
 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
      
?>   