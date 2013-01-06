<?php

class HTML
{
    static public function baseUrl()
    {
        if (self::is_https()) {
            $protocol = 'https';
        } else {
            $protocol = 'http';
        }

        $domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];

        $base_url = $protocol . '://' . $domain . trim(Conf::getInstance()->main['web_folder']);

        return $base_url;
    }

    static private function is_https()
    {
        return strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? true : false;
    }
}
