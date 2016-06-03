<!DOCTYPE HTML>

<html>
	<head>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800,300italic,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>
        
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

        <title><?php wp_title(); ?> - <?php bloginfo("name"); ?></title>

        <meta charset="UTF-8">
        <meta name="description" content="Sandro Reist Workbook">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--<script src="https://use.fontawesome.com/37612a3f69.js"></script>-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">-->
        <link href="<?php bloginfo("template_url"); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php bloginfo("template_url"); ?>/style.css" rel="stylesheet" type="text/css" media="screen">

        <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
        <!--<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">-->
        <!--<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/font.css" type="text/css" media="screen">
        <link href="css/lightbox.css" rel="stylesheet">

        <script src="js/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>-->
        <script src="<?php bloginfo("template_url"); ?>/js/jquery.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/js.js" type="text/javascript" charset="utf-8"></script>

        <?php wp_head(); ?>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
	</head>

  <body>
		<header class="clearfix">
			<!--<nav>
				<ul class="clearfix">
					<li><a href="#">Navigationspunkt 1</a></li>
					<li><a href="#">Navigationspunkt 2</a></li>
					<li><a href="#">Navigationspunkt 3</a></li>
					<li><a href="#">Navigationspunkt 4</a></li>
				</ul>
			</nav>-->

      <!--<i id="showRight" class="fa fa-bars menuicon" aria-hidden="true"></i>-->
      <a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
  	</header>
<!--
  	<nav id="cd-lateral-nav">
      <ul class="cd-navigation">
        <li class="item-has-children">
          <a href="#0">Web</a>
          <ul class="sub-menu">
            <li><a href="#0">Systeme</a></li>
            <li><a href="#0">Mediendatenbank</a></li>
            <li><a href="#0">CMS</a></li>
            <li><a href="#0">Code</a></li>
            <li><a href="#0">Datensicherheit</a></li>
            <li><a href="#0">Gestaltung</a></li>
            <li><a href="#0">Links - Web</a></li>
          </ul>
        </li> <!-- item-has-children -->
<!--
        <li class="item-has-children">
          <a href="#0">Design</a>
          <ul class="sub-menu">
            <li><a href="#0">Links - Design</a></li>
          </ul>
        </li> <!-- item-has-children -->
<!--
        <li class="item-has-children">
          <a href="#0">Administration</a>
          <ul class="sub-menu">
            <li><a href="#0">Projektmanagement</a></li>
            <li><a href="#0">Links - Administration</a></li>
          </ul>
        </li> <!-- item-has-children --><!--
      </ul> <!-- cd-navigation -->

      <?php wp_nav_menu(array(
        "theme_location" => "mainnav",
        "container" => "nav", // Bestimmt welches HTML Tag als Container verwendet wird (zB. keines: "")
        "container_id" => "cd-lateral-nav",
        "menu_class" => "cd-navigation" // Definiert Klassen für das ul Tag (zB. clearfix)

      ));?>

      <!--
      <ul class="cd-navigation cd-single-item-wrapper">
        <li><a href="#0">Tour</a></li>
        <li><a href="#0">Login</a></li>
        <li><a href="#0">Register</a></li>
        <li><a href="#0">Pricing</a></li>
        <li><a href="#0">Support</a></li>
      </ul> --> <!-- cd-single-item-wrapper -->

      <!--<ul class="cd-navigation cd-single-item-wrapper">
        <li><a class="current" href="#0">Journal</a></li>
        <li><a href="#0">FAQ</a></li>
        <li><a href="#0">Terms &amp; Conditions</a></li>
        <li><a href="#0">Careers</a></li>
        <li><a href="#0">Students</a></li>
      </ul> --> <!-- cd-single-item-wrapper -->

    </nav>