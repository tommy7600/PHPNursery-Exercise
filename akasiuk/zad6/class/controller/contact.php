<?php

class Controller_Contact extends Controller
{    
    protected $error = FALSE;
    
    public function action_index()
    {
        $this->view->content->sent = FALSE;
        
        $this->view->content->mail = '';
        $this->view->content->signature = '';
        $this->view->content->subject = '';
        $this->view->content->body = '';
        
        $this->view->content->mail_error = FALSE;
        $this->view->content->signature_error = FALSE;
        $this->view->content->subject_error = FALSE;
        $this->view->content->body_error = FALSE;
        
        if (isset($this->request->post['submit']))
        {                        
            $this->checkErrorsAndAssign('mail', 'Proszę podać swój adres e-mail');
            
            if (!$this->error && !filter_var($this->request->post['mail'], FILTER_VALIDATE_EMAIL))
            {
                $this->view->content->mail_error = 'Proszę podać poprawny adres e-mail';
                $this->error = TRUE;
            }
            
            $this->checkErrorsAndAssign('signature', 'Proszę podać swój podpis');
            $this->checkErrorsAndAssign('subject', 'Proszę podać temat wiadomości');
            $this->checkErrorsAndAssign('body', 'Proszę podać treść wiadomości');

            if (!$this->error)
            {
                $message = Swift_Message::newInstance()
                    ->setSubject($this->request->post['subject'])
                    ->setFrom(array($this->request->post['mail'] => $this->request->post['signature']))
                    ->setTo(EMAIL)
                    ->setBody($this->request->post['body']);
                
                $transport = Swift_SmtpTransport::newInstance(SMTP_HOST, SMTP_PORT, SMTP_SSL)
                    ->setUsername(EMAIL)
                    ->setPassword(EMAIL_PASS);
                
                $mailer = Swift_Mailer::newInstance($transport);
                
                $mailer->send($message);
                
                $this->view->content->sent = TRUE;
            }
        }
    }
    
    private function checkErrorsAndAssign($field, $errorMessage)
    {
        $errorVar = $field . '_error';

        if (!(isset($this->request->post[$field]) && strlen($this->request->post[$field]) > 0))
        {
            $this->view->content->$errorVar = $errorMessage;
            $this->error = TRUE;
        }
        else
        {
            $this->view->content->$field = $this->request->post[$field];
        }
    }
}