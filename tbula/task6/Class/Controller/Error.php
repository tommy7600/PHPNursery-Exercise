<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error
 *
 * @author tbula
 */
class Controller_Error extends Controller_BaseController
{
    public function __construct(Http_Request $request = null)
    {
        parent::__construct($request);
    }
    
    public function action_index()
    {
        $view = new Model_BaseView('PageNotFound.php');
        $this->content = $view->Render();
        $this->response->SetHeader('HTTP/1.0 404 Not Found');
        $this->response->body($view->render());
    }
}

?>
