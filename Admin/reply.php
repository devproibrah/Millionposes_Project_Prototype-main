<?php
$msg=$_POST['reply'];
$id=$_POST['u_id'];
$mid=$_POST['M_ID'];
$date=date("Y/m/d");
$time=date("h:i:sa");

$conn= new MySQLi('localhost','root','','mposes');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
       $sql = "INSERT INTO replys (reply, date, time,u_id,M_ID)
VALUES ('$msg', '$date', '$time','$id','$mid')";

if ($conn->query($sql) === TRUE) {
    $sent="Message sent";
    session_start();
  $_SESSION['sent']=$sent;
  
  header("location:adminreplyH.php");

  echo "New record created successfully";
} else {
 
    $message1="not sent";
    session_start();
    $_SESSION['sent']= $message1;
    header("location:adminreplyH.php");
}

$conn->close();
}







?>