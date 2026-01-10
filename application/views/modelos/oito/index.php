<!-- https://demo.bytelabx.com/html/binuza/ -->
<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ByteLabX">
    <meta name="description" content="Binuza - Business Consultancy Html Template">
    <!-- ======== Page title ============ -->
    <title>Binuza</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="https://demo.bytelabx.com/html/binuza/assets/img/favicon.svg">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/nice-select.css">
    <!--<< Color.css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/color.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="https://demo.bytelabx.com/html/binuza/assets/css/main.min.css">
</head>

<body>
<!-- PRELOADER -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner"></div>

        <div class="txt-loading">
            <?php foreach ($d['preloader']['letras'] as $letra): ?>
                <span data-text-preloader="<?= $letra ?>" class="letters-loading">
                    <?= $letra ?>
                </span>
            <?php endforeach; ?>
        </div>

        <p class="text-center">
            <?= $d['preloader']['texto_loading']; ?>
        </p>
    </div>

    <div class="loader">
        <div class="row">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="col-3 loader-section <?= $i < 2 ? 'section-left' : 'section-right'; ?>">
                    <div class="bg"></div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<!-- BACK TO TOP -->
<button id="back-top" class="back-to-top">
    <i class="<?= $d['back_to_top']['icone']; ?>"></i>
</button>

<!-- OFFCANVAS -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">

                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="<?= $d['offcanvas']['logo']['link']; ?>">
                            <img src="<?= $d['offcanvas']['logo']['imagem']; ?>" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="<?= $d['offcanvas']['botao_fechar_icone']; ?>"></i>
                        </button>
                    </div>
                </div>

                <p class="text d-none d-xl-block">
                    <?= $d['offcanvas']['descricao']; ?>
                </p>

                <div class="mobile-menu fix mb-3"></div>

                <div class="offcanvas__contact">
                    <h4><?= $d['offcanvas']['titulo_contato']; ?></h4>

                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="<?= $d['offcanvas']['endereco']['icone']; ?>"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">
                                    <?= $d['offcanvas']['endereco']['texto']; ?>
                                </a>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="<?= $d['offcanvas']['email']['icone']; ?>"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:<?= $d['offcanvas']['email']['valor']; ?>">
                                    <?= $d['offcanvas']['email']['valor']; ?>
                                </a>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="<?= $d['offcanvas']['horario']['icone']; ?>"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <?= $d['offcanvas']['horario']['texto']; ?>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="<?= $d['offcanvas']['telefone']['icone']; ?>"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:<?= $d['offcanvas']['telefone']['link']; ?>">
                                    <?= $d['offcanvas']['telefone']['texto']; ?>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <a href="<?= $d['offcanvas']['botao']['link']; ?>" class="theme-btn">
                        <span>
                            <?= $d['offcanvas']['botao']['texto']; ?>
                            <i class="<?= $d['offcanvas']['botao']['icone']; ?>"></i>
                        </span>
                    </a>

                    <div class="social-icon d-flex align-items-center">
                        <?php foreach ($d['offcanvas']['redes_sociais'] as $rede): ?>
                            <a href="<?= $rede['link']; ?>">
                                <i class="<?= $rede['icone']; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    <div class="offcanvas__overlay"></div>

  <?php
// $d é o array vindo do controller / include
?>

<header id="header-sticky" class=" header-1 header-2">
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="logo">
                    <a href="<?= $d['header']['logo']['link']; ?>" class="header-logo">
                        <img src="<?= $d['header']['logo']['imagem']; ?>" alt="logo-img">
                    </a>
                    <a href="<?= $d['header']['logo']['link']; ?>" class="header-logo-2 d-none">
                        <img src="<?= $d['header']['logo']['imagem']; ?>" alt="logo-img">
                    </a>
                </div>

                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>
                                    <?php foreach ($d['header']['menu'] as $item): ?>
                                        <li class="<?= $item['classe']; ?>">
                                            <a href="<?= $item['link']; ?>">
                                                <?= $item['titulo']; ?>
                                                <?php if (!empty($item['submenu'])): ?>
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                <?php endif; ?>
                                            </a>

                                            <?php if (!empty($item['submenu'])): ?>
                                                <ul class="submenu">
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
                            </nav>
                        </div>
                    </div>

                    <a href="#0" class="search-trigger search-icon">
                        <i class="<?= $d['header']['search']['icone']; ?>"></i>
                    </a>

                    <div class="contact-items">
                        <div class="icon">
                            <i class="<?= $d['header']['telefone']['icone']; ?>"></i>
                        </div>
                        <div class="content">
                            <span><?= $d['header']['telefone']['texto_auxiliar']; ?></span>
                            <h6>
                                <a href="tel:<?= $d['header']['telefone']['link']; ?>">
                                    <?= $d['header']['telefone']['texto']; ?>
                                </a>
                            </h6>
                        </div>
                    </div>

                    <div class="header__hamburger d-xl-block my-auto">
                        <div class="sidebar__toggle">
                            <i class="<?= $d['header']['hamburger_icone']; ?>"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="<?= $d['search']['placeholder']; ?>">
                </div>
            </form>
        </div>
    </div>
