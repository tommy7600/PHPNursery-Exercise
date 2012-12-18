<?php

class SliderDAL
{
    private $slider_folder;

    public function __construct($path)
    {
        $this->slider_folder = $path;
    }

    public function getImages()
    {
        $files = array();

        if ($dir = opendir($this->slider_folder)) {
            while ($file = readdir($dir)) {

                $ex = pathinfo($file);

                if ($ex['extension'] == 'jpg') {
                    array_push($files, $file);
                }
            }
        }
        return $files;
    }
}