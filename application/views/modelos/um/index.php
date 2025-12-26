<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>{{seo.title}}</title>
    <link rel="icon" href="{{seo.favicon}}" type="image/webp" sizes="16x16">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="{{seo.description}}">
    <meta name="keywords" content="{{seo.keywords}}">
    <meta name="author" content="{{seo.author}}">
    <!-- CSS Files -->
    <link href="<?= base_url() ?>?>dist/modelos/um/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="<?= base_url() ?>?>dist/modelos/um/assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>?>dist/modelos/um/assets/css/swiper.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>?>dist/modelos/um/assets/css/style.css" rel="stylesheet" type="text/css">
    <link id="colors" href="<?= base_url() ?>?>dist/modelos/um/assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        <div id="de-loader"></div>
        <!-- preloader end -->

        <!-- header begin -->
        <header class="transparent header-light header-float">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-inner">
                            <div class="de-flex sm-pt10">
                                <div class="de-flex-col">
                                    <div id="logo">
                                        <a href="#top">
                                            <img class="logo-main" src="<?= base_url() ?>?>dist/modelos/um/assets/images/logo-black.webp"
                                                alt="Clínica Sorriso Perfeito">
                                            <img class="logo-scroll" src="<?= base_url() ?>?>dist/modelos/um/assets/images/logo-black.webp"
                                                alt="Clínica Sorriso Perfeito">
                                            <img class="logo-mobile" src="<?= base_url() ?>?>dist/modelos/um/assets/images/logo-black.webp"
                                                alt="Clínica Sorriso Perfeito">
                                        </a>
                                    </div>
                                </div>
                                <div class="de-flex-col header-col-mid">
                                    <ul id="mainmenu">
                                        <li><a class="menu-item" href="#top">Início</a></li>
                                        <li><a class="menu-item" href="#about">Sobre</a></li>
                                        <li><a class="menu-item" href="#services">Tratamentos</a></li>
                                        <li><a class="menu-item" href="#team">Equipe</a></li>
                                        <li><a class="menu-item" href="#testimonials">Depoimentos</a></li>
                                        <li><a href="#contact">Contato</a></li>
                                    </ul>
                                </div>
                                <div class="de-flex-col">
                                    <div class="menu_side_area">
                                        <a href="#contact" class="btn-main"><span>Agendar Consulta</span></a>
                                        <span id="menu-btn"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- HERO ESCURO -->
            <section class="text-light bg-dark no-top no-bottom overflow-hidden">
                <div class="container-fluid position-relative half-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 position-lg-absolute right-half h-100">
                                <div class="image" data-bgimage="url(images/misc/s1.webp) center"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                    <div class="py-5 mt-5 mb-3 me-lg-3">
                                        <div class="subtitle id-color wow fadeInUp">Bem-vindo à Clínica Sorriso Perfeito
                                        </div>
                                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Seu Sorriso dos Sonhos Começa Aqui
                                        </h1>
                                        <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                                            Há mais de 15 anos transformando vidas com implantes dentários, lentes de
                                            contato dental ultrafinas, Invisalign e clareamento a laser. Atendimento
                                            humanizado e resultados naturais.
                                        </p>
                                        <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s" href="#contact">
                                            <span>Agendar Avaliação Gratuita</span>
                                        </a>
                                        <div class="border-bottom my-3"></div>
                                        <div class="d-lg-flex align-items-center">
                                            <div class="me-3">Avaliação no Google</div>
                                            <div class="de-flex justify-content-start align-items-center">
                                                <div class="me-3">5.0</div>
                                                <div class="d-flex fs-14 d-rating me-3">
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                </div>
                                            </div>
                                            <div class="me-3">Mais de 23 mil avaliações</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CONTATO RÁPIDO -->
            <section class="bg-dark text-light pt-50 pb-30">
                <div class="container relative">
                    <div class="row g-4 grid-divider slider-extra sm-hide">
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="d-flex justify-content-center">
                                <i class="fs-60 id-color icon_phone"></i>
                                <div class="ms-3">
                                    <h4 class="mb-0">Precisa de Atendimento?</h4>
                                    <p>Ligue agora: (11) 99999-9999</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="d-flex justify-content-center">
                                <i class="fs-60 id-color icon_clock"></i>
                                <div class="ms-3">
                                    <h4 class="mb-0">Horário de Atendimento</h4>
                                    <p>Segunda a Sábado das 08h às 20h</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="d-flex justify-content-center">
                                <i class="fs-60 id-color icon_mail"></i>
                                <div class="ms-3">
                                    <h4 class="mb-0">Envie uma Mensagem</h4>
                                    <p>contato@sorrisperfeito.com.br</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SOBRE NÓS -->
            <section id="about">
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="rounded-1 overflow-hidden wow zoomIn">
                                                <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/misc/p1.webp" class="w-100 wow scaleIn"
                                                    alt="Clínica Sorriso Perfeito">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row g-4">
                                        <div class="spacer-single sm-hide"></div>
                                        <div class="col-lg-12">
                                            <div class="rounded-1 overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                                <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/misc/p2.webp" class="w-100 wow scaleIn"
                                                    alt="Paciente feliz">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <div class="subtitle s2 mb-3 wow fadeInUp">Sobre a Clínica</div>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Excelência em Odontologia com Atendimento
                                    Humanizado</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    Referência em implantes com carga imediata, lentes de contato dental, Invisalign e
                                    harmonização do sorriso. Tecnologia de ponta aliada ao carinho que você merece.
                                </p>
                                <ul class="ul-check text-dark cols-2 fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                    <li>Implantes com Carga Imediata</li>
                                    <li>Lentes de Contato Dental</li>
                                    <li>Invisalign Oficial</li>
                                    <li>Clareamento a Laser</li>
                                </ul>
                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="#contact">
                                    <span>Agendar Avaliação Gratuita</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SERVIÇOS -->
            <section id="services" class="bg-color-op-1">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Nossos Tratamentos</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Cuidado Completo para Todos os Sorrisos</h2>
                            <p class="col-lg-8 offset-lg-2 mb-0 wow fadeInUp">
                                Dos check-ups de rotina aos tratamentos estéticos mais avançados, cuidamos do seu
                                sorriso com carinho e excelência.
                            </p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1">
                                    <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/icons/tooth-1.png" class="w-70px mb-3 wow scaleIn" alt="">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Implantes Dentários</h4>
                                        <p>Dentes fixos no mesmo dia com carga imediata e garantia vitalícia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1">
                                    <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/icons/tooth-2.png" class="w-70px mb-3 wow scaleIn" alt="">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Lentes de Contato Dental</h4>
                                        <p>Sorriso perfeito em poucas sessões. Ultrafinas e 100% naturais.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1">
                                    <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/icons/tooth-3.png" class="w-70px mb-3 wow scaleIn" alt="">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Invisalign & Ortodontia</h4>
                                        <p>Alinhamento perfeito sem aparelho metálico. Conforto e discrição.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1">
                                    <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/icons/tooth-4.png" class="w-70px mb-3 wow scaleIn" alt="">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Clareamento Dental</h4>
                                        <p>Até 8 tons mais branco em apenas 1 hora com tecnologia LED.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CONTADOR -->
            <section class="bg-dark text-light pt-60 pb-60">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="de_count wow fadeInRight">
                                <h3 class="fs-40 mb-0"><span class="timer" data-to="10000">0</span>+</h3>
                                Pacientes Felizes
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="de_count wow fadeInRight" data-wow-delay=".2s">
                                <h3 class="fs-40 mb-0"><span class="timer" data-to="2500">0</span>+</h3>
                                Sorrisos Clareados
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="de_count wow fadeInRight" data-wow-delay=".4s">
                                <h3 class="fs-40 mb-0"><span class="timer" data-to="800">0</span>+</h3>
                                Implantes Realizados
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="de_count wow fadeInRight" data-wow-delay=".6s">
                                <h3 class="fs-40 mb-0"><span class="timer" data-to="15">0</span>+</h3>
                                Anos de Experiência
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- POR QUE NOS ESCOLHER -->
            <section>
                <div class="container">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle id-color wow fadeInUp">Por que Escolher a Sorriso Perfeito</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Atendimento Excepcional com Toque Humano</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                Escolher o dentista certo faz toda a diferença. Unimos expertise, tecnologia de ponta e
                                um ambiente acolhedor para que cada consulta seja confortável e personalizada.
                            </p>
                            <div class="border-bottom mb-4"></div>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="relative wow fadeInUp">
                                        <h5>Equipe Experiente</h5>
                                        <p class="mb-0">Profissionais altamente capacitados e constantemente
                                            atualizados.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="relative wow fadeInUp">
                                        <h5>Tecnologia Avançada</h5>
                                        <p class="mb-0">Equipamentos modernos para diagnósticos precisos e tratamentos
                                            eficazes.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="relative wow fadeInUp">
                                        <h5>Tratamento Personalizado</h5>
                                        <p class="mb-0">Plano exclusivo feito sob medida para o seu sorriso.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="relative wow fadeInUp">
                                        <h5>Ambiente Familiar</h5>
                                        <p class="mb-0">Espaço acolhedor para crianças, adolescentes, adultos e idosos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-4 align-items-center">
                                <div class="col-6 text-end">
                                    <div class="w-80 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                        <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/misc/s2.webp" class="w-100 wow scaleIn" alt="">
                                    </div>
                                    <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                        <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/misc/s3.webp" class="w-100 wow scaleIn" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                        <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/misc/p3.webp" class="w-100 wow scaleIn" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TEAM ADDED -->
            <section id="team" class="bg-color-op-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Conheça Nossa Equipe</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Nossos Especialistas</h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/team/1.webp" class="w-100 wow scaleIn" alt="">
                                </div>
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dra. Fernanda Lima</h4>
                                        <p class="mb-2">Especialista em Estética</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/team/2.webp" class="w-100 wow scaleIn" alt="">
                                </div>
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dr. Rafael Santos</h4>
                                        <p class="mb-2">Implantes e Prótese</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/team/3.webp" class="w-100 wow scaleIn" alt="">
                                </div>
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dra. Camila Oliveira</h4>
                                        <p class="mb-2">Ortodontia & Invisalign</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/team/4.webp" class="w-100 wow scaleIn" alt="">
                                </div>
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dr. Lucas Mendes</h4>
                                        <p class="mb-2">Clínica Geral</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TESTIMONIALS ADDED -->
            <section id="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Depoimentos</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">O que nossos Pacientes Dizem</h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="owl-carousel owl-theme wow fadeInUp four-cols-center-dots text-center">
                            <div class="item">
                                <div class="p-4 bg-color-op-1 rounded-1 m-2">
                                    <p>"O atendimento foi espetacular! Fiz meus implantes e me senti muito segura. O
                                        resultado ficou perfeito."</p>
                                    <div class="fw-bold">Maria Silva</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-4 bg-color-op-1 rounded-1 m-2">
                                    <p>"Invisalign mudou minha vida. Equipe muito atenciosa e tecnologia de ponta.
                                        Recomendo a todos."</p>
                                    <div class="fw-bold">João Souza</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-4 bg-color-op-1 rounded-1 m-2">
                                    <p>"Clareamento com resultado imediato. Ambiente super limpo e aconchegante. Amei!"
                                    </p>
                                    <div class="fw-bold">Ana Oliveira</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="p-4 bg-color-op-1 rounded-1 m-2">
                                    <p>"Muito profissionais. Coloquei lentes de contato e meu sorriso está renovado.
                                        Gratidão!"</p>
                                    <div class="fw-bold">Carlos Pereira</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-12 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Fale Conosco</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Agende sua Consulta</h2>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-lg-6">
                            <h3>Entre em Contato</h3>
                            <p>Preencha o formulário abaixo ou utilize nossos canais de atendimento para agendar sua
                                avaliação.</p>

                            <div class="row g-4 gx-5">
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i
                                            class="icofont-clock-time me-2 id-color-2"></i>Horário</div>
                                    Seg - Sex: 08:00 - 20:00<br>Sáb: 08:00 - 14:00
                                </div>

                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i
                                            class="icofont-location-pin me-2 id-color-2"></i>Endereço</div>
                                    Av. Paulista, 1000 - SP
                                </div>

                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="icofont-phone me-2 id-color-2"></i>Telefone
                                    </div>
                                    (11) 99999-9999
                                </div>

                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i
                                            class="icofont-envelope me-2 id-color-2"></i>E-mail</div>
                                    contato@sorrisperfeito.com.br
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="p-40 bg-color-op-1 rounded-1">
                                <h3>Envie uma Mensagem</h3>
                                <form name="contactForm" id="contact_form" method="post" action="#">
                                    <div class="mb-4">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Seu Nome" required>
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Seu E-mail" required>
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Seu Telefone" required>
                                    </div>
                                    <div class="mb-4 mb20">
                                        <textarea name="message" id="message" class="form-control"
                                            placeholder="Sua Mensagem" required></textarea>
                                    </div>
                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Enviar Mensagem' class="btn-main">
                                    </div>
                                    <div id="success_message" class='success'>
                                        Sua mensagem foi enviada com sucesso.
                                    </div>
                                    <div id="error_message" class='error'>
                                        Desculpe, houve um erro ao enviar sua mensagem.
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content end -->

        <!-- footer begin -->
        <footer class="section-dark">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4 col-sm-6">
                        <img src="<?= base_url() ?>?>dist/modelos/um/assets/images/logo-white.webp" class="logo-footer" alt="Clínica Sorriso Perfeito">
                        <div class="spacer-20"></div>
                        <p>Referência em implantes dentários, lentes de contato dental, Invisalign e estética do sorriso
                            em São Paulo. Tecnologia de ponta com o carinho que seu sorriso merece.</p>
                        <div class="social-icons mb-sm-30">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="widget">
                                    <h5>Menu</h5>
                                    <ul>
                                        <li><a href="#top">Início</a></li>
                                        <li><a href="#about">Sobre</a></li>
                                        <li><a href="#services">Tratamentos</a></li>
                                        <li><a href="#team">Equipe</a></li>
                                        <li><a href="#contact">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                        <div class="widget">
                            <h5>Entre em Contato</h5>
                            <div class="fw-bold text-white"><i class="icofont-location-pin me-2 id-color"></i>Endereço
                            </div>
                            Av. Paulista, 1000 – Bela Vista, São Paulo – SP

                            <div class="spacer-20"></div>
                            <div class="fw-bold text-white"><i class="icofont-phone me-2 id-color"></i>Telefones</div>
                            (11) 99999-9999

                            <div class="spacer-20"></div>
                            <div class="fw-bold text-white"><i class="icofont-envelope me-2 id-color"></i>E-mail</div>
                            contato@sorrisperfeito.com.br
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
                                    © 2025 Clínica Sorriso Perfeito - Todos os direitos reservados
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->
    </div>

    <!-- Javascript Files -->
    <script src="<?= base_url() ?>?>dist/modelos/um/assets/js/plugins.js"></script>
    <script src="<?= base_url() ?>?>dist/modelos/um/assets/js/designesia.js"></script>
    <script src="<?= base_url() ?>?>dist/modelos/um/assets/js/swiper.js"></script>
    <script src="<?= base_url() ?>?>dist/modelos/um/assets/js/custom-swiper-1.js"></script>
    <script src="<?= base_url() ?>?>dist/modelos/um/assets/js/custom-marquee.js"></script>
    <script src="<?= base_url() ?>?>dist/js/model-loader.js"></script>
</body>

</html>