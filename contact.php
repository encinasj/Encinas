<?php
    $message_sent = false;
    if(isset($_POST['name']) && $_POST['email'] && $_POST['message']){
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $to = "encinasj.angel@gmail.com";
            $body = "";

            $body .= "from: ".$name."\r\n";
            $body .= "email: ".$email."\r\n";
            $body .= "message".$message."\r\n";

            $message_sent=true;
        }
    }

?>