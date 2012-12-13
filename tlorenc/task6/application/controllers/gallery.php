<?php

class gallery implements IController
{
    const VIEWS_FOLDER = '../views/gallery/';

    public function index()
    {
        $view = new View();
        $fc = FrontController::getInstance();

        $model = new GalleryModel();
        $view->images = $model->getImages();

        $result = $view->render(self::VIEWS_FOLDER . 'index.php');

        $fc->setBody($result);
    }
}
