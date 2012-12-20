<?php

class GalleryDAL
{
    private $images_folder;

    public function __construct($path)
    {
        $this->images_folder = $path;
    }

    public function getImages()
    {
        $images = array();
        $image = new ImgResizer();
        $conf = Conf::getInstance();
        $thumb_w = trim($conf->gallery['thumbs_w']);
        $thumb_h = trim($conf->gallery['thumbs_h']);

        if ($dir = opendir($this->images_folder)) {
            while ($file = readdir($dir)) {
                if ($file > 1 && pathinfo($file)['extension'] == 'jpg') {
                    if (!file_exists($this->images_folder . '/thumbs/' . $file)) {
                        $image->load($this->images_folder . '/' . $file);
                        $image->resize($thumb_w, $thumb_h);
                        $image->save($this->images_folder . '/thumbs/' . $file);
                    }
                    array_push($images, $file);
                }
            }
            unset($image);
            return $images;
        }
    }
}