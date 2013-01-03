<?php

class Controller_Files extends Controller
{
    protected $path = "upload/files/";
    
    public function action_index()
    {
        $this->view->content->files = $this->getFiles();
    }
    
    protected function getFiles()
    {
        $paths = scandir($this->path);
        
        $files = array();
        
        foreach ($paths as $file)
        {
            $fullPath = $this->path . $file;
            
            if (is_file($fullPath))
            {
                $fileInfo = array($file, $fullPath, filesize($fullPath));
                $files[] = $fileInfo;
            }
        }
        
        return $files;
    }
}