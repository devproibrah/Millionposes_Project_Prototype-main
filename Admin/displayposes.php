<?php
$conn= new MySQLi('localhost','root','','mposes');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
   
		
		$sql = "SELECT * FROM message";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>

    <table border="1">
    <tr>
       <th>Message_ID</th>
       <th>Message</th>
       <th>Recieved date</th>
       <th>Recieved time</th>
       <th>Sender ID</th>
       <th>Email</th>
       <th colspan="2">Options</th>
    </tr>
 <?php // output data of each row
  while($row = $result->fetch_assoc()) {
       ?>
       <tr><td><?php echo $row["M_ID"]; ?></td>
           <td><?php echo $row["message"]; ?></td>
           <td><?php echo $row["date"]; ?></td>
           <td><?php echo $row["time"]; ?></td>
           <td><?php echo $row["u_id"]; ?></td>
           <td><a href="">View more</a></td>
           <td><a href="">Delete</a></td>
       </tr>
       <?php 
    
  
} }}


?>