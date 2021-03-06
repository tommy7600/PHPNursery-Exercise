<div class="row">
    <table width="500" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Download</th>
        </tr>
        </thead>
        <tbody>

        <?php $content = ''; foreach ($files As $file): ?>
            <?php
            $content .= '
<tr>
    <td width="75"><img style="height: 50px !important" width="50" border="0" title=""';

            switch (pathinfo($file)['extension']) {
                case "jpg":
                    $content .= ' src="res/img/fileformats/jpg.png"></td>';
                    break;

                case "7z":

                    $content .= ' src="res/img/fileformats/7z.png"></td>';
                    break;

                case "aac":

                    $content .= ' src="res/img/fileformats/aac.png"></td>';
                    break;

                case "ai":

                    $content .= ' src="res/img/fileformats/ai.png"></td>';
                    break;

                case "bmp":

                    $content .= ' src="res/img/fileformats/bmp.png"></td>';
                    break;

                case "docx":

                    $content .= ' src="res/img/fileformats/doc.png"></td>';
                    break;

                case "gif":

                    $content .= ' src="res/img/fileformats/gif.png"></td>';
                    break;

                case "pdf":

                    $content .= ' src="res/img/fileformats/pdf.png"></td>';
                    break;

                case "rar":

                    $content .= ' src="res/img/fileformats/rar.png"></td>';
                    break;

                case "zip":

                    $content .= ' src="res/img/fileformats/zip.png"></td>';
                    break;

                case "exe":

                    $content .= ' src="res/img/fileformats/exe.png"></td>';
                    break;

                case "jpeg":

                    $content .= ' src="res/img/fileformats/jpeg.png"></td>';
                    break;

                case "mp3":

                    $content .= ' src="res/img/fileformats/mp3.png"></td>';
                    break;

                case "txt":

                    $content .= ' src="res/img/fileformats/txt.png"></td>';
                    break;

                case "png":

                    $content .= ' src="res/img/fileformats/png.png"></td>';
                    break;

                default:

                    $content .= ' src="res/img/fileformats/other.png"></td>';
                    break;
            }
            $content .= '
    <td align="left" class="sizeplus"><b>' . $file . '</b></td>
    <td align="center" width="150"><a class="btn btn-primary" href="' . $download_folder . '/' . $file . '">DOWNLOAD</a>
    </td>
</tr>'; ?>
        <?php endforeach ?>
        <?php echo $content; ?>
        </tbody>
    </table>
</div>