<div class="row-fluid">
    <?php foreach($files as $file): ?>
    <ul class="thumbnails">
      <li class="span3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/300x200" alt="" src="<?php echo $file; ?>">
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
</div>