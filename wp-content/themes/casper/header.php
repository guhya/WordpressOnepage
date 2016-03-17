<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<link rel="shortcut icon" href="<?=get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?=get_template_directory_uri();?>/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=get_template_directory_uri();?>/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=get_template_directory_uri();?>/img/apple-touch-icon-114x114.png">

<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/css/font-awesome.css">

<link href="<?=get_template_directory_uri();?>/css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="<?=get_template_directory_uri();?>/css/owl.theme.css" rel="stylesheet" media="screen">

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/css/animate.min.css">
<script type="text/javascript" src="<?=get_template_directory_uri();?>/js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<!-- Navigation
    ==========================================-->
	<nav id="menu" class="navbar navbar-default navbar-fixed-top on">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=esc_url( home_url( '/' ) );?>"><i class="fa fa-flag-checkered fa-flip-horizontal"></i> <?php bloginfo( 'name' ); ?><strong></strong></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
				<?php if ( is_front_page() && is_home() ) : ?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="page-scroll">Home</a></li>
					<li class=""><a href="#about-section" class="page-scroll">About</a></li>
					<li class=""><a href="#works-section" class="page-scroll">Portfolio</a></li>
					<li class=""><a href="#services-section" class="page-scroll">Services</a></li>
					<li class=""><a href="#team-section" class="page-scroll">Team</a></li>
					<li class=""><a href="#news-section" class="page-scroll">News</a></li>
					<li class=""><a href="#testimonials-section" class="page-scroll">Testimonials</a></li>
					<li class=""><a href="#contact-section" class="page-scroll">Contact</a></li>
				</ul>
				<?php else : ?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?=esc_url( home_url( '/' ) );?>#home" class="page-scroll">Home</a></li>
					<li class=""><a href="<?=esc_url( home_url( '/' ) );?>#about-section" class="page-scroll">About</a></li>
					<li class=""><a href="<?=esc_url( home_url( '/' ) );?>#works-section" class="page-scroll">Portfolio</a></li>
					<li class=""><a href="<?=esc_url( home_url( '/' ) );?>#services-section" class="page-scroll">Services</a></li>
					<li class=""><a href="<?=esc_url( home_url( '/' ) );?>#team-section" class="page-scroll">Team</a></li>
					<li class=""><a href="<?=esc_url( home_url( '/' ) );?>#news-section" class="page-scroll">News</a></li>
					<li class=""><a href="<?=esc_url( home_url( '/' ) );?>#testimonials-section" class="page-scroll">Testimonials</a></li>
					<li class=""><a href="<?=esc_url( home_url( '/' ) );?>#contact-section" class="page-scroll">Contact</a></li>
				</ul>
				<?php endif; ?>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>