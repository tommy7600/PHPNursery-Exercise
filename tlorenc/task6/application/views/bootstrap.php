<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <title>Admin dashboard</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">

<!--    <script src="js/jquery-1.8.2.js"></script>-->
<!--    <script src="js/bootstrap.js"></script>-->
<!--    <script src="js/bootstrap-dropdown.js"></script>-->
<!--    <script src="js/bootstrap-transition.js"></script>-->
<!--    <script src="js/bootstrap-alert.js"></script>-->
<!--    <script src="js/bootstrap-modal.js"></script>-->
<!--    <script src="js/bootstrap-scrollspy.js"></script>-->
<!--    <script src="js/bootstrap-tab.js"></script>-->
<!--    <script src="js/bootstrap-tooltip.js"></script>-->
<!--    <script src="js/bootstrap-popover.js"></script>-->
<!--    <script src="js/bootstrap-button.js"></script>-->
<!--    <script src="js/bootstrap-collapse.js"></script>-->
<!--    <script src="js/bootstrap-carousel.js"></script>-->
<!--    <script src="js/bootstrap-typeahead.js"></script>-->
<!--    <script src="js/bootstrap-tour.js"></script>-->

</head>
<body>
<div class="page-header">
    <div class="row-fluid">
        <div class="span6">
            <h1 style="margin-left: 5%">
                <?php echo $this->title; ?>
            </h1>
        </div>
        <div class="span6">
        </div>
    </div>
</div>
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <ul class="nav" role="navigation">
            <li class="active"><a href="index.php"><i class="icon-home icon-white"></i> Dashboard</a></li>
            <li><a href="index.php?action=new"><i class="icon-user icon-white"></i> Add user</a></li>
        </ul>
        <form class="navbar-search pull-right" action="index.php?action=search" method="post">
            <select class="search-query" name="param">
                <option value="u_name">Name</option>
                <option value="u_surname">Surname</option>
                <option value="u_email">Email</option>
                <option value="u_pesel">Pesel</option>
            </select>
            <input class="search-query" type="text" placeholder="Search" name="keyword">
            <input type="submit" class="btn-small" value="Search">
        </form>
    </div>

</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <i class="icon-user"></i> Members
            </div>
            <div class="box-content" >
                <?php echo $this->content; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>