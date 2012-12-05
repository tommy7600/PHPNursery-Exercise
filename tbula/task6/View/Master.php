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
        <link href="/res/css/forms.css" rel="stylesheet" media="screen">
        <link href="/res/css/news.css" rel="stylesheet" media="screen">
    </head>
    <body>
         <div class="container">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <?php
                                foreach ($page as $key => $value)
                                {
                                    echo '<li';
                                    if($value == 1)
                                    {
                                        echo ' class="active" ';
                                    }
                                    echo '><a href="'.$key.'">'.$key.'</a></li>';
                                }
                            ?>
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
        <script src="/res/js/bootstrap.js"></script>
    </body>
</html>
