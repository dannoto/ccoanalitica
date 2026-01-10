<!-- https://nayonacademy.com/html/bizzen/ -->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Business, Consulting, Finance">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Bizzen - Business Consulting HTML Template</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="https://nayonacademy.com/html/bizzen/assets/images/favicon.png" type="image/png">
    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="https://nayonacademy.com/html/bizzen/assets/fonts/fontawesome/css/all.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="https://nayonacademy.com/html/bizzen/assets/css/plugins/bootstrap.min.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="https://nayonacademy.com/html/bizzen/assets/css/plugins/slick.css">
    <!--====== Magnific-popup css ======-->
    <link rel="stylesheet" href="https://nayonacademy.com/html/bizzen/assets/css/plugins/magnific-popup.css">
    <!--====== Aos css ======-->
    <link rel="stylesheet" href="https://nayonacademy.com/html/bizzen/assets/css/plugins/aos.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="https://nayonacademy.com/html/bizzen/assets/css/spacings.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="https://nayonacademy.com/html/bizzen/assets/css/style.css">
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loading-wrapper">
            <div class="loading"></div>
            <div id="loading-icon">
                <img src="<?= $d['preloader']['imagem'] ?>" alt="<?= $d['preloader']['alt'] ?>">
            </div>
        </div>
    </div>
    <!--====== End Preloader ======-->

    <!--====== Start Overlay ======-->
    <div class="offcanvas__overlay"></div>

    <!--=== Start Header Area ===-->
    <header class="header-area header-one">
        <!--==== Header Navigation ===-->
        <div class="header-navigation">
            <div class="container-fluid">
                <!--==== Primary Menu ===-->
                <div class="primary-menu">
                    <!--==== Site Branding ===-->
                    <div class="site-branding">
                        <a href="<?= $d['header']['logo']['link'] ?>" class="brand-logo">
                            <img src="<?= $d['header']['logo']['imagem'] ?>" alt="<?= $d['header']['logo']['alt'] ?>">
                        </a>
                    </div>

                    <!--=== Main Menu ===-->
                    <div class="theme-nav-menu">
                        <!--=== Menu Top ===-->
                        <div class="theme-menu-top d-block d-xl-none">
                            <div class="site-branding">
                                <a href="<?= $d['header']['logo']['link'] ?>" class="brand-logo">
                                    <img src="<?= $d['header']['logo']['imagem'] ?>" alt="<?= $d['header']['logo']['alt'] ?>">
                                </a>
                            </div>
                        </div>

                        <!--=== Main Menu ===-->
                        <nav class="main-menu">
                            <ul>
                                <?php foreach ($d['header']['menu'] as $item): ?>
                                    <li class="menu-item <?= !empty($item['sub_menu']) ? 'has-children' : '' ?>">
                                        <a href="<?= $item['link'] ?>"><?= $item['titulo'] ?></a>

                                        <?php if (!empty($item['sub_menu'])): ?>
                                            <ul class="sub-menu">
                                                <?php foreach ($item['sub_menu'] as $sub): ?>
                                                    <li>
                                                        <a href="<?= $sub['link'] ?>"><?= $sub['titulo'] ?></a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>

                        <!--=== Nav Button (Mobile) ===-->
                        <div class="theme-nav-button mt-20 d-block d-md-none">
                            <a href="<?= $d['header']['botao']['link'] ?>" class="theme-btn style-one">
                                <?= $d['header']['botao']['titulo'] ?>
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>

                        <!--=== Menu Bottom ===-->
                        <div class="theme-menu-bottom mt-50 d-block d-xl-none">
                            <h5><?= $d['header']['social']['titulo'] ?></h5>
                            <ul class="social-link">
                                <?php foreach ($d['header']['social']['items'] as $social): ?>
                                    <li>
                                        <a href="<?= $social['link'] ?>">
                                            <i class="<?= $social['icone'] ?>"></i>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!--=== Header Nav Right ===-->
                    <div class="nav-right-item">
                        <div class="nav-button d-none d-md-block">
                            <a href="<?= $d['header']['botao']['link'] ?>" class="theme-btn style-one">
                                <?= $d['header']['botao']['titulo'] ?>
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--=== End Header Area ===-->


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <!--====== Start Hero Section ======-->
                <section class="bizzen-hero">
                    <div class="bizzen-hero_one bg_cover" style="background-image: url(<?= $d['hero']['background'] ?>);">
                        <div class="hero-bg-shape"></div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">
                                            <?= $d['hero']['subtitulo'] ?>
                                        </span>

                                        <h1 class="text-anm">
                                            <?= $d['hero']['titulo'] ?>
                                            <span>
                                                <img src="<?= $d['hero']['imagem_destaque'] ?>" alt="imagem destaque">
                                            </span>
                                        </h1>

                                        <div class="hero-button" data-aos="fade-up" data-aos-duration="1400">
                                            <a href="<?= $d['hero']['botao']['link'] ?>" class="theme-btn style-one">
                                                <?= $d['hero']['botao']['titulo'] ?>
                                                <i class="far fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <!--=== Text Box ===-->
                                    <div class="text-box mb-5 mb-xl-0" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="avatar-list">
                                            <?php foreach ($d['hero']['avatares'] as $avatar): ?>
                                                <img src="<?= $avatar ?>" alt="avatar">
                                            <?php endforeach; ?>
                                        </div>

                                        <h4>
                                            <?= $d['hero']['contador']['numero'] ?>
                                            <span><?= $d['hero']['contador']['titulo'] ?></span>
                                        </h4>

                                        <p><?= $d['hero']['descricao_lateral'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image text-center" data-aos="fade-up" data-aos-duration="1200">
                                        <img src="<?= $d['hero']['imagem_principal'] ?>" alt="hero image">

                                        <div class="hero-rating-box">
                                            <h2><?= $d['hero']['avaliacao']['nota'] ?></h2>
                                            <div class="ratings">
                                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                                    <i class="<?= $i <= $d['hero']['avaliacao']['estrelas'] ? 'fas' : 'far' ?> fa-star"></i>
                                                <?php endfor; ?>
                                            </div>
                                            <p><?= $d['hero']['avaliacao']['texto'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!--====== End Hero Section ======-->
                <!--====== Start Service Section ======-->
                <section class="bizzen-service_one pt-115 pb-115 bg_cover" style="background-image: url(<?= $d['servicos']['background'] ?>);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="section-title text-center mb-60">
                                    <span class="sub-title" data-aos="fade-up" data-aos-duration="1000">
                                        <?= $d['servicos']['subtitulo'] ?>
                                    </span>
                                    <h2 class="text-anm"><?= $d['servicos']['titulo'] ?></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php foreach ($d['servicos']['items'] as $i => $servico): ?>
                                <div class="col-xl-3 col-md-6">
                                    <div class="bizzen-service-item style-one mb-30"
                                        data-aos="fade-up"
                                        data-aos-duration="<?= 1000 + ($i * 200) ?>">
                                        <div class="service-inner-content">
                                            <div class="icon">
                                                <img src="<?= $servico['icone'] ?>" alt="icon">
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    <a href="<?= $servico['link'] ?>">
                                                        <?= $servico['titulo'] ?>
                                                    </a>
                                                </h4>
                                                <p><?= $servico['descricao'] ?></p>
                                                <a href="<?= $servico['link'] ?>" class="read-more style-one">
                                                    <?= $servico['cta'] ?> <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-box text-center mt-30" data-aos="fade-up" data-aos-duration="1800">
                                    <p>
                                        <?= $d['servicos']['texto_rodape'] ?>
                                        <a href="<?= $d['servicos']['link_rodape'] ?>">
                                            <?= $d['servicos']['texto_link'] ?>
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--====== End Service Section ======-->
                <!--====== Start About Section ======-->
                <section class="bizzen-about_one pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-10">
                                <div class="bizzen-image mb-5 mb-xl-0" data-aos="fade-up" data-aos-duration="800">
                                    <img src="<?= $d['sobre']['imagem_principal'] ?>" alt="sobre imagem">
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-10">
                                <div class="bizzen-content-box">
                                    <div class="section-title mb-50">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">
                                            <?= $d['sobre']['subtitulo'] ?>
                                        </span>
                                        <h2 class="text-anm"><?= $d['sobre']['titulo'] ?></h2>
                                    </div>

                                    <div class="experience-text-wrap">
                                        <div class="experience-box" data-aos="fade-up" data-aos-duration="1000">
                                            <h2>
                                                <?= $d['sobre']['experiencia']['numero'] ?>
                                                <span><?= $d['sobre']['experiencia']['texto'] ?></span>
                                            </h2>
                                        </div>

                                        <div class="text-box">
                                            <p data-aos="fade-up" data-aos-duration="1000">
                                                <?= $d['sobre']['descricao'] ?>
                                            </p>

                                            <ul class="check-list style-one" data-aos="fade-up" data-aos-duration="1200">
                                                <?php foreach ($d['sobre']['lista'] as $item): ?>
                                                    <li><i class="fas fa-check-circle"></i><?= $item ?></li>
                                                <?php endforeach; ?>
                                            </ul>

                                            <div class="bizzen-button" data-aos="fade-up" data-aos-duration="1400">
                                                <a href="<?= $d['sobre']['botao']['link'] ?>" class="theme-btn style-one">
                                                    <?= $d['sobre']['botao']['titulo'] ?>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--====== End About Section ======-->


                <!--====== Start Achievement Section ======-->
                <section class="bizzen-counter_one bg_cover pt-115 pb-80"
                    style="background-image: url(<?= $d['conquistas']['background'] ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="bizzen-content-box">
                                    <div class="section-title text-white">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">
                                            <?= $d['conquistas']['subtitulo'] ?>
                                        </span>
                                        <h2 class="text-anm"><?= $d['conquistas']['titulo'] ?></h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-duration="1200">
                                        <?= $d['conquistas']['descricao'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php foreach ($d['conquistas']['items'] as $i => $item): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="bizzen-counter-item style-one mb-30"
                                        data-aos="fade-up"
                                        data-aos-duration="<?= 1000 + ($i * 200) ?>">
                                        <div class="number">
                                            <h2>
                                                <span class="counter"><?= $item['numero'] ?></span><?= $item['simbolo'] ?>
                                            </h2>
                                        </div>
                                        <div class="content">
                                            <h5><?= nl2br($item['titulo']) ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
                <!--====== End Achievement Section ======-->
                <!--====== Start Process Section ======-->
                <section class="bizzen-proces_one py-5 py-xl-0 my-xl-0">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-xl-4 col-lg-12">
                                <div class="section-title mb-5 mb-xl-0">
                                    <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">
                                        <?= $d['processo']['subtitulo'] ?>
                                    </span>
                                    <h2 class="text-anm"><?= $d['processo']['titulo'] ?></h2>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="bizzen-work-list">
                                    <?php foreach ($d['processo']['passos'] as $i => $passo): ?>
                                        <div class="bizzen-process-item style-one"
                                            data-aos="fade-up"
                                            data-aos-duration="<?= 1000 + ($i * 200) ?>">
                                            <div class="number">
                                                <?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?>
                                            </div>
                                            <div class="content">
                                                <h4><?= $passo ?></h4>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="text-box mt-5 mt-md-0" data-aos="fade-up" data-aos-duration="1600">
                                    <span><?= $d['processo']['destaque']['texto'] ?></span>
                                    <h2><?= $d['processo']['destaque']['numero'] ?></h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!--====== End Process Section ======-->
                <!--====== Start Project Section ======-->
                <section class="bizzen-project-sec pt-120 pb-90">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-10">
                                <div class="section-title text-center mb-60">
                                    <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">
                                        <?= $d['projetos']['subtitulo'] ?>
                                    </span>
                                    <h2 class="text-anm"><?= $d['projetos']['titulo'] ?></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bizzen-project-list">
                                    <?php foreach ($d['projetos']['items'] as $projeto): ?>
                                        <div class="bizzen-project-item style-one mb-30">
                                            <div class="project-inner bg_cover"
                                                style="background-image: url(<?= $projeto['imagem'] ?>);">
                                                <div class="content">
                                                    <span class="sub-title"><?= $projeto['categoria'] ?></span>
                                                    <h4 class="title">
                                                        <a href="<?= $projeto['link'] ?>">
                                                            <?= $projeto['titulo'] ?>
                                                        </a>
                                                    </h4>
                                                    <p><?= $projeto['descricao'] ?></p>

                                                    <div class="tag-button">
                                                        <?php foreach ($projeto['tags'] as $tag): ?>
                                                            <a href="#" class="theme-btn style-two"><?= $tag ?></a>
                                                        <?php endforeach; ?>
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


                <!--====== Start Team Section ======-->
                <section class="bizzen-team_one pt-115 p-r z-1">
                    <div class="team-bg bg_cover" style="background-image: url(<?= $d['equipe']['background'] ?>);"></div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-10">
                                <div class="section-title text-center text-white mb-60">
                                    <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">
                                        <?= $d['equipe']['subtitulo'] ?>
                                    </span>
                                    <h2 class="text-anm"><?= $d['equipe']['titulo'] ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach ($d['equipe']['items'] as $index => $membro): ?>
                                <div class="col-xl-3 col-md-6 col-sm-12">
                                    <div class="bizzen-team-item style-one mb-40"
                                        data-aos="fade-up"
                                        data-aos-duration="<?= 1000 + ($index * 200) ?>">
                                        <div class="member-image">
                                            <img src="<?= $membro['imagem'] ?>" alt="foto profissional">

                                            <div class="hover-content">
                                                <div class="content-wrap">
                                                    <div class="social-box">
                                                        <?php foreach ($membro['redes'] as $rede): ?>
                                                            <a href="<?= $rede['link'] ?>">
                                                                <i class="<?= $rede['icone'] ?>"></i>
                                                            </a>
                                                        <?php endforeach; ?>
                                                    </div>

                                                    <div class="member-info text-center">
                                                        <h4 class="title">
                                                            <a href="<?= $membro['link'] ?>">
                                                                <?= $membro['nome'] ?>
                                                            </a>
                                                        </h4>
                                                        <span class="position"><?= $membro['especialidade'] ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
                <!--====== End Team Section ======-->

                <!--====== Start Testimonial Section ======-->
                <section class="bizzen-testimonial_one pt-80 pb-110">
                    <div class="testimonial-map-bg bg_cover"
                        style="background-image: url(<?= $d['depoimentos']['background'] ?>);"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="quote-box text-center mb-40">
                                    <img src="<?= $d['depoimentos']['icone_quote'] ?>" alt="quote">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="testimonial-slider">

                                    <?php foreach ($d['depoimentos']['items'] as $depoimento): ?>
                                        <div class="bizzen-testimonial-item style-one">
                                            <div class="testimonial-content">
                                                <p>“<?= $depoimento['texto'] ?>”</p>

                                                <div class="ratings">
                                                    <?php for ($i = 0; $i < $depoimento['avaliacao']; $i++): ?>
                                                        <i class="fas fa-star"></i>
                                                    <?php endfor; ?>
                                                </div>

                                                <div class="author-thumb-item">
                                                    <div class="author-thumb">
                                                        <img src="<?= $depoimento['foto'] ?>" alt="cliente">
                                                    </div>
                                                    <div class="author-info">
                                                        <h5><?= $depoimento['nome'] ?></h5>
                                                        <span class="position"><?= $depoimento['perfil'] ?></span>
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
                <!--====== End Testimonial Section ======-->


                <!--====== Start Blog Section ======-->
                <section class="bizzen-blog-sec pt-110 pb-90">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-10">
                                <div class="bizzen-content-box mb-5 mb-xl-0 text-center text-xl-start">
                                    <div class="section-title">
                                        <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">
                                            <?= $d['blog']['subtitulo'] ?>
                                        </span>
                                        <h2 class="text-anm"><?= $d['blog']['titulo'] ?></h2>
                                    </div>
                                    <div class="bizzen-button" data-aos="fade-up" data-aos-duration="1000">
                                        <a href="<?= $d['blog']['botao']['link'] ?>" class="theme-btn style-one">
                                            <?= $d['blog']['botao']['titulo'] ?>
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-7 col-lg-10">
                                <div class="bizzen-blog-list">
                                    <?php foreach ($d['blog']['items'] as $index => $post): ?>
                                        <div class="bizzen-blog-post-item style-one mb-30"
                                            data-aos="fade-up"
                                            data-aos-duration="<?= 1000 + ($index * 200) ?>">

                                            <div class="post-thumbnail">
                                                <img src="<?= $post['imagem'] ?>" alt="Post Thumbnail">
                                            </div>

                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <span><a href="#"><?= $post['categoria'] ?></a></span>
                                                    <span><?= $post['data'] ?></span>
                                                </div>

                                                <h4 class="title">
                                                    <a href="<?= $post['link'] ?>">
                                                        <?= $post['titulo'] ?>
                                                    </a>
                                                </h4>

                                                <p><?= $post['resumo'] ?></p>

                                                <a href="<?= $post['link'] ?>" class="read-more style-one">
                                                    <?= $d['blog']['texto_leia_mais'] ?>
                                                    <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--====== End Blog Section ======-->

                <!--====== Start Company Section ======-->
                <section class="bizzen-company-sec pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-box text-center mb-30" data-aos="fade-up" data-aos-duration="1000">
                                    <h6><?= $d['parceiros']['titulo'] ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="clients-slider" data-aos="fade-up" data-aos-duration="1200">
                            <?php foreach ($d['parceiros']['logos'] as $logo): ?>
                                <div class="bizzen-client-item">
                                    <div class="client-img">
                                        <img src="<?= $logo ?>" alt="Client Logo">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
                <!--====== End Company Section ======-->

            </main>
            <?php
            // $d já está disponível na view
            ?>

            <!--======  Start Footer  ======-->
            <footer class="main-footer">
                <div class="footer-shape">
                    <img src="<?= $d['footer']['imagem_shape'] ?>" alt="footer shape">
                </div>

                <div class="footer-widget-wrapper">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="footer-widget footer-about-widget pt-100" data-aos="fade-up" data-aos-duration="800">
                                    <div class="widget-content">

                                        <div class="footer-logo mb-20">
                                            <a href="<?= $d['footer']['logo_link'] ?>">
                                                <img src="<?= $d['footer']['logo'] ?>" alt="logo white">
                                            </a>
                                        </div>

                                        <p class="mb-20"><?= $d['footer']['newsletter']['texto'] ?></p>

                                        <form>
                                            <div class="form-group">
                                                <input
                                                    type="email"
                                                    class="form_control"
                                                    placeholder="<?= $d['footer']['newsletter']['placeholder'] ?>"
                                                    name="email"
                                                    required>
                                                <button class="submit-btn">
                                                    <i class="far fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="footer-widget-inner">

                                    <div class="footer-top" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="big-text"><?= $d['footer']['chamada_principal'] ?></div>
                                    </div>

                                    <div class="footer-widget-area">
                                        <div class="row">

                                            <?php foreach ($d['footer']['enderecos'] as $index => $endereco): ?>
                                                <div class="col-md-4">
                                                    <div class="footer-widget footer-contact-info-widget mb-40"
                                                        data-aos="fade-up"
                                                        data-aos-duration="<?= 1200 + ($index * 200) ?>">
                                                        <div class="widget-content">
                                                            <h6><?= $endereco['titulo'] ?></h6>
                                                            <ul>
                                                                <li><?= $endereco['descricao'] ?></li>
                                                                <li>
                                                                    <a href="<?= $endereco['link'] ?>">
                                                                        <?= $endereco['contato'] ?>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                            <div class="col-md-4">
                                                <div class="footer-widget footer-social-widget mb-40"
                                                    data-aos="fade-up"
                                                    data-aos-duration="1600">
                                                    <h4 class="widget-title"><?= $d['footer']['social']['titulo'] ?></h4>
                                                    <div class="widget-content">
                                                        <div class="social-box">
                                                            <?php foreach ($d['footer']['social']['links'] as $social): ?>
                                                                <a href="<?= $social['url'] ?>">
                                                                    <i class="<?= $social['icone'] ?>"></i>
                                                                </a>
                                                            <?php endforeach; ?>
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

                <div class="copyright-area">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="copyright-text text-md-start text-center">
                                    <p><?= $d['footer']['copyright'] ?></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="copyright-link text-md-end text-center">
                                    <?php foreach ($d['footer']['links_legais'] as $link): ?>
                                        <a href="<?= $link['url'] ?>"><?= $link['titulo'] ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
            <!--======  End Footer  ======-->

        </div>
    </div>
    <!--====== Jquery js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/jquery-3.7.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/bootstrap.min.js"></script>
    <!--====== Gsap Js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/gsap/gsap.min.js"></script>
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/gsap/SplitText.min.js"></script>
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/gsap/ScrollSmoother.min.js"></script>
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/gsap/ScrollTrigger.min.js"></script>
    <!--====== Slick js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <!--====== Waypoint js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/jquery.waypoints.js"></script>
    <!--====== CounterUp js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/jquery.counterup.min.js"></script>
    <!--====== Aos js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/plugins/aos.js"></script>
    <!--====== Common js ======-->
    <script src="https://nayonacademy.com/html/bizzen/assets/js/theme.js"></script>
</body>

</html>