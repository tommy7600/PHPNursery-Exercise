<?php

class Carousel
{
    private $img_dir;
    private $img_url;
    private $slider;

    public function __construct($id = 'myCarousel', $class = 'carousel-inner', $dir = 'res/img/slider')
    {
        $this->img_dir = $dir;
        $this->img_url = $dir;
        $this->slider = $this->widget($id, $class);
        return $this;
    }

    public function strip_dir($file)
    {
        return str_replace($this->img_dir, $this->img_url, $file);
    }

    private function build_dir()
    {
        $files = array();
        $files = array_map(array(&$this, 'strip_dir'), glob($this->img_dir . '/*.jpg'));

        return $files;
    }

    private function build_items($active_num = 0)
    {
        $files = array_values($this->build_dir());
        $result = '';
        $i = 0;

        foreach ($files as $file) {
            $class = ($i === $active_num) ? 'active item' : 'item';
            $lines = file($file . '.txt');
            $result .= '
                <div class="' . $class . '">
                    <img src="' . $file . '" alt=" ">
                    <div class="carousel-caption">
                        <h4>' . $lines[0] . '</h4>
                        <p><a href="' . $lines[1] . '">More info!</a></p>
                    </div>
                </div>';
            ++$i;
        }
        return $result;
    }

    public function widget($value = '', $id = 'photo-montage', $class = 'carousel slide')
    {
        $items = $this->build_items();
        $nav = $this->build_nav();

        return '
    <div id="' . $id . '" class="carousel-inner">
        <div id="myCarousel" class="' . $class . '">
            <!-- Carousel items -->
            <div class="carousel-inner">
                ' . $items . '
            </div>
            ' . $nav . '
        </div>
    </div>';
    }

    private function build_nav($use = TRUE)
    {
        if (!$use) return;

        return '      
        <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        <!-- Carousel nav -->';
    }

    public function getSlider()
    {
        return $this->slider;
    }
}