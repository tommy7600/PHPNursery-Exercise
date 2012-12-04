<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome
 *
 * @author tbula
 */

class Controller_News extends Controller_MasterController
{
    public function __construct(Http_Request $request)
    {
        parent::__construct($request);
    }
    
    public function action_index()
    {
        $view = new View_BaseView('News.php');
        $view->SetVariable('news1', 'jakies sobie wiadomosci1');
        $view->SetVariable('news2', 'jakies sobie wiadomosci2');
        $view->SetVariable('news3', 'jakies sobie wiadomosci3');
        $this->content = $view->render();
        parent::action_index();
    }
}

?>
