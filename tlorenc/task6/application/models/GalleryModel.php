<?php

class GalleryModel
{
    public function getImages()
    {
        $GALLERY_FOLDER = 'upload/gallery';
        $content = '';
        if ($dir = opendir($GALLERY_FOLDER)) {
            while ($file = readdir($dir)) {
                if ($file > 1 && pathinfo($file)['extension'] == 'jpg')
                    $content .= '<a href="' . $GALLERY_FOLDER . '/' . $file . '" title="' . $file . '" rel="gallery"><img  style="height: 75px !important" width="75" src="' . $GALLERY_FOLDER . '/' . $file . '"></a>';
            }
        }
        return $content;
    }
}
