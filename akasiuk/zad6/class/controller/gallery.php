<?php

class Controller_Gallery extends Controller
{
    protected $path = "upload/gallery/";
    
    public function action_index()
    {
        $this->view->content->images = $this->getImages();
    }
    
    protected function getImages()
    {
        $paths = scandir($this->path);
        
        $images = array();
        
        foreach ($paths as $file)
        {
            $fullPath = $this->path . $file;
            
            if (is_file($fullPath) && getimagesize($fullPath) !== FALSE)
            {
                $images[] = $fullPath;
            }
        }
        
        return $images;
    }
}