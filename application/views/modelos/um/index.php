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
    <link href="<?= base_url() ?>dist/modelos/um/assets/css/style.css" rel="stylesheet" type="text/css">

    <style>
        .header.transparent  {
            background: <?= $d['schema']['background'] ?> !important;
        }
    </style>
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
                                            <img class="logo-main" src="<?= base_url($d['header']['logo']) ?>" alt="<?= $d['seo']['title'] ?>">
                                            <img class="logo-scroll" src="<?= base_url($d['header']['logo']) ?>" alt="<?= $d['seo']['title'] ?>">
                                            <img class="logo-mobile" src="<?= base_url($d['header']['logo']) ?>" alt="<?= $d['seo']['title'] ?>">
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

            <section class="bg-dark text-light pt-60 pb-60">
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

            <section>
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

            <section id="depoimentos">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3"><?= $d['depoimentos']['subtitlo'] ?></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><?= $d['depoimentos']['titulo'] ?></h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="owl-carousel owl-theme wow fadeInUp four-cols-center-dots text-center">
                            <?php foreach ($d['depoimentos']['items'] as $item): ?>
                                <div class="item">
                                    <div class="p-4 bg-color-op-1 rounded-1 m-2">
                                        <p>"<?= $item['texto'] ?>"</p>
                                        <div class="fw-bold"><?= $item['nome'] ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
                <div class="row gx-5">
                    <div class="col-lg-4 col-sm-6">
                        <img src="<?= base_url() ?>dist/modelos/um/assets/images/logo-white.webp" class="logo-footer" alt="">
                        <div class="spacer-20"></div>
                        <p><?= $d['footer']['description'] ?></p>
                        <div class="social-icons mb-sm-30">
                            <a href="<?= $d['contato']['social']['facebook'] ?>"><i class="fa fa-facebook-f"></i></a>
                            <a href="<?= $d['contato']['social']['instagram'] ?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?= $d['contato']['social']['whatsapp'] ?>"><i class="fa fa-whatsapp"></i></a>
                            <a href="<?= $d['contato']['social']['linkedin'] ?>"><i class="fa fa-linkedin"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
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
                    <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
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
    <script src="<?= base_url() ?>dist/js/model-loader.js"></script>
</body>

</html>