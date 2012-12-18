<?php

class contact implements IController
{
    const VIEWS_FOLDER = '../views/contact/';
    const MASTER_LAYOUT = '../views/';

    public function index()
    {
        $view = new View();
        $content = new View();

        $fc = FrontController::getInstance();

        if (isset($_POST['submit'])) {

            //Check to make sure that the name field is not empty
            if (trim($_POST['contactname']) == '') {
                $hasError = true;
            } else {
                $content->name = trim($_POST['contactname']);
            }

            //Check to make sure that the phone field is not empty
            if (trim($_POST['phone']) == '') {
                $content->hasError = true;
            } else {
                $phone = trim($_POST['phone']);
            }

            //Check to make sure that the subject field is not empty
            if (trim($_POST['subject']) == '') {
                $content->hasError = true;
            } else {
                $subject = trim($_POST['subject']);
            }

            //Check to make sure sure that a valid email address is submitted
            if (trim($_POST['email']) == '') {
                $content->hasError = true;
            } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $content->hasError = true;
            } else {
                $email = trim($_POST['email']);
            }

            //Check to make sure comments were entered
            if (trim($_POST['message']) == '') {
                $content->hasError = true;
            } else {
                if (function_exists('stripslashes')) {
                    $comments = stripslashes(trim($_POST['message']));
                } else {
                    $comments = trim($_POST['message']);
                }
            }

            //If there is no error, send the email
            if (!isset($content->hasError)) {
                $mailer = new Mailer();
                $mailer->sendMail($subject, $view->name, $email, $phone, $comments);
                $content->emailSent = true;
            }
        }

        $conf = Conf::getInstance();
        $view->title = trim($conf->main['site_title']);
        $view->content = $content->render(self::VIEWS_FOLDER . 'index.php');
        $result = $view->render(self::MASTER_LAYOUT . 'layout.php');

        $fc->setBody($result);
    }

}