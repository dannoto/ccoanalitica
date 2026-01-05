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

                <!-- Título da seção -->
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
                    <div class="sec-title__top">
                        <img src="<?= $d['porque_escolher']['icone'] ?>" alt="porque escolher" class="sec-title__img">
                        <h6 class="sec-title__tagline"><?= $d['porque_escolher']['subtitulo'] ?></h6>
                    </div>
                    <h3 class="sec-title__title">
                        <?= $d['porque_escolher']['titulo'] ?>
                    </h3>
                </div>

                <div class="why-choose-two__inner">

                    <!-- Abas -->
                    <div class="why-choose-two__tab-box tabs-box">

                        <ul class="tab-buttons">
                            <?php foreach ($d['porque_escolher']['abas'] as $index => $aba): ?>
                                <li
                                    data-tab="#aba<?= $index ?>"
                                    class="tab-btn <?= $index === 0 ? 'active-btn' : '' ?>">
                                    <?= $aba['label'] ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="tabs-content">
                            <?php foreach ($d['porque_escolher']['abas'] as $index => $aba): ?>
                                <div
                                    class="tab <?= $index === 0 ? 'active-tab' : '' ?> fadeInUp animated"
                                    id="aba<?= $index ?>"
                                    style="display: <?= $index === 0 ? 'block' : 'none' ?>;">

                                    <div class="row gutter-y-40">

                                        <!-- Imagens -->
                                        <div class="why-choose-two__tab-col-1">
                                            <div class="why-choose-two__image">
                                                <div class="why-choose-two__image__one">
                                                    <img src="<?= $aba['imagens'][0] ?>" alt="imagem principal">
                                                </div>
                                                <div class="why-choose-two__image__two">
                                                    <img src="<?= $aba['imagens'][1] ?>" alt="imagem secundaria">
                                                    <img src="<?= $aba['imagens'][2] ?>" alt="imagem secundaria">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Conteúdo -->
                                        <div class="why-choose-two__tab-col-2">
                                            <div class="why-choose-two__content">
                                                <h3 class="why-choose-two__title"><?= $aba['titulo'] ?></h3>
                                                <p class="why-choose-two__text"><?= $aba['descricao'] ?></p>

                                                <ul class="why-choose-two__list list-unstyled">
                                                    <?php foreach ($aba['lista'] as $item): ?>
                                                        <li>
                                                            <span class="why-choose-two__list__icon">
                                                                <i class="icon-check"></i>
                                                            </span>
                                                            <?= $item ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Carrossel de Clientes -->
        <div class="client-carousel">
            <div class="container">
                <div class="client-carousel__one owl-carousel owl-theme">
                    <?php foreach ($d['clientes']['logos'] as $logo): ?>
                        <div class="client-carousel__one__item">
                            <img src="<?= $logo ?>" alt="cliente" class="client-carousel__one__image">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>



        <section class="work-process-one section-space-two">

            <div class="container">

                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
                    <div class="sec-title__top">
                        <img src="<?= $d['processo']['icone'] ?>" alt="<?= $d['processo']['subtitulo'] ?>" class="sec-title__img">
                        <h6 class="sec-title__tagline"><?= $d['processo']['subtitulo'] ?></h6>
                    </div>
                    <h3 class="sec-title__title"><?= $d['processo']['titulo'] ?></h3>
                </div>

                <div class="work-process-one__inner wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row gutter-y-40">

                        <?php foreach ($d['processo']['etapas'] as $index => $etapa): ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="work-process-one__item <?= $index % 2 !== 0 ? 'work-process-one__item--reverse' : '' ?>">
                                    <span class="work-process-one__item__icon">
                                        <i class="<?= $etapa['icone'] ?>"></i>
                                        <span class="work-process-one__item__number"></span>
                                    </span>
                                    <div class="work-process-one__item__content">
                                        <h3 class="work-process-one__item__title"><?= $etapa['titulo'] ?></h3>
                                        <p class="work-process-one__item__text"><?= $etapa['descricao'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <img src="<?= $d['processo']['shape'] ?>" alt="shape" class="work-process-one__shape">
                </div>

            </div>
        </section>

        <section class="gallery-instagram gallery-instagram--home2">
            <div class="container-fluid">
                <div class="row gutter-y-30">

                    <?php foreach ($d['instagram']['imagens'] as $index => $img): ?>
                        <div class="col-xxl-2 col-md-4 col-sm-6 wow fadeInUp"
                            data-wow-duration="1500ms"
                            data-wow-delay="<?= $index * 100 ?>ms">

                            <div class="gallery-instagram__image">
                                <img src="<?= $img['imagem'] ?>" alt="instagram">
                                <a href="<?= $img['link'] ?>" class="gallery-instagram__image__link" target="_blank">
                                    <span class="icon-instagram"></span>
                                </a>
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <section class="welcome-one welcome-one--home2 section-space-bottom">
            <!-- Background principal da seção -->
            <div class="welcome-one__bg"
                style="background-image: url(<?= $d['boas_vindas']['background'] ?>);">
            </div>

            <div class="container">
                <div class="welcome-one__inner">

                    <!-- Background interno -->
                    <div class="welcome-one__inner__bg"
                        style="background-image: url(<?= $d['boas_vindas']['background_interno'] ?>);">
                    </div>

                    <!-- Conteúdo -->
                    <div class="welcome-one__content">

                        <div class="sec-title wow fadeInUp" data-wow-duration="1500ms">
                            <div class="sec-title__top">
                                <img src="<?= $d['boas_vindas']['icone'] ?>"
                                    alt="<?= $d['boas_vindas']['subtitulo'] ?>"
                                    class="sec-title__img">

                                <h6 class="sec-title__tagline">
                                    <?= $d['boas_vindas']['subtitulo'] ?>
                                </h6>
                            </div>

                            <h3 class="sec-title__title">
                                <?= $d['boas_vindas']['titulo'] ?>
                            </h3>
                        </div>

                        <p class="welcome-one__text wow fadeInUp" data-wow-duration="1500ms">
                            <?= $d['boas_vindas']['descricao'] ?>
                        </p>

                        <?php if (!empty($d['boas_vindas']['botao'])): ?>
                            <div class="wow fadeInUp" data-wow-duration="1500ms">
                                <a href="<?= $d['boas_vindas']['botao']['link'] ?>" class="mediox-btn">
                                    <span><?= $d['boas_vindas']['botao']['titulo'] ?></span>
                                    <span class="mediox-btn__icon">
                                        <i class="icon-up-right-arrow"></i>
                                    </span>
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>

                    <!-- Imagem lateral -->
                    <div class="welcome-one__image">
                        <div class="welcome-one__image__bg"
                            style="background-image: url(<?= $d['boas_vindas']['imagem'] ?>);">
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="testimonials-two section-space" id="testimonials">

            <div class="container">

                <!-- Título da seção -->
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
                    <div class="sec-title__top">
                        <img src="<?= $d['depoimentos']['icone'] ?>"
                            alt="<?= $d['depoimentos']['subtitulo'] ?>"
                            class="sec-title__img">

                        <h6 class="sec-title__tagline">
                            <?= $d['depoimentos']['subtitulo'] ?>
                        </h6>
                    </div>

                    <h3 class="sec-title__title">
                        <?= $d['depoimentos']['titulo'] ?>
                    </h3>
                </div>

                <!-- Carrossel -->
                <div class="testimonials-two__carousel mediox-owl__carousel mediox-owl__carousel--basic-nav owl-carousel owl-theme"
                    data-owl-options='<?= json_encode($d['depoimentos']['carousel_options']) ?>'>

                    <?php foreach ($d['depoimentos']['items'] as $item): ?>
                        <div class="item wow fadeInUp" data-wow-duration="1500ms">

                            <div class="testimonial-card-two">

                                <div class="testimonial-card-two__bg"
                                    style="background-image: url(<?= $item['background'] ?>);">
                                </div>

                                <div class="testimonial-card-two__content">

                                    <div class="testimonial-card-two__top">

                                        <span class="testimonial-card-two__quote-icon">
                                            <i class="icon-quote"></i>
                                        </span>

                                        <div class="testimonial-card-two__ratings">
                                            <div class="mediox-ratings">
                                                <?php for ($i = 0; $i < $item['avaliacao']; $i++): ?>
                                                    <span class="mediox-ratings__icon">
                                                        <i class="icon-star"></i>
                                                    </span>
                                                <?php endfor; ?>
                                            </div>
                                        </div>

                                    </div>

                                    <p class="testimonial-card-two__quote">
                                        <?= $item['texto'] ?>
                                    </p>

                                    <div class="testimonial-card-two__bottom">

                                        <div class="testimonial-card-two__identity">
                                            <div class="testimonial-card-two__info">
                                                <h4 class="testimonial-card-two__name">
                                                    <?= $item['nome'] ?>
                                                </h4>
                                                <p class="testimonial-card-two__designation">
                                                    <?= $item['cargo'] ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="testimonial-card-two__image">
                                            <img src="<?= $item['imagem'] ?>"
                                                alt="<?= $item['nome'] ?>">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <img src="<?= $d['depoimentos']['shape'] ?>"
                alt="shape"
                class="testimonials-two__shape">

        </section>

        <section class="faq-one faq-one--home2">

            <!-- Background da seção -->
            <div class="faq-one__bg"
                style="background-image: url(<?= $d['faq']['background'] ?>);">
            </div>

            <div class="container section-space-two">
                <div class="row gutter-y-50">

                    <!-- Conteúdo FAQ -->
                    <div class="col-xl-6 col-lg-9">
                        <div class="faq-one__content">

                            <!-- Título -->
                            <div class="sec-title wow fadeInUp" data-wow-duration="1500ms">
                                <div class="sec-title__top">
                                    <img src="<?= $d['faq']['icone'] ?>"
                                        alt="<?= $d['faq']['subtitulo'] ?>"
                                        class="sec-title__img">

                                    <h6 class="sec-title__tagline">
                                        <?= $d['faq']['subtitulo'] ?>
                                    </h6>
                                </div>

                                <h3 class="sec-title__title">
                                    <?= $d['faq']['titulo'] ?>
                                </h3>
                            </div>

                            <!-- Accordion -->
                            <div class="faq-one__accordion">
                                <div class="faq-accordion mediox-accordion"
                                    data-grp-name="mediox-accordion">

                                    <?php foreach ($d['faq']['itens'] as $index => $item): ?>
                                        <div class="accordion <?= $index === 0 ? 'active' : '' ?> wow fadeInUp"
                                            data-wow-duration="1500ms"
                                            data-wow-delay="<?= $index * 50 ?>ms">

                                            <div class="accordion-title">
                                                <h4>
                                                    <?= $item['pergunta'] ?>
                                                    <span class="accordion-title__icon"></span>
                                                </h4>
                                            </div>

                                            <div class="accordion-content">
                                                <div class="inner">
                                                    <p><?= $item['resposta'] ?></p>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Imagens laterais -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="faq-one__image">

                            <img src="<?= $d['faq']['imagem_principal'] ?>"
                                alt="FAQ"
                                class="faq-one__image__one">

                            <img src="<?= $d['faq']['imagem_secundaria'] ?>"
                                alt="FAQ"
                                class="faq-one__image__two">

                            <img src="<?= $d['faq']['imagem_shape'] ?>"
                                alt="shape"
                                class="faq-one__image__shape">

                        </div>
                    </div>

                </div>
            </div>

            <img src="<?= $d['faq']['shape_inferior'] ?>"
                alt="shape"
                class="faq-one__shape">

        </section>


        <section class="team-two section-space-two" id="team">

            <div class="container">

                <!-- Título da seção -->
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
                    <div class="sec-title__top">
                        <img src="<?= $d['equipe']['icone'] ?>"
                            alt="<?= $d['equipe']['subtitulo'] ?>"
                            class="sec-title__img">

                        <h6 class="sec-title__tagline">
                            <?= $d['equipe']['subtitulo'] ?>
                        </h6>
                    </div>

                    <h3 class="sec-title__title">
                        <?= $d['equipe']['titulo'] ?>
                    </h3>
                </div>

                <!-- Carousel da equipe -->
                <div class="team-two__carousel mediox-owl__carousel mediox-owl__carousel--with-shadow mediox-owl__carousel--basic-nav owl-carousel owl-theme"
                    data-owl-options='<?= json_encode($d['equipe']['carousel_config']) ?>'>

                    <?php foreach ($d['equipe']['membros'] as $index => $membro): ?>
                        <div class="item">

                            <div class="team-card-two <?= $membro['top_identity'] ? 'team-card-two--top-identity' : '' ?> wow fadeInUp"
                                data-wow-duration="1500ms"
                                data-wow-delay="<?= $index * 100 ?>ms">

                                <div class="team-card-two__image">
                                    <div class="team-card-two__image__inner">

                                        <img src="<?= $membro['imagem'] ?>"
                                            alt="<?= $membro['nome'] ?>">

                                        <?php if (!empty($membro['redes_sociais'])): ?>
                                            <div class="team-card-two__social social-links">
                                                <?php foreach ($membro['redes_sociais'] as $rede): ?>
                                                    <a href="<?= $rede['link'] ?>" target="_blank">
                                                        <i class="<?= $rede['icone'] ?>" aria-hidden="true"></i>
                                                        <span class="sr-only"><?= $rede['nome'] ?></span>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <div class="team-card-two__identity">
                                    <h3 class="team-card-two__name">
                                        <a href="<?= $membro['link'] ?>">
                                            <?= $membro['nome'] ?>
                                        </a>
                                    </h3>

                                    <p class="team-card-two__designation">
                                        <?= $membro['cargo'] ?>
                                    </p>
                                </div>

                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>

            </div>

        </section>


       <footer class="main-footer section-space-top">

    <div class="main-footer__bg"
         style="background-image: url(<?= $d['footer']['background'] ?>);"></div>

    <div class="container">
        <div class="row gutter-y-40">

            <!-- SOBRE / LOGO -->
            <div class="col-xl-4 col-lg-6 col-md-7">
                <div class="footer-widget footer-widget--about">

                    <div class="footer-widget__logo logo-retina">
                        <a href="<?= $d['footer']['logo']['link'] ?>">
                            <img src="<?= $d['footer']['logo']['imagem'] ?>"
                                 alt="<?= $d['footer']['logo']['alt'] ?>"
                                 width="164">
                        </a>
                    </div>

                    <p class="footer-widget__about-text">
                        <?= $d['footer']['sobre_texto'] ?>
                    </p>

                    <a href="<?= $d['footer']['botao']['link'] ?>" class="footer-widget__btn">
                        <span><?= $d['footer']['botao']['titulo'] ?></span>
                        <span class="footer-widget__btn__icon">
                            <i class="icon-up-right-arrow"></i>
                        </span>
                    </a>

                    <div class="social-links">
                        <?php foreach ($d['footer']['redes_sociais'] as $rede): ?>
                            <a href="<?= $rede['link'] ?>">
                                <i class="<?= $rede['icone'] ?>"></i>
                                <span class="sr-only"><?= $rede['nome'] ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

            <!-- SERVIÇOS -->
            <div class="col-xl-2 col-lg-3 col-md-5">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">
                        <?= $d['footer']['servicos']['titulo'] ?>
                    </h2>

                    <ul class="list-unstyled footer-widget__links">
                        <?php foreach ($d['footer']['servicos']['links'] as $link): ?>
                            <li>
                                <a href="<?= $link['url'] ?>">
                                    <?= $link['titulo'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- LINKS ÚTEIS -->
            <div class="col-xl-2 col-lg-3 col-md-5">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">
                        <?= $d['footer']['links_uteis']['titulo'] ?>
                    </h2>

                    <ul class="list-unstyled footer-widget__links">
                        <?php foreach ($d['footer']['links_uteis']['links'] as $link): ?>
                            <li>
                                <a href="<?= $link['url'] ?>">
                                    <?= $link['titulo'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- NOTÍCIAS -->
            <div class="col-xl-4 col-lg-6 col-md-7">
                <div class="footer-widget footer-widget--blog">
                    <h2 class="footer-widget__title">
                        <?= $d['footer']['noticias']['titulo'] ?>
                    </h2>

                    <ul class="footer-widget__posts list-unstyled">
                        <?php foreach ($d['footer']['noticias']['items'] as $post): ?>
                            <li class="footer-widget__posts__item">

                                <div class="footer-widget__posts__image">
                                    <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?>">
                                </div>

                                <div class="footer-widget__posts__content">

                                    <div class="footer-widget__posts__meta">
                                        <a href="#">
                                            <i class="icon-user"></i>
                                            <?= $post['autor'] ?>
                                        </a>
                                        <a href="#">
                                            <i class="icon-comments"></i>
                                            <?= $post['comentarios'] ?> comentários
                                        </a>
                                    </div>

                                    <h4 class="footer-widget__posts__title">
                                        <a href="<?= $post['link'] ?>">
                                            <?= $post['titulo'] ?>
                                        </a>
                                    </h4>

                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>

        <!-- CONTATOS -->
        <div class="main-footer__bottom">
            <div class="main-footer__info"
                 style="background-image: url(<?= $d['footer']['contato']['background'] ?>);">

                <div class="row gutter-y-40">
                    <?php foreach ($d['footer']['contato']['items'] as $item): ?>
                        <div class="col">
                            <div class="main-footer__contact">
                                <i class="<?= $item['icone'] ?>"></i>
                                <div>
                                    <p><?= $item['titulo'] ?></p>
                                    <h4>
                                        <a href="<?= $item['link'] ?>">
                                            <?= $item['texto'] ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <p class="main-footer__copyright">
                <?= $d['footer']['copyright'] ?>
            </p>
        </div>

    </div>
</footer>




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