<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author tbula
 */
class Controller_Gallery extends Controller_MasterController
{
    public function __construct(Http_Request $request)
    {
        parent::__construct($request, 'Gallery');
    }
    
    public function action_index()
    {
        $view = new Model_BaseView('Gallery.php');
        $imageIndex = $this->request->Get()['page']-1;
        $view->SetVariable('imageIndex', $imageIndex);
        $view->SetVariable('imageCount', $this->FilesCount());
        $this->content = $view->Render();
        parent::action_index();
    }
}

?>
