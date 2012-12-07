<?php
    session_start();
?>
<html doctype>
    <head>
        <base href="http://localhost/task6/">
        <link rel="stylesheet" href="res/css/bootstrap.css">
        <link rel="stylesheet" href="res/css/bootstrap-responsive.css">
        <?php
            if(file_exists('res/css/' . $viewName . '.css'))
            {
                echo '<link rel=\'stylesheet\' href=\'res/css/' . $viewName . '.css\'>';
            }
        ?>
               
        <script type="text/javascript" src="res/js/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="res/js/bootstrap.js"></script>
        
        <?php
            if(file_exists('res/js/' . $viewName . '.js'))
            {
                echo '<script type=\'text/javascript\' src=\'res/js/' . $viewName . '.js\'></script>';
            }
        ?>
        
    </head>
    <body>
        
        <div class="container">
            
            <div class="row">
                <div class="span4">
                    <h1>My WebSite</h4>
                </div>
            </div>
            
            <div id="navigationBar">
                <div class="row-fluig">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-inner">
                            <ul class="nav">
                                <li>
                                    <a href="//localhost/task6/welcome/welcome/">
                                        <i class="icon-home icon-white"></i> Welcome
                                    </a>
                                </li>
                                <li>
                                    <a href="//localhost/task6/files/show/">
                                        <i class="icon-folder-open icon-white"></i> Files
                                    </a>
                                </li>
                                <li>
                                    <a href="//localhost/task6/gallery/show/">
                                        <i class="icon-camera icon-white"></i> Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="//localhost/task6/about/about/">
                                        <i class="icon-question-sign icon-white"></i> About
                                    </a>
                                </li>
                                <li>
                                    <a href="//localhost/task6/contact/contact/">
                                        <i class="icon-envelope icon-white"></i> Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="content" class="container-fluid">         
                    <div class="span11">
                        <?php 
                            include 'View_' . $viewName . '.php';
                        ?>
                    </div>
                </div>
            </div>
            
        <div id="content" class="container-fluid"> 
            <footer>
                <hr>
                &copy; 2012 by Company Name. Layout by <a href="#">Kamil</a>
            </footer>
        </div>
            
        </div>
        
    </body>
</html>