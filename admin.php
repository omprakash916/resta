<?php

$con = mysqli_connect("localhost","root","","resta");

if(!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>adminpage</title>
</head>
<body>

<h2>Booking Details</h2>

<table border="2">
  <tr>
    <td>No of person</td>
    <td>Date</td>
    <td>Time</td>
    <td>Table</td>
    <td>Email</td>
    <td>Delete</td>
  </tr>

<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($con,"select * from booking"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['numb']; ?></td>
    <td><?php echo $data['dt']; ?></td>
    <td><?php echo $data['tm']; ?></td>
    <td><?php echo $data['tb']; ?></td>
    <td><?php echo $data['email']; ?></td>    
    <td><a href="delete.php?tb=<?php echo $data['tb']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
<br>
<br>
<br>
<br>
<br>
 <button><a href="./adminlogout.php">Logout</a></button>
</body>
</html>