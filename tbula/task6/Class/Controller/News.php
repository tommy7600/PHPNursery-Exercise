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
        parent::__construct($request,'News');
    }
    
    public function action_index()
    {
        $view = new Model_BaseView('News.php');
        
        $bannerImage = array('/res/img/banner/Primus.jpg',
                            '/res/img/banner/dvd.jpg',
                            '/res/img/banner/nswr.jpg');
        $view->SetVariable('bannerImage', $bannerImage);
        $view->SetVariable('news1', 'jakies sobie wiadomosci1');
        $view->SetVariable('news2', 'jakies sobie wiadomosci2');
        $view->SetVariable('news3', 'jakies sobie wiadomosci3');
        
        $this->content = $view->render();
        parent::action_index();
    }
}

?>
