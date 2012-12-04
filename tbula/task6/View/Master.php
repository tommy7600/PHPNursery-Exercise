<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="/res/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/res/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
         <div class="container">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li class="active"><a href="News">News</a></li>
                            <li><a href="Galery">Galery</a></li>
                            <li><a href="Files">Files</a></li>
                            <li><a href="Contact">Contact</a></li>
                            <li><a href="AboutOus">About us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <?php
                    echo $content;
                ?>
            </div>  
        </div>
        <script src="/res/js/jquery-1.8.2.js"></script>
        <script src="/res/js/bootstrap.min.js"></script>
    </body>
</html>
