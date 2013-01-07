<!DOCTYPE html>
<html>
    <head>      
        <link href="res/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px;
            }
        </style>
        <link href="res/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="res/css/lightbox.css" rel="stylesheet" />
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
              <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <a href="welcome" class="brand">Nazwa firmy</a>
                <div class="nav-collapse collapse">
                  <ul class="nav">
                    <li><a href="about">O nas</a></li>
                    <li><a href="gallery">Galeria</a></li>
                    <li><a href="files">Pliki</a></li>
                    <li><a href="contact">Kontakt</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        
        <div class="container">
            <?php echo $content ?>
            
            <hr>
            Made by Xylem
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="res/js/bootstrap.min.js"></script>
        <script src="res/js/lightbox.js"></script>
    </body>
</html>

