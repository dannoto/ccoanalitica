<!-- https://labartisan.net/demo/mukti/ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://labartisan.net/demo/mukti/assets/images/logo/logo2.png">
    <!-- Other css -->
    <link rel="stylesheet" href="https://labartisan.net/demo/mukti/assets/css/animate.css">
    <link rel="stylesheet" href="https://labartisan.net/demo/mukti/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://labartisan.net/demo/mukti/assets/css/icofont.min.css">
    <link rel="stylesheet" href="https://labartisan.net/demo/mukti/assets/css/swiper.min.css">
    <link rel="stylesheet" href="https://labartisan.net/demo/mukti/assets/css/hc-offcanvas-nav.css">
    <link rel="stylesheet" href="https://labartisan.net/demo/mukti/assets/css/style.css">

    <title>Mukti</title>
    <meta class="description"></head>
    <meta class="author"></html>
    <meta class="keywords"></a>
</head>

<body>

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div class="mobile-menu">
        <div class="container">
            <div class="mobile-menu-wrapper">
                <div class="logo">
                    <a href="<?= $d['menu']['logo_link'] ?>">
                        <img src="<?= $d['menu']['logo'] ?>" alt="<?= $d['menu']['logo_alt'] ?>">
                    </a>
                </div>
                <div class="open-menu"><i class="icofont-navigation-menu"></i></div>
            </div>

            <nav id="mobile-nav">
                <?php foreach ($d['menu']['itens'] as $item): ?>
                    <ul class="<?= $item['classe'] ?>">
                        <li>
                            <a href="<?= $item['link'] ?>"><?= $item['titulo'] ?></a>
                            <?php if (!empty($item['subitens'])): ?>
                                <ul>
                                    <?php foreach ($item['subitens'] as $sub): ?>
                                        <li>
                                            <a href="<?= $sub['link'] ?>"><?= $sub['titulo'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </nav>
        </div>
    </div>

    <!-- HEADER -->
    <header class="header-section d-none d-lg-block">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between align-items-center px-15">

                    <div class="header-logo">
                        <a href="<?= $d['header']['logo_link'] ?>" class="logo">
                            <img src="<?= $d['header']['logo'] ?>" alt="<?= $d['header']['logo_alt'] ?>">
                        </a>
                    </div>

                    <ul class="header-contact-info d-flex align-items-center">
                        <?php foreach ($d['header']['info'] as $info): ?>
                            <li class="item">
                                <div class="item-inner">
                                    <div class="item-thumb">
                                        <img src="<?= $info['icone'] ?>" alt="">
                                    </div>
                                    <div class="item-content">
                                        <span><?= $info['titulo'] ?> :</span>
                                        <p><?= $info['valor'] ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </div>

        <div class="header-bottom">
            <nav class="container">
                <ul class="main-menu d-flex">
                    <?php foreach ($d['menu_principal'] as $item): ?>
                        <li>
                            <a href="<?= $item['link'] ?>"><?= $item['titulo'] ?></a>
                            <?php if (!empty($item['subitens'])): ?>
                                <ul class="submenu">
                                    <?php foreach ($item['subitens'] as $sub): ?>
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
        </div>
    </header>

    <!-- BANNER -->
    <section class="banner-section" style="background-image: url(<?= $d['banner']['imagem'] ?>);">
        <div class="container">
            <div class="banner-content">
                <h2><?= $d['banner']['subtitulo'] ?></h2>
                <h1><?= $d['banner']['titulo'] ?></h1>
                <a href="<?= $d['banner']['botao']['link'] ?>" class="lab-btn">
                    <span>
                        <?= $d['banner']['botao']['titulo'] ?>
                        <i class="icofont-rounded-double-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- DIFERENCIAIS / FEATURES -->
    <section class="feature-section padding-tb bg-color">
        <div class="container">
            <div class="feature-section-wrapper">

                <div class="section-header">
                    <h2><span><?= $d['features']['subtitulo'] ?></span></h2>
                    <h2><?= $d['features']['titulo'] ?></h2>
                </div>

                <div class="section-content">
                    <div class="row justify-content-center">
                        <?php foreach ($d['features']['items'] as $item): ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="lab-item feature-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="<?= $item['imagem'] ?>" alt="">
                                        </div>
                                        <div class="lab-content">
                                            <h4><?= $item['titulo'] ?></h4>
                                            <p><?= $item['descricao'] ?></p>
                                            <a href="<?= $item['link'] ?>">
                                                <span><?= $item['botao'] ?>
                                                    <i class="icofont-rounded-double-right"></i>
                                                </span>
                                            </a>
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

    <!-- DEPARTAMENTOS / ABORDAGENS -->
    <section class="department-section padding-tb style-1">
        <div class="container">
            <div class="department-wrapper">

                <div class="section-header">
                    <h2><span><?= $d['departamentos']['subtitulo'] ?></span></h2>
                    <h2><?= $d['departamentos']['titulo'] ?></h2>
                </div>

                <div class="department-top">
                    <ul class="nav dep-tab" role="tablist">
                        <?php foreach ($d['departamentos']['abas'] as $i => $aba): ?>
                            <li>
                                <a class="<?= $i === 0 ? 'active' : '' ?>" href="#<?= $aba['id'] ?>" data-toggle="tab">
                                    <img src="<?= $aba['icone'] ?>" alt="">
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="department-bottom">
                    <div class="tab-content">
                        <?php foreach ($d['departamentos']['conteudo'] as $i => $dep): ?>
                            <div class="tab-pane fade <?= $i === 0 ? 'in active' : '' ?>" id="<?= $dep['id'] ?>">
                                <div class="row flex-row-reverse align-items-center">
                                    <div class="col-lg-6">
                                        <img src="<?= $dep['imagem'] ?>" alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <h3><?= $dep['titulo'] ?></h3>
                                        <p><?= $dep['descricao'] ?></p>
                                        <ul>
                                            <?php foreach ($dep['lista'] as $li): ?>
                                                <li><?= $li ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <a href="<?= $dep['botao']['link'] ?>" class="lab-btn">
                                            <span><?= $dep['botao']['titulo'] ?>
                                                <i class="icofont-rounded-double-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTADORES -->
    <div class="counter-section style-1 padding-60">
        <div class="container">
            <div class="section-wrapper">
                <?php foreach ($d['contadores']['items'] as $item): ?>
                    <div class="counter-item">
                        <div class="counter-item-inner">
                            <div class="counter-thumb">
                                <img src="<?= $item['icone'] ?>" alt="">
                            </div>
                            <div class="counter-content">
                                <h3 class="number">
                                    <span class="counter"><?= $item['numero'] ?></span>
                                </h3>
                                <p class="post-content"><?= $item['titulo'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- SERVIÇOS -->
    <section class="service-section style-1 padding-tb bg-color">
        <div class="container">
            <div class="section-header">
                <h2><span><?= $d['servicos']['subtitulo']; ?></span></h2>
                <h2><?= $d['servicos']['titulo']; ?></h2>
            </div>

            <div class="section-wrapper">
                <?php foreach ($d['servicos']['items'] as $i => $servico): ?>
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="<?= $servico['imagem']; ?>" alt="<?= $servico['titulo']; ?>">
                            </div>
                            <div class="service-content">
                                <h4><?= $servico['titulo']; ?></h4>
                                <p><?= $servico['descricao']; ?></p>
                                <a href="<?= $servico['link']; ?>" class="lab-btn">
                                    <span><?= $servico['botao']; ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- PROFISSIONAIS -->
    <section class="doctor-section style-1 padding-tb">
        <div class="container">
            <div class="section-header">
                <h2><span><?= $d['profissionais']['subtitulo']; ?></span></h2>
                <h2><?= $d['profissionais']['titulo']; ?></h2>
            </div>

            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <?php foreach ($d['profissionais']['items'] as $prof): ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <div class="doctor-item style-1">
                                <div class="doctor-inner">
                                    <div class="doctor-thumb">
                                        <img src="<?= $prof['imagem']; ?>" alt="<?= $prof['nome']; ?>">
                                    </div>
                                    <div class="doctor-content">
                                        <div class="doctor-name">
                                            <h4><?= $prof['nome']; ?></h4>
                                            <p class="digi"><?= $prof['especialidade']; ?></p>
                                        </div>
                                        <ul class="doctor-contact">
                                            <li><span>Telefone:</span> <?= $prof['telefone']; ?></li>
                                            <li><span>Email:</span> <?= $prof['email']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="doctor-btn text-center">
                <a href="<?= $d['profissionais']['botao']['link']; ?>" class="lab-btn">
                    <span><?= $d['profissionais']['botao']['titulo']; ?></span>
                </a>
            </div>
        </div>
    </section>

    <!-- AGENDAMENTO -->
    <section class="appointment-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="appointment-left">
                    <div class="time-info">
                        <div class="al-title">
                            <h2><span><?= $d['agendamento']['horarios']['subtitulo']; ?></span></h2>
                            <h2><?= $d['agendamento']['horarios']['titulo']; ?></h2>
                        </div>

                        <?php foreach ($d['agendamento']['horarios']['dias'] as $dia): ?>
                            <div class="dep-item">
                                <div class="dep-item-inner">
                                    <div class="day-name"><?= $dia['dia']; ?></div>
                                    <div class="day-time"><?= $dia['horario']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="appointment-right">
                    <div class="ar-title">
                        <h2><span><?= $d['agendamento']['formulario']['subtitulo']; ?></span></h2>
                        <h2><?= $d['agendamento']['formulario']['titulo']; ?></h2>
                    </div>

                    <form action="<?= $d['agendamento']['formulario']['action']; ?>">
                        <input type="text" placeholder="Seu Nome">
                        <select>
                            <?php foreach ($d['agendamento']['formulario']['especialidades'] as $esp): ?>
                                <option><?= $esp; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" placeholder="Telefone">
                        <input type="date">
                        <button class="lab-btn" type="submit">
                            <span><?= $d['agendamento']['formulario']['botao']; ?></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG / CONTEÚDO -->
    <section class="blog-section padding-tb bg-color">
        <div class="container">
            <div class="section-header">
                <h2><span><?= $d['blog']['subtitulo']; ?></span></h2>
                <h2><?= $d['blog']['titulo']; ?></h2>
            </div>

            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <?php foreach ($d['blog']['items'] as $post): ?>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="post-item-inner">
                                <div class="post-thumb">
                                    <a href="<?= $post['imagem']; ?>" data-rel="lightcase:myCollection">
                                        <img src="<?= $post['imagem']; ?>" alt="<?= $post['titulo']; ?>">
                                    </a>
                                </div>

                                <div class="post-content">
                                    <span class="meta">
                                        Por <a href="#"><?= $post['autor']; ?></a> <?= $post['data']; ?>
                                    </span>
                                    <h4><a href="<?= $post['link']; ?>"><?= $post['titulo']; ?></a></h4>
                                    <p><?= $post['descricao']; ?></p>
                                </div>

                                <div class="blog-footer">
                                    <a href="<?= $post['link']; ?>" class="viewall">
                                        <?= $post['botao']; ?> <i class="icofont-double-right"></i>
                                    </a>
                                    <a href="#" class="blog-comment">
                                        <i class="icofont-comment"></i> <?= $post['comentarios']; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- PARCEIROS / SPONSORS -->
    <div class="sponsor-section">
        <div class="container">
            <div class="sponsor-area">
                <div class="swiper-wrapper">
                    <?php foreach ($d['parceiros']['items'] as $logo): ?>
                        <div class="swiper-slide">
                            <div class="sponsor-thumb">
                                <img src="<?= $logo['imagem']; ?>" alt="Parceiro">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- NEWSLETTER -->
    <section class="newsletter-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="left">
                    <div class="news-title">
                        <h2><?= $d['newsletter']['titulo']; ?></h2>
                    </div>
                </div>

                <div class="right">
                    <div class="news-input">
                        <label><i class="icofont-paper-plane"></i></label>
                        <input type="text" placeholder="<?= $d['newsletter']['placeholder']; ?>">
                        <button type="submit"><?= $d['newsletter']['botao']; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="footer-section style-1">
        <div class="container">
            <div class="section-wrapper">

                <div class="footer-top">
                    <div class="row">

                        <!-- INFORMAÇÕES DE CONTATO -->
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="contact-info">
                                <h3><?= $d['footer']['contato']['titulo']; ?></h3>
                                <p><?= $d['footer']['contato']['descricao']; ?></p>

                                <ul class="lab-ul">
                                    <li>
                                        <i class="icofont-home"></i>
                                        <?= $d['footer']['contato']['endereco']; ?>
                                    </li>
                                    <li>
                                        <i class="icofont-phone"></i>
                                        <?= $d['footer']['contato']['telefone']; ?>
                                    </li>
                                    <li>
                                        <i class="icofont-envelope"></i>
                                        <a href="mailto:<?= $d['footer']['contato']['email']; ?>">
                                            <?= $d['footer']['contato']['email']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-globe"></i>
                                        <a href="<?= $d['footer']['contato']['site']; ?>">
                                            <?= $d['footer']['contato']['site']; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- PROFISSIONAIS -->
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="doctor-info">
                                <h3><?= $d['footer']['profissionais']['titulo']; ?></h3>
                                <ul class="lab-ul">
                                    <?php foreach ($d['footer']['profissionais']['items'] as $profissional): ?>
                                        <li>
                                            <i class="icofont-double-right"></i>
                                            <a href="#"><?= $profissional; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- SERVIÇOS -->
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="service-info">
                                <h3><?= $d['footer']['servicos']['titulo']; ?></h3>
                                <ul class="lab-ul">
                                    <?php foreach ($d['footer']['servicos']['items'] as $servico): ?>
                                        <li>
                                            <i class="icofont-double-right"></i>
                                            <a href="#"><?= $servico; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- HORÁRIOS -->
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="time-info">
                                <h3><?= $d['footer']['horarios']['titulo']; ?></h3>

                                <?php foreach ($d['footer']['horarios']['items'] as $horario): ?>
                                    <div class="dep-item">
                                        <div class="dep-item-inner d-flex justify-content-between">
                                            <div class="day-name"><?= $horario['dia']; ?></div>
                                            <div class="day-time"><?= $horario['hora']; ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- COPYRIGHT -->
                <div class="footer-bottom">
                    <div class="copyright text-center">
                        <span>
                            <?= $d['footer']['copyright']; ?>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>

    <script src="https://labartisan.net/demo/mukti/assets/js/jquery.js"></script>
    <script src="https://labartisan.net/demo/mukti/assets/js/bootstrap.min.js"></script>
    <script src="https://labartisan.net/demo/mukti/assets/js/waypoints.min.js"></script>
    <script src="https://labartisan.net/demo/mukti/assets/js/swiper.min.js"></script>
    <script src="https://labartisan.net/demo/mukti/assets/js/jquery.counterup.min.js"></script>
    <script src="https://labartisan.net/demo/mukti/assets/js/wow.min.js"></script>
    <script src="https://labartisan.net/demo/mukti/assets/js/circularProgressBar.min.js"></script>
    <script src="https://labartisan.net/demo/mukti/assets/js/hc-offcanvas-nav.js"></script>
    <script src="https://labartisan.net/demo/mukti/assets/js/functions.js"></script>
</body>

</html>