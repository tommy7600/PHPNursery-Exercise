<?php

class HTML
{
    static public function baseUrl()
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . trim(Conf::getInstance()->main['web_folder']);
    }
}
