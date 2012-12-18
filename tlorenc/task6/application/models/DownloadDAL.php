<?php

class DownloadDAL
{
    private $files_folder;

    public function __construct($path)
    {
        $this->files_folder = $path;
    }

    public function getFiles()
    {
        $files = array();

        if ($dir = opendir($this->files_folder)) {
            while ($file = readdir($dir)) {

                $ex = pathinfo($file);

                if ($ex['extension'] != '') {
                    array_push($files, $file);
                }
            }
        }
        return $files;
    }
}