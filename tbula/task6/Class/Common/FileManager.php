<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileManager
 *
 * @author tbula
 */
class Common_FileManager
{
    public static function GetDirectoryFilesCount($directory, $extension = null)
    {
        $fileCount =0;
        if(glob(Config_Gallery::IMAGESOURCE.'*.'.$extension))
        {
            
            $fileCount = count(glob(Config_Gallery::IMAGESOURCE.'*.'.$extension));
        }
        
        return $fileCount;
    }
}

?>
