<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">

	<title>PHPNursery - Exercise</title>

	<link href="css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/docs.css" rel="stylesheet">
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
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li id="home"><a href="index.php">Home</a></li>
              <li id="exercises" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exercises <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li id="exercise1"><a href="index.php?page=exercise1">Exercise one</a></li>
                  <li id="exercise2"><a href="index.php?page=exercise2">Exercise two</a></li>
                  <li id="exercise3"><a href="index.php?page=exercise3">Exercise three</a></li>
                  <li id="exercise4"><a href="index.php?page=exercise4">Exercise four</a></li>
                  <li id="exercise5"><a href="index.php?page=exercise5">Exercise five</a></li>
                </ul>
              </li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
          
        </div>
      </div>
    </div>

    <div class="container">
        
        <?php 
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 'home';
            }

            switch ($page) {
                case 'home':
                    include 'home.php';
                    break;
                case 'exercise1':
                    include 'exercise1.php';
                    $page = $page . ', #exercises';
                    break;
                case 'exercise2':
                    include 'exercise2.php';
                    $page = $page . ', #exercises';
                    break;
                case 'exercise3':
                    include 'exercise3.php';
                    $page = $page . ', #exercises';
                    break;
                case 'exercise4':
                    include 'exercise4.php';
                    $page = $page . ', #exercises';
                    break;
                case 'exercise5':
                    include 'exercise5.php';
                    $page = $page . ', #exercises';
                    break;
                default:
                    include 'home.php';
                    $page = 'home';
                    break;
            }
        ?>
        
        <hr>

        <footer>
        <p>&copy; Stanisław Wrona 2012</p>
        </footer>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#<?php echo $page; ?>").addClass("active");
        });
    </script>
	
</body>
</html>