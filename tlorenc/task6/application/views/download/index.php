<?php
$menu = '<ul class="nav">
                    <li><a href=".">Home</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li class="active"><a href="download">Download</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>';

$content = $this->files;

$template = new Template('Task 6 - GALAXY', 'res/templates/html/index.html.php');
$template->setContent('{MENU}', $menu);
$template->setContent('{MAIN_CONTENT}', $content);
$template->display();