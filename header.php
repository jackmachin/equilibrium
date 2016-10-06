<!doctype html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="RmDsd0f7iVcDk-QHxmQtj2CWE0KRqLpWRJMGB0KAOpQ" />
<?php if(is_home()): ?>
	<title><?php bloginfo('name'); ?></title>
<?php else: ?>
	<title><?php wp_title(''); ?></title>
<?php endif; ?>


<?php if(is_home()): ?>
	<meta name="keywords" content="ifa marlborough,ifa wiltshire,insurance,mortgages,life cover,pensions,investments,savings,ifa,independent financial adviser" />
	<meta name="description" content="Equilibrium Wealth Management Ltd, independent financial advisers (IFA) based in Marlborough, Wiltshire, specialising in Insurance, Pensions, Mortgages, Life cover and, Investments &amp; Savings." />
<?php endif; ?>

<link rel="icon" type="image/x-icon" href="/favicon.ico" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link media="screen" type="text/css" href="<?php bloginfo('template_url'); ?>/css/cookies/cookiecss.css" rel="stylesheet"/>

<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/cookie.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var visited = $.cookie("equcookie");
            if (visited == null) {
                $('.cookie_layer').show();
                $.cookie('equcookie', 'yes', { expires: 365, path: '/' });
            }
            $.cookie('equcookie', 'yes', { expires: 365, path: '/' });
        });
    </script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.dwFadingLinks.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.cyclic-fade.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/script.js"></script>

<?php if (is_page('14')) { ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/tooltip.js"></script>
<?php  } ?>

<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" type="text/css" />
<![endif]-->

<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" />
<![endif]-->

<!-- WP generated header -->
<?php wp_head(); ?>
<!-- WP generated header -->

<?php flush(); ?>

</head>

<body>

<div id="wrapper">

	<div id="header">

		<div id="logo">
			<a href="<?php bloginfo('url'); ?>"><span>Equilibrium Wealth Management Limited</span></a>
		</div><!--logo -->

		<h3 class="header-tel">01672 515991</h3>

		<?php wp_nav_menu('leftnav'); ?>

		<p class="legal"><?php bloginfo('name'); ?> is authorised and regulated by the Financial Conduct Authority</p>





	</div><!--header-->

<div id="body">
