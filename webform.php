<?php

if (isset($_POST['submit'])) {

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    

    $mailTo = 'lukaszkepa2003@o2.pl'

    mail($mailTo, $subject, $message, $userEmail);  
    header("Location: webform.php?mailsend");
    
}



?>