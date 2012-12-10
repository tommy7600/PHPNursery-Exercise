<?php

class DownloadModel
{
    public function getFiles()
    {
        $GALLERY_FOLDER = 'upload/gallery';
        $content = '';
        if ($dir = opendir($GALLERY_FOLDER)) {
            while ($file = readdir($dir)) {
                if ($file > 1) {
                    switch(pathinfo($file)['extension'])
                    {
                        case "jpg":

                            $content .= '<a href="' . $GALLERY_FOLDER . '/' . $file . '" title="' . $file . '" rel="gallery"><img  style="height: 75px !important" width="75" src="' . $GALLERY_FOLDER . '/' . $file . '"></a>';

                            break;

                        case "exe":
                            break;
                    }
                }
            }
        }
        return $content;
    }
}
