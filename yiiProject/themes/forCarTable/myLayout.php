<?php

use yii\helpers\Html;

use app\assets\MyAsset;
use app\assets\TableAsset;

MyAsset::register($this);
TableAsset::register($this);

$bundle = $this->getAssetManager()->getBundle('app\assets\MyAsset');
?>
<?php $this->beginPage()?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
	<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head()?>
	<?php
	$this->registerJsFile($bundle->baseUrl.'/js/modernizr-2.6.2.min.js', ['position' => \yii\web\View::POS_HEAD]);
	$this->registerJsFile($bundle->baseUrl.'/js/respond.min.js', ['position' => \yii\web\View::POS_HEAD, 'condition' =>'lte IE9']);	
	?>
	</head>
	<body>
	<?php $this->beginBody()?>
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><?= Html::a('My YII App', ['/']) ?></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><?= Html::a('Home', ['/']) ?></li>
								<li><?= Html::a('About', ['/about']) ?></li>
								<li><?= Html::a('Contact', ['/contact']) ?></li>
								<li class="has-dropdown active">
								<?= Html::a('Tables') ?>
									<ul class="dropdown">
										<li ><?= Html::a('Cars', ['/cars']) ?></li>
										<li><?= Html::a('Providers', ['/providers']) ?></li>
									</ul>
								</li>
								<li><?= Html::a('Login', ['/login']) ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section id="home" class="video-hero" style="height: 500px; background-image: url(<?=$bundle->baseUrl?>/images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2><?=Html::encode($this->title)?></h2>
								<p class="breadcrumbs"><span><?= Html::a('Home', ['/']) ?></span> <span><?= Html::encode($this->title)?></span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div id="colorlib-contact">
			<div class="container">
				<div class="col-md-12 col-md-pull-0 animate-box">
					<?= $content ?>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About unapp</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="/"><i class="icon-check"></i> Home</a></li>
								<li><a href="/about"><i class="icon-check"></i> About</a></li>
								<li><a href="/contact"><i class="icon-check"></i> Contact</a></li>
								<li><a href="/cars"><i class="icon-check"></i> Cars table</a></li>
								<li><a href="/providers"><i class="icon-check"></i> Providers table</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Blog</h4>
						<div class="f-blog">
							<a href="#" class="blog-img" style="background-image: url(<?=$bundle->baseUrl?>/images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="#">Photoshoot Technique</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="#" class="blog-img" style="background-image: url(<?=$bundle->baseUrl?>/images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="#">Camera Lens Shoot</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="#" class="blog-img" style="background-image: url(<?=$bundle->baseUrl?>/images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="#">Imahe the biggest photography studio</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	<?php $this->endBody()?>
	</body>
</html>
<?php $this->endPage()?>