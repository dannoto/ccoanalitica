<!-- https://html.nextwpcook.com/cosion/index-three.html -->
<!DOCTYPE html>
<html lang="en">


<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Business Consulting HTML5 Template">
	<meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template">
	<meta name="author" content="ThemeOri">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title of Site -->
	<title>Cosion - Business Consulting HTML5 Template</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="https://html.nextwpcook.com/cosion/assets/img/favicon-1.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://html.nextwpcook.com/cosion/assets/css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://html.nextwpcook.com/cosion/assets/css/fontawesome.css">
	<!-- Flat Icon CSS -->
	<link rel="stylesheet" href="https://html.nextwpcook.com/cosion/assets/webfonts/flat-icon/flaticon_bantec.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://html.nextwpcook.com/cosion/assets/css/animate.css">
	<!-- Swiper Bundle CSS -->
	<link rel="stylesheet" href="https://html.nextwpcook.com/cosion/assets/css/swiper-bundle.min.css">
	<!-- Slick CSS -->
	<link rel="stylesheet" href="https://html.nextwpcook.com/cosion/assets/css/slick.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="https://html.nextwpcook.com/cosion/assets/css/magnific-popup.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="https://html.nextwpcook.com/cosion/assets/sass/style.css">
</head>

<body>

	<div class="loader">
		<span class="loader-container"></span>
	</div>
	<div class="top__bar two">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-md-8">
					<div class="top__bar-left">
						<a href="mailto:<?= $d['top_bar']['email']; ?>">
							<i class="<?= $d['top_bar']['icone_email']; ?>"></i>
							<?= $d['top_bar']['email']; ?>
						</a>

						<a href="<?= $d['top_bar']['mapa_link']; ?>">
							<i class="<?= $d['top_bar']['icone_mapa']; ?>"></i>
							<?= $d['top_bar']['endereco']; ?>
						</a>
					</div>
				</div>

				<div class="col-xl-5 col-md-4">
					<div class="top__bar-right">
						<?php foreach ($d['top_bar']['redes_sociais'] as $rede): ?>
							<a href="<?= $rede['link']; ?>" target="_blank">
								<i class="<?= $rede['icone']; ?>"></i>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header__area three">
		<div class="header__sticky">
			<div class="container">
				<div class="header__area-menubar">
					<div class="header__area-menubar-left">
						<div class="header__area-menubar-left-logo">
							<a href="index.html">
								<img class="dark-n"
									src="<?= $d['header']['logo_principal']; ?>"
									alt="Logo">
							</a>
						</div>
					</div>

					<div class="header__area-menubar-center">
						<div class="header__area-menubar-center-menu menu-responsive menu-responsive-three">
							<ul id="mobilemenu">
								<?php foreach ($d['menu'] as $item): ?>
									<li class="<?= !empty($item['submenu']) ? 'menu-item-has-children' : ''; ?>">
										<a href="<?= $item['link']; ?>">
											<?= $item['titulo']; ?>
											<?php if (!empty($item['submenu'])): ?>
												<i class="fas fa-angle-down"></i>
											<?php endif; ?>
										</a>

										<?php if (!empty($item['submenu'])): ?>
											<ul class="sub-menu">
												<?php foreach ($item['submenu'] as $sub): ?>
													<li>
														<a href="<?= $sub['link']; ?>">
															<?= $sub['titulo']; ?>
														</a>
													</li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>

					<div class="header__area-menubar-right">
						<div class="header__area-menubar-right-box">

							<div class="need-help">
								<div class="need-help-icon">
									<i class="<?= $d['header']['icone_telefone']; ?>"></i>
								</div>
								<div class="need-help-icon-txt">
									<span><?= $d['header']['texto_telefone']; ?></span>
									<a href="tel:<?= $d['header']['telefone_link']; ?>">
										<?= $d['header']['telefone']; ?>
									</a>
								</div>
							</div>

							<!-- Sidebar -->
							<div class="header__area-menubar-right-sidebar-popup home-three">
								<div class="sidebar-close-btn">
									<i class="fal fa-times"></i>
								</div>

								<div class="header__area-menubar-right-sidebar-popup-logo">
									<a href="index.html">
										<img src="<?= $d['header']['logo_sidebar']; ?>" alt="Logo">
									</a>
								</div>

								<p><?= $d['header']['descricao_sidebar']; ?></p>

								<div class="header__area-menubar-right-sidebar-popup-contact">
									<h4 class="mb-30"><?= $d['header']['titulo_contato']; ?></h4>

									<?php foreach ($d['header']['contatos'] as $contato): ?>
										<div class="header__area-menubar-right-sidebar-popup-contact-item">
											<div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
												<i class="<?= $contato['icone']; ?>"></i>
											</div>
											<div class="header__area-menubar-right-sidebar-popup-contact-item-content">
												<span><?= $contato['label']; ?></span>
												<h6>
													<a href="<?= $contato['link']; ?>">
														<?= $contato['valor']; ?>
													</a>
												</h6>
											</div>
										</div>
									<?php endforeach; ?>
								</div>

								<div class="header__area-menubar-right-sidebar-popup-social">
									<ul>
										<?php foreach ($d['top_bar']['redes_sociais'] as $rede): ?>
											<li>
												<a href="<?= $rede['link']; ?>" target="_blank">
													<i class="<?= $rede['icone']; ?>"></i>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>

							<div class="sidebar-overlay"></div>
							<div class="menu-overlay"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="banner__three">
		<div class="swiper banner__three-slider">
			<div class="swiper-wrapper">

				<div class="slider-arrow">
					<i class="swiper-button-prev fal fa-long-arrow-left"></i>
					<i class="swiper-button-next fal fa-long-arrow-right"></i>
				</div>

				<?php foreach ($d['banner']['slides'] as $slide): ?>
					<div class="banner__three-single-slide swiper-slide"
						style="background-image: url(<?= $slide['background']; ?>);">

						<div class="banner__three-shape">
							<img class="shape-1"
								data-animation="fadeInUp"
								data-delay="1.7s"
								src="<?= $d['banner']['shape_1']; ?>"
								alt="image">

							<img class="shape-2"
								data-animation="fadeInRightBig"
								data-delay="1.7s"
								src="<?= $d['banner']['shape_2']; ?>"
								alt="image">
						</div>

						<div class="container">
							<div class="row">
								<div class="col-xl-7 col-lg-8 col-md-10 col-sm-11">
									<div class="banner__three-content">
										<span class="subtitle-three"
											data-animation="fadeInUp"
											data-delay=".3s">
											<?= $slide['subtitulo']; ?>
										</span>

										<h2 data-animation="fadeInUp" data-delay=".6s">
											<?= $slide['titulo']; ?>
										</h2>

										<p data-animation="fadeInUp" data-delay=".8s">
											<?= $slide['descricao']; ?>
										</p>

										<a href="<?= $slide['botao']['link']; ?>"
											class="btn-three"
											data-animation="fadeInUp"
											data-delay="1s">
											<?= $slide['botao']['titulo']; ?>
											<i class="fas fa-plus"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>

	<div class="service__five">
		<div class="container">
			<div class="row justify-content-center gy-4">

				<?php foreach ($d['servicos']['items'] as $servico): ?>
					<div class="col-xl-4 col-lg-6">
						<div class="service__five-card">
							<div class="icon">
								<i class="<?= $servico['icone']; ?>"></i>
							</div>
							<div class="content">
								<h5><?= $servico['titulo']; ?></h5>
								<p><?= $servico['descricao']; ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>

	<div class="about__three section-padding">
		<div class="container">
			<div class="row align-items-center flex-wrap-reverse gy-4">

				<div class="col-xl-6 col-lg-7 col-md-8">
					<div class="about__three-image">
						<img src="<?= $d['sobre']['imagem_principal']; ?>"
							alt="image"
							class="animate-y-axis">

						<div class="about__three-image-shape">
							<img src="<?= $d['sobre']['imagem_shape']; ?>" alt="image">
						</div>
					</div>
				</div>

				<div class="col-xl-6 col-lg-12">
					<div class="about__three-content">
						<span class="subtitle-three">
							<?= $d['sobre']['subtitulo']; ?>
						</span>

						<h2><?= $d['sobre']['titulo']; ?></h2>

						<p><?= $d['sobre']['descricao']; ?></p>

						<div class="about__three-content-service">
							<?php foreach ($d['sobre']['lista'] as $item): ?>
								<div class="about__three-content-service-single">
									<i class="fas fa-check-circle"></i>
									<h6><?= $item; ?></h6>
								</div>
							<?php endforeach; ?>
						</div>

						<a href="<?= $d['sobre']['botao']['link']; ?>" class="btn-three">
							<?= $d['sobre']['botao']['titulo']; ?>
							<i class="fas fa-plus"></i>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- SERVICES -->
	<div class="services__three section-padding">
		<div class="container">
			<div class="row mb-50 gy-2">
				<div class="col-xl-5 col-lg-7">
					<span class="subtitle-three">
						<?= $d['servicos_dois']['subtitulo']; ?>
					</span>
					<h2><?= $d['servicos_dois']['titulo']; ?></h2>
				</div>
				<div class="col-xl-5 offset-xl-2 col-lg-5 d-flex justify-content-end">
					<p><?= $d['servicos_dois']['descricao']; ?></p>
				</div>
			</div>

			<div class="row gy-4 justify-content-center">
				<?php foreach ($d['servicos_dois']['items'] as $item): ?>
					<div class="col-xl-4 col-lg-6 col-md-12">
						<div class="single-service">
							<div class="single-service__image">
								<img src="<?= $item['imagem']; ?>" alt="image">
							</div>
							<div class="single-service__content">
								<div class="single-service__icon">
									<i class="<?= $item['icone']; ?>"></i>
								</div>
								<h5><?= $item['titulo']; ?></h5>
								<p><?= $item['descricao']; ?></p>
								<a href="<?= $item['link']; ?>" class="btn-three">
									<?= $item['botao']; ?>
									<i class="fas fa-plus"></i>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<!-- WORK PROCESS -->
	<div class="work-process__one section-padding">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-xl-6 col-lg-6">
					<div class="work-process__one-title">
						<span class="subtitle-three m-auto">
							<?= $d['processo']['subtitulo']; ?>
						</span>
						<h2><?= $d['processo']['titulo']; ?></h2>
					</div>
				</div>
			</div>

			<div class="work-process-wrapper">
				<?php foreach ($d['processo']['etapas'] as $etapa): ?>
					<div class="single-item">
						<div class="single-item__icon">
							<span class="single-item__number"><?= $etapa['numero']; ?></span>
							<i class="<?= $etapa['icone']; ?>"></i>
						</div>
						<h5><?= $etapa['titulo']; ?></h5>
						<p><?= $etapa['descricao']; ?></p>

						<?php if (!empty($etapa['seta'])): ?>
							<div class="next-arrow">
								<img src="<?= $etapa['seta']; ?>" alt="image">
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>


	<!-- CONTACT -->
	<div class="contact__one">
		<div class="contact__one-wrapper">
			<div class="contact__one-image">
				<img src="<?= $d['contato']['imagem']; ?>" alt="image">
			</div>

			<div class="contact__one-content">
				<span class="subtitle-three">
					<?= $d['contato']['subtitulo']; ?>
				</span>

				<h2><?= $d['contato']['titulo']; ?></h2>

				<form action="<?= $d['contato']['form_action']; ?>" class="contact__one-form">
					<?php foreach ($d['contato']['campos'] as $campo): ?>
						<?php if ($campo['tipo'] !== 'textarea'): ?>
							<input
								type="<?= $campo['tipo']; ?>"
								placeholder="<?= $campo['placeholder']; ?>">
						<?php else: ?>
							<textarea placeholder="<?= $campo['placeholder']; ?>"></textarea>
						<?php endif; ?>
					<?php endforeach; ?>

					<button class="btn-three" type="submit">
						<?= $d['contato']['botao']; ?>
					</button>
				</form>
			</div>
		</div>
	</div>

	<!-- TESTIMONIAL -->
	<div class="testimonial__three section-padding">
		<div class="container">
			<div class="row align-items-center mb-60 gy-5">
				<div class="col-xl-6 col-lg-6 col-md-8">
					<div class="testimonial__three-title">
						<span class="subtitle-three">
							<?= $d['depoimentos']['subtitulo']; ?>
						</span>
						<h2><?= $d['depoimentos']['titulo']; ?></h2>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-4">
					<div class="slider-arrow justify-content-md-end">
						<i class="swiper-button-prev fas fa-chevron-left"></i>
						<i class="swiper-button-next fas fa-chevron-right"></i>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-12">
					<div class="swiper testimonial__three-slider-active">
						<div class="swiper-wrapper">
							<?php foreach ($d['depoimentos']['items'] as $item): ?>
								<div class="testimonial__three-single-slider swiper-slide">
									<div class="testimonial__three-single-slider-user">
										<div class="testimonial__three-single-slider-user-image">
											<img src="<?= $item['imagem']; ?>" alt="image">
										</div>
										<div class="testimonial__three-single-slider-user-name">
											<h4><?= $item['nome']; ?></h4>
											<span><?= $item['cargo']; ?></span>
										</div>
									</div>

									<p><?= $item['texto']; ?></p>

									<div class="testimonial__three-single-slider-user-rating">
										<?php for ($i = 1; $i <= 5; $i++): ?>
											<i class="fas fa-star <?= $i > $item['avaliacao'] ? 'not-rated' : ''; ?>"></i>
										<?php endfor; ?>
									</div>

									<div class="slider-shape">
										<i class="fas fa-quote-right"></i>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- PROJECT / ABORDAGENS -->
	<div class="project__three">
		<div class="project__three-card-wrapper">
			<?php foreach ($d['abordagens']['items'] as $item): ?>
				<div class="project__three-single-card <?= !empty($item['ativo']) ? 'active' : ''; ?>">
					<div
						class="project__three-image"
						style="background-image: url(<?= $item['imagem']; ?>);">
					</div>

					<a href="<?= $item['link']; ?>" class="project__three-single-card-inner">
						<span><?= $item['categoria']; ?></span>
						<h6><?= $item['titulo']; ?></h6>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>


	<?php
	// $d vem do JSON decodificado
	?>

	<!-- WHY CHOOSE US -->
	<div class="why-choose-us__three section-padding">
		<div class="container">
			<div class="row align-items-center flex-wrap-reverse gy-4">
				<div class="col-xl-6 col-lg-6 col-md-10">
					<div class="why-choose-us__three-content">
						<span class="subtitle-three">
							<?= $d['abordagem']['subtitulo']; ?>
						</span>

						<h2><?= $d['abordagem']['titulo']; ?></h2>

						<p><?= $d['abordagem']['descricao']; ?></p>

						<div class="why-choose-us__three-content-service">
							<?php foreach ($d['abordagem']['itens'] as $item): ?>
								<div class="why-choose-us__three-content-service-single">
									<div class="service-top">
										<i class="<?= $item['icone']; ?>"></i>
										<h6><?= $item['titulo']; ?></h6>
									</div>
									<p><?= $item['descricao']; ?></p>
								</div>
							<?php endforeach; ?>
						</div>

						<a href="<?= $d['abordagem']['botao']['link']; ?>" class="btn-three">
							<?= $d['abordagem']['botao']['titulo']; ?>
							<i class="fas fa-plus"></i>
						</a>
					</div>
				</div>

				<div class="col-xl-6 col-lg-6 col-md-12">
					<div class="why-choose-us__three-image">
						<img src="<?= $d['abordagem']['imagem']; ?>" alt="image">
						<a href="<?= $d['abordagem']['video']; ?>" class="video-btn video-popup video-pulse">
							<i class="fas fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- BLOG -->
	<div class="blog__three section-padding">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-xl-6 col-lg-6">
					<div class="blog__three-title">
						<span class="subtitle-three">
							<?= $d['blog']['subtitulo']; ?>
						</span>
						<h2><?= $d['blog']['titulo']; ?></h2>
					</div>
				</div>
			</div>

			<div class="swiper blog__three-slide-active">
				<div class="swiper-wrapper">
					<?php foreach ($d['blog']['posts'] as $post): ?>
						<div class="blog__three-single-blog swiper-slide">
							<div class="blog__three-single-blog-image">
								<img src="<?= $post['imagem']; ?>" alt="image">
							</div>

							<div class="blog__three-single-blog-date">
								<span><?= $post['data']; ?></span>
							</div>

							<div class="blog__three-single-blog-content">
								<div class="blog__three-single-blog-content-top">
									<span>
										<i class="far fa-user"></i>
										<?= $post['autor']; ?>
									</span>
									<span>
										<i class="far fa-comment-dots"></i>
										<?= $post['comentarios']; ?>
									</span>
								</div>

								<h5>
									<a href="<?= $post['link']; ?>" class="blog-heading">
										<?= $post['titulo']; ?>
									</a>
								</h5>

								<a href="<?= $post['link']; ?>" class="blog-btn">
									Leia Mais
									<i class="fas fa-plus"></i>
								</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<div class="footer__three">
		<div class="container">
			<div class="footer-wrapper">

				<div class="footer__three-widget">
					<div class="footer__three-widget-about">
						<a href="#">
							<img src="<?= $d['footer']['logo']; ?>" alt="image">
						</a>
						<p><?= $d['footer']['descricao']; ?></p>
					</div>
				</div>

				<div class="footer__three-widget">
					<h5><?= $d['footer']['links']['titulo']; ?></h5>
					<div class="footer__three-widget-solution">
						<ul>
							<?php foreach ($d['footer']['links']['items'] as $link): ?>
								<li><a href="<?= $link['url']; ?>"><?= $link['titulo']; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>

				<div class="footer__three-widget">
					<h5><?= $d['footer']['servicos']['titulo']; ?></h5>
					<div class="footer__three-widget-solution">
						<ul>
							<?php foreach ($d['footer']['servicos']['items'] as $servico): ?>
								<li>
									<a href="<?= $servico['url']; ?>">
										<i class="far fa-chevron-double-right"></i>
										<?= $servico['titulo']; ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>

				<div class="footer__three-widget">
					<h5><?= $d['footer']['contato']['titulo']; ?></h5>
					<div class="footer__three-widget-contact-info">
						<div class="footer__three-widget-contact-info-item">
							<div class="footer__three-widget-contact-info-item-txt">
								<span>Email</span>
								<a href="mailto:<?= $d['footer']['contato']['email']; ?>">
									<?= $d['footer']['contato']['email']; ?>
								</a>
							</div>
						</div>
						<div class="footer__three-widget-contact-info-item">
							<div class="footer__three-widget-contact-info-item-txt">
								<span>Telefone</span>
								<a href="tel:<?= $d['footer']['contato']['telefone']; ?>">
									<?= $d['footer']['contato']['telefone']; ?>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="copyright__one three">
			<div class="container">
				<div class="row justify-content-between copyright__one-container-area">
					<div class="col-xl-5 col-lg-6">
						<div class="copyright__one-left">
							<p><?= $d['footer']['copyright']; ?></p>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6">
						<div class="copyright__one-right">
							<?php foreach ($d['footer']['politicas'] as $p): ?>
								<a href="<?= $p['url']; ?>"><?= $p['titulo']; ?></a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="scroll-up style-three">
		<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>



	<script src="https://html.nextwpcook.com/cosion/assets/js/jquery-3.7.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/bootstrap.min.js"></script>
	<!-- Counter Up JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/jquery.counterup.min.js"></script>
	<!-- Popper JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/popper.min.js"></script>
	<!-- Progressbar JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/progressbar.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Swiper Bundle JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/swiper-bundle.min.js"></script>
	<!-- Slick JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/slick.min.js"></script>
	<!-- Isotope JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/isotope.pkgd.min.js"></script>
	<!-- Fancy Box -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/jquery.fancybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/jquery.waypoints.min.js"></script>
	<!-- Custom JS -->
	<script src="https://html.nextwpcook.com/cosion/assets/js/main.js"></script>
</body>

</html>