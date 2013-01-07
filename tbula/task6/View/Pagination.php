<div class="pagination" align="center">
    <ul>
        <?php
        
        $pageCount = (int)($elementsCount / $elementByPage) + ( $elementsCount % $elementByPage === 0 ? 0 : 1 );
        $index = 0;
        echo '<li><a href="' . $link . '?page=1"><<</a></li>';

        if ($active + (int)($maxPageVisible / 2) >= $pageCount)
        {
            $index = ($pageCount<= $maxPageVisible)? 1:$pageCount - $maxPageVisible;
        }
        else
        {
            $index = $active - (int)($maxPageVisible / 2);
            if ($index < 1)
            {
                $index = 1;
            }
        }
        
        $i = 0;
        while($i < $maxPageVisible && $i<$pageCount)
        {
            echo '<li';
            if($active == $index)
            {
                echo ' class="active" ';
            }
            echo '><a href="' . $link .'?page='. $index . '">' . $index . '</a></li>';
             $i++;
             $index++;
        }

        echo '<li><a href="' . $link .'?page='. $pageCount . '">>></a></li>';
        ?>
    </ul>
</div>
