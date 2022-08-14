<?php
$con=new mysqli("localhost","root","","resta");
//server name,user name,password,database name

if($con->connect_error)
{
    echo $con->connect_error;
    die("<script>alert('database connection failed)");
}
?>