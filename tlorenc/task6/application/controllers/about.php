<?php

class about implements IController
{
    const VIEWS_FOLDER = '../views/about/';
    const MASTER_LAYOUT = '../views/';

    public function index()
    {
        $view = new View();
        $content = new View();

        $fc = FrontController::getInstance();

        $conf = Conf::getInstance();
        $view->title = trim($conf->main['site_title']);
        $view->content = $content->render(self::VIEWS_FOLDER . 'index.php');
        $result = $view->render(self::MASTER_LAYOUT . 'layout.php');

        $fc->setBody($result);
    }
}