<!-- https://techsometimes.com/products/html/constimes/index-2.html -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="keywords" content="ConsTimes HTML5 Template">
    <meta name="description" content="ConsTimes HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ConsTimes HTML5 Template</title>

    <!-- Apple Favicon -->
    <link rel="apple-touch-icon" href="https://techsometimes.com/products/html/constimes/assets/img/logo/favicon.svg">

    <!-- All Device Favicon -->
    <link rel="icon" href="https://techsometimes.com/products/html/constimes/assets/img/logo/icon.svg">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://techsometimes.com/products/html/constimes/assets/css/bootstrap.min.css">

    <!-- All Icons -->
    <link rel="stylesheet" href="https://techsometimes.com/products/html/constimes/assets/all-icons/myicon.css">

    <!-- Plugin -->
    <link rel="stylesheet" href="https://techsometimes.com/products/html/constimes/assets/css/plugins.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="https://techsometimes.com/products/html/constimes/assets/css/style.min.css">

    <!-- Responsive -->
    <link rel="stylesheet" href="https://techsometimes.com/products/html/constimes/assets/css/responsive.min.css">

</head>

<body>

    <div id="main-wrapper">
        <div class="preloder"></div>
        <header>
            <!-- Top Bar Start -->
            <div class="top-bar v1">
                <div class="container">
                    <div class="top-bar-content">
                        <div class="top-left">
                            <p><?php echo $d['header']['topbar']['mensagem']; ?></p>
                        </div>
                        <div class="top-right">
                            <div class="info-link">
                                <ul>
                                    <li>
                                        <span class="my-icon icon-call"></span>
                                        <p>
                                            <a href="tel:<?php echo $d['header']['topbar']['telefone_link']; ?>">
                                                <?php echo $d['header']['topbar']['telefone']; ?>
                                            </a>
                                        </p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-envelope"></span>
                                        <p>
                                            <a href="mailto:<?php echo $d['header']['topbar']['email']; ?>">
                                                <?php echo $d['header']['topbar']['email']; ?>
                                            </a>
                                        </p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-location"></span>
                                        <p>
                                            <a href="#">
                                                <?php echo $d['header']['topbar']['endereco']; ?>
                                            </a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-link">
                                <ul>
                                    <?php foreach ($d['header']['topbar']['social'] as $social): ?>
                                        <li>
                                            <a href="<?php echo $social['link']; ?>">
                                                <span class="<?php echo $social['icon']; ?>"></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Menu Bar Start -->
            <div class="menu-bar v1">
                <div class="container">
                    <div class="menu-bar-content">
                        <div class="menu-logo">
                            <a href="index.html">
                                <img src="<?php echo $d['header']['logo']; ?>" alt="Logo">
                            </a>
                        </div>

                        <nav class="main-menu">
                            <ul>
                                <?php foreach ($d['header']['menu'] as $item): ?>
                                    <li>
                                        <a href="<?php echo $item['link']; ?>" class="<?php echo $item['active']; ?>">
                                            <?php echo $item['titulo']; ?>
                                            <?php if (!empty($item['submenu'])): ?>
                                                <span class="my-icon icon-arrow-down"></span>
                                            <?php endif; ?>
                                        </a>

                                        <?php if (!empty($item['submenu'])): ?>
                                            <ul>
                                                <?php foreach ($item['submenu'] as $sub): ?>
                                                    <li>
                                                        <a href="<?php echo $sub['link']; ?>">
                                                            <?php echo $sub['titulo']; ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>

                        <div class="right-btn">
                            <a href="<?php echo $d['header']['botao']['link']; ?>" class="link-anime v2">
                                <?php echo $d['header']['botao']['titulo']; ?>
                            </a>
                        </div>

                        <button class="mobile-menu-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Menu Bar End -->
        </header>

        <main>
