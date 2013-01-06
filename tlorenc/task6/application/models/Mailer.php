<?php

class Mailer
{
    public function sendMail($subject, $name, $email, $phone, $comments)
    {
        $emailTo = trim(Conf::getInstance()->mailer['cc_address']);
        $body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nSubject: $subject \n\nComments:\n $comments";
        $headers = 'From: Task 6 <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);
    }
}