<!-- https://html.quomodosoft.com/aball/aball/ -->
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Aball</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="https://html.quomodosoft.com/aball/aball/assets/images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="https://html.quomodosoft.com/aball/aball/assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="https://html.quomodosoft.com/aball/aball/assets/css/font-awesome.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="https://html.quomodosoft.com/aball/aball/assets/css/magnific-popup.css">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="https://html.quomodosoft.com/aball/aball/assets/css/animate.min.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="https://html.quomodosoft.com/aball/aball/assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="https://html.quomodosoft.com/aball/aball/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="https://html.quomodosoft.com/aball/aball/assets/css/style.css">


</head>

<body>

    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <header class="header-area">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">

                                <a class="navbar-brand" href="<?= $d['header']['logo']['link']; ?>">
                                    <img src="<?= $d['header']['logo']['imagem']; ?>" alt="">
                                </a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">

                                        <?php foreach ($d['header']['menu'] as $item): ?>
                                            <li class="nav-item <?= $item['ativo'] ? 'active' : ''; ?>">
                                                <a class="nav-link" href="<?= $item['link']; ?>">
                                                    <?= $item['titulo']; ?>
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

                                <div class="navbar-btn d-none d-sm-block">
                                    <a class="main-btn" href="<?= $d['header']['botao']['link']; ?>">
                                        <?= $d['header']['botao']['titulo']; ?>
                                    </a>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="hero-area">
        <div class="section__bg"></div>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <div class="hero-content">
                        <img src="<?= $d['hero']['imagem_linha']; ?>" alt="">
                        <h1 class="title animated wow fadeInLeft"
                            data-wow-duration="3000ms"
                            data-wow-delay="0ms">
                            <?= $d['hero']['titulo']; ?>
                        </h1>

                        <span class="animated wow fadeInLeft"
                            data-wow-duration="3000ms"
                            data-wow-delay="300ms">
                            <?= $d['hero']['subtitulo']; ?>
                        </span>

                        <a class="main-btn main-btn-2 animated wow fadeInDown"
                            data-wow-duration="3000ms"
                            data-wow-delay="600ms"
                            href="<?= $d['hero']['botao']['link']; ?>">
                            <?= $d['hero']['botao']['titulo']; ?>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero-play">
                        <a class="video-popup" href="<?= $d['hero']['video']; ?>">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="sub-item-area">
        <div class="container">
            <div class="row justify-content-center">

                <?php foreach ($d['sub_itens']['items'] as $item): ?>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="sub-item">
                            <div class="icon">
                                <?= $item['icone']; ?>
                            </div>
                            <h3 class="title"><?= $item['titulo']; ?></h3>
                            <span><?= $item['descricao']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <section class="about-us-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <img src="<?= $d['sobre']['imagem_linha']; ?>" alt="">
                        <span><?= $d['sobre']['subtitulo']; ?></span>
                        <h3 class="title"><?= $d['sobre']['titulo']; ?></h3>
                        <p><?= $d['sobre']['descricao']; ?></p>

                        <ul>
                            <?php foreach ($d['sobre']['lista'] as $item): ?>
                                <li><?= $item; ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <a class="main-btn" href="<?= $d['sobre']['botao']['link']; ?>">
                            <?= $d['sobre']['botao']['titulo']; ?>
                        </a>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-thumb animated wow fadeInRight" data-wow-duration="3000ms" data-wow-delay="0ms">
                        <img src="<?= $d['sobre']['imagem_principal']; ?>" alt="">
                        <ul>
                            <?php foreach ($d['sobre']['avaliacoes'] as $avaliacao): ?>
                                <li>
                                    <img src="<?= $avaliacao['imagem']; ?>" alt="">
                                    <span><?= $avaliacao['texto']; ?></span>
                                    <?php for ($i = 0; $i < $avaliacao['estrelas']; $i++): ?>
                                        <i class="fas fa-star"></i>
                                    <?php endfor; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-area pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <img src="<?= $d['servicos']['imagem_linha']; ?>" alt="">
                        <h3 class="title"><?= $d['servicos']['titulo']; ?></h3>
                        <p><?= $d['servicos']['descricao']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <?php foreach ($d['servicos']['items'] as $index => $servico): ?>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="service-item mt-30 animated wow fadeInUp"
                            data-wow-duration="1000ms"
                            data-wow-delay="<?= $index * 300; ?>ms">
                            <div class="icon">
                                <?= $servico['icone']; ?>
                            </div>
                            <h3 class="title"><?= $servico['titulo']; ?></h3>
                            <p><?= $servico['descricao']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="portfolio-area pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <img src="<?= $d['portfolio']['imagem_linha']; ?>" alt="">
                        <h3 class="title"><?= $d['portfolio']['titulo']; ?></h3>
                        <p><?= $d['portfolio']['descricao']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="row portfolio-active">
                <?php foreach ($d['portfolio']['items'] as $item): ?>
                    <div class="col-lg-3">
                        <div class="portfolio-item mt-30 mb-30">
                            <img src="<?= $item['imagem']; ?>" alt="">
                            <div class="portfolio-overlay">
                                <div class="content">
                                    <img src="<?= $d['portfolio']['imagem_linha']; ?>" alt="">
                                    <h4 class="title"><?= $item['titulo']; ?></h4>
                                    <p><?= $item['descricao']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title section-title-2 text-center">
                        <img src="<?= $d['depoimentos']['imagem_linha']; ?>" alt="">
                        <h3 class="title"><?= $d['depoimentos']['titulo']; ?></h3>
                        <p><?= $d['depoimentos']['descricao']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row testimonial-active">
                <?php foreach ($d['depoimentos']['items'] as $item): ?>
                    <div class="col-lg-4">
                        <div class="testimonial-item mt-30">
                            <div class="quote">
                                <?= $d['depoimentos']['icone_quote']; ?>
                            </div>
                            <p><?= $item['texto']; ?></p>
                            <div class="info">
                                <img src="<?= $item['imagem']; ?>" alt="">
                                <h5 class="title"><?= $item['nome']; ?></h5>
                                <span><?= $item['cargo']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="overview-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="overview-content">
                        <img src="<?= $d['overview']['imagem_linha']; ?>" alt="">
                        <span><?= $d['overview']['subtitulo']; ?></span>
                        <h3 class="title"><?= $d['overview']['titulo']; ?></h3>
                        <p><?= $d['overview']['descricao']; ?></p>
                        <a class="main-btn" href="<?= $d['overview']['botao']['link']; ?>">
                            <?= $d['overview']['botao']['titulo']; ?>
                        </a>

                        <div class="brand-item d-flex align-items-center mt-70">
                            <?php foreach ($d['overview']['logos'] as $logo): ?>
                                <div class="item">
                                    <a href="#"><img src="<?= $logo; ?>" alt=""></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="overview-counter-area">
                        <div class="row">
                            <?php foreach ($d['overview']['contadores'] as $i => $contador): ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="overview-counter-item <?= $i < 2 ? 'mt-10' : 'mt-30'; ?> animated wow fadeInUp"
                                        data-wow-duration="3000ms"
                                        data-wow-delay="<?= $i * 300; ?>ms">
                                        <div class="icon">
                                            <img src="<?= $contador['icone']; ?>" alt="">
                                        </div>
                                        <h3 class="title">
                                            <span class="count"><?= $contador['numero']; ?></span><?= $contador['sufixo']; ?>
                                        </h3>
                                        <span><?= $contador['titulo']; ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <img src="<?= $d['equipe']['imagem_linha']; ?>" alt="">
                        <h3 class="title"><?= $d['equipe']['titulo']; ?></h3>
                        <p><?= $d['equipe']['descricao']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row team-active">
                <?php foreach ($d['equipe']['items'] as $membro): ?>
                    <div class="col-lg-3">
                        <div class="team-item mt-40 mb-100">
                            <img src="<?= $membro['imagem']; ?>" alt="">
                            <div class="team-overlay d-flex align-items-end">
                                <div class="content">
                                    <h4 class="title"><?= $membro['nome']; ?></h4>
                                    <span><?= $membro['cargo']; ?></span>
                                    <ul>
                                        <?php foreach ($membro['redes'] as $icone => $link): ?>
                                            <li><a href="<?= $link; ?>"><i class="<?= $icone; ?>"></i></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title section-title-2 text-center">
                        <img src="<?= $d['planos']['imagem_linha'] ?>" alt="">
                        <h3 class="title"><?= $d['planos']['titulo'] ?></h3>
                        <p><?= $d['planos']['descricao'] ?></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <?php foreach ($d['planos']['items'] as $i => $plano): ?>
                    <div class="col-lg-4 col-md-6 col-sm-9 <?= $plano['ordem'] ?>">
                        <div class="pricing-item mt-30 <?= $plano['destaque'] ? 'center' : '' ?> animated wow <?= $plano['animacao'] ?>"
                            data-wow-duration="1000ms" data-wow-delay="0ms">

                            <h3 class="title"><?= $plano['preco'] ?></h3>
                            <span><?= $plano['nome'] ?></span>
                            <p><?= $plano['descricao'] ?></p>

                            <ul>
                                <?php foreach ($plano['beneficios'] as $beneficio): ?>
                                    <li><?= $beneficio ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <a class="main-btn" href="<?= $plano['link'] ?>"><?= $plano['botao'] ?></a>

                            <?php if ($plano['destaque']): ?>
                                <div class="tag"><?= $plano['tag'] ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="article-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <img src="<?= $d['artigos']['imagem_linha'] ?>" alt="">
                        <h3 class="title"><?= $d['artigos']['titulo'] ?></h3>
                        <p><?= $d['artigos']['descricao'] ?></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <?php foreach ($d['artigos']['items'] as $artigo): ?>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="article-item mt-30 <?= $artigo['classe'] ?>">
                            <div class="article-top text-center">
                                <a href="<?= $artigo['link'] ?>">
                                    <span><?= $artigo['titulo'] ?></span>
                                </a>
                            </div>

                            <div class="article-thumb">
                                <a href="<?= $artigo['link'] ?>">
                                    <img src="<?= $artigo['imagem'] ?>" alt="">
                                </a>
                                <div class="date">
                                    <h5 class="title"><?= $artigo['dia'] ?></h5>
                                    <span><?= $artigo['mes'] ?></span>
                                </div>
                            </div>

                            <div class="article-content pl-25 pr-25 pt-25">
                                <p><?= $artigo['resumo'] ?></p>
                                <a href="<?= $artigo['link'] ?>">LER MAIS</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="container">
            <div class="footer-top d-block d-sm-flex justify-content-between align-items-center">
                <div class="footer-logo">
                    <a href="#">
                        <img src="<?= $d['footer']['logo'] ?>" alt="">
                    </a>
                </div>
                <div class="footer-social">
                    <ul>
                        <?php foreach ($d['footer']['redes'] as $rede): ?>
                            <li>
                                <a href="<?= $rede['link'] ?>">
                                    <i class="<?= $rede['icone'] ?>"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="footer-item">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-about mt-30">
                            <h4 class="title"><?= $d['footer']['sobre']['titulo'] ?></h4>
                            <p><?= $d['footer']['sobre']['descricao'] ?></p>
                        </div>
                    </div>

                    <?php foreach ($d['footer']['listas'] as $lista): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-list mt-30">
                                <h4 class="title"><?= $lista['titulo'] ?></h4>
                                <ul>
                                    <?php foreach ($lista['items'] as $item): ?>
                                        <li><a href="<?= $item['link'] ?>"><?= $item['titulo'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info mt-30">
                            <h3 class="title">Contato</h3>
                            <ul>
                                <li><i class="fal fa-map-marker-alt"></i> <?= $d['footer']['contato']['endereco'] ?></li>
                                <li><i class="fal fa-phone"></i> <?= $d['footer']['contato']['telefone'] ?></li>
                                <li><i class="fal fa-envelope"></i> <?= $d['footer']['contato']['email'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <p><?= $d['footer']['copyright'] ?></p>
            </div>
        </div>
    </footer>
    <a class="back-to-top">
        <i class="fal fa-angle-up"></i>
    </a>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/bootstrap.min.js"></script>
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/popper.min.js"></script>

    <!--====== appear js ======-->
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/jquery.appear.min.js"></script>

    <!--====== Slick js ======-->
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/slick.min.js"></script>

    <!--====== wow js ======-->
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/wow.js"></script>

    <!--====== Isotope js ======-->
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="https://html.quomodosoft.com/aball/aball/assets/js/main.js"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"05c60afabf3e4b64ba091c1c292eafc9","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

</html>