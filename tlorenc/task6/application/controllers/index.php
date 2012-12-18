<?php

class index implements IController
{
    const VIEWS_FOLDER = '../views/index/';
    const MASTER_LAYOUT = '../views/';

    public function index()
    {
        $view = new View();
        $content = new View();

        $conf = Conf::getInstance();
        $carousel = new SliderDAL(trim($conf->slider['slider_folder']));
        $fc = FrontController::getInstance();

        $content->files = $carousel->getImages();
        $content->dir = trim($conf->slider['slider_folder']);

        $conf = Conf::getInstance();
        $view->title = trim($conf->main['site_title']);
        $view->content = $content->render(self::VIEWS_FOLDER . 'index.php');
        $result = $view->render(self::MASTER_LAYOUT . 'layout.php');

        $fc->setBody($result);
    }
}
//		$params = $fc->getParams();
//
//		foreach ($params as $name=>$value) {
//			$view->$name = $value;
//	}
