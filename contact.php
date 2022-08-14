
<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="./contact.css">
</head>
<body>
    <div class="contact">
        <a href="./index.php">HOME</a>
        <a href="./about.php"> ABOUT</a>
        <a href="./contact.php"> CONTACT</a>
    </div>
    <h2>Contact Us</h2>    
    <div class="container">
        <form action="mail.php" method='POST'>
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="name" placeholder="Your name..">
                </div>
            </div>  
            <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="text" id="email" placeholder="Email address" name="email" required>
            </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Queries</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="message" placeholder="Write here.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
<div class="three">
<h1>PHONE <br>04362-29655</h1>
<h1>EMAIL <br>barbequeentnj@gmail.com</h1>
<h1>ADDRESS <br>Near Meenakshi Hospital <br>Opp To New Bus Stand <br>Thanjavur - 05</h1>
<h1>Our Branches <br>Salem|Erode|Thanjavur|Hosur|Tirupur|Chennai</h1>
</div>

</body>
</html>