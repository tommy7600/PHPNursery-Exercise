<div class="container">
    <div id="carousel" class="carousel slide">
        <div class="carousel-inner">
            <?php for ($i = 0; $i < count($images); ++$i): ?>
                <div class="item<?php if ($i == 0) echo ' active' ?>"><img src="<?php echo $images[$i] ?>"></div>
            <?php endfor; ?>
        </div>
        <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
    </div>
    <div class="row">
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>
        <div class="span4">      
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>
    </div>
</div>