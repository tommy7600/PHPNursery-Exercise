<?php

class Image
{
    private function isImage( $file )
    {
        if ( is_file($file) )
        { 
            $image = getimagesize($file);
             if( in_array($image[2], array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_BMP, IMAGETYPE_PNG)) )
                 return true;
             else
                 return false;
        }
        else
        {
            return false;
        }
    }
    
    public function getImages( $path )
    {
        $dir = scandir($path);
        $files = array();
        
        foreach( $dir as $file )
        {
            $conc = $path.$file;
            if( $this->isImage( $conc) )
                $files[] = $conc;
        }
        return $files;
    }
}