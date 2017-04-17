<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="description" content="">
	
	<link rel="stylesheet" href="../css/nav-menu.css" type="text/css">
	
	<!-- IE6-8 support of HTML5 elements --> <!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <!--<script type="text/javascript"
            src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
    <script src="../js/content.js"></script>
</head>

<body>
<nav class="navbar navbar-fixed-top navbar-custom" role="navigation">
    <div class="container container-custom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-header-custom">
            <button type="button" id="navbar-toggle" class="navbar-toggle navbar-toggle-custom" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon-bar-color"></span>
                <span class="icon-bar icon-bar-color"></span>
                <span class="icon-bar icon-bar-color"></span>
            </button>
            &nbsp;&nbsp;<a href="."><span class="main-title">KAIDA</span> <span class="main-title-small">CONTEMPORARY</span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar nav-menu-bar-custom" id="bs-example-navbar-collapse-1">
            <ul id="nav" class="nav navbar-nav navbar-right nav-custom">
                <li>
                    <a href="javascript:void(0);" onclick="getContent('the-gallery','php/the-gallery.php','main-body');closeMenu();">The Gallery</a>
                </li>
                <li>
                    <a href="javascript:void(0);" onclick="getContent('','php/upcoming-exhibitions.php','main-body');closeMenu();">Upcoming Exhibitions</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Backroom</b></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Past Shows</b></a>

                </li>
                <li>
                    <a href="javascript:void(0);" onclick="getContent('','php/contact-details.php','main-body');closeMenu();">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);" onclick="getContent('','php/press.php','main-body');closeMenu();">Press</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</body>
</html>