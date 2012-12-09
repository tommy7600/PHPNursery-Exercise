<?php

class about implements IController
{
    const VIEWS_FOLDER = '../views/about/';

    public function index()
    {
        $view = new View();
        $fc = FrontController::getInstance();

        $result = $view->render(self::VIEWS_FOLDER . 'index.php');

        $fc->setBody($result);
    }
}
