<?php

class download extends Controller implements IController
{
    const VIEWS_FOLDER = '../views/download/';

    public function index()
    {
        $content = new View();

        $fc = FrontController::getInstance();

        $content->download_folder = trim(Conf::getInstance()->download['download_folder']);
        $content->files = $this->getFiles();

        $result = $this->after($content->render(self::VIEWS_FOLDER . 'index.php'));

        $fc->setBody($result);
    }

    private function getFiles()
    {
        $files = array();
        $files_folder = trim(Conf::getInstance()->download['download_folder']);
        if ($dir = opendir($files_folder)) {
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