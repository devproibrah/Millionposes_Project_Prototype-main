<html>

<head>
    <title>
    users messages table
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="newscc.css">
    <link rel="stylesheet" href="sample.css">
</head>

<body>
    <table border="0">
        <tr class=" row1 ">
            <th colspan="2">
                <header>


                    <div style="float: left;">
                        <p style="background-color: blue; margin-left: 20px; ">
                            <a href="home.php"><button style="font-size: 24px;">HOME</button></p>
                    </div>
                    <div style="float: right;">
                        <p style="background-color: blue; margin-right: 20px; "> <a href="message.php"><button style="font-size: 24px;">BACK</button></a></p>
                    </div>

                </header>

            </th>

        </tr>
        <tr class=" row2 ">
            <th colspan="3">
                <h1 align="center" style="font-size: 100px;">Welcome </h1>
            </th>
        </tr>
        <tr class="row4" style="padding-right: 200px;">
            <td width="20%" height="50%" style="padding-bottom: 5px;">
                <div class="loginForm" style="float:left;">

                    <legend>users messages table</legend><?php
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
      
    </tr>
 <?php // output data of each row
  while($row = $result->fetch_assoc()) {
       ?>
       <tr><td><?php echo $row["M_ID"]; ?></td>
           <td><?php echo $row["message"]; ?></td>
           <td><?php echo $row["date"]; ?></td>
           <td><?php echo $row["time"]; ?></td>
           <td><?php echo $row["u_id"]; ?></td>
         
       </tr>
       <?php 
    
  
} }}


?>

?>
    </td>
        </tr>
       
    </table>

</body>

</html>