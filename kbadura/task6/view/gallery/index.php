<div class="imageRow">
    <div class="set">
    <ul class="thumbnails">
        <?php $imageCount = count($images)?>
        <?php for($i=0 ; $i<$imageCount; $i++):?>

            <li class="span3 single <?php echo ($i == 0 ? "first" :(($i+1) == $imageCount ? "last": "")); ?>">
                <a href="<?php echo $images[$i]?>" rel="lightbox[obrazy]" class="thumbnail"><img src="<?php echo $images[$i]?>" alt="Galeria" /></a>
            </li>

        <?php endfor;?>
    </ul>
    </div>
</div>

<script src="assets/js/jquery-1.7.2.min.js"></script>
<script src="assets/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="assets/js/jquery.smooth-scroll.min.js"></script>
<script src="assets/js/lightbox.js"></script>