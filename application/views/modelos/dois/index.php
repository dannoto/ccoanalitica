<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $d['seo']['title'] ?></title>
    <meta name="description" content="<?= $d['seo']['description'] ?>" />
    <meta name="keywords" content="<?= $d['seo']['keywords'] ?>" />
    <meta name="author" content="<?= $d['seo']['author'] ?>" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>dist/modelos/dois/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>dist/modelos/dois/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>dist/modelos/dois/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?= base_url() ?>dist/modelos/dois/assets/images/favicons/site.webmanifest" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/meciy-icons/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/vendors/nice-select/nice-select.css" />

    <style>
        :root {
            --meciy-base: <?= $d['schema']['background'] ?> !important;
            --meciy-primary: <?= $d['schema']['primary-color'] ?> !important;


        }
    </style>

    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/css/meciy.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/dois/assets/css/meciy-responsive.css" />

    <style>
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">

        <!-- Header Top -->
        <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-wrapper">
                    <div class="main-header__top-inner">
                        <div class="main-header__top-left">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon"><i class="icon-phone-call"></i></div>
                                    <div class="text">
                                        <p><a href="tel:<?= str_replace(['(', ')', ' ', '-'], '', $d['header']['telefone_top']) ?>"><?= $d['header']['telefone_top'] ?></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="icon-message"></i></div>
                                    <div class="text">
                                        <p><a href="mailto:<?= $d['header']['email_top'] ?>"><?= $d['header']['email_top'] ?></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__logo">

                            <svg
                                width="260"
                                height="48"
                                viewBox="0 0 260 48"
                                xmlns="http://www.w3.org/2000/svg"
                                role="img"
                                aria-label="Sua Logo Aqui">
                                <style>
                                    .logo-icon {
                                        fill: <?= $d['schema']['primary-color'] ?>;
                                    }

                                    .logo-text {
                                        fill: <?= $d['schema']['primary-color'] ?>;
                                        font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
                                        font-weight: 600;
                                        font-size: 22px;
                                        letter-spacing: -0.3px;
                                    }
                                </style>

                                <!-- ÍCONE -->
                                <g class="logo-icon" transform="translate(0,4)">
                                    <rect x="0" y="0" rx="8" ry="8" width="40" height="40" />
                                    <path
                                        d="M12 20 L18 26 L28 14"
                                        fill="none"
                                        stroke="white"
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>

                                <!-- TEXTO -->
                                <text
                                    x="54"
                                    y="31"
                                    class="logo-text">
                                    Sua Logo Aqui
                                </text>
                            </svg>

                        </div>
                        <div class="main-header__top-right">
                            <ul class="list-unstyled main-header__contact-list-two">
                                <li>
                                    <div class="icon"><i class="icon-location"></i></div>
                                    <div class="text">
                                        <p><?= $d['header']['localizacao'] ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="icon-back-in-time"></i></div>
                                    <div class="text">
                                        <p><?= $d['header']['horario_top'] ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Principal -->
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <?php foreach ($d['header']['navbar'] as $item): ?>
                                        <li><a href="<?= $item['link'] ?>"><?= $item['texto'] ?><span class="main-menu-border"></span></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__btn-box">
                                <a href="<?= $d['header']['botao_agendar']['link'] ?>" class="thm-btn main-menu__btn">
                                    <?= $d['header']['botao_agendar']['texto'] ?> <i class="icon-right-arrow1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Slider Principal -->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {"el": "#main-slider-pagination", "type": "bullets", "clickable": true}, "navigation": {"nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev"}, "autoplay": {"delay": 5000}}'>
                <div class="swiper-wrapper">
                    <?php foreach ($d['slider']['slides'] as $slide): ?>
                        <div class="swiper-slide">
                            <div class="image-layer" style="background-image: url(<?= base_url() ?><?= $slide['imagem'] ?>);"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider__content">
                                            <!-- <div class="main-slider__shape-one float-bob-x" style="background: orange"></div> -->
                                            <h2 class="main-slider__title"><?= $slide['titulo'] ?></h2>
                                            <div class="main-slider__btn-box">
                                                <a href="<?= $slide['botao']['link'] ?>" class="thm-btn main-slider__btn-one">
                                                    <?= $slide['botao']['texto'] ?> <i class="icon-right-arrow1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="icon-right-arrow"></i></div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="icon-right-arrow1"></i></div>
                </div>
            </div>
        </section>


        <!-- Sobre -->
        <section class="about-one" id="sobre">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft">
                                <div class="about-one__img">
                                    <img src="<?= base_url() ?><?= $d['sobre']['imagem_secundaria'] ?>" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img style="height:350px;object-fit:cover" src="<?= base_url() ?><?= $d['sobre']['imagem_principal'] ?>" alt="">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?= $d['sobre']['subtitulo'] ?></span>
                                <h2 class="section-title__title"><?= $d['sobre']['titulo'] ?></h2>
                            </div>
                            <p class="about-one__text-1"><?= $d['sobre']['descricao'] ?></p>

                            <div class="about-one__btn-box">
                                <a href="<?= $d['sobre']['botao_agendar']['link'] ?>" class="thm-btn about-one__btn">
                                    <?= $d['sobre']['botao_agendar']['texto'] ?> <i class="icon-right-arrow1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Serviços -->
        <section class="services-one" id="servicos">
            <div class="services-one__bg" style="background-image: url(<?= base_url() ?><?= $slide['imagem'] ?>);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?= $d['servicos']['subtitulo'] ?></span>
                    <h2 class="section-title__title"><?= $d['servicos']['titulo'] ?></h2>
                </div>
                <div class="row">
                    <?php foreach ($d['servicos']['items'] as $index => $servico): ?>
                        <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="<?= ($index + 1) * 100 ?>ms">
                            <div class="services-one__single">
                                <div class="services-one__content">
                                    <h3 class="services-one__title"><?= $servico['titulo'] ?></h3>
                                    <p class="services-one__text"><?= $servico['descricao'] ?></p>
                                </div>
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="<?= base_url() ?><?= $servico['imagem'] ?>" alt="">
                                    </div>
                                    <div class="services-one__icon">
                                        <span class="icon-happy"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Contadores -->

        <section class="counter-one">
            <div class="container">
                <ul class="list-unstyled counter-one__list">
                    <?php foreach ($d['contadores'] as $contador): ?>
                        <li>
                            <div class="counter-one__icon">
                                <span class="icon-star"></span>
                            </div>
                            <h2 class="counter-one__title"><?= $contador['texto'] ?></h2>
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="<?= $contador['numero'] ?>"><?= $contador['numero'] ?></h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    <!-- <li>
                        <div class="counter-one__icon">
                            <span class="icon-family"></span>
                        </div>
                        <h4 class="counter-one__title">Psicologia da <br> Família</h4>
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="2710">00</h3>
                            <span class="counter-one__letter">k</span>
                        </div>
                    </li>
                    <li>
                        <div class="counter-one__icon">
                            <span class="icon-communication"></span>
                        </div>
                        <h4 class="counter-one__title">Terapia em <br> Grupo</h4>
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="121">00</h3>
                            <span class="counter-one__letter">k</span>
                            <span class="counter-one__plus">+</span>
                        </div>
                    </li>
                    <li>
                        <div class="counter-one__icon">
                            <span class="icon-discussion"></span>
                        </div>
                        <h4 class="counter-one__title">Terapia de <br> Casal</h4>
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="27">00</h3>
                            <span class="counter-one__letter">k</span>
                        </div>
                    </li> -->
                </ul>
            </div>
        </section>

        <!-- Por Que Escolher -->
        <section class="why-choose-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?= $d['porque']['subtitulo'] ?></span>
                                <h2 class="section-title__title"><?= $d['porque']['titulo'] ?></h2>
                            </div>
                            <p class="why-choose-one__text-2"><?= $d['porque']['descricao'] ?></p>
                            <div class="why-choose-one__points-box">
                                <ul class="list-unstyled why-choose-one__points">
                                    <?php foreach (array_slice($d['porque']['pontos'], 0, 2) as $ponto): ?>
                                        <li>
                                            <div class="icon"><span class="<?= $ponto['icone'] ?>"></span></div>
                                            <div class="text">
                                                <h5><?= $ponto['titulo'] ?></h5>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="why-choose-one__btn-and-call">
                                <div class="why-choose-one__call">
                                    <div class="why-choose-one__call-icon"><span class="fas fa-phone-alt"></span></div>
                                    <div class="why-choose-one__call-content">
                                        <h4 class="why-choose-one__call-number"><a href="tel:<?= str_replace(['(', ')', ' ', '-'], '', $d['porque']['telefone_chamada']) ?>"><?= $d['porque']['telefone_chamada'] ?></a></h4>
                                        <p class="why-choose-one__call-sub-title">Fale com os nossos especialistas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="why-choose-one__img-box">
                                <div class="why-choose-one__img">
                                    <img src="<?= base_url() ?><?= $d['porque']['imagem_principal'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="appointments-one">
            <div class="container">
                <div class="appointments-one__inner wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="appointments-one__big-text img-bounce">Psicologista</div>
                    <div class="appointments-one__img">
                        <img src="<?= $d['sobre']['imagem_secundaria'] ?>" alt="">
                    </div>
                    <div class="appointments-one__left">
                        <div class="appointments-one__icon">
                            <span class="icon-brain"></span>
                        </div>
                        <div class="appointments-one__content">
                            <h3 class="appointments-one__title"><a href="#contato">Consulta Online</a></h3>
                        </div>
                    </div>
                    <div class="appointments-one__btn-box">
                        <a href="#LINK_WHATSAPP" class="appointments-one__btn thm-btn">Agendar uma Consulta</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Equipe -->
      
        <section class="team-one" id="equipe">
            <div class="team-one__shape-1 float-bob-y">
                <img src="<?= base_url() ?><?= $d['sobre']['imagem_secundaria'] ?>" alt="">
            </div>
            <div class="container">
                <div class="team-one__inner">
                    <div class="team-one__big-text">Team</div>
                    <div class="section-title text-center">
                        <span class="section-title__tagline"><?= $d['equipe']['subtitulo'] ?></span>
                        <h2 class="section-title__title"><?= $d['equipe']['titulo'] ?></h2>
                    </div>
                    <div class="row">
                        <?php foreach ($d['equipe']['items'] as $index => $membro): ?>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img style="height:310px;max-height:310px;object-fit:cover" src="<?= base_url() ?><?= $membro['imagem'] ?>" alt="">
                                        <ul class="list-unstyled team-one__social-two">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        </ul>
                                        <ul class="list-unstyled team-one__social">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name"><a href="team-details.html"><?= $membro['nome'] ?></a></h4>
                                        <p class="team-one__sub-title"><?= $membro['especialidade'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="team-one__single">
                                <div class="team-one__img">
                                    <img src="assets/images/team/team-1-2.png" alt="">
                                    <ul class="list-unstyled team-one__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__content">
                                    <h4 class="team-one__name"><a href="team-details.html">Alberto Luiz</a></h4>
                                    <p class="team-one__sub-title">Psicanalista</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="team-one__single">
                                <div class="team-one__img">
                                    <img src="assets/images/team/team-1-3.png" alt="">
                                    <ul class="list-unstyled team-one__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__content">
                                    <h4 class="team-one__name"><a href="team-details.html">Paula Nogueira</a></h4>
                                    <p class="team-one__sub-title">Psicopedagoga</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="team-one__single">
                                <div class="team-one__img">
                                    <img src="assets/images/team/team-1-4.png" alt="">
                                    <ul class="list-unstyled team-one__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__content">
                                    <h4 class="team-one__name"><a href="team-details.html">Júlia Souza</a></h4>
                                    <p class="team-one__sub-title">Psicoterapeuta</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Depoimentos -->




        <section class="testimonial-one" id="depoimentos">
            <div class="testimonial-one__side-img">
                <img src="<?= base_url() ?><?= $slide['imagem'] ?>" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Depoimentos</span>
                    <h2 class="section-title__title">Veja o que nossos pacientes têm a dizer<br></h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="testimonial-one__left">
                            <div class="testimonial-one__left-img">
                                <img src="<?= base_url() ?><?= $slide['imagem'] ?>" alt="">
                                <ul class="list-unstyled testimonial-one__counter">
                                    <li>
                                        <div class="testimonial-one__counter-icon">
                                            <span class="icon-happy"></span>
                                        </div>
                                        <div class="testimonial-one__counter-content">
                                            <h3 class="odometer" data-count="2100">00</h3>
                                            <h5>Projetos Concluídos</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__counter-icon">
                                            <span class="icon-medal"></span>
                                        </div>
                                        <div class="testimonial-one__counter-content">
                                            <h3 class="odometer" data-count="120">00</h3>
                                            <h5>Prêmios</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__counter-icon">
                                            <span class="icon-good-review"></span>
                                        </div>
                                        <div class="testimonial-one__counter-content">
                                            <h3 class="odometer" data-count="1900">00</h3>
                                            <h5>Clientes Felizes</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__right-shape-1"
                                style="background-image: url(<?= base_url() ?><?= $slide['imagem'] ?>);">
                            </div>
                            <div class="testimonial-one__slider">

                                <div class="swiper-container" id="testimonial-one__thumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__img-holder">
                                                <img src="<?= base_url() ?>dist/imagens/depoimentos/psicologia/depoimento-homem-2.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__img-holder">
                                                <img src="<?= base_url() ?>dist/imagens/depoimentos/psicologia/depoimento-homem-2.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__img-holder">
                                                <img src="<?= base_url() ?>dist/imagens/depoimentos/psicologia/depoimento-homem-2.webp" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__main-content">
                                    <div class="swiper-container" id="testimonial-one__carousel">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial-one__content-box">
                                                    <p class="testimonial-one__text">Cheguei perdida, sem saber por onde começar. Hoje consigo organizar meus pensamentos e enxergar soluções com mais clareza. A terapia mudou minha rotina. </p>
                                                    <div class="testimonial-one__client-info-box">
                                                        <div class="testimonial-one__client-info">
                                                            <div class="testimonial-one__client-img">
                                                                <img src="<?= base_url() ?>dist/imagens/depoimentos/psicologia/depoimento-homem-2.webp"
                                                                    alt="">
                                                            </div>
                                                            <div class="testimonial-one__client-content">
                                                                <h4 class="testimonial-one__client-name">Amanda Silva</h4>
                                                                <p class="testimonial-one__client-sub-title">Paciente</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-one__client-review">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-one__content-box">
                                                    <p class="testimonial-one__text">Aprendi a reconhecer meus limites e a cuidar de mim. O espaço é acolhedor e me sinto realmente ouvido. Minha evolução tem sido constante. </p>
                                                    <div class="testimonial-one__client-info-box">
                                                        <div class="testimonial-one__client-info">
                                                            <div class="testimonial-one__client-img">
                                                                <img src="<?= base_url() ?>dist/imagens/depoimentos/psicologia/depoimento-homem-2.webp"
                                                                    alt="">
                                                            </div>
                                                            <div class="testimonial-one__client-content">
                                                                <h4 class="testimonial-one__client-name">Carlos Augusto
                                                                </h4>
                                                                <p class="testimonial-one__client-sub-title">Paciente</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-one__client-review">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-one__content-box">
                                                    <p class="testimonial-one__text">O acompanhamento tem me ajudado a entender minhas emoções e lidar melhor com a ansiedade. Me sinto mais segura e confiante a cada sessão.</p>
                                                    <div class="testimonial-one__client-info-box">
                                                        <div class="testimonial-one__client-info">
                                                            <div class="testimonial-one__client-img">
                                                                <img src="<?= base_url() ?>dist/imagens/depoimentos/psicologia/depoimento-homem-2.webp"
                                                                    alt="">
                                                            </div>
                                                            <div class="testimonial-one__client-content">
                                                                <h4 class="testimonial-one__client-name">Maria Luiza</h4>
                                                                <p class="testimonial-one__client-sub-title">Paciente</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-one__client-review">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contato -->
        <section class="contact-page" id="contato">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?= $d['contato']['subtitulo'] ?></span>
                    <h2 class="section-title__title"><?= $d['contato']['titulo'] ?></h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="contact-page__contact-list-box">
                                <ul class="list-unstyled contact-page__contact-list">
                                    <li>
                                        <div class="contact-page__contact-list-icon"><span class="icon-map-pin"></span></div>
                                        <div class="contact-page__contact-list-content">
                                            <h4 class="contact-page__contact-list-title">Endereço:</h4>
                                            <p class="contact-page__contact-list-text"><?= nl2br($d['contato']['endereco']) ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-page__contact-list-icon"><span class="icon-call"></span></div>
                                        <div class="contact-page__contact-list-content">
                                            <h4 class="contact-page__contact-list-title">Telefone</h4>
                                            <p class="contact-page__contact-list-text">
                                                <a href="tel:<?= str_replace(['(', ')', ' ', '-'], '', $d['contato']['telefone1']) ?>"><?= $d['contato']['telefone1'] ?></a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-page__contact-list-icon"><span class="icon-black-back-closed-envelope-shape"></span></div>
                                        <div class="contact-page__contact-list-content">
                                            <h4 class="contact-page__contact-list-title">E-mail</h4>
                                            <p class="contact-page__contact-list-text">
                                                <a href="mailto:<?= $d['contato']['email1'] ?>"><?= $d['contato']['email1'] ?></a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <form action="assets/inc/sendemail.php"
                                class="contact-page-form__form-box contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-form__input-box">
                                            <input type="text" placeholder="Seu Nome" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-form__input-box">
                                            <input type="email" placeholder="Seu E-mail" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-form__input-box">
                                            <input type="text" placeholder="Seu WhatsApp" name="Phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-form__input-box">
                                            <input type="text" placeholder="Assunto" name="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-page-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Digite aqui o que você precisa..."></textarea>
                                        </div>
                                        <div class="contact-page-form__btn-box">
                                            <button type="submit" class="thm-btn contact-page-form__btn">Enviar Mensagem</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <svg
                                        width="260"
                                        height="48"
                                        viewBox="0 0 260 48"
                                        xmlns="http://www.w3.org/2000/svg"
                                        role="img"
                                        aria-label="Sua Logo Aqui">
                                        <style>
                                            .logo-icon {
                                                fill: <?= $d['schema']['primary-color'] ?>;
                                            }

                                            .logo-text {
                                                fill: <?= $d['schema']['primary-color'] ?>;
                                                font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
                                                font-weight: 600;
                                                font-size: 22px;
                                                letter-spacing: -0.3px;
                                            }
                                        </style>

                                        <!-- ÍCONE -->
                                        <g class="logo-icon" transform="translate(0,4)">
                                            <rect x="0" y="0" rx="8" ry="8" width="40" height="40" />
                                            <path
                                                d="M12 20 L18 26 L28 14"
                                                fill="none"
                                                stroke="white"
                                                stroke-width="3"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>

                                        <!-- TEXTO -->
                                        <text
                                            x="54"
                                            y="31"
                                            class="logo-text">
                                            Sua Logo Aqui
                                        </text>
                                    </svg>
                                </div>
                                <p class="footer-widget__about-text"><?= $d['footer']['descricao'] ?></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp">
                            <div class="footer-widget__column footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Contato</h4>
                                </div>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <div class="text">
                                            <p><a href="mailto:<?= $d['footer']['email'] ?>"><?= $d['footer']['email'] ?></a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="text">
                                            <p><?= $d['footer']['endereco'] ?></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="footer-widget__open-hours">
                                    <h5>Horário de Funcionamento:</h5>
                                    <p><?= $d['footer']['horario'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__instagram">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Serviços</h4>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__instagram">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Páginas</h4>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text"><?= $d['footer']['copyright'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Botão WhatsApp Flutuante -->
    <a href="<?= $d['header']['whatsapp_float'] ?>" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="<?= base_url() ?>dist/modelos/dois/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/dois/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/dois/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/dois/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/dois/assets/vendors/odometer/odometer.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/dois/assets/vendors/swiper/swiper.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/dois/assets/vendors/wow/wow.js"></script>
    <script src="<?= base_url() ?>dist/modelos/dois/assets/js/meciy.js"></script>
</body>

</html>