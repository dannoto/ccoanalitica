<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title><?= $d['seo']['title'] ?></title>
    <link rel="icon" href="<?= $d['seo']['favicon'] ?>" type="image/webp" sizes="16x16">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?= $d['seo']['description'] ?>">
    <meta name="keywords" content="<?= $d['seo']['keywords'] ?>">
    <meta name="author" content="<?= $d['seo']['author'] ?>">
    <link href="<?= base_url() ?>dist/modelos/um/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="<?= base_url() ?>dist/modelos/um/assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>dist/modelos/um/assets/css/swiper.css" rel="stylesheet" type="text/css">
    <style>
        :root {
            --body-font-color-dark: <?= $d['schema']['color'] ?> !important;
            --bg-dark-1: <?= $d['schema']['background'] ?> !important;
            --bg-dark-2: <?= $d['schema']['background'] ?> !important;
        }
    </style>

    <link href="<?= base_url() ?>dist/modelos/um/assets/css/style.css" rel="stylesheet" type="text/css">

    <style>
        * {
            --primary-color: <?= $d['schema']['primary-color'] ?>;
            --primary-color-rgb: <?= $d['schema']['primary-color-rgb'] ?>;
            --secondary-color: <?= $d['schema']['secondary-color'] ?>;
            --secondary-color-rgb: <?= $d['schema']['secondary-color-rgb'] ?>;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <div id="de-loader"></div>
        <header class="transparent header-light header-float">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-inner">
                            <div class="de-flex sm-pt10">
                                <div class="de-flex-col">
                                    <div id="logo">
                                        <a href="#top">

                                            <svg
                                                width="260"
                                                height="48"
                                                viewBox="0 0 260 48"
                                                xmlns="http://www.w3.org/2000/svg"
                                                role="img"
                                                aria-label="Sua logo aqui">
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
                                    </div>
                                </div>
                                <div class="de-flex-col header-col-mid">
                                    <ul id="mainmenu">
                                        <?php foreach ($d['header']['navbar'] as $navbar): ?>
                                            <li>
                                                <a class="menu-item" href="<?= $navbar['link'] ?>">
                                                    <?= $navbar['texto'] ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="de-flex-col">
                                    <div class="menu_side_area">
                                        <a href="<?= $d['header']['botao']['link'] ?>" class="btn-main"><span><?= $d['header']['botao']['texto'] ?></span></a>
                                        <span id="menu-btn"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section id="inicio" class="text-light bg-dark no-top no-bottom overflow-hidden">
                <div class="container-fluid position-relative half-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 position-lg-absolute right-half h-100">
                                <div class="image" data-bgimage="url(<?= base_url($d['hero']['imagem']) ?>) center"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                    <div class="py-5 mt-5 mb-3 me-lg-3">
                                        <div class="subtitle id-color"><?= $d['hero']['top'] ?></div>
                                        <h1><?= $d['hero']['title'] ?></h1>
                                        <p class="col-lg-10"><?= $d['hero']['description'] ?></p>
                                        <a class="btn-main mb10 mb-3" href="<?= $d['hero']['botao']['link'] ?>">
                                            <span><?= $d['hero']['botao']['texto'] ?></span>
                                        </a>
                                        <div class="border-bottom my-3"></div>
                                        <div class="d-lg-flex align-items-center">
                                            <div class="me-3"><?= $d['hero']['bottom']['google'] ?></div>
                                            <div class="de-flex justify-content-start align-items-center">
                                                <div class="me-3">5.0</div>
                                                <div class="d-flex fs-14 d-rating me-3">
                                                    <?php for ($i = 0; $i < 5; $i++): ?><i class="fa fa-star m-1"></i><?php endfor; ?>
                                                </div>
                                            </div>
                                            <div class="me-3"><?= $d['hero']['bottom']['avaliacoes'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-dark text-light pt-50 pb-30">
                <div class="container relative">
                    <div class="row g-4 grid-divider slider-extra sm-hide">
                        <?php
                        $icones = ['atendimento' => 'fa fa-headset', 'horario' => 'fa fa-clock', 'contato' => 'fa fa-envelope'];
                        foreach ($d['hero']['informacoes'] as $key => $info):
                        ?>
                            <div class="col-lg-4 col-md-6 mb-sm-30">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-60 id-color <?= $icones[$key] ?>"></i>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><?= $info['titulo'] ?></h4>
                                        <p><?= $info['descricao'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="sobre">
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="rounded-1 overflow-hidden wow zoomIn">
                                        <img src="<?= base_url($d['sobre']['imagens'][0]) ?>" class="w-100 wow scaleIn" alt="Clínica">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="spacer-single sm-hide"></div>
                                    <div class="rounded-1 overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                        <img src="<?= base_url($d['sobre']['imagens'][1]) ?>" class="w-100 wow scaleIn" alt="Paciente">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <div class="subtitle s2 mb-3 wow fadeInUp"><?= $d['sobre']['subtitulo'] ?></div>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s"><?= $d['sobre']['titulo'] ?></h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s"><?= $d['sobre']['description'] ?></p>
                                <ul class="ul-check text-dark cols-2 fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                    <?php foreach ($d['sobre']['solucoes'] as $solucao): ?>
                                        <li><?= $solucao ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="<?= $d['hero']['botao']['link'] ?>">
                                    <span><?= $d['hero']['botao']['texto'] ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="servicos" class="bg-color-op-1">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="subtitle wow fadeInUp mb-3"><?= $d['servicos']['subtitulo'] ?></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?= $d['servicos']['titulo'] ?></h2>
                            <p class="col-lg-8 offset-lg-2 mb-0 wow fadeInUp"><?= $d['servicos']['descricao'] ?></p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($d['servicos']['items'] as $servico): ?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="hover">
                                    <div class="bg-white h-100 p-40 rounded-1">
                                        <img src="<?= base_url($servico['imagem']) ?>" class="w-70px mb-3 wow scaleIn" alt="">
                                        <div class="relative mt-4 wow fadeInUp">
                                            <h4><?= $servico['titulo'] ?></h4>
                                            <p><?= $servico['descricao'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="contadores" class="bg-dark text-light pt-60 pb-60">
                <div class="container">
                    <div class="row g-4">
                        <?php foreach ($d['contadores'] as $index => $cont): ?>
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="de_count wow fadeInRight" data-wow-delay="<?= $index * 0.2 ?>s">
                                    <h3 class="fs-40 mb-0"><span class="timer" data-to="<?= $cont['numero'] ?>">0</span>+</h3>
                                    <?= $cont['texto'] ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="porquenos">
                <div class="container">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle id-color wow fadeInUp"><?= $d['porque']['subtitulo'] ?></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?= $d['porque']['titulo'] ?></h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s"><?= $d['porque']['descricao'] ?></p>
                            <div class="border-bottom mb-4"></div>
                            <div class="row g-4">
                                <?php foreach ($d['porque']['items'] as $item): ?>
                                    <div class="col-lg-6">
                                        <div class="relative wow fadeInUp">
                                            <h5><?= $item['titulo'] ?></h5>
                                            <p class="mb-0"><?= $item['descricao'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-4 align-items-center">
                                <div class="col-6 text-end">
                                    <div class="w-80 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                        <img src="<?= base_url($d['porque']['imagens'][0]) ?>" class="w-100" alt="">
                                    </div>
                                    <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                        <img src="<?= base_url($d['porque']['imagens'][2]) ?>" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                        <img src="<?= base_url($d['porque']['imagens'][1]) ?>" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section id="equipe" class="bg-color-op-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3"><?= $d['equipe']['subtitulo'] ?></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?= $d['equipe']['titulo'] ?></h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($d['equipe']['items'] as $item): ?>
                            <div class="col-lg-3">
                                <div class="relative rounded-1 overflow-hidden">
                                    <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                        <img src="<?= base_url($item['imagem']) ?>" class="w-100 wow scaleIn" alt="<?= $item['texto'] ?>">
                                    </div>
                                    <div class="abs w-100 start-0 bottom-0 z-3">
                                        <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                            <h4 class="mb-0"><?= $item['texto'] ?></h4>
                                            <p class="mb-2"><?= $item['descripcao'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>


            <section id="depoimentos" class="bg-color-op-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3"><?= $d['depoimentos']['subtitlo'] ?></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?= $d['depoimentos']['titulo'] ?></h2>
                            <!-- <p class="wow fadeInUp">Join thousands of happy patients who trust us for gentle, expert care and beautiful smiles. Your perfect dental experience starts here!</p> -->
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="owl-carousel owl-theme wow fadeInUp four-cols-center-dots text-center">
                            <?php foreach ($d['depoimentos']['items'] as $item): ?>
                                <div class="item">
                                    <div class="gradient-white-top p-40 py-4 rounded-1">
                                        <blockquote>
                                            <i class="fs-32 fa fa-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                            <div class="de_testi_by">
                                                <img class="circle" alt="" src="<?= base_url() ?><?= $item['imagem'] ?>">
                                                <div><?= $item['nome'] ?><span>Cliente</span></div>
                                            </div>
                                            <p class="mt-4 mb-0 text-dark op-6"><?= $item['texto'] ?>
                                            </p>
                                        </blockquote>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>


            <section id="galeria" class="bg-light">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                                <?php foreach ($d['galeria']['navbar'] as $key =>  $item): ?>

                                    <?php if ($key == 0) { ?>
                                        <li><a href="#" data-filter="*" class="selected"><?= $item ?></a></li>
                                    <?php   } else { ?>
                                        <li><a href="#" data-filter=".<?= $item ?>"><?= $item ?></a></li>

                                    <?php  } ?>


                                <?php endforeach; ?>
                                <!-- <li><a href="#" data-filter=".dentists">dentists</a></li>
                                <li><a href="#" data-filter=".facilities">facilities</a></li>
                                <li><a href="#" data-filter=".services">services</a>
                                <li> -->
                            </ul>
                        </div>
                    </div>

                    <div id="gallery" class="row g-3 wow fadeIn" data-wow-delay=".3s">
                        <?php foreach ($d['galeria']['imagens'] as $item): ?>
                            <div class="col-md-3 col-sm-6 col-12 item <?= $item['categoria'] ?>">
                                <a href="<?= base_url() ?><?= $item['imagem'] ?>" class="image-popup d-block hover">
                                    <div class="relative overflow-hidden rounded-1">
                                        <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                            <?= ucfirst($item['categoria']) ?>
                                        </div>
                                        <div class="absolute start-0 w-100 h-100 overlay-black-5 hover-op-1 z-2"></div>
                                        <img src="<?= base_url() ?><?= $item['imagem'] ?>" class="w-100 hover-scale-1-2" alt="">
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>


                </div>
            </section>


            <section id="faq">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="subtitle id-color wow fadeInUp"> <?= $d['faq']['subtitulo'] ?></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?= $d['faq']['titulo'] ?></h2>
                        </div>

                        <div class="col-lg-7">
                            <div class="accordion s2 wow fadeInUp">
                                <div class="accordion-section">
                                    <?php foreach ($d['faq']['items'] as $key => $item): ?>
                                        <div class="accordion-section-title" data-tab="#accordion-a<?= $key ?>">
                                            <?= $item['pergunta'] ?>
                                        </div>
                                        <div class="accordion-section-content" id="accordion-a<?= $key ?>">
                                            <?= $item['resposta'] ?>
                                        </div>

                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contato">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-12 text-center">
                            <div class="subtitle wow fadeInUp mb-3"><?= $d['contato']['subtitulo'] ?></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?= $d['contato']['titulo'] ?></h2>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-lg-6">
                            <h3>Entre em Contato</h3>
                            <p><?= $d['contato']['descricao'] ?></p>

                            <div class="row g-4 gx-5">
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="fa fa-clock me-2 id-color-2"></i>Horário</div>
                                    <?= $d['contato']['horarios'] ?>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="fa fa-location-dot me-2 id-color-2"></i>Endereço</div>
                                    <?= $d['contato']['endereco'] ?>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="fa fa-phone me-2 id-color-2"></i>Telefone</div>
                                    <?= $d['contato']['telefone'] ?>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="fa fa-envelope me-2 id-color-2"></i>E-mail</div>
                                    <?= $d['contato']['email'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="p-40 bg-color-op-1 rounded-1">
                                <h3>Envie uma Mensagem</h3>
                                <form name="contactForm" id="contact_form" method="post" action="#">
                                    <div class="mb-4">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Seu Nome" required>
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Seu E-mail" required>
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Seu Telefone" required>
                                    </div>
                                    <div class="mb-4 mb20">
                                        <textarea name="message" id="message" class="form-control" placeholder="Sua Mensagem" required></textarea>
                                    </div>
                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Enviar Mensagem' class="btn-main">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="section-dark">
            <div class="container">
                <div class="row gx-2">
                    <div class="col-lg-4 col-sm-12">
                        <!-- <img src="<?= base_url() ?>dist/modelos/um/assets/images/logo-white.webp" class="logo-footer" alt=""> -->
                        <svg
                            width="260"
                            height="48"
                            viewBox="0 0 260 48"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Sua Logo Aqui">
                            <style>
                                .logo-icon-footer {
                                    fill: <?= $d['schema']['color'] ?>;
                                }

                                .logo-text-footer {
                                    fill: <?= $d['schema']['color'] ?>;
                                    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
                                    font-weight: 600;
                                    font-size: 22px;
                                    letter-spacing: -0.3px;
                                }
                            </style>

                            <!-- ÍCONE -->
                            <g class="logo-icon-footer" transform="translate(0,4)">
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
                                class="logo-text-footer">
                                Sua logo aqui
                            </text>
                        </svg>

                        <div class="spacer-20"></div>
                        <p><?= $d['footer']['description'] ?></p>
                        <div class="social-icons mb-sm-30">
                            <a href="<?= $d['contato']['social']['facebook'] ?>">
                                <svg width="40" height="40" id="ant-design--facebook-filled" viewBox="0 0 1024 1024">
                                    <path fill="#FFFFFF" d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32m-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6c44.2 0 82.1 3.3 93.2 4.8v107.9z" />
                                </svg>
                            </a>
                            <a href="<?= $d['contato']['social']['instagram'] ?>">
                                <svg width="38" height="38" id="fa-brands--instagram-square" viewBox="0 0 448 512">
                                    <path fill="#FFFFFF" d="M224 202.66A53.34 53.34 0 1 0 277.36 256A53.38 53.38 0 0 0 224 202.66m124.71-41a54 54 0 0 0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31 6.43a54 54 0 0 0-30.41 30.41c-8.28 21-6.43 71.05-6.43 94.33s-1.85 73.27 6.47 94.34a54 54 0 0 0 30.41 30.41c21 8.29 71 6.43 94.31 6.43s73.24 1.93 94.3-6.43a54 54 0 0 0 30.41-30.41c8.35-21 6.43-71.05 6.43-94.33s1.92-73.26-6.43-94.33ZM224 338a82 82 0 1 1 82-82a81.9 81.9 0 0 1-82 82m85.38-148.3a19.14 19.14 0 1 1 19.13-19.14a19.1 19.1 0 0 1-19.09 19.18ZM400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48m-17.12 290c-1.29 25.63-7.14 48.34-25.85 67s-41.4 24.63-67 25.85c-26.41 1.49-105.59 1.49-132 0c-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61 0-132c1.29-25.63 7.07-48.34 25.85-67s41.47-24.56 67-25.78c26.41-1.49 105.59-1.49 132 0c25.63 1.29 48.33 7.15 67 25.85s24.63 41.42 25.85 67.05c1.49 26.32 1.49 105.44 0 131.88" />
                                </svg>
                                </i>
                            </a>
                            <a href="<?= $d['contato']['social']['whatsapp'] ?>">
                                <svg width="42" height="42" id="bxl--whatsapp-square" viewBox="0 0 24 24">
                                    <path fill="#FFFFFF" d="M12.043 6.925a4.985 4.985 0 0 0-4.98 4.979c-.001.94.263 1.856.761 2.649l.118.188l-.503 1.837l1.885-.494l.181.108a4.97 4.97 0 0 0 2.535.693h.001a4.986 4.986 0 0 0 4.979-4.978a4.95 4.95 0 0 0-1.456-3.522a4.95 4.95 0 0 0-3.521-1.46m2.928 7.118c-.125.35-.723.668-1.01.711a2.04 2.04 0 0 1-.943-.059a9 9 0 0 1-.853-.315c-1.502-.648-2.482-2.159-2.558-2.26c-.074-.1-.61-.812-.61-1.548c0-.737.386-1.099.523-1.249a.55.55 0 0 1 .4-.186c.1 0 .199.001.287.005c.092.004.215-.035.336.257c.125.3.425 1.036.462 1.111s.062.162.013.262c-.05.101-.074.162-.15.25c-.074.088-.157.195-.224.263c-.075.074-.153.155-.066.305c.088.149.388.64.832 1.037c.572.51 1.055.667 1.204.743c.15.074.237.063.325-.038c.087-.101.374-.437.474-.586c.1-.15.199-.125.337-.076c.137.051.873.412 1.022.487c.148.074.249.112.287.175c.036.062.036.361-.088.711" />
                                    <path fill="#FFFFFF" d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1m-7.96 14.896h-.002a6 6 0 0 1-2.862-.729L6 18l.85-3.104a5.99 5.99 0 0 1 5.19-8.983a5.95 5.95 0 0 1 4.238 1.757a5.95 5.95 0 0 1 1.751 4.237a6 6 0 0 1-5.989 5.989" />
                                </svg>
                                </i>
                            </a>
                            <a href="<?= $d['contato']['social']['linkedin'] ?>">
                                <svg width="40" height="40" id="uil--linkedin" viewBox="0 0 24 24">
                                    <path fill="#FFFFFF" d="M20.47 2H3.53a1.45 1.45 0 0 0-1.47 1.43v17.14A1.45 1.45 0 0 0 3.53 22h16.94a1.45 1.45 0 0 0 1.47-1.43V3.43A1.45 1.45 0 0 0 20.47 2M8.09 18.74h-3v-9h3ZM6.59 8.48a1.56 1.56 0 1 1 0-3.12a1.57 1.57 0 1 1 0 3.12m12.32 10.26h-3v-4.83c0-1.21-.43-2-1.52-2A1.65 1.65 0 0 0 12.85 13a2 2 0 0 0-.1.73v5h-3v-9h3V11a3 3 0 0 1 2.71-1.5c2 0 3.45 1.29 3.45 4.06Z" />
                                </svg>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12 order-lg-1 order-sm-2">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="widget">
                                    <h5>Menu</h5>
                                    <ul>
                                        <li><a href="#inicio">Início</a></li>
                                        <li><a href="#sobre">Sobre</a></li>
                                        <li><a href="#servicos">Tratamentos</a></li>
                                        <li><a href="#equipe">Equipe</a></li>
                                        <li><a href="#contato">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 order-lg-1 order-sm-2">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="widget">
                                    <h5>Serviços</h5>
                                    <ul>
                                        <?php foreach ($d['servicos']['items'] as $item): ?>

                                            <li><a href="#servicos"><?= $item['titulo'] ?></a></li>
                                        <?php endforeach; ?>
                                        <!-- <li><a href="#inicio">Início</a></li>
                                        <li><a href="#sobre">Sobre</a></li>
                                        <li><a href="#servicos">Tratamentos</a></li>
                                        <li><a href="#equipe">Equipe</a></li>
                                        <li><a href="#contato">Contato</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 order-lg-2 order-sm-1">
                        <div class="widget">
                            <h5>Entre em Contato</h5>
                            <div class="fw-bold text-white"><i class="fa fa-location-dot me-2 id-color"></i>Endereço</div>
                            <?= $d['contato']['endereco'] ?>
                            <div class="spacer-20"></div>
                            <div class="fw-bold text-white"><i class="fa fa-phone me-2 id-color"></i>Telefones</div>
                            <?= $d['contato']['telefone'] ?>
                            <div class="spacer-20"></div>
                            <div class="fw-bold text-white"><i class="fa fa-envelope me-2 id-color"></i>E-mail</div>
                            <?= $d['contato']['email'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <?= $d['footer']['copyright'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?= base_url() ?>dist/modelos/um/assets/js/plugins.js"></script>
    <script src="<?= base_url() ?>dist/modelos/um/assets/js/designesia.js"></script>
    <script src="<?= base_url() ?>dist/modelos/um/assets/js/swiper.js"></script>
    <script src="<?= base_url() ?>dist/modelos/um/assets/js/custom-swiper-1.js"></script>
    <script src="<?= base_url() ?>dist/modelos/um/assets/js/custom-marquee.js"></script>
    <script src="<?= base_url() ?>assets/js/model-loader.js"></script>
</body>

</html>