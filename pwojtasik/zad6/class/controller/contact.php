<?php

class Controller_Contact extends Controller
{
    public function action_index()
    {
        $this->view->title = 'Contact';

        if(isset($_POST['email'], $_POST['signature'], $_POST['subject'], $_POST['description']))
        {
            if ((new Mail())->send($_POST['subject'], $_POST['email'], $_POST['signature'], $_POST['description']) > 0)
            {
                $this->view->messages = 'Mail sent!';
            }
        }
    }
}