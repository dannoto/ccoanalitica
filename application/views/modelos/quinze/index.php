<!-- https://demo.zytheme.com/medisch/ -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Ayman Fikry" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Medisch Responsive Bootstrap 4 Medical HTML5 Template" />
    <title>Home Main - Medisch Responsive Bootstrap 4 Medical HTML5 Template</title>
    <link href="https://demo.zytheme.com/medisch/assets/images/favicon/favicon.png" rel="icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&amp;family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="<?= base_url() ?>dist/modelos/quinze/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="https://demo.zytheme.com/medisch/assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <div class="cursor">
        <div class="cursor__inner cursor__inner--circle"></div>
        <div class="cursor__inner cursor__inner--dot"></div>
    </div>

    <div class="wrapper clearfix" id="wrapperParallax">

        <div class="module-content module-fullscreen module-search-box">
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                            <form class="form-search">
                                <input class="form-control" type="text" placeholder="type words then enter" />
                                <button></button>
                            </form>
                            <!-- End .form-search -->
                        </div>
                        <!-- End .col-lg-8 -->
                    </div>
                    <!--  End .row-->
                </div>
                <!--  End .container-->
            </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
            <!-- End .module-cancel-->
        </div>
        <header class="header header-light header-topbar" id="navbar-spy">

            <!-- TOP BAR -->
            <div class="top-bar">
                <div class="block-left">
                    <i class="fas fa-envelope"></i>
                    <div class="contact-body">
                        <a href="mailto:<?= $d['header']['email'] ?>">
                            <?= $d['header']['email'] ?>
                        </a>
                    </div>

                </div>

                <div class="block-right">
                    <div class="top-contact">

                        <div class="contact-infos">
                            <i class="fas fa-phone-alt"></i>
                            <div class="contact-body">
                                <a href="tel:<?= $d['config']['telefone'] ?>">
                                    <?= $d['config']['telefone_texto'] ?>
                                </a>
                            </div>
                        </div>

                        <div class="contact-infos">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="contact-body">
                                <a href="#">
                                    <?= $d['header']['localizacao'] ?>
                                </a>
                            </div>
                        </div>

                        <div class="contact-infos">
                            <i class="fas fa-clock"></i>
                            <div class="contact-body">
                                <p><?= $d['header']['horario'] ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END TOP BAR -->

            <!-- NAVBAR -->

            <nav class="navbar navbar-expand-xl navbar-sticky" id="primary-menu">

                <a href="#">

                    <svg
                        width="260"
                        height="48"
                        viewBox="0 0 260 48"
                        xmlns="http://www.w3.org/2000/svg"
                        role="img"
                        aria-label="Sua Logo Aqui">
                        <style>
                            .logo-icon {
                                fill: <?= $d['schema']['background'] ?>;
                            }

                            .logo-text {
                                fill: <?= $d['schema']['background'] ?>;
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

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav">

                        <?php foreach ($d['menu'] as $item): ?>
                            <li class="nav-item">
                                <a href="<?= $item['link'] ?>">
                                    <span><?= $item['titulo'] ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>

                    <!-- <div class="module-contact">
                        <a class="btn btn--primary btn-line btn-line-after"
                            href="<?= $d['header']['botao']['link'] ?>">
                            <span><?= $d['header']['botao']['titulo'] ?></span>
                        </a>
                    </div> -->
                    <div class="module-contact">
                        <a class="btn btn--secondary" href="doctors-timetable.html">doctors' timetable</a>
                        <a class="btn btn--primary btn-line btn-line-after" href="<?= $d['header']['botao']['link'] ?>">
                            <span><?= $d['header']['botao']['titulo'] ?></span><span class="line"> <span></span></span>
                        </a>
                    </div>
                </div>
            </nav>

        </header>
        <section class="slider slider-2" id="slider-2">
            <div class="container-fluid pr-0 pl-0">

                <div class="slider-carousel owl-carousel"
                    data-slide="1"
                    data-autoplay="true"
                    data-loop="true"
                    data-speed="800">

                    <?php foreach ($d['slider']['slides'] as $slide): ?>
                        <div class="slide bg-overlay bg-overlay-dark-slider">

                            <div class="bg-section">
                                <img src="<?= $slide['imagem'] ?>" alt="Background" />
                            </div>

                            <div class="container">
                                <div class="slide-content">
                                    <div class="row">

                                        <div class="col-12 col-lg-7">
                                            <h2 class="slide-headline">
                                                <?= $slide['titulo'] ?>
                                            </h2>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <p class="slide-desc">
                                                <?= $slide['descricao'] ?>
                                            </p>



                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <section class="features-bar" id="featuresBar-1">
            <div class="bg-section">
                <img src="<?= $d['features']['background'] ?>" alt="background" />
            </div>

            <div class="container">
                <div class="row g-0 features-holder">

                    <?php foreach ($d['features']['itens'] as $item): ?>
                        <div class="col-12 col-lg-3">
                            <div class="feature-panel <?= $item['classe'] ?>">
                                <div class="feature-content">
                                    <i class="<?= $item['icone'] ?>"></i>
                                    <h5><?= $item['titulo'] ?></h5>
                                    <p><?= $item['descricao'] ?></p>

                                    <?php if (!empty($item['acao'])): ?>
                                        <a href="<?= $item['acao']['link'] ?>">
                                            <?= $item['acao']['texto'] ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if (!empty($item['lista'])): ?>
                                        <ul class="list-unstyled">
                                            <?php foreach ($item['lista'] as $linha): ?>
                                                <li>
                                                    <span><?= $linha['dia'] ?></span>
                                                    <span><?= $linha['horario'] ?></span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <?php if (!empty($item['imagem'])): ?>
                                        <div class="map-img">
                                            <img src="<?= $item['imagem'] ?>" alt="mapa" />
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <!-- TEXTO DE DESTAQUE -->
                <div class="heading heading-15">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <h2 class="heading-title">
                                <?= $d['features']['chamada']['titulo'] ?>
                            </h2>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-1">
                            <p class="paragraph">
                                <?= $d['features']['chamada']['descricao_curta'] ?>
                            </p>
                            <p class="heading-desc">
                                <?= $d['features']['chamada']['descricao_longa'] ?>
                            </p>

                            <div class="actions-holder">
                                <a class="btn btn--primary btn-line btn-line-after"
                                    href="<?= $d['features']['chamada']['botao_principal']['link'] ?>">
                                    <span><?= $d['features']['chamada']['botao_principal']['titulo'] ?></span>
                                    <span class="line"><span></span></span>
                                </a>

                                <a class="btn btn--white"
                                    href="<?= $d['features']['chamada']['botao_secundario']['link'] ?>">
                                    <?= $d['features']['chamada']['botao_secundario']['titulo'] ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="about about-2" id="about-2">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-8">
                        <div class="about-img">
                            <img class="img-fluid"
                                src="<?= $d['sobre']['imagem_principal'] ?>"
                                alt="Sobre" />

                            <a class="popup-video btn-video"
                                href="<?= $d['sobre']['video'] ?>">
                                <i class="fas fa-play"></i>
                                <span><?= $d['sobre']['texto_video'] ?></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 offset-lg-1">
                        <div class="heading heading-16">
                            <p class="heading-desc">
                                <?= $d['sobre']['descricao_lateral'] ?>
                            </p>
                        </div>

                        <ul class="advantages-list">
                            <?php foreach ($d['sobre']['lista'] as $item): ?>
                                <li>
                                    <i class="fas fa-check"></i> <?= $item ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <section class="departments departments-2" id="departments-2">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-12 heading-13 text-center">
                            <p class="heading-subtitle">
                                <?= $d['abordagens']['subtitulo'] ?>
                            </p>
                            <h2 class="heading-title">
                                <?= $d['abordagens']['titulo'] ?>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($d['abordagens']['items'] as $item): ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="department-panel">
                                <div class="department-panel-holder">

                                    <div class="department-img">
                                        <img src="<?= $item['imagem'] ?>" alt="Imagem" />
                                    </div>

                                    <div class="department-content">
                                        <div class="department-title">
                                            <h4><?= $item['titulo'] ?></h4>
                                        </div>

                                        <div class="department-desc">
                                            <p><?= $item['descricao'] ?></p>
                                        </div>

                                        <ul class="department-list list-unstyled">
                                            <?php foreach ($item['lista'] as $linha): ?>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    <span><?= $linha ?></span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>

                                        <div class="department-more">
                                            <a class="btn btn--white btn-line btn-line-before btn-line-inversed"
                                                href="<?= $item['link'] ?>">
                                                <span class="line"><span></span></span>
                                                <span><?= $item['botao'] ?></span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
        <section class="testimonial testimonial-1 testimonial-2" id="testimonial-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="clients-img">
                            <img src="<?= $d['depoimentos']['imagem_lateral'] ?>" alt="image" />
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 offset-lg-1">
                        <h6 class="section-head">
                            <?= $d['depoimentos']['titulo'] ?>
                        </h6>

                        <div class="carousel owl-carousel carousel-dots">
                            <?php foreach ($d['depoimentos']['items'] as $dep): ?>
                                <div class="testimonial-panel testimonial-panel-2">
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p><?= $dep['texto'] ?></p>

                                            <div class="testimonial-thumb">
                                                <div class="thumb-img">
                                                    <img src="<?= $dep['imagem'] ?>" alt="Depoimento" />
                                                    <i class="icon-Quote-Icon"></i>
                                                </div>
                                                <div class="thumb-body">
                                                    <h6><?= $dep['nome'] ?></h6>
                                                    <p><?= $dep['profissao'] ?></p>
                                                </div>
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

        <section class="team team-modern team-carousel" id="teamCarousel-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="heading heading-5">
                            <h2 class="heading-title"><?= $d['equipe']['titulo'] ?></h2>
                            <p class="heading-desc"><?= $d['equipe']['descricao'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="carousel owl-carousel carousel-navs">
                            <?php foreach ($d['equipe']['items'] as $membro): ?>
                                <div>
                                    <div class="team-member">
                                        <div class="team-member-holder">
                                            <div class="team-img">
                                                <img src="<?= $membro['imagem'] ?>" alt="Psicólogo" />
                                            </div>

                                            <div class="team-content-holder">
                                                <div class="team-content">
                                                    <h4><?= $membro['nome'] ?></h4>
                                                    <div class="team-cat"><?= $membro['especialidade'] ?></div>
                                                    <p><?= $membro['descricao'] ?></p>
                                                </div>
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
        <section class="cta cta-3" id="cta-3">
            <div class="container">
                <div class="heading heading-6">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <p class="heading-subtitle">
                                <?= $d['cta']['subtitulo'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <h2 class="heading-title">
                                <?= $d['cta']['titulo'] ?>
                            </h2>
                        </div>

                        <div class="col-12 col-lg-6 offset-lg-1">
                            <div class="prief-set">
                                <p><?= $d['cta']['descricao'] ?></p>

                                <ul class="list-unstyled advantages-list">
                                    <?php foreach ($d['cta']['lista'] as $item): ?>
                                        <li>
                                            <i class="fas fa-check"></i> <?= $item ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="processes">
                <div class="row g-0">
                    <?php foreach ($d['processos']['items'] as $processo): ?>
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="process-panel">
                                <p class="process-number"><?= $processo['numero'] ?></p>
                                <div class="process-body">
                                    <div class="process-icon">
                                        <i class="<?= $processo['icone'] ?>"></i>
                                    </div>
                                    <div class="process-content">
                                        <h5><?= $processo['titulo'] ?></h5>
                                        <p><?= $processo['descricao'] ?></p>
                                        <a class="btn-line btn-line-before btn-line-inversed" href="<?= $processo['link'] ?>">
                                            <span class="line"><span></span></span>
                                            <span><?= $processo['botao'] ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section class="donations donations-3 bg-overlay bg-parallax bg-overlay-theme" id="donations-3">
            <div class="bg-section">
                <img src="<?= $d['doacoes']['imagem_fundo'] ?>" alt="background" />
            </div>

            <div class="container">
                <div class="contact-panel contact-panel-3">
                    <div class="heading heading-light heading-11">
                        <h2 class="heading-title"><?= $d['doacoes']['titulo'] ?></h2>
                        <p class="heading-desc"><?= $d['doacoes']['descricao'] ?></p>

                        <div class="donations-action">
                            <?php foreach ($d['doacoes']['botoes'] as $botao): ?>
                                <a class="btn <?= $botao['classe'] ?>" href="<?= $botao['link'] ?>">
                                    <?= $botao['titulo'] ?>
                                </a>
                            <?php endforeach; ?>
                        </div>

                        <div class="img-hotspot">
                            <div class="img-hotspot-wrap">
                                <div class="img-hotspot-bg">
                                    <img src="<?= $d['doacoes']['mapa']['imagem'] ?>" alt="mapa" />
                                </div>

                                <div class="img-hotspot-pointers">
                                    <?php foreach ($d['doacoes']['mapa']['pontos'] as $ponto): ?>
                                        <div class="img-hotspot-pointer"
                                            data-spot-x="<?= $ponto['x'] ?>"
                                            data-spot-y="<?= $ponto['y'] ?>">
                                            <img src="<?= $ponto['icone'] ?>" alt="pointer" />
                                            <div class="info <?= $ponto['lado'] ?>">
                                                <span><?= $ponto['texto'] ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog blog-grid blog-grid-3" id="blog-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-7 text-center">
                            <p class="heading-subtitle"><?= $d['blog']['subtitulo'] ?></p>
                            <h2 class="heading-title"><?= $d['blog']['titulo'] ?></h2>
                        </div>
                    </div>
                </div>

                <div class="carousel owl-carousel carousel-dots">
                    <?php foreach ($d['blog']['posts'] as $post): ?>
                        <div>
                            <div class="blog-entry">
                                <div class="entry-img">
                                    <div class="entry-date">
                                        <div class="entry-content">
                                            <span class="day"><?= $post['data']['dia'] ?></span>
                                            <span class="month"><?= $post['data']['mes'] ?></span>
                                            <span class="year"><?= $post['data']['ano'] ?></span>
                                        </div>
                                    </div>
                                    <a href="<?= $post['link'] ?>">
                                        <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?>" />
                                    </a>
                                </div>

                                <div class="entry-content">
                                    <div class="entry-meta">
                                        <div class="entry-category">
                                            <?php foreach ($post['categorias'] as $cat): ?>
                                                <a href="javascript:void(0)"><?= $cat ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="entry-author">
                                            <p><?= $post['autor'] ?></p>
                                        </div>
                                    </div>

                                    <h4>
                                        <a href="<?= $post['link'] ?>">
                                            <?= $post['titulo'] ?>
                                        </a>
                                    </h4>

                                    <p><?= $post['resumo'] ?></p>

                                    <a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= $post['link'] ?>">
                                        <span class="line"><span></span></span>
                                        <span>ler mais</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>



        <footer class="footer footer-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <!-- Contato rápido -->
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="footer-widget widget-contact">
                                <div class="footer-widget-title">
                                    <h5><?= $d['footer']['contato']['titulo'] ?></h5>
                                </div>
                                <div class="widget-content">
                                    <p><?= $d['footer']['contato']['descricao'] ?></p>
                                    <ul>
                                        <li class="phone">
                                            <a href="tel:<?= $d['footer']['contato']['telefone_link'] ?>">
                                                <i class="fas fa-phone-alt"></i>
                                                <?= $d['footer']['contato']['telefone'] ?>
                                            </a>
                                        </li>
                                        <li class="address">
                                            <a href="#">
                                                <?= $d['footer']['contato']['endereco'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="directions" href="<?= $d['footer']['contato']['link_direcoes'] ?>">
                                        <i class="icon-arrow-right"></i>
                                        <?= $d['footer']['contato']['texto_direcoes'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Especialidades -->
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <div class="footer-widget widget-links">
                                <div class="footer-widget-title">
                                    <h5><?= $d['footer']['especialidades']['titulo'] ?></h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <?php foreach ($d['footer']['especialidades']['links'] as $link): ?>
                                            <li><a href="<?= $link['url'] ?>"><?= $link['titulo'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Links institucionais -->
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <div class="footer-widget widget-links">
                                <div class="footer-widget-title">
                                    <h5><?= $d['footer']['institucional']['titulo'] ?></h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <?php foreach ($d['footer']['institucional']['links'] as $link): ?>
                                            <li><a href="<?= $link['url'] ?>"><?= $link['titulo'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Ajuda -->
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <div class="footer-widget widget-links">
                                <div class="footer-widget-title">
                                    <h5><?= $d['footer']['ajuda']['titulo'] ?></h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <?php foreach ($d['footer']['ajuda']['links'] as $link): ?>
                                            <li><a href="<?= $link['url'] ?>"><?= $link['titulo'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="footer-widget widget-newsletter">
                                <div class="footer-widget-title">
                                    <h5><?= $d['footer']['newsletter']['titulo'] ?></h5>
                                </div>
                                <div class="widget-content">
                                    <form class="form-newsletter mailchimp">
                                        <div class="form-group">
                                            <input
                                                class="form-control"
                                                type="email"
                                                name="email"
                                                placeholder="<?= $d['footer']['newsletter']['placeholder'] ?>"
                                                required />
                                            <div class="submit">
                                                <input type="submit" value="" />
                                            </div>
                                        </div>
                                        <div class="custom-radio-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input" type="radio" required />
                                                <label><?= $d['footer']['newsletter']['termos'] ?></label>
                                            </div>
                                        </div>
                                        <div class="subscribe-alert"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Rodapé inferior -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-copyright">
                                <div class="copyright">
                                    <span>
                                        <?= $d['footer']['copyright']['texto'] ?>
                                    </span>
                                    <ul class="list-unstyled social-icons">
                                        <?php foreach ($d['footer']['redes_sociais'] as $rede): ?>
                                            <li>
                                                <a class="<?= $rede['classe'] ?>" href="<?= $rede['url'] ?>">
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
        </footer>

        <div class="backtop" id="back-to-top" data-hover="">
            <svg class="bi bi-chevron-up" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
            </svg>
        </div>


    </div>

    <script src="https://demo.zytheme.com/medisch/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="https://demo.zytheme.com/medisch/assets/js/vendor.min.js"></script>
    <script src="https://demo.zytheme.com/medisch/assets/js/functions.js"></script>
</body>

</html>