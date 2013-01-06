<!DOCTYPE html >
<html lang ="pl" >
<head >
    <meta charset ="utf-8" >
    <meta name = "robots" content ="noindex,nofollow" >
    <meta name = "description" content ="Opis strony zaleane 160 znaków" >
    <meta name = "keywords" content ="key, key, key" >
    <title>Witaj na stornie firmowej</title >

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="assets/css/lightbox.css" rel="stylesheet">
</head >
<body >
    <div class="navbar navbar-inverse navbar-fixed-top navbar">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="wellcome">Project name</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href="about">About</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="files">Files</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container">
        <?php echo $content ?>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body >
</html >

