<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!--=====TITLE=======-->

    <title>Lawsy || Corporate Law</title>



    <!--=====FAV ICON=======-->

    <link rel="shortcut icon" href="assets/img/logo/logo11.png">



    <!--=====CSS=======-->

    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">

    <link rel="stylesheet" href="assets/css/plugins/sidebar.css">

    <link rel="stylesheet" href="assets/css/plugins/aos.css">

    <link rel="stylesheet" href="assets/css/plugins/mobile.css">

    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/plugins/modal-video.min.css">

    <link rel="stylesheet" href="assets/css/plugins/slick-slider.css">

    <link rel="stylesheet" href="assets/css/typography.css">

    <link rel="stylesheet" href="assets/scss/master.css">



    <!--=====JQUERY=======-->

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/jquery-3-6-0.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/waypoints.js"></script>

</head>



<body>



    <!--===== PRELOADER STARTS =======-->

    <div class="se-pre-con preloader7">

        <div class="outer">

            <div class="middle">

                <div class="inner">



                    <div class="Preloader-icon">

                        <img src="<?= base_url() ?>dist/modelos/cinco/assets/img/logo/preloader.svg" alt="">

                    </div>



                </div>

            </div>

        </div>

    </div>

    <!--===== PRELOADER ENDS =======-->



    <!--===== PROGRESS STARTS =======-->

    <div class="paginacontainer">

        <div class="progress-wrap">

            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">

                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />

            </svg>

        </div>

    </div>

    <!--===== PROGRESS ENDS =======-->



    <!--===== HEADER STARTS =======-->

    <header class="header d-none d-lg-block">

        <div class="header-area header homepage7 header-sticky" id="header">

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- TOPO -->
                        <div class="header-top-area">
                            <div class="header-top-border"
                                style="background-image: url(<?= $d['header']['topo']['background'] ?>);">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="top-content-area">
                                            <p>
                                                <?= $d['header']['topo']['mensagem'] ?>
                                                <a href="<?= $d['header']['topo']['link_cta'] ?>">
                                                    <?= $d['header']['topo']['texto_cta'] ?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2"></div>

                                    <div class="col-lg-4">
                                        <div class="social-area">
                                            <ul>
                                                <li>
                                                    <a href="mailto:<?= $d['header']['contato']['email'] ?>">
                                                        <img src="<?= $d['header']['icones']['email'] ?>" alt="email">
                                                        <?= $d['header']['contato']['email'] ?>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="list">
                                                <li>
                                                    <a href="tel:<?= $d['header']['contato']['telefone_link'] ?>">
                                                        <img src="<?= $d['header']['icones']['telefone'] ?>" alt="telefone">
                                                        <?= $d['header']['contato']['telefone'] ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- ELEMENTOS PRINCIPAIS -->
                            <div class="header-elements">

                                <!-- LOGO -->
                                <div class="site-logo">
                                    <a href="<?= $d['header']['logo']['link'] ?>">
                                        <img src="<?= $d['header']['logo']['imagem'] ?>" alt="logo">
                                    </a>
                                </div>

                                <!-- MENU -->
                                <div class="main-menu-ex">
                                    <ul>
                                        <?php foreach ($d['header']['menu'] as $item): ?>
                                            <li>
                                                <a href="<?= $item['link'] ?>">
                                                    <?= $item['titulo'] ?>
                                                    <?php if (!empty($item['submenu'])): ?>
                                                        <span><i class="fa-solid fa-angle-down"></i></span>
                                                    <?php endif; ?>
                                                </a>

                                                <?php if (!empty($item['submenu'])): ?>
                                                    <ul class="dropdown-padding">
                                                        <?php foreach ($item['submenu'] as $sub): ?>
                                                            <li>
                                                                <a href="<?= $sub['link'] ?>">
                                                                    <?= $sub['titulo'] ?>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <!-- AÇÕES -->
                                <div class="contact-3 d-lg-block d-none">
                                    <div class="consulting2 consulting3">
                                        <div class="search-icon">
                                            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>

                                        <a class="header__bar hamburger_menu" href="javascript:void(0);">
                                            <i class="fa-solid fa-bars"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </header>


    <!--===== HEADER ENDS =======-->



    <!--===== MOBILE HEADER STARTS =======-->

    <!-- MOBILE HEADER -->
    <div class="mobile-header mobile-homepage6 d-block d-lg-none">
        <div class="container-fluid">
            <div class="col-12">
                <div class="mobile-header-elements">

                    <div class="mobile-logo">
                        <a href="<?= $d['mobile_header']['logo']['link'] ?>">
                            <img src="<?= $d['mobile_header']['logo']['imagem'] ?>" alt="logo">
                        </a>
                    </div>

                    <div class="mobile-nav-icon dots-menu">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- MOBILE SIDEBAR -->
    <div class="mobile-sidebar sidebar6">

        <div class="logosicon-area">
            <div class="logos">
                <img src="<?= $d['mobile_header']['logo']['imagem'] ?>" alt="logo">
            </div>
            <div class="menu-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>

        <div class="mobile-nav">

            <!-- MENU -->
            <ul class="mobile-nav-list">
                <?php foreach ($d['mobile_header']['menu'] as $item): ?>
                    <li>
                        <a href="<?= $item['link'] ?>"><?= $item['titulo'] ?></a>

                        <?php if (!empty($item['submenu'])): ?>
                            <ul class="sub-menu">
                                <?php foreach ($item['submenu'] as $sub): ?>
                                    <li>
                                        <a href="<?= $sub['link'] ?>">
                                            <?= $sub['titulo'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- CTA + CONTATO -->
            <div class="allmobilesection">

                <a href="<?= $d['mobile_header']['cta']['link'] ?>" class="welcome5-btn">
                    <?= $d['mobile_header']['cta']['titulo'] ?>
                </a>

                <div class="single-footer">
                    <h3>Informações de Contato</h3>

                    <div class="footer4-contact-info">

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <img src="<?= $d['mobile_header']['icones']['telefone'] ?>" alt="telefone">
                            </div>
                            <div class="contact-info-text">
                                <a href="tel:<?= $d['mobile_header']['contato']['telefone_link'] ?>">
                                    <?= $d['mobile_header']['contato']['telefone'] ?>
                                </a>
                            </div>
                        </div>

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <img src="<?= $d['mobile_header']['icones']['email'] ?>" alt="email">
                            </div>
                            <div class="contact-info-text">
                                <a href="mailto:<?= $d['mobile_header']['contato']['email'] ?>">
                                    <?= $d['mobile_header']['contato']['email'] ?>
                                </a>
                            </div>
                        </div>

                        <div class="single-footer single-footer-menu single-footer4">
                            <h3>Redes Sociais</h3>

                            <div class="social-links-mobile-menu5">
                                <ul>
                                    <?php foreach ($d['mobile_header']['redes_sociais'] as $rede): ?>
                                        <li>
                                            <a href="<?= $rede['link'] ?>">
                                                <i class="<?= $rede['icone'] ?>"></i>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--===== MOBILE HEADER ENDS =======-->



    <!--===== WELCOME STARTS =======-->

    <div class="slider-carousel-area owl-carousel car">

        <?php foreach ($d['slider']['slides'] as $slide): ?>
            <div class="welcome7-section-area"
                style="background-image: url(<?= $slide['background'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;">

                <div class="lawer-images">
                    <img src="<?= $slide['imagem_principal'] ?>" alt="<?= $slide['titulo'] ?>" class="law">
                    <img src="<?= $slide['imagem_decorativa'] ?>" alt="decoração" class="polygon5">
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7">
                            <div class="welcome6-header-area">

                                <span data-aos="fade-left" data-aos-duration="800">
                                    <?= $slide['subtitulo'] ?>
                                </span>

                                <h1 data-aos="fade-left" data-aos-duration="900">
                                    <?= $slide['titulo'] ?>
                                    <span class="defence"><?= $slide['titulo_destaque'] ?></span>
                                </h1>

                                <p data-aos="fade-left" data-aos-duration="1000">
                                    <?= $slide['descricao'] ?>
                                </p>

                                <div data-aos="fade-left" data-aos-duration="1200">
                                    <a href="<?= $slide['botao']['link'] ?>" class="welcome6-btn">
                                        <?= $slide['botao']['titulo'] ?>
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="welcome6-elements-area">
                                <div class="polygon-author aniamtion-key-1"
                                    style="background-image: url(<?= $slide['cta_flotante']['background'] ?>);">

                                    <div class="polygon-arrow">
                                        <span>
                                            <a href="<?= $slide['cta_flotante']['link'] ?>">
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </a>
                                        </span>

                                        <a href="<?= $slide['cta_flotante']['link'] ?>">
                                            <?= $slide['cta_flotante']['texto'] ?>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        <?php endforeach; ?>

    </div>

    <!--===== WELCOME ENDS =======-->



    <!--===== ABOUT STARTS =======-->

    <div class="about7-section-area sp1">
        <div class="container">
            <div class="row align-items-center">

                <!-- IMAGENS -->
                <div class="col-lg-6">
                    <div class="about5-images-area">
                        <div class="row">

                            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="about5-img1">
                                    <img src="<?= $d['sobre']['imagem_principal']; ?>" alt="Psicologia - Atendimento Humanizado">
                                </div>
                            </div>

                            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="about5-img1">
                                    <div class="space50"></div>
                                    <img src="<?= $d['sobre']['imagem_secundaria1']; ?>" alt="Sessão de Psicoterapia">
                                </div>
                            </div>

                            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="about5-img1 about5-textarea">
                                    <h1>
                                        <span class="counter"><?= $d['contadores']['items'][0]['numero']; ?></span><?= $d['contadores']['items'][0]['simbolo']; ?>
                                    </h1>
                                    <p><?= $d['contadores']['items'][0]['titulo']; ?></p>
                                    <img src="<?= $d['sobre']['imagem_secundaria2']; ?>" alt="Psicologia Clínica">
                                    <p><?= $d['contadores']['items'][1]['titulo']; ?></p>
                                </div>
                            </div>

                            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1400">
                                <div class="space30"></div>
                                <div class="about5-img1">
                                    <img src="<?= $d['sobre']['imagem_secundaria3']; ?>" alt="Saúde Mental e Bem-estar">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- TEXTO -->
                <div class="col-lg-6">
                    <div class="about7-header-area">

                        <span data-aos="fade-left" data-aos-duration="600">
                            <?= $d['sobre']['subtitulo']; ?>
                        </span>

                        <h2 data-aos="fade-left" data-aos-duration="800">
                            <?= $d['sobre']['titulo']; ?>
                        </h2>

                        <p data-aos="fade-left" data-aos-duration="900">
                            <?= $d['sobre']['descricao']; ?>
                        </p>

                        <h3 data-aos="fade-left" data-aos-duration="1000">
                            <?= $d['sobre']['titulo_lista']; ?>
                        </h3>

                        <div class="list-about" data-aos="fade-left" data-aos-duration="1100">
                            <ul>
                                <li>
                                    <img src="dist/imagens/sobre/psicologia/check.svg" alt="">
                                    <?= $d['sobre']['lista'][0]; ?>
                                </li>
                                <li>
                                    <img src="dist/imagens/sobre/psicologia/check.svg" alt="">
                                    <?= $d['sobre']['lista'][1]; ?>
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <img src="dist/imagens/sobre/psicologia/check.svg" alt="">
                                    <?= $d['sobre']['lista'][2]; ?>
                                </li>
                                <li>
                                    <img src="dist/imagens/sobre/psicologia/check.svg" alt="">
                                    <?= $d['sobre']['lista'][3]; ?>
                                </li>
                            </ul>
                        </div>

                        <div data-aos="fade-left" data-aos-duration="1200">
                            <a href="<?= $d['sobre']['botao']['link']; ?>" class="welcome6-btn">
                                <?= $d['sobre']['botao']['titulo']; ?>
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--===== ABOUT ENDS =======-->



    <!--===== SERVICES STARTS =======-->

    <div class="service7-section-area sp3">
        <div class="container">

            <!-- CABEÇALHO -->
            <div class="row">
                <div class="col-lg-4 m-auto">
                    <div class="service7-header-area text-center">
                        <span data-aos="fade-up" data-aos-duration="800">
                            <?= $d['servicos']['subtitulo']; ?>
                        </span>
                        <h2 data-aos="fade-up" data-aos-duration="1000">
                            <?= $d['servicos']['titulo']; ?>
                        </h2>
                    </div>
                </div>
            </div>

            <!-- LISTA DE SERVIÇOS -->
            <div class="row">
                <?php foreach ($d['servicos']['items'] as $index => $servico): ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="<?= 800 + ($index * 200); ?>">
                        <div class="service7-box-area">
                            <div class="service7-boxarea">

                                <div class="service-images">
                                    <img src="<?= $servico['imagem']; ?>" alt="<?= $servico['titulo']; ?>">
                                </div>

                                <div class="service7-author-area">

                                    <div class="service-icons">
                                        <img src="<?= $servico['icone']; ?>" alt="<?= $servico['titulo']; ?>">
                                    </div>

                                    <div class="service-7-content">
                                        <a href="<?= $servico['link']; ?>">
                                            <?= $servico['titulo']; ?>
                                        </a>

                                        <div class="service7-content">
                                            <p><?= $servico['descricao']; ?></p>
                                            <a href="<?= $servico['link']; ?>">
                                                Saiba Mais <i class="fa-regular fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>


    <!--===== SERVICES ENDS =======-->



    <!--===== WORKS STARTS =======-->

    <div class="works7-section-area sp1">
        <div class="container">

            <!-- CABEÇALHO -->
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="work7-header text-center">
                        <span data-aos="fade-up" data-aos-duration="800">
                            <?= $d['como_funciona']['subtitulo']; ?>
                        </span>

                        <h2 data-aos="fade-up" data-aos-duration="1000">
                            <?= $d['como_funciona']['titulo']; ?>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- COLUNA ESQUERDA -->
                <div class="col-lg-3">
                    <div class="row">
                        <?php foreach ($d['como_funciona']['etapas_esquerda'] as $index => $etapa): ?>
                            <div class="col-lg-12">
                                <div class="<?= $index === 0 ? 'space50' : 'space60'; ?>"></div>

                                <div class="work-author-box" data-aos="fade-right" data-aos-duration="<?= 1000 + ($index * 200); ?>">
                                    <div class="work-content">
                                        <a href="<?= $etapa['link']; ?>">
                                            <?= $etapa['titulo']; ?>
                                        </a>
                                        <p><?= $etapa['descricao']; ?></p>
                                    </div>

                                    <div class="works-icon">
                                        <img src="<?= $etapa['icone']; ?>" alt="<?= $etapa['titulo']; ?>">
                                    </div>

                                    <div class="point">
                                        <h2><?= $etapa['numero']; ?></h2>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- IMAGEM CENTRAL -->
                <div class="col-lg-6">
                    <div class="works-modify-area">
                        <div class="work-img">
                            <img src="<?= $d['como_funciona']['imagem_principal']; ?>"
                                alt="Processo terapêutico"
                                class="works-img1"
                                data-aos="zoom-out"
                                data-aos-duration="1000">
                        </div>
                    </div>
                </div>

                <!-- COLUNA DIREITA -->
                <div class="col-lg-3">
                    <div class="row">
                        <?php foreach ($d['como_funciona']['etapas_direita'] as $index => $etapa): ?>
                            <div class="col-lg-12">
                                <div class="<?= $index === 0 ? 'space50' : 'space60'; ?>"></div>

                                <div class="work-author-box box2" data-aos="fade-left" data-aos-duration="<?= 1000 + ($index * 200); ?>">
                                    <div class="work-content">
                                        <a href="<?= $etapa['link']; ?>">
                                            <?= $etapa['titulo']; ?>
                                        </a>
                                        <p><?= $etapa['descricao']; ?></p>
                                    </div>

                                    <div class="works-icon">
                                        <img src="<?= $etapa['icone']; ?>" alt="<?= $etapa['titulo']; ?>">
                                    </div>

                                    <div class="point">
                                        <h2><?= $etapa['numero']; ?></h2>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--===== WORKS ENDS =======-->



    <!--===== CASE STUDY STARTS =======-->

    <div class="case-study7-section-area sp1">
        <div class="container">

            <!-- CABEÇALHO -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="case-study-header">
                        <span data-aos="fade-up" data-aos-duration="800">
                            <?= $d['estudos_caso']['subtitulo']; ?>
                        </span>

                        <h2 data-aos="fade-up" data-aos-duration="1000">
                            <?= $d['estudos_caso']['titulo']; ?>
                        </h2>
                    </div>
                </div>
            </div>

            <!-- CARROSSEL -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="casestudy-carousel-area owl-carousel">

                        <?php foreach ($d['estudos_caso']['items'] as $item): ?>
                            <div class="case7-study-area">
                                <div class="case-study7-boxarea">

                                    <div class="case-study-casousel-img">
                                        <img src="<?= $item['imagem']; ?>" alt="<?= $item['titulo']; ?>">
                                    </div>

                                    <div class="polygon-author"
                                        style="background-image: url(dist/imagens/estudos-caso/psicologia/estudos-caso-bg.svg);
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            background-size: cover;
                                            display: inline-block;">
                                        <div class="polygon-arrow">
                                            <span>
                                                <a href="<?= $item['link']; ?>">
                                                    <i class="fa-regular fa-arrow-right"></i>
                                                </a>
                                            </span>
                                            <a href="<?= $item['link']; ?>">
                                                <?= $item['botao']; ?>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="case-study-carousel-content text-center">
                                        <a href="<?= $item['link']; ?>">
                                            <?= $item['titulo']; ?>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--===== CASE STUDY ENDS =======-->



    <!--===== TEAM STARTS =======-->

    <div class="team7-section-area sp3">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="team6-header text-center">
                        <span data-aos="fade-up" data-aos-duration="800">
                            <?= $d['equipe']['subtitulo']; ?>
                        </span>

                        <h2 data-aos="fade-up" data-aos-duration="1000">
                            <?= $d['equipe']['titulo']; ?>
                            <span class="defence">
                                <?= $d['equipe']['titulo_destaque']; ?>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($d['equipe']['items'] as $item): ?>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="team6-main-boxarea">

                            <div class="team6-boxarea">
                                <div class="team6-img">
                                    <img src="<?= $item['imagem']; ?>" alt="<?= $item['nome']; ?>">
                                </div>

                                <div class="team6-images">
                                    <img src="dist/imagens/equipe/psicologia/equipe-polygon-1.svg" alt="" class="polygon3">
                                    <img src="dist/imagens/equipe/psicologia/equipe-polygon-2.svg" alt="" class="polygon4">
                                </div>

                                <div class="social-links">
                                    <ul>
                                        <?php if (!empty($item['redes']['instagram'])): ?>
                                            <li><a href="<?= $item['redes']['instagram']; ?>"><i class="fa-brands fa-instagram"></i></a></li>
                                        <?php endif; ?>

                                        <?php if (!empty($item['redes']['linkedin'])): ?>
                                            <li><a href="<?= $item['redes']['linkedin']; ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <?php endif; ?>

                                        <?php if (!empty($item['redes']['facebook'])): ?>
                                            <li><a href="<?= $item['redes']['facebook']; ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="team-content text-center">
                                <a href="<?= $item['link']; ?>">
                                    <?= $item['nome']; ?>
                                </a>
                                <p><?= $item['cargo']; ?></p>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>


    <!--===== TEAM ENDS =======-->



    <!--===== TESTIMONIAL STARTS =======-->
    <div class="testimonial7-section-area sp1">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="testimonial7-haeder text-center">
                        <span data-aos="fade-up" data-aos-duration="800">
                            <?= $d['depoimentos']['subtitulo']; ?>
                        </span>

                        <h2 data-aos="fade-up" data-aos-duration="1000">
                            <?= $d['depoimentos']['titulo']; ?>
                            <span class="defence">
                                <?= $d['depoimentos']['titulo_destaque']; ?>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12" data-aos="fade-down" data-aos-duration="1000">
                    <div class="testimonial7-main-area owl-carousel">

                        <?php foreach ($d['depoimentos']['items'] as $item): ?>
                            <div class="testimonial7-area">

                                <div class="quito7-img">
                                    <img src="<?= $d['depoimentos']['icone']; ?>" alt="Ícone de depoimento">
                                </div>

                                <ul>
                                    <?php for ($i = 1; $i <= $item['avaliacao']; $i++): ?>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    <?php endfor; ?>
                                    <li><span>(<?= $item['avaliacao']; ?>) Avaliação</span></li>
                                </ul>

                                <p>
                                    "<?= $item['texto']; ?>"
                                </p>

                                <div class="mans-img-area">
                                    <div class="img">
                                        <img src="<?= $item['imagem']; ?>" alt="<?= $item['nome']; ?>">
                                    </div>

                                    <div class="img-content">
                                        <a href="#"><?= $item['nome']; ?></a>
                                        <p><?= $item['perfil']; ?></p>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--===== TESTIMONIAL ENDS =======-->






    <!--===== CONTACT STARTS =======-->


    <div class="contact7-section-area sp1"
        style="background-image: url(<?= $d['contato']['background']; ?>);
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
     position: relative;">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="contact7-header text-center">
                        <span data-aos="fade-up" data-aos-duration="800">
                            <?= $d['contato']['subtitulo']; ?>
                        </span>

                        <h2 data-aos="fade-up" data-aos-duration="1000">
                            <?= $d['contato']['titulo']; ?>
                            <span class="defence">
                                <?= $d['contato']['titulo_destaque']; ?>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">

                <!-- FORMULÁRIO -->
                <div class="col-lg-6">
                    <div class="contact-submit-area">
                        <h3 data-aos="fade-up" data-aos-duration="800">
                            <?= $d['contato']['formulario']['titulo']; ?>
                        </h3>

                        <p data-aos="fade-up" data-aos-duration="1000">
                            <?= $d['contato']['formulario']['descricao']; ?>
                        </p>

                        <form method="post" action="<?= $d['contato']['formulario']['action']; ?>">
                            <div class="row" data-aos="fade-up" data-aos-duration="1000">

                                <div class="col-lg-6">
                                    <div class="contact-info">
                                        <input type="text" name="nome" placeholder="<?= $d['contato']['formulario']['placeholders']['nome']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact-info">
                                        <input type="email" name="email" placeholder="<?= $d['contato']['formulario']['placeholders']['email']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact-info">
                                        <input type="text" name="telefone" placeholder="<?= $d['contato']['formulario']['placeholders']['telefone']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact-info">
                                        <textarea name="mensagem" placeholder="<?= $d['contato']['formulario']['placeholders']['mensagem']; ?>" required></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact-info subject">
                                        <input type="text" name="assunto" placeholder="<?= $d['contato']['formulario']['placeholders']['assunto']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="contact-info">
                                        <button type="submit">
                                            <?= $d['contato']['formulario']['botao']; ?>
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- INFORMAÇÕES DE CONTATO -->
                <div class="col-lg-6">
                    <div class="contact-main-boxarea">

                        <?php foreach ($d['contato']['infos'] as $info): ?>
                            <div class="div" data-aos="fade-up" data-aos-duration="<?= $info['aos']; ?>">
                                <div class="contact-box-area">
                                    <div class="contact-icon">
                                        <img src="<?= $info['icone']; ?>" alt="">
                                    </div>
                                    <div class="contact-content">
                                        <h4><?= $info['titulo']; ?></h4>
                                        <a href="<?= $info['link']; ?>">
                                            <?= $info['texto']; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="space20"></div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--===== CONTACT ENDS =======-->



    <!--===== CTA STARTS =======-->

    <div class="cta7-section-area"
        style="background-image: url(<?= $d['cta']['imagem_fundo']; ?>); background-size: cover; background-position: center;">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cta2-section-hedaer sp5" data-aos="zoom-out" data-aos-duration="1000">
                        <div class="row align-items-center">

                            <!-- TEXTO -->
                            <div class="col-lg-6">
                                <div class="cta2-header">
                                    <span data-aos="fade-up" data-aos-duration="400">
                                        <?= $d['cta']['subtitulo']; ?>
                                    </span>

                                    <h2 data-aos="fade-up" data-aos-duration="600">
                                        <?= $d['cta']['titulo']; ?>
                                        <span class="defence"><?= $d['cta']['titulo_destaque']; ?></span>
                                    </h2>

                                    <p data-aos="fade-up" data-aos-duration="800">
                                        <?= $d['cta']['descricao']; ?>
                                    </p>
                                </div>
                            </div>

                            <!-- FORMULÁRIO -->
                            <div class="col-lg-6">
                                <div class="cta-contact-area">
                                    <form action="<?= $d['cta']['form']['action']; ?>" method="post">
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="cta-input">
                                                    <input type="text"
                                                        name="nome"
                                                        placeholder="<?= $d['cta']['form']['campos']['nome']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="cta-input">
                                                    <input type="email"
                                                        name="email"
                                                        placeholder="<?= $d['cta']['form']['campos']['email']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="cta-input">
                                                    <input type="text"
                                                        name="assunto"
                                                        placeholder="<?= $d['cta']['form']['campos']['assunto']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="cta-input">
                                                    <button type="submit" class="cta-btn2">
                                                        <?= $d['cta']['form']['botao']['titulo']; ?>
                                                        <i class="fa-regular fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                    <div class="cta-contact-info">
                                        <p>
                                            📧 <?= $d['cta']['contato']['email']; ?><br>
                                            📞 <?= $d['cta']['contato']['telefone']; ?>
                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--===== CTA ENDS =======-->



    <!--===== FOOTER STARTS =======-->

  <div class="footer7-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="footer-all-section-area sp5">
                    <div class="row">

                        <!-- LOGO + DESCRIÇÃO -->
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-last-section">
                                <div class="footer-imgage">
                                    <img src="<?= $d['footer']['logo']; ?>" alt="<?= $d['footer']['nome_clinica']; ?>">
                                </div>

                                <div class="footer-text-area">
                                    <p><?= $d['footer']['descricao']; ?></p>

                                    <div class="social-list-area">
                                        <ul>
                                            <?php foreach ($d['footer']['redes_sociais'] as $rede): ?>
                                                <li>
                                                    <a href="<?= $rede['link']; ?>" target="_blank">
                                                        <i class="<?= $rede['icone']; ?>"></i>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LINKS RÁPIDOS -->
                        <div class="col-lg-2 col-md-6">
                            <div class="about-links-area">
                                <h3><?= $d['footer']['links']['titulo']; ?></h3>
                                <ul>
                                    <?php foreach ($d['footer']['links']['items'] as $item): ?>
                                        <li>
                                            <a href="<?= $item['link']; ?>">
                                                <?= $item['titulo']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- CONTATO -->
                        <div class="col-lg-3 col-md-6">
                            <div class="get-links-area">
                                <h3><?= $d['footer']['contato']['titulo']; ?></h3>
                                <ul>
                                    <li>
                                        <img src="<?= $d['footer']['contato']['icone_email']; ?>" alt="">
                                        <a href="mailto:<?= $d['footer']['contato']['email']; ?>">
                                            <?= $d['footer']['contato']['email']; ?>
                                        </a>
                                    </li>

                                    <li>
                                        <img src="<?= $d['footer']['contato']['icone_endereco']; ?>" alt="">
                                        <a href="#">
                                            <?= $d['footer']['contato']['endereco']; ?>
                                        </a>
                                    </li>

                                    <li>
                                        <img src="<?= $d['footer']['contato']['icone_telefone']; ?>" alt="">
                                        <a href="tel:<?= $d['footer']['contato']['telefone']; ?>">
                                            <?= $d['footer']['contato']['telefone']; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- NEWSLETTER -->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-contact-area">
                                <h3><?= $d['footer']['newsletter']['titulo']; ?></h3>

                                <div class="footer-form-area">
                                    <form action="<?= $d['footer']['newsletter']['action']; ?>" method="post">
                                        <input type="email"
                                               name="email"
                                               placeholder="<?= $d['footer']['newsletter']['placeholder']; ?>">

                                        <div class="footer-btn">
                                            <button type="submit">
                                                <?= $d['footer']['newsletter']['botao']; ?>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- COPYRIGHT -->
                <div class="copyright-pera">
                    <p><?= $d['footer']['copyright']['texto']; ?></p>
                    <a href="<?= $d['footer']['copyright']['link_politica']; ?>">
                        <?= $d['footer']['copyright']['politica']; ?>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

    <!--===== FOOTER ENDS =======-->



    <!--=====JS=======-->

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/bootstrap.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/fontawesome.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/counter.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/owl-carousel.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/jquery-modal.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/sidebar.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/jquery.nice-select.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/aos.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/slider.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/plugins/mobilemenu.js"></script>

    <script src="<?= base_url() ?>dist/modelos/cinco/assets/js/main.js"></script>



</body>

</html>