<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php bloginfo('title'); ?></title>

	<!-- Bootstrap -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		@font-face {
			font-family: "NHaasGrotesk-b";
			font-family: "NHaasGrotesk-b", Helvetica, Verdana, Sans-Serif;
			src: url("<?php bloginfo('template_url'); ?>/css/NHaasGroteskTXPro-75Bd.otf") format("opentype");
		}

		@font-face {
			font-family: "NHaasGrotesk";
			src: url("<?php bloginfo('template_url'); ?>/css/NHaasGroteskTXPro-55Rg.otf") format("opentype");
		}

		@font-face {
			font-family: "NHaasGrotesk-l";
			src: url("<?php bloginfo('template_url'); ?>/css/NHaasGroteskDSPro-35XLt.otf") format("opentype");
		}

		@font-face {
			font-family: "NHaasGrotesk-xl";
			src: url("<?php bloginfo('template_url'); ?>/css/NHaasGroteskDSPro-15UltTh.otf") format("opentype");
		}

		.header{
			background-image: url("<?php bloginfo('template_url'); ?>/images/cover-img.png");
		}

		.about-tabs .tab-content #what-we-do .panel-text-div {
			background-image: url("<?php bloginfo('template_url'); ?>/images/about-us/about-mountain1.jpg");
		}

		.about-tabs .tab-content #management .panel-text-div {
			background-image: url("<?php bloginfo('template_url'); ?>/images/about-us/about-mountain1.jpg");
		}

		.about-tabs .tab-content #team-strategy .panel-text-div {
			background-image: url("<?php bloginfo('template_url'); ?>/images/about-us/about-mountain1.jpg");
		}

		.about-tabs .tab-content #thought-leadership .panel-text-div {
			background-image: url("<?php bloginfo('template_url'); ?>/images/about-us/about-mountain1.jpg");
		}

		.about-tabs .tab-content #insights .panel-text-div {
			background-image: url("<?php bloginfo('template_url'); ?>/images/about-us/about-mountain1.jpg");
		}
		


		.contact .col-md-6 .contact-img-sgp1 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/sgp1.jpg");
		}

		.contact .col-md-6 .contact-img-sgp2 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/sgp2.jpg");
		}

		.contact .col-md-6 .contact-img-ldn1 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/ldn1.jpg");
		}

		.contact .col-md-6 .contact-img-ldn2 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/ldn2.jpg");
		}

		.contact .col-md-6 .contact-img-del1 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/del1.jpg");
		}

		.contact .col-md-6 .contact-img-del2 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/del2.jpg");
		}

		.contact .col-md-6 .contact-img-cwb1 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/cwb1.jpg");
		}

		.contact .col-md-6 .contact-img-cwb2 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/cwb2.jpg");
		}

		.contact .col-md-6 .contact-img-chi1 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/chi1.jpg");
		}

		.contact .col-md-6 .contact-img-chi2 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/chi2.jpg");
		}

		.contact .col-md-6 .contact-img-nbo1 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/nbo1.jpg");
		}

		.contact .col-md-6 .contact-img-nbo2 {
			background-image: url("<?php bloginfo('template_url'); ?>/images/contact/nbo2.jpg");
		}
	</style>
	<?php wp_head(); ?>
</head>
<body>

<div class="page-loader">
	<div id="floatingCirclesG">
		<div class="f_circleG" id="frotateG_01"></div>
		<div class="f_circleG" id="frotateG_02"></div>
		<div class="f_circleG" id="frotateG_03"></div>
		<div class="f_circleG" id="frotateG_04"></div>
		<div class="f_circleG" id="frotateG_05"></div>
		<div class="f_circleG" id="frotateG_06"></div>
		<div class="f_circleG" id="frotateG_07"></div>
		<div class="f_circleG" id="frotateG_08"></div>
	</div>
</div>


<?php
global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request));
//echo $current_url;
?>

<!-- MOBILE navbar -->
<nav id="mobile-navbar" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php bloginfo('url');  ?>">
				<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse ">
			<ul class="nav navbar-nav">
				<li>
					<a href="<?php bloginfo('url');  ?>/about">About Sinclair</a>
				</li>
				<li>
					<a href="practices.html">Fox Practices</a>
				</li>
				<li>
					<a href="executive-search.html">Executive Search</a>
				</li>
				<li>
					<a href="talent-management.html">Talent Management</a>
				</li>
				<li>
					<a href="venture.html">Venture Capital</a>
				</li>
				<li>
					<a href="training.html">Training</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<?php
    if($current_url == get_bloginfo('url')):
?>
		<div class="navigation-inverse">
	<div class="container">
		<div class="top-nav">
			<ul>
				<li class="top-nav-search">
					<i class="fa fa-search"></i>
				</li>
				<li class="sign-in">
					<a href="#">Sign In</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/news">News</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/case-studies">Case Studies</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="clearfix"></div>

	<nav id="stick-top-wp">
		<div class="container">
			<ul>
				<li class="home-head-logo">
					<a href="<?php bloginfo('url'); ?>" class="link-rm-default">
						<div class="footer-logo">
							<img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="footer logo">
							<div>GREAT MINDS <strong>THINK DIFFERENT</strong></div>
						</div>
					</a>

				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/about">About Sinclair</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/practices">Practices</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/executive-search">Executive Search</a>
				</li>

				<li>
					<a href="<?php bloginfo('url'); ?>/talent-management">Talent Management</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/venture">Venture Capital</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/training">Training</a>
				</li>
			</ul>
		</div>
	</nav>

</div>


<?php else: ?>
		<div class="navigation">
	<div class="container">
		<div class="top-nav">
			<ul>
				<li class="top-nav-search">
					<i class="fa fa-search"></i>
				</li>
				<li class="sign-in">
					<a href="#">Sign In</a>
				</li>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/news"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/news">News</a>
				</li>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/case-studies"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/case-studies">Case Studies</a>
				</li>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/contact"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="clearfix"></div>

	<nav id="stick-top-wp">
		<div class="container">
			<ul>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/about"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/about">About Sinclair</a>
				</li>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/practices"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/practices">Fox Practices</a>
				</li>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/executive-search"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/executive-search">Executive Search</a>
				</li>
				<li class="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo"></a>
				</li>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/talent-management"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/talent-management">Talent Management</a>
				</li>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/venture"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/venture">Venture Capital</a>
				</li>
				<li>
					<a <?php if($current_url == get_bloginfo('url')."/training"){echo 'class="active-menu"';} ?> href="<?php bloginfo('url'); ?>/training">Training</a>
				</li>
			</ul>
		</div>
	</nav>

</div>
<?php endif; ?>
