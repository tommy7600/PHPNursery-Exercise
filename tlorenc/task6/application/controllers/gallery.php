<?php

class gallery extends Controller implements IController
{
    const VIEWS_FOLDER = '../views/gallery/';

    public function index()
    {
        $content = new View();

        $fc = FrontController::getInstance();
        $conf = Conf::getInstance();

        $content->gallery_folder = trim($conf->gallery['gallery_folder']);
        $content->images = $this->getImages();

        $result = $this->after($content->render(self::VIEWS_FOLDER . 'index.php'));

        $fc->setBody($result);
    }

    private function getImages()
    {
        $images = array();
        $image = new ImgResizer();
        $conf = Conf::getInstance();
        $images_folder = trim($conf->gallery['gallery_folder']);
        $thumb_w = trim($conf->gallery['thumbs_w']);
        $thumb_h = trim($conf->gallery['thumbs_h']);

        if ($dir = opendir($images_folder)) {
            while ($file = readdir($dir)) {
                if ($file > 1 && pathinfo($file)['extension'] == 'jpg') {
                    if (!file_exists($images_folder . '/thumbs/' . $file)) {
                        $image->load($images_folder . '/' . $file);
                        $image->resize($thumb_w, $thumb_h);
                        $image->save($images_folder . '/thumbs/' . $file);
                    }
                    array_push($images, $file);
                }
            }
            unset($image);
            return $images;
        }
    }
}