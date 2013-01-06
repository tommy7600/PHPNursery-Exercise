<?php

class index extends Controller implements IController
{
    const VIEWS_FOLDER = '../views/index/';

    public function index()
    {
        $content = new View();
        $conf = Conf::getInstance();
        $fc = FrontController::getInstance();

        $content->files = $this->getSliders(trim($conf->slider['slider_folder']));
        $content->dir = trim($conf->slider['slider_folder']);

        $result = $this->after($content->render(self::VIEWS_FOLDER . 'index.php'));

        $fc->setBody($result);
    }

    private function getSliders($slider_folder)
    {
        $files = array();

        if ($dir = opendir($slider_folder)) {
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
//		$params = $fc->getParams();
//
//		foreach ($params as $name=>$value) {
//			$view->$name = $value;
//	}
