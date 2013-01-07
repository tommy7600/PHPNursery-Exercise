<?php

class Controller_Files extends Controller
{
    public function action_index()
    {
        $this->view->title          = 'Files';
        $this->view->content->files = (new File)->getFiles(Config::get('config')['dirs']['files']);
    }
}