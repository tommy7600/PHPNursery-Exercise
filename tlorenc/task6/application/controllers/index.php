<?php

class Index implements IController
{
    const VIEWS_FOLDER = '../views/index/';

    public function index()
    {
        $view = new View();
        $carousel = new Carousel();
        $fc = FrontController::getInstance();

        $view->slider = $carousel->getSlider();

//		$params = $fc->getParams();
//
//		foreach ($params as $name=>$value) {
//			$view->$name = $value;
//	}

        $result = $view->render(self::VIEWS_FOLDER . 'index.php');

        $fc->setBody($result);
    }
}
