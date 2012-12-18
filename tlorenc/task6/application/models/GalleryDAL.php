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

        if ($dir = opendir($this->images_folder)) {
            while ($file = readdir($dir)) {
                if ($file > 1 && pathinfo($file)['extension'] == 'jpg')
                    array_push($images, $file);
            }
        }
        return $images;
    }
}