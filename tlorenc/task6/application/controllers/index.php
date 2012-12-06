<?php
class index implements IController
{
    public function index()
    {
        $view = new View();
        $view->name = "Tomek";
        $result = $view->render('../views/index.php');
        $fc = FrontController::getInstance();
        $fc->setBody($result);
    }

    public function index2()
    {
        $view = new View();
        $view->name = "Tomek2";
        $result = $view->render('../views/index.php');
        $fc = FrontController::getInstance();
        $fc->setBody($result);
    }

    public function bootstrap()
    {
        $view = new View();
        $view->title = "Title TEST";
        $view->content = "<h2>Welcome to this test site</h2>";
        $result = $view->render('../views/bootstrap.php');
        $fc = FrontController::getInstance();
        $fc->setBody($result);
    }
}