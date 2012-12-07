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
        $activePage = (isset($this->request->get()['post']))? $this->request->Get()['page'] : 1;
        $view->SetVariable('activePage', $activePage);
        $filesCount = Common_FileManager::GetDirectoryFilesCount(Config_Gallery::IMAGESOURCE,'jpeg');
        $pagination = new Model_BaseView('Pagination.php');
        $pagination->SetVariable('active', $activePage);
        $pagination->SetVariable('elementByPage', Config_Gallery::IMAGEBYPAGE);
        $pagination->SetVariable('elementsCount', $filesCount);
        $pagination->SetVariable('link', '/Gallery');
        $pagination->SetVariable('maxPageVisible', Config_Gallery::PAGEVISIBLE);
        
        $view->SetVariable('paggination', $pagination->Render());
        $this->content = $view->Render();
        parent::action_index();
    }
}

?>