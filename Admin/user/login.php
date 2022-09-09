<?php

$email=$_POST['email'];
$password=$_POST['password'];
$admin="admin@poses.com";
$ap="root";
if($email==$admin && $password==$ap){
	header("location:../home.php");

}else{

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
	
	  
    echo $row["fname"]."   ".$row["lname"]."</center><br>";
	session_start();
			$_SESSION['Fname']= $row["fname"];
			$_SESSION['Lname']= $row["lname"];
  }
} else {
  echo "0 results";
}
$conn->close();
		
	
			echo "<center><h1>Logged In successfully</h1></center>";
		
			header("location:user.php");
}
	else{
		$message1="incorect password";
		session_start();
		$_SESSION['flogin']= $message1;
		header("location:loginH.php");
	}

}
}

?>
