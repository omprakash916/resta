<?php
session_start();
if(isset($_SESSION['adminname']))
{
    unset($_SESSION['adminname']);
    session_destroy();
}

header("Location: validate.php");
die;