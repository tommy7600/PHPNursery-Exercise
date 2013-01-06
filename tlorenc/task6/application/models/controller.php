<?php

class Controller
{
    const MASTER_LAYOUT = '../views/';

    public function after($content, $masterLayoutFile = 'layout.php')
    {
        $view = new View();
        $view->title = trim(Conf::getInstance()->main['site_title']);
        $view->content = $content;
        return $view->render(self::MASTER_LAYOUT . $masterLayoutFile);
    }
}
