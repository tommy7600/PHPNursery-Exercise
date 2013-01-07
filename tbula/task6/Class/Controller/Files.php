<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Files
 *
 * @author tbula
 */
class Controller_Files extends Controller_MasterController
{
    public function __construct(Http_Request $request)
    {
        parent::__construct($request, 'Files');
    }
    
    public function action_index()
    {
        $view = new Model_BaseView('Files.php');
        $this->content = $view->Render();
        parent::action_index();
    }
}

?>
