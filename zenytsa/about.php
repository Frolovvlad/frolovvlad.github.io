<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<!-- Длина 50-60 символов -->
	<title>Title</title>
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

		<div class="about_body site-desc">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="decor">
							<div class="about_body-body site-desc_body">
								<div class="about_body-title site-desc_title">
									<h2>About zenytsa</h2>
								</div>

								<div class="about_body-desc site-desc_desc">
									<h4>ACCESSIBLE. LIGHTER. SHARPER.</h4>

									<p>In 2015 our experience in optical elements development and AI-based post-processing technologies allowed us
										to be the first ones to obtain color image of high resolution by using Fresnel lense. The result drastically
										surpassed everything that was presented before. Since then we have significantly improved as in lenses
										development, so in image post-processing.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	<!-- About-More Start -->
	<section class="about_more">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="about_more-img">
						<img src="./img/about-bg1.jpg.png" alt="">
					</div>

					<div class="about_more-desc">
						<p>Zenytsa is an optical device that provides compact and cheap way to make distant objects appear
							magnified on images without huge complicated long-focus lenses. The possible difference in weight
							in cost is more than 100 times for 300mm lens.</p>

						<p>Commonly a long focus objective consists of about 10 lenses with total weight between 2 and 3 kg.
							We propose only one, easy to use simple lens that weighs just 0.02 kg, has 10 mkm thickness
							and innovative software method for sharp image reconstruction.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About-More End -->


	<!-- About-Correction Start -->

	<section class="about_correction">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">
						<h2>distortion correction</h2>
						<div class="decor desctop-version"></div>
					</div>
				</div>
			</div>

			<div class="about_correction-desc">
				<p>Apart from unique configuration of the fresnel lens we provide the special method of distortion correction based
					on robust convolutional neural network. Our methods give exceptional results in obtaining extra quality images in
					reasonable time. The nature of the distortions is nonlinear.</p>

				<p>However, the best nonlinear filter for image reconstruction is our deep convolutional neural network, which
					gives us the better reconstruction without any visible artifacts. Fringing artifact is present in the window of
					the middle picture (usual filtering) and it is absent in the left picture, obtained by deep convolutional network.</p>
			</div>

			<div class="about_correction-img">
				<div class="row">
					<div class="col-md-9 mob-version">
						<img src="./img/about-bg2-mob.jpg.png" alt="">
					</div>

					<div class="col-md-3">
						<p>Comparison of the original image, obtained with EF-S (1) , obtained with our Fresnel lense (2) and image
							after neural network image reconstruction (3).</p>
					</div>

					<div class="col-md-9 desctop-version">
						<img src="./img/about-bg2.jpg.png" alt="">
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- About-Correction End -->


	<!-- About-Quality Start -->
	<section class="about_quality">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="decor">
						<div class="about_quality-body site-desc_body">
							<div class="row">
								<div class="col-md-6">
									<div class="mob-decor">
										<div class="about_quality-title site-desc_title">
											<h2>High quality restoration</h2>
										</div>

										<div class="about_quality-desc site-desc_desc">
											<p>With all applied efforts we have obtained quality of image inaccessible for fresnel lenses before. Try to
												notice difference between two photos below. The left one was taken with Canon 600 and EF-S while the right
												one we took with Canon 600 and our lense.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="about_quality-img">
										<img src="./img/about-bg3.jpg.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<p>Under a thorough supervision of 2 outstanding Russian specialists, Dr. Kazansky and Academician Soifer,
						talented engineers of Zenytsa team have joined forces with Image Processing Systems Institute of RAS, Moscow and
						Aligned Research Group to make this product possible.</p>

					<p>Under a thorough supervision of 2 outstanding Russian specialists, Dr. Kazansky and Academician Soifer,
						talented engineers of Zenytsa team have joined forces with Image Processing Systems Institute of RAS, Moscow and
						Aligned Research Group to make this product possible.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- About-Quality End -->


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