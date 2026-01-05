<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $d['seo']['title'] ?></title>
    <meta name="description" content="<?= $d['seo']['description'] ?>" />
    <meta name="author" content="<?= $d['seo']['author'] ?>" />
    <meta name="keywords" content="<?= $d['seo']['keywords'] ?>" />

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?><?= $d['seo']['favicon'] ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?><?= $d['seo']['favicon'] ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?><?= $d['seo']['favicon'] ?>" />
    <link rel="manifest" href="<?= base_url() ?>dist/modelos/tres/assets/images/favicons/site.webmanifest" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/mediox-icons/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/slick/css/slick.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/css/mediox.css" />

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>

    <div class="page-wrapper">

        <header class="main-header main-header--three sticky-header sticky-header--normal">
            <div class="container-fluid">

                <div class="main-header__inner">

                    <div class="main-header__left">

                        <div class="main-header__logo logo-retina">

                            <a href="index.html">
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

                            </a>

                            <div class="main-header__logo__shape"></div>

                        </div>

                        <div class="main-header__sidebar-btn sidebar-btn__toggler">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>

                    </div>
                    <div class="main-header__right">
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <?php foreach ($d['header']['navbar'] as $navbar) { ?>
                                    <li class="scrollToLink"><a href="<?= $navbar['link'] ?>"><?= $navbar['texto'] ?></a> </li>
                                <?php } ?>
                            </ul>
                        </nav>
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <section class="main-slider-two" id="home">
            <div class="main-slider-two__carousel mediox-owl__carousel--with-counter mediox-owl__carousel--basic-nav owl-carousel" data-owl-options='{ "loop": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "items": 1,"autoplay": true,  "smartSpeed": 1000,  "nav": true,"navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],"dots": false,  "margin": 0 }'>
                <?php foreach ($d['hero']['slides'] as $hero) { ?>
                    <div class="item">
                        <div class="main-slider-two__item">

                            <div class="main-slider-two__item__shape">

                                <div class="main-slider-two__item__shape__bg" style="background-image: url(<?= $hero['imagem'] ?>);"></div>

                            </div>

                            <div class="main-slider-two__wrapper">

                                <div class="main-slider-two__bg" style="background-image: url(<?= $hero['imagem'] ?>);"></div>

                                <div class="main-slider-two__container container">

                                    <div class="row">

                                        <div class="col-xxl-9 col-xl-11">

                                            <div class="main-slider-two__content">

                                                <p class="main-slider-two__sub-title"><?= $hero['subtitle'] ?></p>
                                                <h2 class="main-slider-two__title">

                                                    <?= $hero['title'] ?>

                                                    <span class="main-slider-two__title__overlay-group">

                                                        <span class="main-slider-two__title__overlay"></span>

                                                        <span class="main-slider-two__title__overlay"></span>

                                                        <span class="main-slider-two__title__overlay"></span>

                                                        <span class="main-slider-two__title__overlay"></span>

                                                        <span class="main-slider-two__title__overlay"></span>

                                                        <span class="main-slider-two__title__overlay"></span>

                                                    </span>

                                                </h2>
                                                <p class="main-slider-two__text"><?= $hero['text'] ?></p>
                                                <div class="main-slider-two__button-group">

                                                    <div class="main-slider-two__button-1">

                                                        <a href="<?= $hero['botao2']['link'] ?>" class="mediox-btn main-slider-two__btn">

                                                            <span><?= $hero['botao1']['texto'] ?></span>

                                                            <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>

                                                        </a>

                                                    </div>

                                                    <div class="main-slider-two__button-2">

                                                        <a href="<?= $hero['botao2']['link'] ?>" class="mediox-btn main-slider-two__btn">

                                                            <span><?= $hero['botao2']['texto'] ?></span>

                                                            <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>

                                                        </a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="main-slider-two__info">

                                    <div class="main-slider-two__info__inner">

                                        <div class="main-slider-two__call">

                                            <span class="main-slider-two__call__icon">

                                                <i class="icon-telephone"></i>

                                            </span><!-- /.main-slider-two__call__icon -->

                                            <div class="main-slider-two__call__content">

                                                <p class="main-slider-two__call__title"><?= $d['hero']['atendimento']['titulo'] ?></p><!-- /.call__title -->

                                                <h4 class="main-slider-two__call__number">

                                                    <a href="tel:<?= $d['hero']['atendimento']['telefone'] ?>"><?= $d['hero']['atendimento']['telefone'] ?></a>

                                                </h4><!-- /.main-slider-two__call__number -->

                                            </div><!-- /.main-slider-two__call__content -->

                                        </div><!-- /.main-slider-two__call -->

                                        <div class="main-slider-two__social">

                                            <h3 class="main-slider-two__social__title">Siga-nos</h3><!-- /.social__title -->

                                            <div class="main-slider-two__social__links">

                                                <?php foreach ($d['hero']['social'] as $social) { ?>
                                                    <a href="<?= $social['link'] ?>">
                                                        <i class="<?= $social['icone'] ?>" aria-hidden="true"></i>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </section>




        <section class="features-one section-space-bottom">
            <div class="features-one__bg" style="background-image: url(assets/images/shapes/features-bg-1-1.png);"></div>
            <div class="container">
                <div class="row gutter-y-30">
                    <?php foreach ($d['features'] as $feature) { ?>
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="features-one__card">
                                <div class="features-one__card__content">
                                    <span class="features-one__card__icon">
                                        <i class="icon-doctor-3"></i>
                                    </span>
                                    <h3 class="features-one__card__title"><?= $feature['title'] ?></h3>
                                    <p class="features-one__card__text"><?= $feature['text'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>



        <section class="about-two section-space-two" id="about">
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="about-two__image">
                            <div class="about-two__image__one">
                                <img src="<?= $d['sobre']['imagem_principal'] ?>" alt="about">
                            </div>
                            <div class="about-two__image__two">
                                <div class="about-two__image__two__inner">
                                    <img src="<?= $d['sobre']['imagem_secundaria1'] ?>" alt="about">
                                    <div class="about-two__image__two__shape-box">
                                        <img src="<?= $d['sobre']['imagem_secundaria2'] ?>" alt="shape" class="about-two__image__two__shape">
                                        <div class="about-two__image__two__bg-top">
                                            <div class="about-two__image__two__bg-top__1">
                                                <div class="about-two__image__two__bg-top__2"></div>
                                            </div>
                                        </div>
                                        <div class="about-two__image__two__bg-bottom">
                                            <div class="about-two__image__two__bg-bottom__1">
                                                <div class="about-two__image__two__bg-bottom__2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="<?= base_url() ?><?= $d['sobre']['imagem_secundaria2'] ?>" alt="about" class="about-two__image__three">
                            <div class="about-two__image__shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-two__content">
                            <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">
                                <div class="sec-title__top">
                                    <h6 class="sec-title__tagline"><?= $d['sobre']['subtitulo'] ?></h6>
                                </div>
                                <h3 class="sec-title__title"><?= $d['sobre']['titulo'] ?></h3>
                            </div>
                            <div class="about-two__description wow fadeInUp" data-wow-duration="1500ms">
                                <p class="about-two__text"><?= $d['sobre']['descricao'] ?></p>
                            </div>
                            <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-duration="1500ms">
                                <?php foreach ($d['sobre']['lista'] as $lista) { ?>
                                    <li>
                                        <span class="about-two__list__icon">
                                            <i class="icon-check"></i>
                                        </span>
                                        <?= $lista ?>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="about-two__button wow fadeInUp" data-wow-duration="1500ms">
                                <a href="<?= $d['sobre']['botao']['link'] ?>" class="mediox-btn">
                                    <span><?= $d['sobre']['botao']['titulo'] ?></span>
                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/about-shape-2-1.png" alt="shape" class="about-two__shape">
        </section>

        <section class="funfact-one funfact-one--home2">

            <div class="container">

                <div class="funfact-one__inner">

                    <div class="funfact-one__inner__bg" style="background-image: url(assets/images/resources/funfact-bg-2-1.jpg);"></div><!-- /.funfact-one__inner__bg -->

                    <div class="funfact-one__row">
                        <?php foreach ($d['contadores']['items'] as $item) { ?>

                            <div class="funfact-one__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="funfact-one__item__number count-box">
                                    <span class="count-text" data-stop="<?= $item['numero'] ?>" data-speed="1500"></span>
                                    <span><?= $item['simbolo'] ?></span>
                                </h3>
                                <p class="funfact-one__item__title"><?= $item['titulo'] ?></p>
                            </div>

                        <?php } ?>


                    </div>

                </div>

            </div>

        </section>

        <section class="services-two section-space-bottom" id="services">
            <div class="services-two__bg" style="background-image: url(assets/images/shapes/services-bg-2-1.png);"></div>
            <div class="container">
                <div class="services-two__top">
                    <div class="row gutter-y-40 align-items-end">
                        <div class="col-xl-9 col-lg-8">
                            <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">
                                <div class="sec-title__top">
                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-2.png" alt="<?= $d['servicos']['subtitulo'] ?>" class="sec-title__img">
                                    <h6 class="sec-title__tagline"><?= $d['servicos']['subtitulo'] ?></h6><!-- /.sec-title__tagline -->
                                </div><!-- /.sec-title__top -->
                                <h3 class="sec-title__title"><?= $d['servicos']['titulo'] ?></h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                        </div><!-- /.col-xl-9 col-lg-8 -->
                        <div class="col-xl-3 col-lg-4">
                            <div class="services-two__custome-navs"></div><!-- /.services-two__cutome-navs -->
                        </div><!-- /.col-xl-3 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.services-two__top -->
            </div><!-- /.container -->
            <div class="services-two__container container">

                <div class="services-two__carousel mediox-owl__carousel mediox-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{

                            "items": 1,

                            "margin": 10,

                            "loop": true,

                            "smartSpeed": 700,

                            "navContainer": ".services-two__custome-navs",

                            "nav": true,

                            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],

                            "dots": false,

                            "autoplay": true,

                            "responsive": {

                                "0": {

                                    "items": 1,

                                    "margin": 10

                                },

                                "768": {

                                    "items": 2,

                                    "margin": 30

                                },

                                "992": {

                                    "items": 2,

                                    "margin": 30

                                },

                                "1200": {

                                    "items": 2.05,

                                    "margin": 30

                                },

                                "1300": {

                                    "items": 2.15,

                                    "margin": 30

                                },

                                "1400": {

                                    "items": 2.2,

                                    "margin": 30

                                },

                                "1500": {

                                    "items": 2.3,

                                    "margin": 30

                                },

                                "1600": {

                                    "items": 2.4,

                                    "margin": 30

                                },

                                "1700": {

                                    "items": 2.5,

                                    "margin": 30

                                },

                                "1800": {

                                    "items": 2.61,

                                    "margin": 30

                                }

                            }

                        }'>
                    <?php foreach ($d['servicos']['items'] as $servico) { ?>
                        <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                            <div class="service-card-two">

                                <div class="service-card-two__bg"></div><!-- /.service-card-two__bg -->

                                <div class="service-card-two__content">

                                    <img src="<?= $servico['imagem'] ?>" alt="<?= $servico['titulo'] ?>" style="width: 260px;max-width: 400px;object-fit:cover" class="service-card-two__image">

                                    <h3 class="service-card-two__title"><a href="<?= $servico['link'] ?>"><?= $servico['titulo'] ?></a></h3><!-- /.service-card-two__title -->

                                    <a href="<?= $servico['link'] ?>" class="service-card-two__link">

                                        <i class="icon-up-right-arrow"></i>

                                    </a><!-- /.service-card-two__link -->

                                </div><!-- /.service-card-two__content -->

                            </div><!-- /.service-card-two -->

                        </div><!-- /.item -->
                    <?php } ?>


                </div><!-- /.services-two__carousel -->

            </div><!-- /.services-two__container container -->

            <!-- <div class="container">

                <div class="services-two__bottom wow fadeInUp" data-wow-duration="1500ms">

                    <p class="services-two__bottom__text">Click any of the above services to learn more <a href="services.html">View Our All Services</a></p>

                </div>

            </div> -->

            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/services-shape-2-1.png" alt="shape" class="services-two__shape">

        </section>



        <section class="why-choose-two section-space-top-two">

            <div class="container">

                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">

                    <div class="sec-title__top">



                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="why choose us" class="sec-title__img">





                        <h6 class="sec-title__tagline">why choose us</h6><!-- /.sec-title__tagline -->



                    </div><!-- /.sec-title__top -->

                    <h3 class="sec-title__title">Weâre Passionate, <br> Dedicated And Friendly</h3><!-- /.sec-title__title -->

                </div><!-- /.sec-title -->

                <div class="why-choose-two__inner">

                    <div class="why-choose-two__bg">

                        <div class="why-choose-two__bg__inner" style="background-image: url(assets/images/shapes/why-choose-bg-2-1.png);"></div>

                    </div><!-- /.why-choose-two__bg -->

                    <div class="why-choose-two__tab-box tabs-box">

                        <ul class="tab-buttons">

                            <li data-tab="#why-choose-two01" class="tab-btn active-btn">emargency case</li>

                            <li data-tab="#why-choose-two02" class="tab-btn">professional skills</li>

                            <li data-tab="#why-choose-two03" class="tab-btn">opening hours</li>

                        </ul><!-- /.tab-buttons -->

                        <div class="tabs-content">

                            <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="why-choose-two01" style="display: block;">

                                <div class="row gutter-y-40">

                                    <div class="why-choose-two__tab-col-1">

                                        <div class="why-choose-two__image">

                                            <div class="why-choose-two__image__one">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-1.jpg" alt="why choose">

                                            </div><!-- /.why-choose-two__image__one -->

                                            <div class="why-choose-two__image__two">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-2.jpg" alt="why choose">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-3.jpg" alt="why choose">

                                            </div><!-- /.why-choose-two__image__two -->

                                        </div><!-- /.why-choose-two__image -->

                                    </div><!-- /.why-choose-two__tab-col-1 -->

                                    <div class="why-choose-two__tab-col-2">

                                        <div class="why-choose-two__content">

                                            <h3 class="why-choose-two__title">Benefits ByÂ MedioxÂ Dental Care And Clinic</h3><!-- /.why-choose-two__title -->

                                            <p class="why-choose-two__text">Prompt care for dental emergencies, such as toothac broken teeth, or knocked-out teeth. Specialize dental care for children. Give patients an estimate of the average wait time for scheduled appointments.</p><!-- /.why-choose-two__text -->

                                            <ul class="why-choose-two__list list-unstyled">

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Patients Value

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Latest Technologies

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list-icon -->

                                                    Skilled Dentist & Fr

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Affordable Costs

                                                </li>

                                            </ul><!-- /.why-choose-two__list -->

                                        </div><!-- /.why-choose-two__content -->

                                    </div><!-- /.why-choose-two__tab-col-2 -->

                                </div><!-- /.row gutter-y-40 -->

                            </div><!-- /.why-choose-two01-tab -->

                            <div class="tab fadeInUp animated" data-wow-delay="200ms" id="why-choose-two02" style="display: none;">

                                <div class="row gutter-y-40">

                                    <div class="why-choose-two__tab-col-1">

                                        <div class="why-choose-two__image">

                                            <div class="why-choose-two__image__one">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-4.jpg" alt="why choose">

                                            </div><!-- /.why-choose-two__image__one -->

                                            <div class="why-choose-two__image__two">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-5.jpg" alt="why choose">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-6.jpg" alt="why choose">

                                            </div><!-- /.why-choose-two__image__two -->

                                        </div><!-- /.why-choose-two__image -->

                                    </div><!-- /.why-choose-two__tab-col-1 -->

                                    <div class="why-choose-two__tab-col-2">

                                        <div class="why-choose-two__content">

                                            <h3 class="why-choose-two__title">Mediox Clinic Professional Skills</h3><!-- /.why-choose-two__title -->

                                            <p class="why-choose-two__text">Wiggle room increase the resolution, scale it up we need a larger print paddle on both sides customer centric, yet let's unpack that later bottleneck mice. This is our north star design we need to make.</p><!-- /.why-choose-two__text -->

                                            <ul class="why-choose-two__list list-unstyled">

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Patients Value

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Latest Technologies

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list-icon -->

                                                    Skilled Dentist & Fr

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Affordable Costs

                                                </li>

                                            </ul><!-- /.why-choose-two__list -->

                                        </div><!-- /.why-choose-two__content -->

                                    </div><!-- /.why-choose-two__tab-col-2 -->

                                </div><!-- /.row gutter-y-40 -->

                            </div><!-- /.why-choose-two02-tab -->

                            <div class="tab fadeInUp animated" data-wow-delay="200ms" id="why-choose-two03" style="display: none;">

                                <div class="row gutter-y-40">

                                    <div class="why-choose-two__tab-col-1">

                                        <div class="why-choose-two__image">

                                            <div class="why-choose-two__image__one">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-7.jpg" alt="why choose">

                                            </div><!-- /.why-choose-two__image__one -->

                                            <div class="why-choose-two__image__two">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-8.jpg" alt="why choose">

                                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/why-choose/why-choose-2-9.jpg" alt="why choose">

                                            </div><!-- /.why-choose-two__image__two -->

                                        </div><!-- /.why-choose-two__image -->

                                    </div><!-- /.why-choose-two__tab-col-1 -->

                                    <div class="why-choose-two__tab-col-2">

                                        <div class="why-choose-two__content">

                                            <h3 class="why-choose-two__title">Mediox Clinic opening hours</h3><!-- /.why-choose-two__title -->

                                            <p class="why-choose-two__text">Unlock meaningful moments of relaxation. Good optics translating our vision of having a market leading platfrom, nor upsell build on a culture of contribution and inclusion, for message.</p><!-- /.why-choose-two__text -->

                                            <ul class="why-choose-two__list list-unstyled">

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Patients Value

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Latest Technologies

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list-icon -->

                                                    Skilled Dentist & Fr

                                                </li>

                                                <li>

                                                    <span class="why-choose-two__list__icon">

                                                        <i class="icon-check"></i>

                                                    </span><!-- /.why-choose-two__list__icon -->

                                                    Affordable Costs

                                                </li>

                                            </ul><!-- /.why-choose-two__list -->

                                        </div><!-- /.why-choose-two__content -->

                                    </div><!-- /.why-choose-two__tab-col-2 -->

                                </div><!-- /.row gutter-y-40 -->

                            </div><!-- /.why-choose-two03-tab -->

                        </div><!-- /.tab-content -->

                    </div><!-- /.why-choose-two__tab-box tabs-box -->

                </div><!-- /.why-choose-two__inner -->

                <div class="why-choose-two__shape why-choose-two__shape--1"></div><!-- /.why-choose-two__shape -->

            </div><!-- /.container -->

            <div class="why-choose-two__shape why-choose-two__shape--2"></div><!-- /.why-choose-two__shape -->

            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/why-choose-shape-2-1.png" alt="shape" class="why-choose-two__shape-3">

            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/why-choose-shape-2-2.png" alt="shape" class="why-choose-two__shape-4">

        </section>



        <div class="client-carousel @@extraClassName">

            <div class="container">

                <div class="client-carousel__one mediox-owl__carousel owl-theme owl-carousel" data-owl-options='{

                            "items": 5,

                            "margin": 65,

                            "smartSpeed": 700,

                            "loop":true,

                            "autoplay": 6000,

                            "nav":false,

                            "dots":false,

                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],

                            "responsive":{

                                "0":{

                                    "items": 1,

                                    "margin": 30

                                },

                                "361":{

                                    "items": 2,

                                    "margin": 40

                                },

                                "576":{

                                    "items": 3,

                                    "margin": 60

                                },

                                "768":{

                                    "items": 4,

                                    "margin": 60

                                },

                                "992":{

                                    "items": 5,

                                    "margin": 60

                                },

                                "1200":{

                                    "items": 5,

                                    "margin": 80

                                }

                            }

                            }'>

                    <div class="client-carousel__one__item">

                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/brand/brand-1-1.png" alt="mediox" class="client-carousel__one__image">

                    </div><!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/brand/brand-1-2.png" alt="mediox" class="client-carousel__one__image">

                    </div><!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/brand/brand-1-3.png" alt="mediox" class="client-carousel__one__image">

                    </div><!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/brand/brand-1-4.png" alt="mediox" class="client-carousel__one__image">

                    </div><!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/brand/brand-1-5.png" alt="mediox" class="client-carousel__one__image">

                    </div><!-- /.owl-slide-item-->

                </div><!-- /.thm-owl__slider -->

            </div>

        </div>



        <section class="skills-one skills-one--home2 section-space">

            <div class="skills-one__bg" style="background-image: url(assets/images/shapes/skills-bg-2-1.png);"></div><!-- /.skills-one__bg -->

            <div class="container">

                <div class="row gutter-y-50 align-items-center">

                    <div class="col-lg-6">

                        <div class="skills-one__content">

                            <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">

                                <div class="sec-title__top">



                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="we are skillful health care" class="sec-title__img">





                                    <h6 class="sec-title__tagline">we are skillful health care</h6><!-- /.sec-title__tagline -->



                                </div><!-- /.sec-title__top -->

                                <h3 class="sec-title__title">We Are leading health <br> care medical in town</h3><!-- /.sec-title__title -->

                            </div><!-- /.sec-title -->

                            <div class="skills-one__text-box wow fadeInUp" data-wow-duration="1500ms">

                                <p class="skills-one__text">

                                    Our team of dedicated healthcare professionals combines years of experience with a genuine commitment to providing.

                                </p>

                            </div><!-- /.skills-one__text-box -->

                            <div class="skills-one__skills wow fadeInUp" data-wow-duration="1500ms">

                                <div class="progress-box">

                                    <h4 class="progress-box__title">critical operation</h4>

                                    <div class="progress-box__bar">

                                        <div class="progress-box__bar__inner count-bar" data-percent="90%">

                                            <div class="progress-box__number count-text">90%</div>

                                        </div>

                                    </div>

                                </div><!-- /.skills-item -->

                                <div class="progress-box">

                                    <h4 class="progress-box__title">health care charity</h4>

                                    <div class="progress-box__bar">

                                        <div class="progress-box__bar__inner count-bar" data-percent="95%">

                                            <div class="progress-box__number count-text">95%</div>

                                        </div>

                                    </div>

                                </div><!-- /.skills-item -->

                            </div><!-- /.skills-one__skills -->

                        </div><!-- /.skills-one__content -->

                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6">

                        <div class="skills-one__image">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/resources/skills-2-1.png" alt="skills">

                        </div><!-- /.skills-one__image -->

                    </div><!-- /.col-lg-6 -->

                </div><!-- /.row gutter-y-50 -->

            </div>

        </section><!-- /.skills-one section-space -->



        <section class="work-process-one section-space-two">

            <div class="container">

                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">

                    <div class="sec-title__top">



                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="Our Work Prcocess" class="sec-title__img">





                        <h6 class="sec-title__tagline">Our Work Prcocess</h6><!-- /.sec-title__tagline -->



                    </div><!-- /.sec-title__top -->

                    <h3 class="sec-title__title">How We Work Process</h3><!-- /.sec-title__title -->

                </div><!-- /.sec-title -->

                <div class="work-process-one__inner wow fadeInUp" data-wow-duration="1500ms">

                    <div class="row gutter-y-40">

                        <div class="col-xl-3 col-md-6">

                            <div class="work-process-one__item">

                                <span class="work-process-one__item__icon">

                                    <i class="icon-doctor-2"></i>

                                    <span class="work-process-one__item__number"></span>

                                </span><!-- /.work-process-one__item__icon -->

                                <div class="work-process-one__item__content">

                                    <h3 class="work-process-one__item__title">Choose A Doctor</h3><!-- /.work-process-one__item__title -->

                                    <p class="work-process-one__item__text">In a free hour, when our power of choice is untrammeled</p><!-- /.work-process-one__item__text -->

                                </div><!-- /.work-process-one__item__content -->

                            </div><!-- /.work-process-one__item -->

                        </div><!-- /.col-xl-3 col-md-6 -->

                        <div class="col-xl-3 col-md-6">

                            <div class="work-process-one__item work-process-one__item--reverse">

                                <span class="work-process-one__item__icon">

                                    <i class="icon-assessment"></i>

                                    <span class="work-process-one__item__number"></span>

                                </span><!-- /.work-process-one__item__icon -->

                                <div class="work-process-one__item__content">

                                    <h3 class="work-process-one__item__title">Define Requirements</h3><!-- /.work-process-one__item__title -->

                                    <p class="work-process-one__item__text">Quick sync the horse is out of the barn, yet this vendor</p><!-- /.work-process-one__item__text -->

                                </div><!-- /.work-process-one__item__content -->

                            </div><!-- /.work-process-one__item -->

                        </div><!-- /.col-xl-3 col-md-6 -->

                        <div class="col-xl-3 col-md-6">

                            <div class="work-process-one__item">

                                <span class="work-process-one__item__icon">

                                    <i class="icon-consultation"></i>

                                    <span class="work-process-one__item__number"></span>

                                </span><!-- /.work-process-one__item__icon -->

                                <div class="work-process-one__item__content">

                                    <h3 class="work-process-one__item__title">Request A Meeting</h3><!-- /.work-process-one__item__title -->

                                    <p class="work-process-one__item__text">Price point can we take this offline, and nail it down</p><!-- /.work-process-one__item__text -->

                                </div><!-- /.work-process-one__item__content -->

                            </div><!-- /.work-process-one__item -->

                        </div><!-- /.col-xl-3 col-md-6 -->

                        <div class="col-xl-3 col-md-6">

                            <div class="work-process-one__item work-process-one__item--reverse">

                                <span class="work-process-one__item__icon">

                                    <i class="icon-handshake"></i>

                                    <span class="work-process-one__item__number"></span>

                                </span><!-- /.work-process-one__item__icon -->

                                <div class="work-process-one__item__content">

                                    <h3 class="work-process-one__item__title">Finial Solution</h3><!-- /.work-process-one__item__title -->

                                    <p class="work-process-one__item__text">Gain traction forcing function , and we've got kpis for that</p><!-- /.work-process-one__item__text -->

                                </div><!-- /.work-process-one__item__content -->

                            </div><!-- /.work-process-one__item -->

                        </div><!-- /.col-xl-3 col-md-6 -->

                    </div><!-- /.row gutter-y-40 -->

                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/work-process-shape-1-1.png" alt="shape" class="work-process-one__shape">

                </div><!-- /.work-process-one__inner -->

            </div>

        </section><!-- /.work-process-one section-space-two -->



        <section class="gallery-instagram gallery-instagram--home2">

            <div class="container-fluid">

                <div class="row gutter-y-30">

                    <div class="col-xxl-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                        <div class="gallery-instagram__image">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/gallery/gallery-instagram-1-1.jpg" alt="gallery-instagram">

                            <a href="https://www.instagram.com/" class="gallery-instagram__image__link">

                                <span class="icon-instagram"></span>

                            </a><!-- /.gallery-instagram__image__link -->

                        </div><!-- /.gallery-instagram__image -->

                    </div><!-- /.col-xxl-2 col-md-4 col-sm-6 -->

                    <div class="col-xxl-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">

                        <div class="gallery-instagram__image">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/gallery/gallery-instagram-1-2.jpg" alt="gallery-instagram">

                            <a href="https://www.instagram.com/" class="gallery-instagram__image__link">

                                <span class="icon-instagram"></span>

                            </a><!-- /.gallery-instagram__image__link -->

                        </div><!-- /.gallery-instagram__image -->

                    </div><!-- /.col-xxl-2 col-md-4 col-sm-6 -->

                    <div class="col-xxl-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">

                        <div class="gallery-instagram__image">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/gallery/gallery-instagram-1-3.jpg" alt="gallery-instagram">

                            <a href="https://www.instagram.com/" class="gallery-instagram__image__link">

                                <span class="icon-instagram"></span>

                            </a><!-- /.gallery-instagram__image__link -->

                        </div><!-- /.gallery-instagram__image -->

                    </div><!-- /.col-xxl-2 col-md-4 col-sm-6 -->

                    <div class="col-xxl-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">

                        <div class="gallery-instagram__image">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/gallery/gallery-instagram-1-4.jpg" alt="gallery-instagram">

                            <a href="https://www.instagram.com/" class="gallery-instagram__image__link">

                                <span class="icon-instagram"></span>

                            </a><!-- /.gallery-instagram__image__link -->

                        </div><!-- /.gallery-instagram__image -->

                    </div><!-- /.col-xxl-2 col-md-4 col-sm-6 -->

                    <div class="col-xxl-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">

                        <div class="gallery-instagram__image">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/gallery/gallery-instagram-1-5.jpg" alt="gallery-instagram">

                            <a href="https://www.instagram.com/" class="gallery-instagram__image__link">

                                <span class="icon-instagram"></span>

                            </a><!-- /.gallery-instagram__image__link -->

                        </div><!-- /.gallery-instagram__image -->

                    </div><!-- /.col-xxl-2 col-md-4 col-sm-6 -->

                    <div class="col-xxl-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">

                        <div class="gallery-instagram__image">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/gallery/gallery-instagram-1-6.jpg" alt="gallery-instagram">

                            <a href="https://www.instagram.com/" class="gallery-instagram__image__link">

                                <span class="icon-instagram"></span>

                            </a><!-- /.gallery-instagram__image__link -->

                        </div><!-- /.gallery-instagram__image -->

                    </div><!-- /.col-xxl-2 col-md-4 col-sm-6 -->

                </div><!-- /.row gutter-y-30 -->

            </div><!-- /.container-fluid -->

        </section><!-- /.gallery-instagram -->



        <section class="welcome-one welcome-one--home2 section-space-bottom">

            <div class="welcome-one__bg" style="background-image: url(assets/images/backgrounds/welcome-bg-2-1.jpg);"></div><!-- /.welcome-one__bg -->

            <div class="container">

                <div class="welcome-one__inner">

                    <div class="welcome-one__inner__bg" style="background-image: url(assets/images/shapes/welcome-inner-bg-1-1.jpg);"></div>

                    <div class="welcome-one__content">

                        <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">

                            <div class="sec-title__top">



                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-2.png" alt="welcome new patientâs" class="sec-title__img">





                                <h6 class="sec-title__tagline">welcome new patientâs</h6><!-- /.sec-title__tagline -->



                            </div><!-- /.sec-title__top -->

                            <h3 class="sec-title__title">Weâre Welcoming New <br> Patients</h3><!-- /.sec-title__title -->

                        </div><!-- /.sec-title -->

                        <p class="welcome-one__text wow fadeInUp" data-wow-duration="1500ms">A brief statement outlining the purpose and mission of the clinic. This can include the commitment to patient care, community health.</p><!-- /.welcome-one__text -->

                        <div class="wow fadeInUp" data-wow-duration="1500ms">

                            <a href="appointment.html" class="mediox-btn">

                                <span>book appointment</span>

                                <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>

                            </a><!-- /.mediox-btn -->

                        </div>

                    </div><!-- /.welcome-one__content -->

                    <div class="welcome-one__image">

                        <div class="welcome-one__image__bg" style="background-image: url(assets/images/resources/welcome-1-1.jpg);"></div>

                    </div><!-- /.welcome-one__image -->

                </div><!-- /.welcome-one__inner -->

            </div><!-- /.container -->

        </section><!-- /.welcome-one section-space-bottom -->



        <section class="testimonials-two section-space" id="testimonials">

            <div class="container">

                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">

                    <div class="sec-title__top">



                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="our testimonials" class="sec-title__img">





                        <h6 class="sec-title__tagline">our testimonials</h6><!-- /.sec-title__tagline -->



                    </div><!-- /.sec-title__top -->

                    <h3 class="sec-title__title">peoples talk about <br> mediox</h3><!-- /.sec-title__title -->

                </div><!-- /.sec-title -->

                <div class="testimonials-two__carousel mediox-owl__carousel mediox-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{

            "items": 1,

            "margin": 10,

            "loop": true,

            "smartSpeed": 700,

            "nav": false,

            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],

            "dots": true,

            "autoplay": true,

            "responsive": {

                "0": {

                    "items": 1,

                    "nav": true,

                    "dots": false,

                    "margin": 10

                },

                "992": {

                    "items": 2,

                    "margin": 30

                }

            }

                }'>

                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                        <div class="testimonial-card-two">

                            <div class="testimonial-card-two__bg" style="background-image: url(assets/images/shapes/testimonial-card-bg-2-1.png);"></div>

                            <div class="testimonial-card-two__content">

                                <div class="testimonial-card-two__top">

                                    <span class="testimonial-card-two__quote-icon">

                                        <i class="icon-quote"></i>

                                    </span><!-- /.testimonial-card-two__quote-icon -->

                                    <div class="testimonial-card-two__ratings">

                                        <div class="mediox-ratings">

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                        </div><!-- /.product-ratings -->

                                    </div><!-- /.testimonial-card-two__ratings -->

                                </div><!-- /.testimonial-card-two__top -->

                                <p class="testimonial-card-two__quote">Medios health care Company also impressed us with their transpa regarding costs. The initial quote was very low</p><!-- /.testimonial-card-two__quote -->

                                <div class="testimonial-card-two__bottom">

                                    <div class="testimonial-card-two__identity">

                                        <div class="testimonial-card-two__info">

                                            <h4 class="testimonial-card-two__name">Michael G. Ware</h4><!-- /.testimonial-card-two__name -->

                                            <p class="testimonial-card-two__designation">managing director</p><!-- /.testimonial-card-two__designation -->

                                        </div><!-- /.testimonial-card-two__info -->

                                    </div><!-- /.testimonial-card-two__identity -->

                                    <div class="testimonial-card-two__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/testimonials/testimonial-2-1.jpg" alt="Michael G. Ware">

                                    </div><!-- /.testimonial-card-two__image -->

                                </div><!-- /.testimonial-card-two__bottom -->

                            </div><!-- /.testimonial-card-two__content -->

                        </div><!-- /.testimonial-card-two -->

                    </div><!-- /.item -->

                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">

                        <div class="testimonial-card-two">

                            <div class="testimonial-card-two__bg" style="background-image: url(assets/images/shapes/testimonial-card-bg-2-1.png);"></div>

                            <div class="testimonial-card-two__content">

                                <div class="testimonial-card-two__top">

                                    <span class="testimonial-card-two__quote-icon">

                                        <i class="icon-quote"></i>

                                    </span><!-- /.testimonial-card-two__quote-icon -->

                                    <div class="testimonial-card-two__ratings">

                                        <div class="mediox-ratings">

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                        </div><!-- /.product-ratings -->

                                    </div><!-- /.testimonial-card-two__ratings -->

                                </div><!-- /.testimonial-card-two__top -->

                                <p class="testimonial-card-two__quote">That will be a conversation piece. I'll pay you in a week we don't need to pay upfront i hope you understand</p><!-- /.testimonial-card-two__quote -->

                                <div class="testimonial-card-two__bottom">

                                    <div class="testimonial-card-two__identity">

                                        <div class="testimonial-card-two__info">

                                            <h4 class="testimonial-card-two__name">Mike Hardson</h4><!-- /.testimonial-card-two__name -->

                                            <p class="testimonial-card-two__designation">managing director</p><!-- /.testimonial-card-two__designation -->

                                        </div><!-- /.testimonial-card-two__info -->

                                    </div><!-- /.testimonial-card-two__identity -->

                                    <div class="testimonial-card-two__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/testimonials/testimonial-2-2.jpg" alt="Mike Hardson">

                                    </div><!-- /.testimonial-card-two__image -->

                                </div><!-- /.testimonial-card-two__bottom -->

                            </div><!-- /.testimonial-card-two__content -->

                        </div><!-- /.testimonial-card-two -->

                    </div><!-- /.item -->

                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                        <div class="testimonial-card-two">

                            <div class="testimonial-card-two__bg" style="background-image: url(assets/images/shapes/testimonial-card-bg-2-1.png);"></div>

                            <div class="testimonial-card-two__content">

                                <div class="testimonial-card-two__top">

                                    <span class="testimonial-card-two__quote-icon">

                                        <i class="icon-quote"></i>

                                    </span><!-- /.testimonial-card-two__quote-icon -->

                                    <div class="testimonial-card-two__ratings">

                                        <div class="mediox-ratings">

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                        </div><!-- /.product-ratings -->

                                    </div><!-- /.testimonial-card-two__ratings -->

                                </div><!-- /.testimonial-card-two__top -->

                                <p class="testimonial-card-two__quote">Make it pop. Can the black be darker is this the best we can do. Give us a complimentary logo along with the website</p><!-- /.testimonial-card-two__quote -->

                                <div class="testimonial-card-two__bottom">

                                    <div class="testimonial-card-two__identity">

                                        <div class="testimonial-card-two__info">

                                            <h4 class="testimonial-card-two__name">John R. Green</h4><!-- /.testimonial-card-two__name -->

                                            <p class="testimonial-card-two__designation">managing director</p><!-- /.testimonial-card-two__designation -->

                                        </div><!-- /.testimonial-card-two__info -->

                                    </div><!-- /.testimonial-card-two__identity -->

                                    <div class="testimonial-card-two__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/testimonials/testimonial-2-3.jpg" alt="John R. Green">

                                    </div><!-- /.testimonial-card-two__image -->

                                </div><!-- /.testimonial-card-two__bottom -->

                            </div><!-- /.testimonial-card-two__content -->

                        </div><!-- /.testimonial-card-two -->

                    </div><!-- /.item -->

                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">

                        <div class="testimonial-card-two">

                            <div class="testimonial-card-two__bg" style="background-image: url(assets/images/shapes/testimonial-card-bg-2-1.png);"></div>

                            <div class="testimonial-card-two__content">

                                <div class="testimonial-card-two__top">

                                    <span class="testimonial-card-two__quote-icon">

                                        <i class="icon-quote"></i>

                                    </span><!-- /.testimonial-card-two__quote-icon -->

                                    <div class="testimonial-card-two__ratings">

                                        <div class="mediox-ratings">

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                        </div><!-- /.product-ratings -->

                                    </div><!-- /.testimonial-card-two__ratings -->

                                </div><!-- /.testimonial-card-two__top -->

                                <p class="testimonial-card-two__quote">I cant pay you i know you've made thirty iterations but can we go back to the first one that was the best version</p><!-- /.testimonial-card-two__quote -->

                                <div class="testimonial-card-two__bottom">

                                    <div class="testimonial-card-two__identity">

                                        <div class="testimonial-card-two__info">

                                            <h4 class="testimonial-card-two__name">Judith White</h4><!-- /.testimonial-card-two__name -->

                                            <p class="testimonial-card-two__designation">managing director</p><!-- /.testimonial-card-two__designation -->

                                        </div><!-- /.testimonial-card-two__info -->

                                    </div><!-- /.testimonial-card-two__identity -->

                                    <div class="testimonial-card-two__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/testimonials/testimonial-2-4.jpg" alt="Judith White">

                                    </div><!-- /.testimonial-card-two__image -->

                                </div><!-- /.testimonial-card-two__bottom -->

                            </div><!-- /.testimonial-card-two__content -->

                        </div><!-- /.testimonial-card-two -->

                    </div><!-- /.item -->

                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                        <div class="testimonial-card-two">

                            <div class="testimonial-card-two__bg" style="background-image: url(assets/images/shapes/testimonial-card-bg-2-1.png);"></div>

                            <div class="testimonial-card-two__content">

                                <div class="testimonial-card-two__top">

                                    <span class="testimonial-card-two__quote-icon">

                                        <i class="icon-quote"></i>

                                    </span><!-- /.testimonial-card-two__quote-icon -->

                                    <div class="testimonial-card-two__ratings">

                                        <div class="mediox-ratings">

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                        </div><!-- /.product-ratings -->

                                    </div><!-- /.testimonial-card-two__ratings -->

                                </div><!-- /.testimonial-card-two__top -->

                                <p class="testimonial-card-two__quote">Medios health care Company also impressed us with their transpa regarding costs. The initial quote was very low</p><!-- /.testimonial-card-two__quote -->

                                <div class="testimonial-card-two__bottom">

                                    <div class="testimonial-card-two__identity">

                                        <div class="testimonial-card-two__info">

                                            <h4 class="testimonial-card-two__name">Michael G. Ware</h4><!-- /.testimonial-card-two__name -->

                                            <p class="testimonial-card-two__designation">managing director</p><!-- /.testimonial-card-two__designation -->

                                        </div><!-- /.testimonial-card-two__info -->

                                    </div><!-- /.testimonial-card-two__identity -->

                                    <div class="testimonial-card-two__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/testimonials/testimonial-2-1.jpg" alt="Michael G. Ware">

                                    </div><!-- /.testimonial-card-two__image -->

                                </div><!-- /.testimonial-card-two__bottom -->

                            </div><!-- /.testimonial-card-two__content -->

                        </div><!-- /.testimonial-card-two -->

                    </div><!-- /.item -->

                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">

                        <div class="testimonial-card-two">

                            <div class="testimonial-card-two__bg" style="background-image: url(assets/images/shapes/testimonial-card-bg-2-1.png);"></div>

                            <div class="testimonial-card-two__content">

                                <div class="testimonial-card-two__top">

                                    <span class="testimonial-card-two__quote-icon">

                                        <i class="icon-quote"></i>

                                    </span><!-- /.testimonial-card-two__quote-icon -->

                                    <div class="testimonial-card-two__ratings">

                                        <div class="mediox-ratings">

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                        </div><!-- /.product-ratings -->

                                    </div><!-- /.testimonial-card-two__ratings -->

                                </div><!-- /.testimonial-card-two__top -->

                                <p class="testimonial-card-two__quote">That will be a conversation piece. I'll pay you in a week we don't need to pay upfront i hope you understand</p><!-- /.testimonial-card-two__quote -->

                                <div class="testimonial-card-two__bottom">

                                    <div class="testimonial-card-two__identity">

                                        <div class="testimonial-card-two__info">

                                            <h4 class="testimonial-card-two__name">Mike Hardson</h4><!-- /.testimonial-card-two__name -->

                                            <p class="testimonial-card-two__designation">managing director</p><!-- /.testimonial-card-two__designation -->

                                        </div><!-- /.testimonial-card-two__info -->

                                    </div><!-- /.testimonial-card-two__identity -->

                                    <div class="testimonial-card-two__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/testimonials/testimonial-2-2.jpg" alt="Mike Hardson">

                                    </div><!-- /.testimonial-card-two__image -->

                                </div><!-- /.testimonial-card-two__bottom -->

                            </div><!-- /.testimonial-card-two__content -->

                        </div><!-- /.testimonial-card-two -->

                    </div><!-- /.item -->

                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                        <div class="testimonial-card-two">

                            <div class="testimonial-card-two__bg" style="background-image: url(assets/images/shapes/testimonial-card-bg-2-1.png);"></div>

                            <div class="testimonial-card-two__content">

                                <div class="testimonial-card-two__top">

                                    <span class="testimonial-card-two__quote-icon">

                                        <i class="icon-quote"></i>

                                    </span><!-- /.testimonial-card-two__quote-icon -->

                                    <div class="testimonial-card-two__ratings">

                                        <div class="mediox-ratings">

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                        </div><!-- /.product-ratings -->

                                    </div><!-- /.testimonial-card-two__ratings -->

                                </div><!-- /.testimonial-card-two__top -->

                                <p class="testimonial-card-two__quote">Make it pop. Can the black be darker is this the best we can do. Give us a complimentary logo along with the website</p><!-- /.testimonial-card-two__quote -->

                                <div class="testimonial-card-two__bottom">

                                    <div class="testimonial-card-two__identity">

                                        <div class="testimonial-card-two__info">

                                            <h4 class="testimonial-card-two__name">John R. Green</h4><!-- /.testimonial-card-two__name -->

                                            <p class="testimonial-card-two__designation">managing director</p><!-- /.testimonial-card-two__designation -->

                                        </div><!-- /.testimonial-card-two__info -->

                                    </div><!-- /.testimonial-card-two__identity -->

                                    <div class="testimonial-card-two__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/testimonials/testimonial-2-3.jpg" alt="John R. Green">

                                    </div><!-- /.testimonial-card-two__image -->

                                </div><!-- /.testimonial-card-two__bottom -->

                            </div><!-- /.testimonial-card-two__content -->

                        </div><!-- /.testimonial-card-two -->

                    </div><!-- /.item -->

                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">

                        <div class="testimonial-card-two">

                            <div class="testimonial-card-two__bg" style="background-image: url(assets/images/shapes/testimonial-card-bg-2-1.png);"></div>

                            <div class="testimonial-card-two__content">

                                <div class="testimonial-card-two__top">

                                    <span class="testimonial-card-two__quote-icon">

                                        <i class="icon-quote"></i>

                                    </span><!-- /.testimonial-card-two__quote-icon -->

                                    <div class="testimonial-card-two__ratings">

                                        <div class="mediox-ratings">

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                            <span class="mediox-ratings__icon">

                                                <i class="icon-star"></i>

                                            </span><!-- /.mediox-ratings__icon -->

                                        </div><!-- /.product-ratings -->

                                    </div><!-- /.testimonial-card-two__ratings -->

                                </div><!-- /.testimonial-card-two__top -->

                                <p class="testimonial-card-two__quote">I cant pay you i know you've made thirty iterations but can we go back to the first one that was the best version</p><!-- /.testimonial-card-two__quote -->

                                <div class="testimonial-card-two__bottom">

                                    <div class="testimonial-card-two__identity">

                                        <div class="testimonial-card-two__info">

                                            <h4 class="testimonial-card-two__name">Judith White</h4><!-- /.testimonial-card-two__name -->

                                            <p class="testimonial-card-two__designation">managing director</p><!-- /.testimonial-card-two__designation -->

                                        </div><!-- /.testimonial-card-two__info -->

                                    </div><!-- /.testimonial-card-two__identity -->

                                    <div class="testimonial-card-two__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/testimonials/testimonial-2-4.jpg" alt="Judith White">

                                    </div><!-- /.testimonial-card-two__image -->

                                </div><!-- /.testimonial-card-two__bottom -->

                            </div><!-- /.testimonial-card-two__content -->

                        </div><!-- /.testimonial-card-two -->

                    </div><!-- /.item -->

                </div><!-- /.testimonials-two__carousel -->

            </div><!-- /.container -->

            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/testimonials-shape-2-1.png" alt="shape" class="testimonials-two__shape">

        </section><!-- /.testimonials-two section-space -->



        <section class="faq-one faq-one--home2">

            <div class="faq-one__bg" style="background-image: url(assets/images/shapes/faq-bg-2-1.png);"></div><!-- /.faq-one__bg -->

            <div class="container section-space-two">

                <div class="row gutter-y-50">

                    <div class="col-xl-6 col-lg-9">

                        <div class="faq-one__content">

                            <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">

                                <div class="sec-title__top">



                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="FAQâS" class="sec-title__img">





                                    <h6 class="sec-title__tagline">FAQâS</h6><!-- /.sec-title__tagline -->



                                </div><!-- /.sec-title__top -->

                                <h3 class="sec-title__title">Frequently Asked Have <br> Any Question?</h3><!-- /.sec-title__title -->

                            </div><!-- /.sec-title -->

                            <div class="faq-one__accordion">

                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">

                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                                        <div class="accordion-title">

                                            <h4>

                                                Wound healing genes

                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->

                                            </h4>

                                        </div><!-- /.accordion-title -->

                                        <div class="accordion-content">

                                            <div class="inner">

                                                <p>Lorem ipsum dolor sit amet consecteitur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit a sapien fringilla, mattis ligula consectietur, ultrices mauris. Maecenas vitae mattis tellus.</p>

                                            </div><!-- /.inner -->

                                        </div><!-- /.accordion-content -->

                                    </div><!-- /.accordion-item -->

                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">

                                        <div class="accordion-title">

                                            <h4>

                                                Blood clotting disorder

                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->

                                            </h4>

                                        </div><!-- /.accordion-title -->

                                        <div class="accordion-content">

                                            <div class="inner">

                                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't

                                                    anything embarrassing hidden in the middle of text. All the Lorem Ipsum

                                                    generators on the Internet tend to repeat predefined chunks as necessary.</p>

                                            </div><!-- /.inner -->

                                        </div><!-- /.accordion-content -->

                                    </div><!-- /.accordion-item -->

                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">

                                        <div class="accordion-title">

                                            <h4>

                                                Studies of genetic

                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->

                                            </h4>

                                        </div><!-- /.accordion-title -->

                                        <div class="accordion-content">

                                            <div class="inner">

                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority

                                                    have suffered alteration in some form, by injected humour, or randomised words

                                                    which don't look even slightly believable.</p>

                                            </div><!-- /.inner -->

                                        </div><!-- /.accordion-content -->

                                    </div><!-- /.accordion-item -->

                                </div><!-- /.faq-accordion -->

                            </div><!-- /.faq-one__accordion -->

                        </div><!-- /.faq-one__content -->

                    </div><!-- /.col-xl-6 col-lg-9 -->

                    <div class="col-xl-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">

                        <div class="faq-one__image">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/resources/faq-1-1.png" alt="faq" class="faq-one__image__one">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/resources/faq-1-2.png" alt="faq" class="faq-one__image__two">

                            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/faq-shape-2-2.png" alt="shape" class="faq-one__image__shape">

                        </div><!-- /.faq-one__image -->

                    </div><!-- /.col-xl-6 -->

                </div><!-- /.row gutter-y-50 -->

            </div><!-- /.container section-space-two -->

            <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/faq-shape-2-1.png" alt="shape" class="faq-one__shape">

        </section><!-- /.faq-one -->



        <section class="team-two section-space-two" id="team">

            <div class="container">

                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">

                    <div class="sec-title__top">



                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="our expert team" class="sec-title__img">





                        <h6 class="sec-title__tagline">our expert team</h6><!-- /.sec-title__tagline -->



                    </div><!-- /.sec-title__top -->

                    <h3 class="sec-title__title">meet our expert team</h3><!-- /.sec-title__title -->

                </div><!-- /.sec-title -->

                <div class="team-two__carousel mediox-owl__carousel mediox-owl__carousel--with-shadow mediox-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{

            "items": 1,

            "margin": 10,

            "loop": false,

            "smartSpeed": 700,

            "nav": false,

            "dots": true,

            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],

            "autoplay": true,

            "responsive": {

                "0": {

                    "items": 1,

                    "nav": true,

                    "dots": false,

                    "margin": 10

                },

                "576": {

                    "items": 2,

                    "margin": 30

                },

                "992": {

                    "items": 3,

                    "margin": 30

                },

                "1200": {

                    "items": 4,

                    "margin": 30,

                    "dots": false

                }

            }

            }'>

                    <div class="item">

                        <div class="team-card-two team-card-two--top-identity wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>

                            <div class="team-card-two__image">

                                <div class="team-card-two__image__inner">

                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/team/team-2-1.jpg" alt="Anthony B. Castillo">

                                    <div class="team-card-two__social social-links">

                                        <a href="https://facebook.com">

                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>

                                            <span class="sr-only">Facebook</span>

                                        </a>

                                        <a href="https://twitter.com">

                                            <i class="fab fa-twitter" aria-hidden="true"></i>

                                            <span class="sr-only">Twitter</span>

                                        </a>

                                        <a href="https://instagram.com">

                                            <i class="fab fa-instagram" aria-hidden="true"></i>

                                            <span class="sr-only">Instagram</span>

                                        </a>

                                        <a href="https://youtube.com">

                                            <i class="fab fa-youtube" aria-hidden="true"></i>

                                            <span class="sr-only">Youtube</span>

                                        </a>

                                    </div><!-- /.team-card-two__social -->

                                </div><!-- /.team-card-two__image__inner -->

                            </div><!-- /.team-card-two__image -->

                            <div class="team-card-two__identity">

                                <h3 class="team-card-two__name">

                                    <a href="team-details.html">Anthony B. Castillo</a>

                                </h3><!-- /.team-card-two__name -->

                                <p class="team-card-two__designation">Cardiologists</p><!-- /.team-card-two__designation -->

                            </div><!-- /.team-card-two__identity -->

                        </div><!-- /.team-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>

                            <div class="team-card-two__image">

                                <div class="team-card-two__image__inner">

                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/team/team-2-2.jpg" alt="david cooper">

                                    <div class="team-card-two__social social-links">

                                        <a href="https://facebook.com">

                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>

                                            <span class="sr-only">Facebook</span>

                                        </a>

                                        <a href="https://twitter.com">

                                            <i class="fab fa-twitter" aria-hidden="true"></i>

                                            <span class="sr-only">Twitter</span>

                                        </a>

                                        <a href="https://instagram.com">

                                            <i class="fab fa-instagram" aria-hidden="true"></i>

                                            <span class="sr-only">Instagram</span>

                                        </a>

                                        <a href="https://youtube.com">

                                            <i class="fab fa-youtube" aria-hidden="true"></i>

                                            <span class="sr-only">Youtube</span>

                                        </a>

                                    </div><!-- /.team-card-two__social -->

                                </div><!-- /.team-card-two__image__inner -->

                            </div><!-- /.team-card-two__image -->

                            <div class="team-card-two__identity">

                                <h3 class="team-card-two__name">

                                    <a href="team-details.html">david cooper</a>

                                </h3><!-- /.team-card-two__name -->

                                <p class="team-card-two__designation">Audiologists</p><!-- /.team-card-two__designation -->

                            </div><!-- /.team-card-two__identity -->

                        </div><!-- /.team-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="team-card-two team-card-two--top-identity wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>

                            <div class="team-card-two__image">

                                <div class="team-card-two__image__inner">

                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/team/team-2-3.jpg" alt="kevin martin">

                                    <div class="team-card-two__social social-links">

                                        <a href="https://facebook.com">

                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>

                                            <span class="sr-only">Facebook</span>

                                        </a>

                                        <a href="https://twitter.com">

                                            <i class="fab fa-twitter" aria-hidden="true"></i>

                                            <span class="sr-only">Twitter</span>

                                        </a>

                                        <a href="https://instagram.com">

                                            <i class="fab fa-instagram" aria-hidden="true"></i>

                                            <span class="sr-only">Instagram</span>

                                        </a>

                                        <a href="https://youtube.com">

                                            <i class="fab fa-youtube" aria-hidden="true"></i>

                                            <span class="sr-only">Youtube</span>

                                        </a>

                                    </div><!-- /.team-card-two__social -->

                                </div><!-- /.team-card-two__image__inner -->

                            </div><!-- /.team-card-two__image -->

                            <div class="team-card-two__identity">

                                <h3 class="team-card-two__name">

                                    <a href="team-details.html">kevin martin</a>

                                </h3><!-- /.team-card-two__name -->

                                <p class="team-card-two__designation">Dentist</p><!-- /.team-card-two__designation -->

                            </div><!-- /.team-card-two__identity -->

                        </div><!-- /.team-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>

                            <div class="team-card-two__image">

                                <div class="team-card-two__image__inner">

                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/team/team-2-4.jpg" alt="Adlof Carone">

                                    <div class="team-card-two__social social-links">

                                        <a href="https://facebook.com">

                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>

                                            <span class="sr-only">Facebook</span>

                                        </a>

                                        <a href="https://twitter.com">

                                            <i class="fab fa-twitter" aria-hidden="true"></i>

                                            <span class="sr-only">Twitter</span>

                                        </a>

                                        <a href="https://instagram.com">

                                            <i class="fab fa-instagram" aria-hidden="true"></i>

                                            <span class="sr-only">Instagram</span>

                                        </a>

                                        <a href="https://youtube.com">

                                            <i class="fab fa-youtube" aria-hidden="true"></i>

                                            <span class="sr-only">Youtube</span>

                                        </a>

                                    </div><!-- /.team-card-two__social -->

                                </div><!-- /.team-card-two__image__inner -->

                            </div><!-- /.team-card-two__image -->

                            <div class="team-card-two__identity">

                                <h3 class="team-card-two__name">

                                    <a href="team-details.html">Adlof Carone</a>

                                </h3><!-- /.team-card-two__name -->

                                <p class="team-card-two__designation">Neurologist</p><!-- /.team-card-two__designation -->

                            </div><!-- /.team-card-two__identity -->

                        </div><!-- /.team-card-two -->

                    </div><!-- /.item -->

                </div><!-- /.team-two__carousel -->

            </div><!-- /.container -->

        </section><!-- /.team-two section-space-two -->



        <section class="blog-two section-space" id="blog">

            <div class="blog-two__bg" style="background-image: url(assets/images/shapes/blog-bg-2-1.png);"></div><!-- /.blog-two__bg -->

            <div class="container">

                <div class="blog-two__top">

                    <div class="row gutter-y-40 align-items-end">

                        <div class="col-xl-9 col-lg-8">

                            <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">

                                <div class="sec-title__top">



                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="latest blog" class="sec-title__img">





                                    <h6 class="sec-title__tagline">latest blog</h6><!-- /.sec-title__tagline -->



                                </div><!-- /.sec-title__top -->

                                <h3 class="sec-title__title">our latest blog & news</h3><!-- /.sec-title__title -->

                            </div><!-- /.sec-title -->

                        </div><!-- /.col-xl-9 col-lg-8 -->

                        <div class="col-xl-3 col-lg-4">

                            <div class="blog-two__custome-navs"></div><!-- /.blog-two__cutome-navs -->

                        </div><!-- /.col-xl-3 col-lg-4 -->

                    </div><!-- /.row -->

                </div><!-- /.blog-two__top -->

                <div class="blog-two__carousel mediox-owl__carousel mediox-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{

				"items": 1,

				"margin": 10,

				"loop": true,

				"smartSpeed": 700,

                "navContainer": ".blog-two__custome-navs",

				"nav": true,

				"navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],

				"dots": false,

				"autoplay": true,

				"responsive": {

					"0": {

						"items": 1,

						"margin": 10

					},

					"768": {

						"items": 2,

						"margin": 30

					},

					"992": {

						"items": 3,

						"margin": 30

					}

				}

		    }'>

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-1.jpg" alt="cupidatat nonproident, sunt in culpa qui official of">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">cupidatat nonproident, sunt in culpa qui official of</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui official of</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-2.jpg" alt="Nail jelly to the hothouse wall pixel pushing c-suite">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">Nail jelly to the hothouse wall pixel pushing c-suite</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">Nail jelly to the hothouse wall pixel pushing c-suite</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-3.jpg" alt="Copy and paste from stack overflow can you put it into">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">Copy and paste from stack overflow can you put it into</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">Copy and paste from stack overflow can you put it into</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-4.jpg" alt="catching and not too giant, yet drink from the firehose">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">catching and not too giant, yet drink from the firehose</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">catching and not too giant, yet drink from the firehose</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-5.jpg" alt="Big data. Are there any leftovers in the kitchen at">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">Big data. Are there any leftovers in the kitchen at</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">Big data. Are there any leftovers in the kitchen at</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-6.jpg" alt="a simple lift and shift job going forward. Price point">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">a simple lift and shift job going forward. Price point</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">a simple lift and shift job going forward. Price point</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-7.jpg" alt="my capacity is full we're building the plane while we">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">my capacity is full we're building the plane while we</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">my capacity is full we're building the plane while we</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-8.jpg" alt="ny leftovers in the kitchen?. Touch base that's mint, well">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">ny leftovers in the kitchen?. Touch base that's mint, well</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">ny leftovers in the kitchen?. Touch base that's mint, well</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                    <div class="item">

                        <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>

                            <div class="blog-card-two__image">

                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/blog-2-9.jpg" alt="circle back, if you want to motivate these clowns">

                                <a href="blog-details-right.html" class="blog-card-two__hover">

                                    <span class="sr-only">circle back, if you want to motivate these clowns</span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--1"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--2"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--3"></span>

                                    <span class="blog-card-two__hover__box blog-card-two__hover__box--4"></span>

                                </a><!-- /.blog-card-two-two__hover -->

                            </div><!-- /.blog-card-two__image -->

                            <div class="blog-card-two__content">

                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">circle back, if you want to motivate these clowns</a></h3><!-- /.blog-card-two__title -->

                                <ul class="list-unstyled blog-card-two__meta">

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-user"></i>

                                            </span>

                                            by Admin

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#">

                                            <span class="blog-card-two__meta__icon">

                                                <i class="icon-comments"></i>

                                            </span>

                                            2 Comments

                                        </a>

                                    </li>

                                </ul><!-- /.list-unstyled blog-card-two__meta -->

                                <div class="blog-card-two__date">

                                    <span class="blog-card-two__date__day">25</span>

                                    <span class="blog-card-two__date__month">june</span>

                                </div><!-- /.blog-card-two__date -->

                            </div><!-- /.blog-card-two__content -->

                        </div><!-- /.blog-card-two -->

                    </div><!-- /.item -->

                </div><!-- /.blog-two__carousel -->

            </div><!-- /.container -->

        </section><!-- /.blog-two section-space -->



        <footer class="main-footer section-space-top">

            <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg.png);"></div>

            <!-- /.main-footer__bg -->

            <div class="container">

                <div class="row gutter-y-40">

                    <div class="col-xl-4 col-lg-6 col-md-7 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                        <div class="footer-widget footer-widget--about">

                            <div class="footer-widget__logo logo-retina">

                                <a href="index.html">

                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/logo-light.png" alt="Mediox HTML" width="164">

                                </a>

                            </div><!-- /.footer-widget__logo -->

                            <p class="footer-widget__about-text">Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem Ipsum Dolor</p><!-- /.footer-widget__about-text -->

                            <a href="appointment.html" class="footer-widget__btn">

                                <span>get consultant</span>

                                <span class="footer-widget__btn__icon"><i class="icon-up-right-arrow"></i></span>

                            </a><!-- /.footer-widget__btn -->

                            <div class="social-links">

                                <a href="https://facebook.com">

                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>

                                    <span class="sr-only">Facebook</span>

                                </a>

                                <a href="https://twitter.com">

                                    <i class="fab fa-twitter" aria-hidden="true"></i>

                                    <span class="sr-only">Twitter</span>

                                </a>

                                <a href="https://instagram.com">

                                    <i class="fab fa-instagram" aria-hidden="true"></i>

                                    <span class="sr-only">Instagram</span>

                                </a>

                                <a href="https://youtube.com">

                                    <i class="fab fa-youtube" aria-hidden="true"></i>

                                    <span class="sr-only">Youtube</span>

                                </a>

                            </div><!-- /.social-links -->

                        </div><!-- /.footer-widget -->

                    </div><!-- /.col-xl-4 -->

                    <div class="col-xl-2 col-lg-3 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">

                        <div class="footer-widget footer-widget--links">

                            <h2 class="footer-widget__title">our <span>Services</span></h2><!-- /.footer-widget__title -->

                            <ul class="list-unstyled footer-widget__links">

                                <li><a href="service-d-cardiology.html">Cardiology Care</a></li>

                                <li><a href="service-d-immediate-care.html">Urgent Care</a></li>

                                <li><a href="service-d-orthopaedics.html">Orthopedic Care</a></li>

                                <li><a href="service-d-neurology-care.html">neurology care</a></li>

                                <li><a href="service-d-gynaecologists.html">gynaecologists</a></li>

                                <li><a href="services.html">Therapy</a></li>

                                <li><a href="service-d-dental-care.html">Dental service</a></li>

                            </ul><!-- /.list-unstyled footer-widget__links -->

                        </div><!-- /.footer-widget -->

                    </div><!-- /.col-xl-2 -->

                    <div class="col-xl-2 col-lg-3 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">

                        <div class="footer-widget footer-widget--links">

                            <h2 class="footer-widget__title">useful <span>links</span></h2><!-- /.footer-widget__title -->

                            <ul class="list-unstyled footer-widget__links">

                                <li><a href="about.html">About Us</a></li>

                                <li><a href="services.html">Our Services</a></li>

                                <li><a href="team.html">Our Team</a></li>

                                <li><a href="blog-grid-right.html">Latest Blog</a></li>

                                <li><a href="appointment.html">Appointments</a></li>

                                <li><a href="faq.html">Help & FAQS</a></li>

                                <li><a href="contact.html">Contact Us</a></li>

                            </ul><!-- /.list-unstyled footer-widget__links -->

                        </div><!-- /.footer-widget -->

                    </div><!-- /.col-xl-2 -->

                    <div class="col-xl-4 col-lg-6 col-md-7 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">

                        <div class="footer-widget footer-widget--blog">

                            <h2 class="footer-widget__title">recent <span>news</span></h2><!-- /.footer-widget__title -->

                            <ul class="footer-widget__posts list-unstyled">

                                <li class="footer-widget__posts__item">

                                    <div class="footer-widget__posts__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/footer-rp-1-1.jpg" alt="Recent posts">

                                    </div><!-- /.footer-widget__posts__image -->

                                    <div class="footer-widget__posts__content">

                                        <div class="footer-widget__posts__meta">

                                            <a href="#">

                                                <span class="footer-widget__posts__meta__icon">

                                                    <i class="icon-user"></i>

                                                </span><!-- /.footer-widget__posts__meta__icon -->

                                                By Admin

                                            </a>

                                            <a href="#">

                                                <span class="footer-widget__posts__meta__icon">

                                                    <i class="icon-comments"></i>

                                                </span><!-- /.footer-widget__posts__meta__icon -->

                                                2 comments

                                            </a>

                                        </div><!-- /.footer-widget__posts__meta -->

                                        <h4 class="footer-widget__posts__title">

                                            <a href="blog-details-right.html">Collaboratively pontificate bleedi edge resources</a>

                                        </h4><!-- /.footer-widget__posts__title -->

                                    </div><!-- /.footer-widget__posts__content -->

                                </li>

                                <li class="footer-widget__posts__item">

                                    <div class="footer-widget__posts__image">

                                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/blog/footer-rp-1-2.jpg" alt="Recent posts">

                                    </div><!-- /.footer-widget__posts__image -->

                                    <div class="footer-widget__posts__content">

                                        <div class="footer-widget__posts__meta">

                                            <a href="#">

                                                <span class="footer-widget__posts__meta__icon">

                                                    <i class="icon-user"></i>

                                                </span><!-- /.footer-widget__posts__meta__icon -->

                                                By Admin

                                            </a>

                                            <a href="#">

                                                <span class="footer-widget__posts__meta__icon">

                                                    <i class="icon-comments"></i>

                                                </span><!-- /.footer-widget__posts__meta__icon -->

                                                2 comments

                                            </a>

                                        </div><!-- /.footer-widget__posts__meta -->

                                        <h4 class="footer-widget__posts__title">

                                            <a href="blog-details-right.html">Quick sync the horse is out of the barn, yet this vendor</a>

                                        </h4><!-- /.footer-widget__posts__title -->

                                    </div><!-- /.footer-widget__posts__content -->

                                </li>

                            </ul><!-- /.footer-widget__posts list-unstyled -->

                        </div><!-- /.footer-widget -->

                    </div><!-- /.col-xl-4 -->

                </div><!-- /.row -->

                <div class="main-footer__bottom">

                    <div class="main-footer__info">

                        <div class="main-footer__info__bg" style="background-image: url(assets/images/backgrounds/footer-contact-bg.jpg);"></div><!-- /.main-footer__info__bg -->

                        <div class="row main-footer__info__row gutter-y-40">

                            <div class="main-footer__info__col-1 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">

                                <div class="main-footer__contact">

                                    <span class="main-footer__contact__icon">

                                        <i class="icon-location"></i>

                                    </span><!-- /.main-footer__contact__icon -->

                                    <div class="main-footer__contact__content">

                                        <p class="main-footer__contact__title">office address</p>

                                        <h4 class="main-footer__contact__text">

                                            <a href="https://www.google.com/maps">4648 Rocky Road Philadelphia PA, 1920</a>

                                        </h4>

                                    </div><!-- /.main-footer__contact__content -->

                                </div><!-- /.main-footer__contact -->

                            </div><!-- /.main-footer__info__col-1 -->

                            <div class="main-footer__info__col-2 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">

                                <div class="main-footer__contact">

                                    <span class="main-footer__contact__icon">

                                        <i class="icon-email"></i>

                                    </span><!-- /.main-footer__contact__icon -->

                                    <div class="main-footer__contact__content">

                                        <p class="main-footer__contact__title">send email</p>

                                        <h4 class="main-footer__contact__text">

                                            <a href="mailto:info@mediox.com">info@mediox.com</a>

                                        </h4>

                                    </div><!-- /.main-footer__contact__content -->

                                </div><!-- /.main-footer__contact -->

                            </div><!-- /.main-footer__info__col-2 -->

                            <div class="main-footer__info__col-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">

                                <div class="main-footer__contact">

                                    <span class="main-footer__contact__icon">

                                        <i class="icon-telephone"></i>

                                    </span><!-- /.main-footer__contact__icon -->

                                    <div class="main-footer__contact__content">

                                        <p class="main-footer__contact__title">call emergency</p>

                                        <h4 class="main-footer__contact__text">

                                            <a href="tel:+208-555-0112">+208-555-0112</a>

                                        </h4>

                                    </div><!-- /.main-footer__contact__content -->

                                </div><!-- /.main-footer__contact -->

                            </div><!-- /.main-footer__info__col-3 -->

                        </div><!-- /.row main-footer__info__row -->

                    </div><!-- /.main-footer__info -->

                    <p class="main-footer__copyright">

                        &copy; Copyright <span class="dynamic-year"></span> by Mediox HTML Template.

                    </p>

                </div><!-- /.main-footer__bottom -->

            </div><!-- /.container -->

        </footer><!-- /.main-footer section-space-top -->



    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">

        <div class="mobile-nav__overlay mobile-nav__toggler"></div>

        <!-- /.mobile-nav__overlay -->

        <div class="mobile-nav__content">

            <span class="mobile-nav__close mobile-nav__toggler"><i class="icon-close"></i></span>



            <div class="logo-box logo-retina">

                <a href="index.html" aria-label="logo image"><img src="<?= base_url() ?>dist/modelos/tres/assets/images/logo-light.png" width="164" alt="" /></a>

            </div>

            <!-- /.logo-box -->

            <div class="mobile-nav__container"></div>

            <!-- /.mobile-nav__container -->



            <ul class="mobile-nav__contact list-unstyled">

                <li>

                    <span class="mobile-nav__contact__icon">

                        <i class="fa fa-envelope"></i>

                    </span>

                    <a href="mailto:needhelp@mediox.com">needhelp@mediox.com</a>

                </li>

                <li>

                    <span class="mobile-nav__contact__icon">

                        <i class="fa fa-phone-alt"></i>

                    </span>

                    <a href="tel:+9156980036420">+91 5698 0036 420</a>

                </li>

            </ul><!-- /.mobile-nav__contact -->

            <div class="mobile-nav__social social-links">

                <a href="https://facebook.com">

                    <i class="fab fa-facebook-f" aria-hidden="true"></i>

                    <span class="sr-only">Facebook</span>

                </a>

                <a href="https://twitter.com">

                    <i class="fab fa-twitter" aria-hidden="true"></i>

                    <span class="sr-only">Twitter</span>

                </a>

                <a href="https://instagram.com">

                    <i class="fab fa-instagram" aria-hidden="true"></i>

                    <span class="sr-only">Instagram</span>

                </a>

                <a href="https://youtube.com">

                    <i class="fab fa-youtube" aria-hidden="true"></i>

                    <span class="sr-only">Youtube</span>

                </a>

            </div><!-- /.mobile-nav__social -->

        </div>

        <!-- /.mobile-nav__content -->

    </div>

    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">

        <div class="search-popup__overlay search-toggler"></div>

        <!-- /.search-popup__overlay -->

        <div class="search-popup__content">

            <form role="search" method="get" class="search-popup__form" action="#">

                <input type="text" id="search" placeholder="Search Here..." />

                <button type="submit" aria-label="search submit" class="mediox-btn">

                    <i class="icon-search"></i>

                </button>

            </form>

        </div>

        <!-- /.search-popup__content -->

    </div>

    <!-- /.search-popup -->

    <aside class="sidebar-one">

        <div class="sidebar-one__overlay sidebar-btn__toggler"></div><!-- /.siderbar-ovarlay -->

        <div class="sidebar-one__content">

            <span class="sidebar-one__close sidebar-btn__toggler"><i class="icon-close"></i></span>

            <div class="sidebar-one__logo sidebar-one__item logo-retina">

                <a href="index.html" aria-label="logo image"><img src="<?= base_url() ?>dist/modelos/tres/assets/images/logo-light.png" width="164" alt="logo" />

                </a>

            </div><!-- /.sidebar-one__logo -->

            <div class="sidebar-one__about sidebar-one__item">

                <p class="sidebar-one__about__text">Here is main text quis nostrud exercitation ullamco laboris nisi here is itealic aliquip ex ea com</p>

            </div><!-- /.sidebar-one__about -->

            <div class="sidebar-one__info sidebar-one__item">

                <h4 class="sidebar-one__title">Contact</h4>

                <ul class="sidebar-one__info__list">

                    <li>

                        <span class="sidebar-one__info__icon sidebar-one__info__icon--location">

                            <i class="icon-location"></i>

                        </span>

                        <address>85 Ketch Harbour Road Bensal

                            PA 19020</address>

                    </li>

                    <li>

                        <span class="sidebar-one__info__icon">

                            <i class="icon-paper-plane"></i>

                        </span>

                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>

                    </li>

                    <li>

                        <span class="sidebar-one__info__icon">

                            <i class="icon-telephone"></i>

                        </span>

                        <a href="tel:+9156980036420">+9156980036420</a>

                    </li>

                </ul><!-- /.sidebar-one__info__list -->

            </div><!-- /.sidebar-one__info -->

            <div class="social-links sidebar-one__item">

                <a href="https://facebook.com">

                    <i class="fab fa-facebook-f" aria-hidden="true"></i>

                    <span class="sr-only">Facebook</span>

                </a>

                <a href="https://twitter.com">

                    <i class="fab fa-twitter" aria-hidden="true"></i>

                    <span class="sr-only">Twitter</span>

                </a>

                <a href="https://instagram.com">

                    <i class="fab fa-instagram" aria-hidden="true"></i>

                    <span class="sr-only">Instagram</span>

                </a>

                <a href="https://youtube.com">

                    <i class="fab fa-youtube" aria-hidden="true"></i>

                    <span class="sr-only">Youtube</span>

                </a>

            </div><!-- /sidebar-one__social -->

            <div class="sidebar-one__newsletter sidebar-one__item">

                <label class="sidebar-one__title" for="sidebar-email">Newsletter</label>

                <form action="#" class="sidebar-one__newsletter__inner mc-form" data-url="MAILCHIMP_FORM_URL">

                    <input type="email" name="EMAIL" id="sidebar-email" class="sidebar-one__newsletter__input" placeholder="Email Address">

                    <button type="submit" class="sidebar-one__newsletter__btn"><span class="icon-email" aria-hidden="true"></span></button>

                </form>

                <div class="mc-form__response"></div><!-- /.mc-form__response -->

            </div><!-- /.sidebar-one__form -->

        </div><!-- /.sidebar__content -->

    </aside><!-- /.sidebar-one -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">

        <span class="scroll-to-top__text">back top</span>

        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>

    </a>



    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery/jquery-3.7.0.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jarallax/jarallax.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-ui/jquery-ui.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-appear/jquery.appear.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-validate/jquery.validate.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/nouislider/nouislider.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/tiny-slider/tiny-slider.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/wnumb/wNumb.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/slick/js/slick.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/wow/wow.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/imagesloaded/imagesloaded.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/isotope/isotope.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/countdown/countdown.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-circleType/jquery.circleType.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>

    <!-- template js -->

    <script src="<?= base_url() ?>dist/modelos/tres/assets/js/mediox.js"></script>

</body>



</html>