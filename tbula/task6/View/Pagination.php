<div class="paggination">
    <ul>
    <?php
        $this->active = 1;
        $this->elementByPage = 3;
        $this->elementsCount = 9;
        $this->link = '/res/img/gallery/';
        $this->maxPageVisible = 3;
        
        $pageCount = $this->elementsCount / $this->elementBypage + ( $this->elementsCount%$this->elementBypage == 0 ? 0 : 1 );
        echo '<li><a href="'.$this->link.'"1>\<\<</a></li>';
        for($i = 0; $i<$this->maxPageVisible;$i++)
        {
            
        }
        
        echo '<li><a href="'.$this->link + $pageCount.'"1>\<\<</a></li>';
    ?>
    </ul>
</div>



<div class="span4 offset5 pagination">
    <ul>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
    </ul>
</div>
