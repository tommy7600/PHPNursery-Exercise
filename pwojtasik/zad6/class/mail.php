<?php

class Mail
{
    public function send($subject, $from, $name, $description)
    {
        // Create the Transport
        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername(Config::get('config')['mail']['username'])
                    ->setPassword(Config::get('config')['mail']['password']);

        // Create the Mailer using your created Transport
        $mailer = Swift_Mailer::newInstance($transport);

        $message = Swift_Message::newInstance()

          // Give the message a subject
          ->setSubject($subject)

          // Set the From address with an associative array
          ->setFrom(array($from => $name))

          // Set the To addresses with an associative array
          ->setTo(array(Config::get('config')['mail']['username'] => 'Patryk'))

          // Give it a body
          ->setBody($description);

          return $mailer->send($message);
    }
}