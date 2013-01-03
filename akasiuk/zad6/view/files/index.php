<table>
    <tr>
        <th>
            Plik
        </th>
        <th>
            Rozmiar
        </th>
    </tr>
<?php foreach ($files as $file): ?>
    <tr>
        <td>
            <a href="<?php echo $file[1] ?>"><?php echo $file[0] ?></a>
        </td>
        <td>
            <?php
                $postfixes = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
                $postfix = 0;
                
                $filesize = $file[2];
                
                while ($filesize >= 1024)
                {
                    $filesize /= 1024;
                    ++$postfix;
                }
                
                if ($postfix > 0)
                {
                    $filesize = sprintf('%.2f', $filesize);
                }
                
                echo $filesize . ' ' . $postfixes[$postfix];
            ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>