<section class="banner v1 bg-cover-center"
    data-background="<?php echo $d['banner']['background']; ?>">
    <div class="container">
        <div class="banner-content">
            <div class="banner-left animate__animated animate__fadeInLeft">
                <h6><?php echo $d['banner']['subtitulo']; ?></h6>
                <h2><?php echo $d['banner']['titulo']; ?></h2>
                <p><?php echo $d['banner']['descricao']; ?></p>
                <ul>
                    <li>
                        <a href="<?php echo $d['banner']['botoes'][0]['link']; ?>" class="link-anime v2">
                            <?php echo $d['banner']['botoes'][0]['titulo']; ?>
                            <span class="my-icon icon-plus"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $d['banner']['botoes'][1]['link']; ?>" class="link-anime v3">
                            <?php echo $d['banner']['botoes'][1]['titulo']; ?>
                            <span class="my-icon icon-arrow-top-right"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img wow animate__fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <img src="<?php echo $d['sobre']['imagem_principal']; ?>" alt="about-img">
                    <span class="wow animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                        <button class="circle-play-btn venobox"
                            data-background="<?php echo $d['sobre']['imagem_play']; ?>"
                            data-vbtype="video"
                            data-maxwidth="800px"
                            data-autoplay="true"
                            data-href="<?php echo $d['sobre']['video']; ?>">
                            <span class="my-icon icon-play"></span>
                        </button>
                    </span>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title wow animate__fadeIn" data-wow-duration="1s">
                        <h6><?php echo $d['sobre']['subtitulo']; ?></h6>
                        <h2><?php echo $d['sobre']['titulo']; ?></h2>
                    </div>

                    <div class="items-content">
                        <ul>
                            <?php foreach ($d['sobre']['itens'] as $item): ?>
                                <li class="wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $item['delay']; ?>">
                                    <div class="my-icon <?php echo $item['icone']; ?>"></div>
                                    <div class="item-text">
                                        <h4><?php echo $item['titulo']; ?></h4>
                                        <p><?php echo $item['descricao']; ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="items-link wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <ul>
                            <li>
                                <a href="<?php echo $d['sobre']['botao']['link']; ?>" class="link-anime v2">
                                    <?php echo $d['sobre']['botao']['titulo']; ?>
                                    <span class="my-icon icon-arrow-right"></span>
                                </a>
                            </li>
                            <li>
                                <div class="cantact-link">
                                    <div class="left-icon">
                                        <span class="my-icon icon-call"></span>
                                    </div>
                                    <div class="text-content">
                                        <p>Precisa de ajuda?</p>
                                        <h4>
                                            <a href="tel:625562982045122">(62) 5562982045122</a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="services v1">
    <div class="container">
        <div class="section-title-center wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6><?php echo $d['servicos']['subtitulo']; ?></h6>
            <h2><?php echo $d['servicos']['titulo']; ?></h2>
        </div>

        <div class="row align-items-center justify-content-center">
            <?php foreach ($d['servicos']['items'] as $servico): ?>
                <div class="col-md-6 col-xl-4">
                    <div class="services-card wow animate__fadeInUp"
                        data-wow-duration="1s"
                        data-wow-delay="<?php echo $servico['delay']; ?>">
                        <div class="services-text">
                            <h4><?php echo $servico['titulo']; ?></h4>
                            <p><?php echo $servico['descricao']; ?></p>
                            <div class="my-icon <?php echo $servico['icone']; ?>"></div>
                        </div>
                        <div class="services-img">
                            <img src="<?php echo $servico['imagem']; ?>" alt="services-img">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


           <section class="work-gallery v1">
    <div class="container">
        <div class="section-title title-left-right wow animate__fadeIn" data-wow-duration="1s"
            data-wow-delay="0.2s">
            <div class="left-content">
                <h6><?= $d['galeria']['subtitulo'] ?></h6>
                <h2><?= $d['galeria']['titulo'] ?></h2>
            </div>
            <div class="right-content">
                <p><?= $d['galeria']['descricao'] ?></p>
            </div>
        </div>

        <div class="gallery-img-boxs">
            <?php foreach ($d['galeria']['items'] as $item): ?>
                <div class="<?= $item['classe_wrapper'] ?>">
                    <div class="gallery-card wow animate__fadeInUp"
                        data-wow-duration="1s"
                        data-wow-delay="<?= $item['delay'] ?>">
                        <img src="<?= $item['imagem'] ?>" alt="card-img">
                        <div class="card-info">
                            <div class="info-text">
                                <h4>
                                    <a href="<?= $item['link'] ?>">
                                        <?= $item['titulo'] ?>
                                    </a>
                                </h4>
                                <p><?= $item['categoria'] ?></p>
                            </div>
                            <a href="<?= $item['link'] ?>" class="info-link">
                                <span class="my-icon icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="counter-section">
    <div class="container">
        <div class="counter-items">
            <ul>
                <?php foreach ($d['contadores']['items'] as $contador): ?>
                    <li class="wow animate__fadeInUp"
                        data-wow-duration="1s"
                        data-wow-delay="<?= $contador['delay'] ?>">
                        <div class="<?= $contador['icone'] ?>"></div>
                        <div class="content">
                            <h2>
                                <span class="counter"
                                      data-count-min="<?= $contador['min'] ?>"
                                      data-count-max="<?= $contador['numero'] ?>"
                                      data-count-duration="1400"
                                      data-count-delay="<?= $contador['count_delay'] ?>">
                                    <?= $contador['numero'] ?>
                                </span><?= $contador['sufixo'] ?>
                            </h2>
                            <h4><?= $contador['titulo'] ?></h4>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<section class="common-faqs">
    <div class="container">
        <div class="faqs-card">
            <div class="faq-content wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="section-title">
                    <h6><?= $d['faq']['subtitulo'] ?></h6>
                    <h2><?= $d['faq']['titulo'] ?></h2>
                </div>

                <ul class="accordion" id="commonFaqAccordion">
                    <?php foreach ($d['faq']['items'] as $index => $faq): ?>
                        <li>
                            <button class="faq-btn <?= $index > 0 ? 'collapsed' : '' ?>"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?= $index ?>">
                                <?= $faq['pergunta'] ?>
                                <span></span>
                            </button>

                            <div id="collapse<?= $index ?>"
                                 class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                                 data-bs-parent="#commonFaqAccordion">
                                <div class="faq-content-body">
                                    <p><?= $faq['resposta'] ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="faq-img wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <img src="<?= $d['faq']['imagem'] ?>" alt="profile">
            </div>
        </div>
    </div>
