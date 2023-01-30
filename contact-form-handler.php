<?php
    $visitor_email =  $_POST('email');
    $message = "I want to talk with you.";

    $email_subject = "Greetings";

    $email_body = "User Name: Abvwe. \n".
                    "User Email: $visitor_email. \n".
                        "User Message: $message.\n";

    $to = "17101233@usc.edu.ph";
    $headers = "From: ouanoearl@gmail.com \r\n";
    $headers .= "From: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    
?>