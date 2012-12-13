<?php
$menu = '<ul class="nav">
                    <li><a href=".">Home</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li class="active"><a href="download">Download</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>';

$content = '<div class="row">
    <table width="500" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Download</th>
        </tr>
        </thead>
        <tbody>';


$content .= $this->files;

$content .= ' </tbody>
    </table>
</div>';

$template = new Template('Task 6 - GALAXY', 'res/templates/html/index.html.php');
$template->setContent('{MENU}', $menu);
$template->setContent('{MAIN_CONTENT}', $content);
$template->display();