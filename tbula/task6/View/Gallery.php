<div class="offset3">
    <table>
        <?php
        $imgIndex = ($activePage - 1) * Config_Gallery::IMAGEBYPAGE + 1;
        $rowItemsCount = 3;
        for ($i = 0; $i < Config_Gallery::IMAGEBYPAGE;$i++)
        {
            if (file_exists(Config_Gallery::IMAGESOURCE . $imgIndex . '.jpg'))
            {
                if ($i % $rowItemsCount === 0)
                {
                    echo '<tr>';
                }

                echo '<td><img src="' . Config_Gallery::IMAGESOURCE . $imgIndex . '.jpg" width="200" heigth="100"></img></td>';
                $imgIndex++;

                if ($i % $rowItemsCount === $rowItemsCount - 1)
                {
                    echo '</tr>';
                }
            }
        }
        ?>
    </table>
</div>
<?php echo $paggination ?>
