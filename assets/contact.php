<?php
    $to = "phyra27@gmail.com";
    $subject = "hello";

    $headers = array(
        "MIME-Version" => "1.0",
        "Content-Type" => "text/html; charset=UTF-8",
        "From" => "test@mail.com",
        "Reply-To" => "test@mail.com"
    );

    $message = file_get_contents("contact.html");

    $send = mail($to, $subject, $message, $headers);