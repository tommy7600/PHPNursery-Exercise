<h4>small list of files</h4>
<ul>
    <?php foreach($files as $filename => $filepath): ?>
    <li><a href="<?php echo $filepath ?>" target="_blank"><?php echo $filename; ?></a></li>
    <?php endforeach; ?>
</ul>