</div>

<section class="hero-section-2 hero-2 bg-cover"
    style="background-image: url('<?= $d['hero']['background']; ?>');">

    <div class="hero-shape float-bob-y">
        <img src="<?= $d['hero']['shape_1']; ?>" alt="img">
    </div>

    <div class="hero-shape-2 float-bob-y">
        <img src="<?= $d['hero']['shape_2']; ?>" alt="img">
    </div>

    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1><?= $d['hero']['titulo']; ?></h1>
                    <p><?= $d['hero']['descricao']; ?></p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image">
                    <img src="<?= $d['hero']['imagem_principal']; ?>" alt="img">

                    <div class="box-shape-1 float-bob-y">
                        <img src="<?= $d['hero']['box_shape_1']; ?>" alt="img">
                    </div>

                    <div class="box-shape-2 float-bob-x">
                        <img src="<?= $d['hero']['box_shape_2']; ?>" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


   <?php
// $d = json_decode(..., true);
?>

<section class="about-section-2 fix section-padding">
    <div class="container">
        <div class="about-wrapper-2">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-items">
                        <div class="left-img">
                            <div class="about-image">
                                <img src="<?= $d['sobre']['imagem_principal']; ?>" alt="img">
                            </div>
                            <div class="counter-box">
                                <h2>
                                    <span class="count"><?= $d['sobre']['contador']['numero']; ?></span><?= $d['sobre']['contador']['simbolo']; ?>
                                </h2>
                                <p><?= $d['sobre']['contador']['titulo']; ?></p>
                            </div>
                        </div>
                        <div class="about-image-2">
                            <img src="<?= $d['sobre']['imagem_secundaria']; ?>" alt="img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp">
                                <?= $d['sobre']['subtitulo']; ?>
                            </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                <?= $d['sobre']['titulo']; ?>
                            </h2>
                        </div>

                        <div class="icon-items-area mt-4 mt-mb-0">
                            <?php foreach ($d['sobre']['destaques'] as $item): ?>
                                <div class="icon-items">
                                    <div class="icon">
                                        <img src="<?= $item['icone']; ?>" alt="img">
                                    </div>
                                    <h5><?= nl2br($item['texto']); ?></h5>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <p><?= $d['sobre']['descricao']; ?></p>

                        <div class="about-us-button wow fadeInUp" data-wow-delay=".7s">
                            <a href="<?= $d['sobre']['botao']['link']; ?>" class="theme-btn">
                                <span><?= $d['sobre']['botao']['titulo']; ?></span>
                                <i class="far fa-long-arrow-right"></i>
                            </a>

                            <div class="client-info">
                                <img src="<?= $d['sobre']['clientes']['imagem']; ?>" alt="img">
                                <h6>
                                    <?= nl2br($d['sobre']['clientes']['texto']); ?>
                                </h6>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="brand-section section-padding section-bg fix">
    <div class="container">
        <div class="section-title text-center">
            <p class="mb-5"><?= $d['marcas']['descricao']; ?></p>
        </div>

        <div class="swiper brand-slider">
            <div class="swiper-wrapper">
                <?php foreach ($d['marcas']['imagens'] as $img): ?>
                    <div class="swiper-slide">
                        <div class="brand-img text-center">
                            <img src="<?= $img; ?>" alt="img">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>

