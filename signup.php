<?php
session_start();
include("config.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
      $email =$_POST['email'];
      $pas1 =$_POST['pas1'];
      $pas2 =$_POST['pas2'];
      if( !empty($email) && !empty($pas1) && !empty($pas2))
      {
        if($pas1 == $pas2){
          $query = "SELECT * FROM signup WHERE email= '$email' limit 1";
          $result = mysqli_query($con, $query);
          if(!$result->num_rows > 0){
        $query = "INSERT INTO signup ( email, pas1, pas2) values( '$email', '$pas1', '$pas2')";
          mysqli_query($con, $query);
         if($result)
         {
          echo "<script>alert('user registration sucess')</script>";
          header("Location: login.php");
             
             $email = ""; 
             $pas1 = "";
             $pas2 = "";
             
         }else{

          echo "<script>alert('user registration denied.. Try after 1 min')</script>";
          header("Location: login.php");
         }
        }else{
          echo "<script>alert('email already exists')</script>";
        }
         }else{
           echo "<script>alert('password is not matched')</script>";
         }
      } else{
        echo "please enter some valid information!";
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
    <link rel="stylesheet" href="./signup.css">
</head>
<body>
    <form action="" method="POST" style="border:1px solid #ccc">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
    
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
    
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pas1" required>
    
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="pas2" required>
    
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Sign Up</button><br><br>
                <ul><a href="login.php">Login</a></ul>
            </div>
        </div>
    </form>
</body>
</html>