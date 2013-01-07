<?php

class Controller_Gallery extends Controller
{
    public function action_index()
    {
        $this->view->title          = 'Gallery';
        $this->view->content->files = (new Image)->getImages(Config::get('config')['dirs']['gallery']);
    }
}