<section class="service-section-3 section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp"><?= $d['servicos']['subtitulo']; ?></span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                <?= nl2br($d['servicos']['titulo']); ?>
            </h2>
        </div>
    </div>

    <div class="service-wrapper-2">
        <div class="swiper service-slider">
            <div class="swiper-wrapper">

                <?php foreach ($d['servicos']['items'] as $servico): ?>
                    <div class="swiper-slide">
                        <div class="service-box-items-2">
                            <div class="icon">
                                <img src="<?= $servico['icone']; ?>" alt="img">
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="<?= $servico['link']; ?>">
                                        <?= $servico['titulo']; ?>
                                    </a>
                                </h3>
                                <ul>
                                    <?php foreach ($servico['descricao'] as $linha): ?>
                                        <li><?= $linha; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <a href="<?= $servico['link']; ?>" class="link-btn">
                                    <?= $servico['botao']; ?>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="swiper-dot-3 mt-5">
        <div class="dot2"></div>
    </div>
</section>


    <section class="choose-us-section section-padding choose-bg">
    <div class="container">
        <div class="choose-us-wrapper-3">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6">
                    <div class="choose-us-content">
                        <div class="section-title mb-0">
                            <span class="sub-title style-2 wow fadeInUp">
                                <?= $d['porque_escolher']['subtitulo'] ?>
                            </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                <?= $d['porque_escolher']['titulo'] ?>
                            </h2>
                        </div>

                        <p class="choose-us-text wow fadeInUp" data-wow-delay=".5s">
                            <?= $d['porque_escolher']['descricao'] ?>
                        </p>

                        <div class="counter-area">
                            <?php foreach ($d['porque_escolher']['contadores'] as $contador): ?>
                                <div class="counter-content">
                                    <h3>
                                        <?= $contador['prefixo'] ?>
                                        <span class="count"><?= $contador['numero'] ?></span>
                                        <?= $contador['sufixo'] ?>
                                    </h3>
                                    <p><?= $contador['texto'] ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-us-info">
                        <?php foreach ($d['porque_escolher']['beneficios'] as $beneficio): ?>
                            <div class="choose-us-box-items wow fadeInUp" data-wow-delay="<?= $beneficio['delay'] ?>">
                                <div class="icon">
                                    <?= $beneficio['icone_svg'] ?>
                                </div>
                                <div class="content">
                                    <h4><?= $beneficio['titulo'] ?></h4>
                                    <p><?= $beneficio['descricao'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="team-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                <?= $d['equipe']['subtitulo'] ?>
            </span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                <?= $d['equipe']['titulo'] ?>
            </h2>
        </div>

        <div class="team-wrapper-2">
            <div class="row g-4 align-items-center">
                <div class="col-xl-6">
                    <div class="team-content-area">
                        <?php foreach ($d['equipe']['membros'] as $membro): ?>
                            <div class="team-content changeImage2 wow fadeInUp clicked"
                                data-wow-duration="1.2s"
                                data-wow-delay=".2s"
                                data-image="<?= $membro['imagem'] ?>">

                                <div class="team-items-1">
                                    <span><?= $membro['ordem'] ?>).</span>
                                    <h4><a href=""><?= $membro['nome'] ?></a></h4>
                                </div>

                                <div class="team-items-2">
                                    <div class="icon"><i class="fa-regular fa-slash-forward"></i></div>
                                    <h5><a href=""><?= $membro['especialidade'] ?></a></h5>
                                    <div class="icon-2"><i class="fa-regular fa-angle-right"></i></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="team-thumb">
                        <img id="myImage2"
                             src="<?= $d['equipe']['imagem_principal'] ?>"
                             alt="thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="video-tour-section fix bg-cover"
    style="background-image: url('<?= $d['video']['background'] ?>');">
    <div class="container">
        <div class="video-tour-wrapper-1">
            <div class="row align-items-center">
                <div class="video-tour-content-info center">
                    <div class="section-title mb-0 center">
                        <span class="sub-title style-2 wow fadeInUp">
                            <?= $d['video']['subtitulo'] ?>
                        </span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            <?= $d['video']['titulo'] ?>
                        </h2>
                    </div>

                    <div class="video-button fadeInUp" data-wow-delay=".9s">
                        <a href="<?= $d['video']['link'] ?>" class="video-btn ripple video-popup">
                            <i class="fa-solid fa-play"></i>
                        </a>
                        <span><?= $d['video']['texto_apoio'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="portfolio-section section-padding">
    <div class="container">
        <div class="portfolio-wrapper-2">
            <div class="row g-4 d-flex justify-content-between">
                <div class="col-lg-5">
                    <div class="portfolio-content sticky-style">
                        <div class="section-title mb-0">
                            <span class="sub-title wow fadeInUp">
                                <?= $d['portfolio']['subtitulo'] ?>
                            </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                <?= $d['portfolio']['titulo'] ?>
                            </h2>
                        </div>
                        <p class="portfolio-text wow fadeInUp" data-wow-delay=".5s">
                            <?= $d['portfolio']['descricao'] ?>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-items-info">
                        <?php foreach ($d['portfolio']['items'] as $item): ?>
                            <div class="portfolio-thumb wow fadeInUp" data-wow-delay="<?= $item['delay'] ?>">
                                <img src="<?= $item['imagem'] ?>" alt="thumb">
                                <div class="portfolio-content">
                                    <p><?= $item['categoria'] ?></p>
                                    <h4>
                                        <a href="<?= $item['link'] ?>">
                                            <?= $item['titulo'] ?>
                                        </a>
                                    </h4>
                                </div>
                                <div class="arrow-button">
                                    <a href="<?= $item['link'] ?>" class="post-box link-btn">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="testimonial-section-2 section-padding fix section-bg">
    <div class="container">
        <div class="section-title text-center">
            <span class="style-2 sub-title wow fadeInUp">
                <?= $d['depoimentos']['subtitulo'] ?>
            </span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                <?= $d['depoimentos']['titulo'] ?>
            </h2>
        </div>

        <div class="testimonial-wrapper-2">
            <div class="swiper testimonial-slider-2">
                <div class="swiper-wrapper">

                    <?php foreach ($d['depoimentos']['items'] as $depoimento): ?>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items-two justify-content-between">
                                <div class="icon-items d-flex justify-content-between">
                                    <div class="icon">
                                        <img src="<?= $depoimento['icone'] ?>" alt="icon">
                                    </div>
                                    <div class="star">
                                        <?php for ($i = 0; $i < $depoimento['avaliacao']; $i++): ?>
                                            <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                </div>

                                <div class="content">
                                    <p><?= $depoimento['texto'] ?></p>
                                </div>

                                <div class="client-info d-flex align-items-center">
                                    <ul>
                                        <li>
                                            <?= $depoimento['nome'] ?> /
                                            <span><?= $depoimento['cargo'] ?></span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="client-info-thumb">
                                    <img src="<?= $depoimento['imagem'] ?>" alt="client-thumb">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="faqs-section section-padding fix">
    <div class="container">
        <div class="faqs-wrapper-2">
            <div class="row g-5 d-flex justify-content-between">
                <div class="col-lg-5">
                    <div class="faqs-content">
                        <div class="section-title mb-0">
                            <span class="sub-title wow fadeInUp">
                                <?= $d['faqs']['subtitulo'] ?>
                            </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                <?= $d['faqs']['titulo'] ?>
                            </h2>
                        </div>

                        <p class="faqs-text wow fadeInUp" data-wow-delay=".5s">
                            <?= $d['faqs']['descricao'] ?>
                        </p>

                        <div class="faqs-button wow fadeInUp" data-wow-delay=".7s">
                            <a href="<?= $d['faqs']['botao']['link'] ?>" class="theme-btn">
                                <span><?= $d['faqs']['botao']['titulo'] ?></span>
                                <i class="far fa-long-arrow-right"></i>
                            </a>

                            <div class="contect-icon-box wow fadeInUp" data-wow-delay=".5s">
                                <div class="contect-icon">
                                    <i class="fa-regular fa-phone"></i>
                                </div>
                                <div class="contect-content">
                                    <span>Telefone</span>
                                    <h3><?= $d['faqs']['telefone'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="faq-content">
                        <div class="faq-accordion mt-4 mt-md-0">
                            <div class="accordion" id="accordion">

                                <?php foreach ($d['faqs']['items'] as $faq): ?>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay="<?= $faq['delay'] ?>">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button <?= $faq['aberto'] ? '' : 'collapsed' ?>"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#<?= $faq['id'] ?>"
                                                aria-expanded="<?= $faq['aberto'] ? 'true' : 'false' ?>">
                                                <?= $faq['pergunta'] ?>
                                            </button>
                                        </h5>

                                        <div id="<?= $faq['id'] ?>"
                                             class="accordion-collapse collapse <?= $faq['aberto'] ? 'show' : '' ?>"
                                             data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <?= $faq['resposta'] ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

    

  <section class="news-section section-padding section-bg fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title style-2 wow fadeInUp">
                <?= $d['blog']['subtitulo'] ?>
            </span>

            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                <?= $d['blog']['titulo'] ?>
            </h2>

            <p class="mt-3 mt-mb-0 wow fadeInUp" data-wow-delay=".5s">
                <?= $d['blog']['descricao'] ?>
            </p>
        </div>

        <div class="row">
            <?php foreach ($d['blog']['posts'] as $post): ?>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?= $post['delay'] ?>">
                    <div class="news-card-items">
                        <div class="news-thumb">
                            <img src="<?= $post['imagem'] ?>" alt="img">
                            <h4 class="number">
                                <?= $post['dia'] ?><span><?= $post['mes'] ?></span>
                            </h4>
                        </div>

                        <div class="news-content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    Por <b><?= $post['autor'] ?></b>
                                </li>
                                <li class="style-2">
                                    <i class="fa-regular fa-comments"></i>
                                    <?= $post['comentarios'] ?> <b>Comentários</b>
                                </li>
                            </ul>

                            <h3>
                                <a href="<?= $post['link'] ?>">
                                    <?= $post['titulo'] ?>
                                </a>
                            </h3>

                            <p>
                                <?= $post['resumo'] ?>
                            </p>

                            <a href="<?= $post['link'] ?>" class="link-btn">
                                Ler Mais <i class="fa-light fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

 <section class="footer-section fix bg-cover" style="background-image: url(<?php echo $d['footer']['background']; ?>);">
    <div class="container">
        <div class="contact-info-area">
            <div class="content">
                <div class="section-title">
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        <?php echo $d['footer']['cta']['titulo']; ?>
                    </h2>
                </div>
            </div>
            <a href="<?php echo $d['footer']['cta']['botao']['link']; ?>" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                <span><?php echo $d['footer']['cta']['botao']['titulo']; ?></span>
                <i class="far fa-long-arrow-right"></i>
            </a>
        </div>

        <div class="footer-widget-wrapper">
            <div class="row">

                <?php foreach ($d['footer']['menus'] as $menu): ?>
                <div class="<?php echo $menu['col']; ?> wow fadeInUp" data-wow-delay="<?php echo $menu['delay']; ?>">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3><?php echo $menu['titulo']; ?></h3>
                        </div>
                        <ul class="list-items">
                            <?php foreach ($menu['links'] as $link): ?>
                            <li>
                                <a href="<?php echo $link['url']; ?>">
                                    <?php echo $link['label']; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="col-xl-4 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3><?php echo $d['footer']['noticias']['titulo']; ?></h3>
                        </div>
                        <div class="recent-post-area">

                            <?php foreach ($d['footer']['noticias']['items'] as $post): ?>
                            <div class="recent-post-items <?php echo $post['mb']; ?>">
                                <div class="thumb">
                                    <img src="<?php echo $post['imagem']; ?>" alt="img">
                                </div>
                                <div class="content">
                                    <ul class="post-date">
                                        <li>
                                            <i class="fa-regular fa-circle-chevron-down"></i>
                                            <?php echo $post['tempo']; ?>
                                        </li>
                                    </ul>
                                    <h6>
                                        <a href="<?php echo $post['link']; ?>">
                                            <?php echo $post['titulo']; ?>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="contact-info-area-2">
            <div class="logo-image">
                <img src="<?php echo $d['footer']['logo']; ?>" alt="img">
            </div>

            <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
                <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="content">
                    <p>Telefone:</p>
                    <h6>
                        <a href="tel:<?php echo $d['footer']['contato']['telefone_link']; ?>">
                            <?php echo $d['footer']['contato']['telefone']; ?>
                        </a>
                    </h6>
                </div>
            </div>

            <div class="contact-info-items wow fadeInUp" data-wow-delay=".5s">
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="content">
                    <p>E-mail:</p>
                    <h6>
                        <a href="mailto:<?php echo $d['footer']['contato']['email']; ?>">
                            <?php echo $d['footer']['contato']['email']; ?>
                        </a>
                    </h6>
                </div>
            </div>

            <div class="contact-info-items wow fadeInUp" data-wow-delay=".7s">
                <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="content">
                    <p>Endereço:</p>
                    <h6><?php echo $d['footer']['contato']['endereco']; ?></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper">
                <p class="wow fadeInUp" data-wow-delay=".3s">
                    <?php echo $d['footer']['copyright']; ?>
                </p>
                <div class="social-icon d-flex align-items-center">
                    <?php foreach ($d['footer']['social'] as $social): ?>
                        <a href="<?php echo $social['link']; ?>">
                            <i class="<?php echo $social['icon']; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


    <!--<< All JS Plugins >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="https://demo.bytelabx.com/html/binuza/assets/js/main.min.js"></script>
</body>

</html>