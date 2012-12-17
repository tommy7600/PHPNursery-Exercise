<?php

class Template
{
    private $template;

    public function __construct($title, $pathToTemplate)
    {
        $conf = Conf::getInstance();
        $baseHref = 'http://'.$_SERVER['HTTP_HOST'] . trim($conf->main['web_folder']);
        $this->template = str_replace('{TITLE}', $title, file_get_contents($pathToTemplate));
        $this->template = str_replace('{BASE}', $baseHref, $this->template);
    }

    public function setContent($section, $content)
    {
        $this->template = str_replace($section, $content, $this->template);
        return true;
    }

    public function display()
    {
        echo $this->template;
        return true;
    }

    public function fileToContent($file)
    {
        ob_start();
        include $file;
        $buffer = ob_get_contents();
        @ob_end_clean();
        return $buffer;
    }
}