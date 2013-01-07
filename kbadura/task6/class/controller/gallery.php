<?php
/**
 * User: Kamil
 * Date: 05.01.13
 * Time: 19:07
 */
class Controller_Gallery extends Controller
{
    protected $path = "upload/gallery/";

    public function action_index()
    {
        $this->view->content->images = $this->getImagesPath();
    }

    protected function getImagesPath()
    {
        $paths = scandir($this->path);

        $imagesPaths = array();

        foreach ($paths as $file)
        {
            $imagePath = $this->path . $file;

            if (is_file($imagePath) && getimagesize($imagePath) !== FALSE)
            {
                $imagesPaths[] = $imagePath;
            }
        }

        return $imagesPaths;
    }
}
