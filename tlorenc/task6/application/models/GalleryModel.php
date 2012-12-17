<?php

class GalleryModel
{
    public function getImages()
    {
        $images = array();
        $GALLERY_FOLDER = 'upload/gallery';
        if ($dir = opendir($GALLERY_FOLDER)) {
            while ($file = readdir($dir)) {
                if ($file > 1 && pathinfo($file)['extension'] == 'jpg')
                    array_push($images, $file);
            }
        }
        return $images;
    }
}
