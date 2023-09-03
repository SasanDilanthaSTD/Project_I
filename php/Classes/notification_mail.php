<?php

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
//    $status ='';

    $to ='isurudvp@gmail.com';
    $mail_subject = 'Message from website';
    $email_body = "Message from Contact us page of the website: <br>";
//    $email_body = "<b>From:</b> {$fullname} <br>";
//    $email_body = "<b>Subject:</b> {$subject} <br>";
//    $email_body = "<b>Message</b><br>" . nl2br(strip_tags($message));

//    $header = "From: {$email}\r\nContent-Type: text/html;";

    $send_mail_result = mail($to,$mail_subject,$email_body);

    if($send_mail_result){
        echo "message sent";
//        $status ='<p  class="sucess">Message Sent Sucessfully.</p>';
    }else{
        echo "message not sent";
//        $status ='<p  class="error">Error: Message Was Not Send</p>';
    }
}

class notification_mail
{

}