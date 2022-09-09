<?php
$msg=$_POST['message'];
$date=date("Y/m/d");
$time=date("h:i:sa");
session_start();
$_SESSION['message']= $msg;
$email=	$_SESSION['email'];
$password=$_SESSION['password'];
$conn= new MySQLi('localhost','root','','mposes');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    $stmt=$conn->prepare("select * from registration where username=? AND password=? ");
	$stmt->bind_param("ss",$email,$password);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		
		$sql = "SELECT * FROM registration where username='$email' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<center> <h1>Welcome</h1>";
      $u_id=$row["u_id"];
  }
}} else {
  echo "0 results";
}
       $sql = "INSERT INTO message  (message, date, time,u_id)
VALUES ('$msg', '$date', '$time','$u_id')";

if ($conn->query($sql) === TRUE) {
    $sent="Message sent";
  $_SESSION['sent']=$sent;
  header("location:userAskH.php");

  echo "New record created successfully";
} else {
 
    $message1="not sent";
    session_start();
    $_SESSION['sent']= $_SESSION['password'];
    header("location:userAskH.php");
}

$conn->close();
}







?>