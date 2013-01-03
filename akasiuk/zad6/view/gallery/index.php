<h1>Galeria</h1>
<ul class="thumbnails">
    <?php foreach ($images as $image): ?>
    <li class="span4">
        <a href="<?php echo $image ?>" rel="lightbox[gallery]" class="thumbnail">
            <img src="<?php echo $image ?>">
        </a>
    </li>
    <?php endforeach; ?>
</ul>


