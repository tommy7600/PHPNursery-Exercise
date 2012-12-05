<?php
class news implements IController
{
    public function index()
    {
        $view = new View();
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view->name = $params['name'];
        $result = $view->render('../views/index.php');
        $fc->setBody($result);
    }
}

