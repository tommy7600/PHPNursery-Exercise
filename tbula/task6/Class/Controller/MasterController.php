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
    private $pages;

    public function __construct(Http_Request $request, $pageName)
    {
        parent::__construct($request);
        $this->pages = Model_Factory::GetViews();
        $this->SetActivePage($pageName);
    }

    public function action_index()
    {
        $view = new Model_BaseView('Master.php');
        $view->SetVariable('page', $this->pages);
        $view->SetVariable('content', $this->content);
        $this->response->body($view->render());
    }

    private function SetActivePage($pageName)
    {
        foreach ($this->pages as $key => $value)
        {
            $this->pages[$key] = ($key == $pageName ? 1 : 0);
        }
    }
}

?>
