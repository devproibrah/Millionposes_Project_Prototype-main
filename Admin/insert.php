<?php  
      
$fname=$_POST['pose'];
$lname=$_POST['category'];
$gender=$_POST['kind'];
$nationality=$_POST['describution'];
$date=date("Y/m/d");
$time=date("h:i:sa");

$conn= new MySQLi('localhost','root','','mposes');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
       $sql = "INSERT INTO podes_table (pose,category,kind,describution,date,time)
VALUES ('$fname', '$lname', '$gender','$nationality','$date','$time')";

if ($conn->query($sql) === TRUE) {

  header("location:insertposes.php");

  echo "New record created successfully";
} else {
 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
      
?>   