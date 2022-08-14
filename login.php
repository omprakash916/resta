<?php

session_start();
include("config.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email =$_POST['email'];
    $pas1 =$_POST['pas1'];
    
    
    //  echo <<<MYSCRIPT

    // <script>console.log('$email,$pas1');</script>

    // MYSCRIPT;


    if(!empty($email) && !empty($pas1))
    {
        $query = "SELECT * FROM signup WHERE email = '$email' limit 1";
        $result = mysqli_query($con, $query); 
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['pas1']=== $pas1)
                {
                    $_SESSION['email'] = $user_data['email'];
                    header("Location: bookmytable.php");
                    die;
                }
            }
        }
        echo "<script>alert('mail id or password is wrong')</script>";

        }else{
        echo "please enter some valid information!";}

}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book my table</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <h1>Login </h1>
<form action="" method="post">
    <div class="imgcontainer">
    </div>

    <div class="container">
        <label for="uname"><b>Email_ID</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>PASSWORD</b></label>
        <input type="password" placeholder="Enter Password" name="pas1" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label><br><br>
        <ul><a href="signup.php">Sign Up</a></ul>
    </div>
    
</form>
</body>
</html>