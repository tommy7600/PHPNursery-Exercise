<?php
/**
 * User: Kamil
 * Date: 05.01.13
 * Time: 19:07
 */

class Controller_Contact extends Controller
{
    public function action_index()
    {
        $post = $this->request->post;
        $this->view->content->messages = array();
        if(isset($post) && !empty($post))
        {
            if(CheckFields($post))
            {
                try
                {
                    $message = $this->generateMessage($post);

                    $transport = $this->generateTransportMailer();

                    $mailer = Swift_Mailer::newInstance($transport);

                    $mailer->send($message);

                    $this->view->content->messages["mailerOK"] = "Wysłano wiadomość";
                }
                catch(Swift_TransportException $e)
                {
                    $this->view->content->messages["mailerERROR"] = "Nie udało się wysłać maila";
                }
            }
        }
    }

    protected function CheckFields($post)
    {
        $errorCount = 0;
        if(!isset($post["email"]))
        {
            $this->view->content->messages["email"] = "Podaj Email";
            $errorCount++;
        }
        if(!isset($post["topic"]))
        {
            $this->view->content->messages["topic"] = "Podaj Temat";
            $errorCount++;
        }
        if(!isset($post["note"]))
        {
            $this->view->content->messages["note"] = "Podaj Treść";
            $errorCount++;
        }
        return $errorCount>0 ? FALSE : TRUE;
    }

    protected function generateTransportMailer()
    {
        return Swift_SmtpTransport::newInstance(SMTP_HOST, SMTP_PORT, SMTP_SSL)
            ->setUsername(EMAIL)
            ->setPassword(EMAIL_PASS);
    }

    protected function generateMessage($post)
    {
        return Swift_Message::newInstance()
            ->setSubject($post["topic"])
            ->setFrom($post["email"])
            ->setCc($post["email"])
            ->setTo(EMAIL)
            ->setBody($this->request->post['note']);
    }
}
