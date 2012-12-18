<?php

class gallery implements IController
{
    const VIEWS_FOLDER = '../views/gallery/';
    const MASTER_LAYOUT = '../views/';

    public function index()
    {
        $view = new View();
        $content = new View();

        $fc = FrontController::getInstance();
        $conf = Conf::getInstance();

        $content->gallery_folder = trim($conf->gallery['gallery_folder']);
        $model = new GalleryDAL(trim($conf->gallery['gallery_folder']));
        $content->images = $model->getImages();

        $view->title = trim($conf->main['site_title']);
        $view->content = $content->render(self::VIEWS_FOLDER . 'index.php');
        $result = $view->render(self::MASTER_LAYOUT . 'layout.php');

        $fc->setBody($result);
    }
}