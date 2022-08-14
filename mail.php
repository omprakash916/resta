
<?php
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "restaurantbarbeque63@gmail.com";
$subject = "Mail From BARBEQUEEN RESTAURANT";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From:omprakash.lsnsctit@gmail.com" . "\r\n" .
"CC:omprakash.lsnsctit@gmail.com ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
echo "<script>alert('Your message has been sent') </script>  ";



?>