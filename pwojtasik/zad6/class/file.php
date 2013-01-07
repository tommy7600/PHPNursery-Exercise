<?php

class File
{
    private function isFile( $file )
    {
        if( is_file($file) )
            return TRUE;
        else
            return FALSE;
    }
    
    public function getFiles( $path )
    {
        $dir = scandir($path);
        $files = array();
        
        foreach( $dir as $file )
        {
            $conc = $path.$file;
            if( $this->isFile( $conc) )
                $files[$file] = $conc;
        }
        
        return $files;
    }
}