<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_MasterController
 *
 * @author tbula
 */
class Controller_MasterController extends Controller_BaseController
{
    protected $content;
    
    public function __construct(Http_Request $request)
    {
        parent::__construct($request);
    }
    
    public function action_index()
    {
        $view = new View_BaseView('Master.php');

        $view->SetVariable('content', $this->content);
        $this->response->body($view->render());
    }
}

?>
