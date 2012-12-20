<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <base href="<?php echo HTML::baseUrl()?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $this->title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="res/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link rel="stylesheet" href="res/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="res/css/main.css">
    <link rel="stylesheet" href="res/css/bootstrap-image-gallery.min.css">
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="."><?php echo $this->title ?></a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li id=home><a href="index">Home</a></li>
                    <li id=gallery><a href="gallery">Gallery</a></li>
                    <li id=download><a href="download">Download</a></li>
                    <li id=about><a href="about">About</a></li>
                    <li id=contact><a href="contact">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
    <?php echo $this->content ?>
    <hr>
    <footer>
        <p>&copy; Company 2012</p>
    </footer>
</div>
<!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="res/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
<script src="res/js/bootstrap.min.js"></script>
<script src="res/js/plugins.js"></script>
<script src="res/js/main.js"></script>
<script src="res/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="res/js/load-image.min.js"></script>
<script src="res/js/bootstrap-image-gallery.min.js"></script>
<script>
    $(function () {
        var loc = window.location.href; // returns the full URL
        if (/about/.test(loc)) {
            $('#about').addClass('active');
        }
        else if (/contact/.test(loc)) {
            $('#contact').addClass('active');
        }
        else if (/download/.test(loc)) {
            $('#download').addClass('active');
        }
        else if (/gallery/.test(loc)) {
            $('#gallery').addClass('active');
        }
        else {
            $('#home').addClass('active');
        }
    });
</script>
</body>
</html>