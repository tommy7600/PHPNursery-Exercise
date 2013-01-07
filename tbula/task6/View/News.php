<div id="myCarousel" class="carousel slide span11">
    <div class="carousel-inner offset2 span6">
        <?php
            $i=0;
            foreach ($bannerImage as $img)
            {
                echo '<div class="item';
                if($i==0)
                {
                    echo ' active ';
                }
                echo '"><img src="'.$img.'"></div>';
                $i++;
            }
        ?>
    </div>
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<div class="row">
    <div class ="span3 offset1 well">
        <?php
            if(isset($news1))
            {
                echo $news1;
            }
        ?>
    </div>
    <div class ="span3 well">
        <?php
            if(isset($news2))
            {
                echo $news2;
            }
        ?>
    </div>
    <div class ="span3 well">
        <?php
            if(isset($news3))
            {
                echo $news3;
            }
        ?>
    </div>
</div>