</section>


        <section class="our-simple-step v1">
    <div class="container">
        <div class="section-title-center wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6><?= $d['processos']['subtitulo'] ?></h6>
            <h2><?= $d['processos']['titulo'] ?></h2>
        </div>

        <div class="row">
            <?php foreach ($d['processos']['items'] as $item): ?>
                <div class="col-md-6 col-xl-3">
                    <div class="process-card wow animate__fadeInUp"
                        data-wow-duration="1s"
                        data-wow-delay="<?= $item['delay'] ?>">
                        <div class="<?= $item['icone'] ?>"></div>
                        <h6><?= $item['ordem'] ?></h6>
                        <h4><?= $item['titulo'] ?></h4>
                        <p><?= $item['descricao'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="clients-review v1">
    <div class="container">
        <div class="section-title title-left-right">
            <div class="left-content">
                <h6><?= $d['depoimentos']['subtitulo'] ?></h6>
                <h2><?= $d['depoimentos']['titulo'] ?></h2>
            </div>
            <div class="right-content">
                <button class="prev-btn"><span class="my-icon icon-dobble-angle-left"></span></button>
                <button class="next-btn"><span class="my-icon icon-dobble-angle-right"></span></button>
            </div>
        </div>

        <div class="slider">
            <div class="swiper-wrapper">
                <?php foreach ($d['depoimentos']['items'] as $item): ?>
                    <div class="swiper-slide client-card">
                        <div class="client-card-title">
                            <h6><?= $item['titulo'] ?></h6>
                            <div class="my-icon icon-quote-right"></div>
                        </div>

                        <p><?= $item['texto'] ?></p>

                        <ul class="star-mark star-<?= $item['estrelas'] ?>">
                            <?php for ($i = 0; $i < $item['estrelas']; $i++): ?>
                                <li><span class="my-icon icon-start-solid"></span></li>
                            <?php endfor; ?>
                        </ul>

                        <div class="profile">
                            <div class="profile-img">
                                <img src="<?= $item['imagem'] ?>" alt="profile">
                            </div>
                            <div class="profile-text">
                                <h6><a href="#"><?= $item['nome'] ?></a></h6>
                                <p><?= $item['cargo'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

         <?php
// $d já vem carregado com json_decode(...)
?>

<section class="get-in-touch">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="left-content">
                    <h2><?= $d['get_in_touch']['titulo_principal']; ?></h2>
                    <p><?= $d['get_in_touch']['descricao']; ?></p>

                    <div class="s-items-list">
                        <ul>
                            <?php foreach ($d['get_in_touch']['lista'] as $item): ?>
                                <li>
                                    <div class="my-icon <?= $item['icone']; ?>"></div>
                                    <p><?= $item['texto']; ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <a href="<?= $d['get_in_touch']['botao']['link']; ?>" class="link-anime v2">
                        <?= $d['get_in_touch']['botao']['titulo']; ?>
                        <span class="my-icon icon-arrow-right"></span>
                    </a>

                    <div class="card-items-list">
                        <ul>
                            <?php foreach ($d['get_in_touch']['contadores'] as $contador): ?>
                                <li>
                                    <div class="my-icon <?= $contador['icone']; ?>"></div>
                                    <div class="text">
                                        <p><?= $contador['titulo']; ?></p>
                                        <h3>
                                            <span class="counter"
                                                  data-count-min="<?= $contador['min']; ?>"
                                                  data-count-max="<?= $contador['max']; ?>"
                                                  data-count-duration="<?= $contador['duracao']; ?>"
                                                  data-count-delay="<?= $contador['delay']; ?>">
                                                <?= $contador['max']; ?>
                                            </span><?= $contador['sufixo']; ?>
                                        </h3>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="get-in-touch-form">
                    <div class="section-title">
                        <h6><?= $d['get_in_touch']['formulario']['subtitulo']; ?></h6>
                        <h2><?= $d['get_in_touch']['formulario']['titulo']; ?></h2>
                    </div>

                    <form action="<?= $d['get_in_touch']['formulario']['action']; ?>" method="POST" class="message-form">
                        <div class="input-box">
                            <input type="text" name="name" placeholder="<?= $d['get_in_touch']['formulario']['placeholders']['nome']; ?>" required>
                            <div class="my-icon icon-user"></div>
                        </div>

                        <div class="input-box">
                            <input type="email" name="email" placeholder="<?= $d['get_in_touch']['formulario']['placeholders']['email']; ?>" required>
                            <div class="my-icon icon-paper-plan"></div>
                        </div>

                        <div class="input-box">
                            <input type="number" name="phone" placeholder="<?= $d['get_in_touch']['formulario']['placeholders']['telefone']; ?>" required>
                            <div class="my-icon icon-call"></div>
                        </div>

                        <div class="input-box text-textarea">
                            <textarea name="message" placeholder="<?= $d['get_in_touch']['formulario']['placeholders']['mensagem']; ?>"></textarea>
                            <div class="my-icon icon-envelope"></div>
                        </div>

                        <button type="submit" class="btn-anime v2">
                            <?= $d['get_in_touch']['formulario']['botao']; ?>
                        </button>

                        <p class="response"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-news v1">
    <div class="container">
        <div class="section-title-center wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6><?= $d['latest_news']['subtitulo']; ?></h6>
            <h2><?= $d['latest_news']['titulo']; ?></h2>
        </div>

        <div class="row justify-content-center">
            <?php foreach ($d['latest_news']['posts'] as $i => $post): ?>
                <div class="col-md-6 col-xl-4">
                    <div class="new-post-card wow animate__fadeInUp"
                         data-wow-duration="1s"
                         data-wow-delay="0.<?= $i + 1; ?>s">

                        <div class="post-img">
                            <div class="date-time">
                                <span class="my-icon icon-calendar"></span>
                                <h6><?= $post['data']; ?></h6>
                            </div>

                            <a href="<?= $post['link']; ?>">
                                <img src="<?= $post['imagem']; ?>" alt="post-img">
                            </a>
                        </div>

                        <div class="post-content">
                            <h4>
                                <a href="<?= $post['link']; ?>">
                                    <?= $post['titulo']; ?>
                                </a>
                            </h4>

                            <p><?= $post['descricao']; ?></p>

                            <a class="link-anime v1" href="<?= $post['link']; ?>">
                                <?= $post['botao']; ?>
                                <span class="my-icon icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


        </main>
       <?php
// $d já vem carregado via json_decode(...)
?>

<footer>
    <div class="info-footer v1">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-xl-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="<?= $d['footer']['logo']['link']; ?>">
                                <img src="<?= $d['footer']['logo']['imagem']; ?>" alt="logo">
                            </a>
                        </div>

                        <p><?= $d['footer']['descricao']; ?></p>

                        <div class="social-link">
                            <ul>
                                <?php foreach ($d['footer']['redes_sociais'] as $social): ?>
                                    <li>
                                        <a href="<?= $social['link']; ?>">
                                            <span class="my-icon <?= $social['icone']; ?>"></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="sent-email">
                            <form action="<?= $d['footer']['newsletter']['action']; ?>">
                                <input type="email"
                                       placeholder="<?= $d['footer']['newsletter']['placeholder']; ?>"
                                       required>
                                <button type="submit">
                                    <span class="my-icon icon-paper-plan"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="popular-post">
                        <h4><?= $d['footer']['posts_populares']['titulo']; ?></h4>
                        <ul>
                            <?php foreach ($d['footer']['posts_populares']['items'] as $post): ?>
                                <li>
                                    <div class="post-img">
                                        <a href="<?= $post['link']; ?>">
                                            <img src="<?= $post['imagem']; ?>" alt="post-img">
                                        </a>
                                    </div>
                                    <div class="post-text">
                                        <h6>
                                            <a href="<?= $post['link']; ?>">
                                                <?= $post['titulo']; ?>
                                            </a>
                                        </h6>
                                        <div class="post-time">
                                            <span class="my-icon icon-calendar"></span>
                                            <p><?= $post['data']; ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="our-link">
                        <h4><?= $d['footer']['links_uteis']['titulo']; ?></h4>
                        <ul>
                            <?php foreach ($d['footer']['links_uteis']['items'] as $link): ?>
                                <li>
                                    <a href="<?= $link['link']; ?>">
                                        <?= $link['titulo']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="get-touch">
                        <h4><?= $d['footer']['contato']['titulo']; ?></h4>
                        <ul>
                            <?php foreach ($d['footer']['contato']['items'] as $item): ?>
                                <li>
                                    <div class="my-icon <?= $item['icone']; ?>"></div>
                                    <div class="content">
                                        <p><?= $item['label']; ?></p>
                                        <h6>
                                            <a href="<?= $item['link']; ?>">
                                                <?= $item['valor']; ?>
                                            </a>
                                        </h6>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-main v1">
        <div class="container">
            <div class="footer-content">
                <p>
                    <?= $d['footer']['copyright']['texto']; ?>
                </p>

                <ul>
                    <?php foreach ($d['footer']['copyright']['links'] as $link): ?>
                        <li>
                            <a href="<?= $link['link']; ?>">
                                <?= $link['titulo']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

    </div>

    <!-- jQuery -->
    <script src="https://techsometimes.com/products/html/constimes/assets/js/jquery-3.6.3.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://techsometimes.com/products/html/constimes/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="https://techsometimes.com/products/html/constimes/assets/js/plugins.min.js"></script>

    <!-- Index -->
    <script src="https://techsometimes.com/products/html/constimes/assets/js/index.min.js"></script>
</body>

</html>