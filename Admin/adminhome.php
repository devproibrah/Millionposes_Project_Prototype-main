<?php
$conn= new MySQLi('localhost','root','','mposes');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
   
		
		$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["u_id"]."   ".$row["fname"]."   ".$row["fname"]."   ".$row["gender"]."   ".$row["nationality"]."   ".$row["email"]."   ".$row["telephone"]."   ".$row["password"]."   ".$row["cpassword"]."</center><br>";
	
  }
} }


?>


<?php
$conn= new MySQLi('localhost','root','','mposes');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
	$sql = "SELECT * FROM message JOIN registration on u_id = u_id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row["M_ID"]."   ".$row["message"]."   ".$row["date"]."</center><br>";
        
      }}}
?>