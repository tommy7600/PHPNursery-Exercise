<div id="photo-montage" class="carousel-inner">
    <div id="myCarousel" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <?php $i = 0; foreach ($files as $file): ?>
                <?php $class = ($i === 0) ? 'active item' : 'item';
                $file_path = $dir . '/' . $file . '.txt';
                $lines = file($file_path);?>
                <div class="<?php echo $class ?>">
                    <img src="<?php echo $dir . '/' . $file; ?>" alt=" ">

                    <div class="carousel-caption">
                        <h4><?php echo $lines[0] ?></h4>

                        <p><a href="<?php echo $lines[1] ?>">More info!</a></p>
                    </div>
                </div>
                <?php ++$i; ?>
            <?php endforeach ?>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        <!-- Carousel nav -->
    </div>
</div>

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
    <h1>Hello, galaxy!</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.</p>

    <p><a class="btn btn-primary btn-large" href="about">Learn more &raquo;</a></p>
</div>

<!-- Example row of columns -->
<div class="row">
    <div class="span4">
        <h2>Galaxy news 1</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>

        <p><a class="btn" href="about">View details &raquo;</a></p>
    </div>
    <div class="span4">
        <h2>Galaxy news 2</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>

        <p><a class="btn" href="about">View details &raquo;</a></p>
    </div>
    <div class="span4">
        <h2>Galaxy news 3 </h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>

        <p><a class="btn" href="about">View details &raquo;</a></p>
    </div>
</div>