<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $from = "raramkumar001@gmail.com";
    $subject = "New Order Received";

    $body = "Sender Name: $name.\n".
                    "Sender Email: $email.\n".
                    "Message: $msg.\n";

    $to = "programmerjeetkumar@gmail.com";

    $headers = "From: $from \r\n";

    $headers .= "Reply-to: $email \r\n";

    mail($to, $subject, $body, $headers);
    
    header("Location: contact.html");