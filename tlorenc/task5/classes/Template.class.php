<?php

class Template
{
    private $template;
    private $pathToTemplate;
    private $content;

    public function __construct($title, $pathToTemplate)
    {
        $this->pathToTemplate = $pathToTemplate;
        $this->template = str_replace('{TITLE}', $title, file_get_contents($this->pathToTemplate));
    }

    public function setContent($section, $content)
    {
        $this->content = $content;
        $this->template = str_replace($section, $this->content, $this->template);
        return true;
    }

    public function display()
    {
        echo $this->template;
        return true;
    }
}


