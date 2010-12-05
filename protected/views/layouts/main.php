<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>Cocomonio - A Themeforest Business and Portfolio HTML Template</title>

		<!-- ########## CSS Files ########## -->
		<!-- Screen CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="screen" />

		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_orange/style_orange.css" type="text/css" media="screen" />

		<!-- Framework CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/960.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/text.css" type="text/css" media="screen" />

		<!-- PrettyPhoto CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />

		<!-- ########## end css ########## -->

		<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie7.css" type="text/css" />
		<![endif]-->

		<!--[if lt IE 8]>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/IE8.js" type="text/javascript"></script>
		<![endif]-->

		<!-- Jquery -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js" ></script>

		<!-- Cufon Font Replacement -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon.js" ></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Alte_Haas_Grotesk_400-Alte_Haas_Grotesk_700.font.js" ></script>

		<!-- Superfish Menu -->
		<!-- http://users.tpg.com.au/j_birch/plugins/superfish/ -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish.js" ></script>

		<!-- Nivo Slider -->
		<!-- http://nivo.dev7studios.com/ -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

		<!-- Coin Slider -->
		<!-- http://workshop.rs/projects/coin-slider/ -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/coin-slider.min.js" ></script>

		<!-- Portfolio Filter Plugin -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/filterable.js" type="text/javascript" charset="utf-8"></script>

		<!-- PrettyPhoto Lightbox -->
		<!-- http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/ -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

		<!-- To customise any of the above, please use this file -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/inc.js" ></script>

	</head>

	<body id="top">
		<!-- Start Head Container -->
		<div class="container_12 head">

			<!-- Logo -->
			<h1 class="grid_4 logo"><a href="index.html" class='ie6fix'>Cocomonio</a></h1>

			<!-- Start Navigation -->
			<div class="grid_7">

			<?php $this->widget('MainMenu'); ?>

			</div><!-- Navigation END -->

			<!-- Start Social Buttons -->
			<div class="grid_1">

				<ul class="social_bookmarks">
					<li class="facebook"><a href="#" class="" title="Facebook">Facebook</a></li>
					<li class="twitter"><a href="#" class="" title="Twitter">Twitter</a></li>
					<li class="rss"><a href="#" class="" title="RSS">RSS</a></li>
				</ul>

			</div><!-- Social Buttons END -->

		</div><!-- Head Container END -->

		<div class="clear"></div><!-- CLEAR -->

		<!-- Start Header Break Line -->
		<div class="container_12 head_break">
			<hr class="grid_12"></hr>
		</div><!-- Header Break Line END -->

		<div class="clear"></div><!-- CLEAR -->

		<!-- Start Content -->
		<div class="container_12 content">
			<?php echo $content ?>
		</div><!-- Content END -->

		<div class="clear"></div>

		<div class="clear"></div>

		<?php $this->widget('PageFooter'); ?>

		<!-- Start Footer Bottom -->
		<div id="fullwidth_footer_bottom">

			<!-- Start Footer Bottom Container -->
			<div class="container_12">

				<!-- Start Copyright -->
				<div class="grid_8 copyright">

					<p class="rights">Copyright 2010 by <a href="<?php echo Yii::app()->request->baseUrl; ?>">FondForum</a>. All rights reserved.</p>

				</div><!-- Copyright END -->

				<!-- Start Footer Text -->
				<div class="grid_4 footer_text">

					Buy this Template at Themeforest.net

				</div><!-- Footer Text END -->


			</div><!-- Footer Bottom Container END -->

			<!-- Clearfix -->
			<div class="clear"></div>

		</div><!-- Footer Bottom END -->

		<!-- IE fix -->
		<script type="text/javascript"> Cufon.now(); </script>

	</body>
</html>