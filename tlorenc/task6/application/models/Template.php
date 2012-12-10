<?php

class Template
{
    private $template;

    public function __construct($title, $pathToTemplate)
    {
        $this->template = str_replace('{TITLE}', $title, file_get_contents($pathToTemplate));
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

    public function fileToString($file)
    {
        ob_start();
        include $file;
        $buffer = ob_get_contents();
        @ob_end_clean();
        return $buffer;
    }
}