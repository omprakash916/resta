<?php
session_start();
include("config.php");
include("function.php");
$user_data = check_login($con);

//if($_SERVER['REQUEST_METHOD'] == "POST")
// {
//     $number =$_POST["number"] 
//     $date =$_POST["date"]
//     $time =$_POST["time"]
//     $tablebooking =$_POST["table booking"]
//     if( !empty($number) && !empty($date) && !empty($time)
//     !empty($tablebooking))
// }
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $number =$_POST['number'];
    $date = $_POST['date'];
    $time =$_POST['time'];
    $table =$_POST['table'];



    if(!empty($number) && !empty($date) && !empty($time) && !empty($table) && !empty($_SESSION['email']))
    {   
    
        //  echo "<script>console.log('$number,$date,$time,$table')</script>";
        //   $query = "INSERT INTO signup ( email, pas1, pas2) values( 'addshgfj', 'fhh', 'fhh')";
          //mysqli_query($con, $query);
        // $query = "INSERT INTO booking (numb,dt,tm,tb) values('$number','$date','$time','$table')";
        // $qrun=mysqli_query($con, $query);
        // echo "<script>console.log('$res')</script>";

        $query = "SELECT * FROM booking WHERE tb = '$table' limit 1";
        $result = mysqli_query($con, $query); 
        echo "<script>console.log('$_SESSION[email]')</script>"; 
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
              echo "<script>alert('Table already booked... select another table!')</script>";
                
            }else{
                $query = "INSERT INTO booking (numb,dt,tm,tb,email) values('$number','$date','$time','$table','$_SESSION[email]')";
                $qrun=mysqli_query($con, $query);
                //echo "<script>console.log('$result')</script>";

                echo "<script>alert('Table booked... ')</script>";
            }   
        }
        
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form1" id="form1" action="" method="post"> 
        <label for="number">No of Person :</label>
        <input type="number" name="number" required>
        <br><br>
        <label for="date">DATE :</label>
        <input type="date" class="form-control" value="" name="date" required />
        </select>
        <br><br>
        <label for="time">TIME :</label>
        <input type="time" vlaue="" name="time" required>
        </select>
        <br><br>
        FIND YOUR TABLE :
        <select name="table" id="table" required>TABLE
        <option value="">SELECT YOUR TABLE</option>
        <option value="1">table 1</option>
        <option value="2">table 2</option>
        <option value="3">table 3</option>
        <option value="4">table 4</option>
        <option value="5">table 5</option>
        <option value="6">table 6</option>
        <option value="7">table 7</option>
        <option value="8">table 8</option>
        </select> 
        <br><br>
        <input type="submit" value="Submit" name="save">
    </form><br>
    <button><a href="logout.php">logout</a></button>
</body>
</html>