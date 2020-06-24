<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $visitor_email = $_POST['email'];
    $message = $_POST['messgae'];

    $email_from = 'sangeetc97@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name. \n".
        "User Phone Number: $phone.\n".
        "User Email: $visitor_email.\n".
        "User Message: $message.\n";
    
    $to = "sangeetc97@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");
?>