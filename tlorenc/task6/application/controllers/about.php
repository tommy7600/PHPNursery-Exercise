<?php

class About extends Controller implements IController
{
    const VIEWS_FOLDER = '../views/about/';

    public function index()
    {
        $content = new View();

        $fc = FrontController::getInstance();

        $result = $this->after($content->render(self::VIEWS_FOLDER . 'index.php'));

        $fc->setBody($result);
    }
}