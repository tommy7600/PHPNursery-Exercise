<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AboutUs
 *
 * @author tbula
 */
class Controller_AboutUs extends Controller_MasterController
{
    public function __construct(Http_Request $request)
    {
        parent::__construct($request, 'AboutUs');
    }
    
    public function action_index()
    {
        $view = new Model_BaseView('AboutUs.php');
        $this->content = $view->Render();
        parent::action_index();
    }
}

?>
