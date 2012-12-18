<?php

class download implements IController
{
    const VIEWS_FOLDER = '../views/download/';
    const MASTER_LAYOUT = '../views/';

    public function index()
    {
        $view = new View();
        $content = new View();

        $fc = FrontController::getInstance();
        $conf = Conf::getInstance();

        $content->download_folder = trim($conf->download['download_folder']);
        $model = new DownloadDAL(trim($conf->download['download_folder']));
        $content->files = $model->getFiles();

        $view->title = trim($conf->main['site_title']);
        $view->content = $content->render(self::VIEWS_FOLDER . 'index.php');
        $result = $view->render(self::MASTER_LAYOUT . 'layout.php');

        $fc->setBody($result);
    }
}