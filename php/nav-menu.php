<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML5 / CSS3 Drop-Down Navigation Menu</title>
	<meta name="description" content="">
	
	<link rel="stylesheet" href="../css/nav-menu.css" type="text/css">
	
	<!-- IE6-8 support of HTML5 elements --> <!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript"
            src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="../js/content.js"></script>
</head>

<body>
<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container container-custom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-header-custom">
            <button type="button" class="navbar-toggle navbar-toggle-custom" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon-bar-color"></span>
                <span class="icon-bar icon-bar-color"></span>
                <span class="icon-bar icon-bar-color"></span>
            </button>
            <p class="main-title">Kaida Contemporary</p>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar nav-menu-bar-custom" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right nav-font">
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="services.html">Events</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-1-col.html">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-2-col.html">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-3-col.html">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-4-col.html">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-item.html">Single Portfolio Item</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="blog-home-1.html">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="blog-home-2.html">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Full Width Page</a>
                        </li>
                        <li>
                            <a href="sidebar.html">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</body>
</html>