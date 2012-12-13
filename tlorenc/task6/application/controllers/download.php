<?php

class download implements IController
{
    const VIEWS_FOLDER = '../views/download/';

    public function index()
    {
        $view = new View();
        $fc = FrontController::getInstance();

        $model = new DownloadModel();
        $view->files = $model->getFiles();

        $result = $view->render(self::VIEWS_FOLDER . 'index.php');

        $fc->setBody($result);
    }
}
