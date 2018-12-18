<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<base href="/zenytsa/">

	<!-- Длина 50-60 символов -->
	<title>Zenytsa</title>
	<!-- Десктопный поиск — 120-140; Мобильный поиск — 100-120; -->
	<meta name="description" content="">
	<!-- Не более 10 ключевых слов. Ключевые слова должны присутствовать в тексте страницы -->
	<meta name="keywords" content="" />

	<!-- Адаптация для мобильных телефонов Начало -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="theme-color" content="#000">
	<!-- Адаптация для мобильных телефонов Конец -->

	<!-- Базовый шаблон для соц. сетей Начало -->
	<meta property="og:url" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="">
	<!-- Базовый шаблон для соц. сетей Конец -->

	<!-- Фавикон Начало -->
	<link rel="icon" sizes="192x192" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Фавикон Конец -->

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>
	<!-- Mob-menu Start -->
	<?php include_once 'components/mob-menu.php';?>
	<!-- Mob-menu End -->

	<!-- Custom HTML Start -->

	<!-- Header Start -->
	<header>
		<!-- Header Start -->
		<?php include_once 'components/header.php';?>
		<!-- Header End -->

		<!-- Header__Title Start -->

		<div class="header_body">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_body-title desctop-version">
							<h1>The world’s first Fresnel<br>lens with software<br>image reconstruction.</h1>
						</div>
					</div>
				</div>
				<!-- Header__Title End -->
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_body-title mob-version">
						<h1>The world’s first Fresnel<br>lens with software<br>image reconstruction.</h1>
					</div>
				</div>
			</div>
			<!-- Header__Title End -->
		</div>
	</header>
	<!-- Header End -->

	<!-- Home-About Start -->
	<section class="home_about site-desc">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="home_about-body site-desc_body">
						<div class="home_about-title site-desc_title">
							<h2>Why Zenytsa?</h2>
							<img class="mob-version" src="./img/home-bg2.jpg" alt="">
						</div>

						<div class="home_about-desc site-desc_desc">
							<p>Why can’t we capture a long-distance picture in an easier and inexpensive way? We propose just one lens
								instead of a huge, hard to transport device</p>

							<p><b>Step up your game with our AI driven optics.</b></p>
						</div>

						<div class="home_about-btn bttn">
							<a href="about.php">About Zenytsa</a>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="home_about-img desctop-version">
						<img src="./img/home-bg2.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Home-About End -->


	<!-- Home-App Start -->

	<section class="home_app">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_app-title">
						<h2>Applications</h2>
					</div>
				</div>
			</div>

			<div class="home_app-item">
				<div class="row">
					<div class="col-md-4">
						<div class="item">
							<img src="./img/home-app1.jpg" alt="">
							<div class="item-btn bttn">
								<a href="app.php#security">Security</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="item">
							<img src="./img/home-app2.jpg" alt="">
							<div class="item-btn bttn">
								<a href="app.php#environment">Environment</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="item">
							<img src="./img/home-app3.jpg" alt="">
							<div class="item-btn bttn">
								<a href="app.php#agriculture">Agriculture</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Home-App End -->


	<!-- Home-Partners Start -->
	<section class="partners">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">
						<h2>Partners</h2>
						<div class="decor desctop-version"></div>
					</div>
				</div>
			</div>

			<div class="desctop-version">
				<div class="row">
					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="partners-item">
							<img src="./img/home-partners1.png" alt="">
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="partners-item">
							<img src="./img/home-partners2.png" alt="">
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="partners-item">
							<img src="./img/home-partners3.png" alt="">
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="partners-item">
							<img class="scolcovo" src="./img/home-partners4.png" alt="">
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="partners-item">
							<img src="./img/home-partners5.png" alt="">
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="partners-item">
							<img src="./img/home-partners6.png" alt="">
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="partners-item">
							<img src="./img/home-partners7.png" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="row mob-version">
				<div class="owl-carousel">
					<div class="col">
						<div class="partners-item">
							<img src="./img/home-partners1-mob.png" alt="">
						</div>
					</div>

					<div class="col">
						<div class="partners-item">
							<img src="./img/home-partners2-mob.png" alt="">
						</div>
					</div>

					<div class="col">
						<div class="partners-item">
							<img src="./img/home-partners3-mob.png" alt="">
						</div>
					</div>

					<div class="col">
						<div class="partners-item">
							<img src="./img/home-partners4-mob.png" alt="">
						</div>
					</div>

					<div class="col">
						<div class="partners-item">
							<img src="./img/home-partners5-mob.png" alt="">
						</div>
					</div>

					<div class="col">
						<div class="partners-item">
							<img src="./img/home-partners6-mob.png" alt="">
						</div>
					</div>

					<div class="col">
						<div class="partners-item">
							<img src="./img/home-partners7-mob.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Home-Partners End -->


	<!-- Contacts Start -->
	<?php include_once 'components/contacts.php';?>
	<!-- Contacts End -->

	<!-- Footer Start -->
	<?php include_once 'components/footer.php';?>
	<!-- Footer End -->


	<!-- Custom HTML End -->

	<!-- Custom JavaScript Start -->
	<script src="js/scripts.min.js"></script>
	<!-- Custom JavaScript End -->

</body>

</html>