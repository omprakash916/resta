<?php

include "config.php"; // Using database connection file here

$tb = $_GET['tb']; // get id through query string

$del = mysqli_query($con,"delete from booking where tb = '$tb'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>