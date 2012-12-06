<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author tbula
 */
class Controller_Contact extends Controller_MasterController
{
    public function __construct(Http_Request $request)
    {
        parent::__construct($request,'Contact');
    }
    
    public function action_index()
    {
        $view = new Model_BaseView('Contact.php');
        $this->content = $view->Render();
        parent::action_index();
    }
    
    public function action_sendEmail()
    {
        $email = new Model_Email();
        try
        {
            $view = new Model_BaseView('Contact.php');
            
            $email->SetAddress($this->request->Post()['address']);
            $email->SetContent($this->request->Post()['emailContent']);
            $email->SetSignature($this->request->Post()['signature']);
            $email->SetSubject($this->request->Post()['subject']);
            
            foreach ($this->request->Post() as $key => $value)
            {
                $view->SetVariable($key, $value);
            }
            
            if(Common_Email::SendEmail($email))
            {
                $view->SetVariable('message', 'Email send');
            }
            else
            {
                throw new Exception('Error during sending email');
            }
        }
        catch (Exception $ex)
        {
            $view->SetVariable('error', $ex->getMessage());
            foreach ($this->request->Post() as $key => $value)
            {
                $view->SetVariable($key, $value);
            }
        }
        
        $this->content = $view->Render();
        parent::action_index();
    }
}

?>
