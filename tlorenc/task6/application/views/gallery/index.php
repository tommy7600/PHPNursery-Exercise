<?php
$menu = '<ul class="nav">
                    <li><a href=".">Home</a></li>
                    <li class="active"><a href="gallery">Gallery</a></li>
                    <li><a href="download">Download</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>';

$content = '
<!-- modal-gallery is the modal dialog used for the image gallery -->
<div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
    </div>
</div>

<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">';

$gg = new GalleryModel();
$content .= $this->images;

$content .= '</div>';

$template = new Template('Task 6 - GALAXY', 'res/templates/html/index.html.php');
$template->setContent('{MENU}', $menu);
$template->setContent('{MAIN_CONTENT}', $content);
$template->display();