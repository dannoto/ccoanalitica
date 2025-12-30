<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instituto Harmonia — Psicologia e Saúde Emocional</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>dist/modelos/tres/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>dist/modelos/tres/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>dist/modelos/tres/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?= base_url() ?>dist/modelos/tres/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Clínica de psicologia especializada em terapia individual, casal, família e saúde emocional." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/mediox-icons/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/vendors/slick/css/slick.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/tres/assets/css/mediox.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>

    <div class="page-wrapper">

        <header class="main-header main-header--three sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__left">
                        <div class="main-header__logo logo-retina">
                            <a href="index.html">
                                <img src="<?= base_url() ?>dist/modelos/tres/assets/images/logo-light.png" alt="Instituto Harmonia" width="164">
                            </a>
                            <div class="main-header__logo__shape"></div>
                        </div>
                        <div class="main-header__sidebar-btn sidebar-btn__toggler">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <div class="main-header__right">
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class="scrollToLink"><a href="#home">Início</a></li>
                                <li class="scrollToLink"><a href="#about">Sobre</a></li>
                                <li class="scrollToLink"><a href="#services">Serviços</a></li>
                                <li class="scrollToLink"><a href="#team">Equipe</a></li>
                                <li class="scrollToLink"><a href="#testimonials">Depoimentos</a></li>
                                <li class="scrollToLink"><a href="#contact">Contato</a></li>
                            </ul>
                        </nav>
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span><span></span><span></span>
                        </div>
                        <a href="#" class="search-toggler main-header__search">
                            <i class="icon-search" aria-hidden="true"></i><span class="sr-only">Search</span>
                        </a>
                        <a href="https://wa.me/5562982045122" class="mediox-btn main-header__btn">
                            <span>Agendar Sessão</span>
                            <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Slider -->
        <section class="main-slider-two" id="home">
            <div class="main-slider-two__carousel mediox-owl__carousel--with-counter mediox-owl__carousel--basic-nav owl-carousel" data-owl-options='{
                "loop": true,
                "animateOut": "fadeOut",
                "animateIn": "fadeIn",
                "items": 1,
                "autoplay": true,
                "smartSpeed": 1000,
                "nav": true,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                "dots": false,
                "margin": 0
            }'>
                <!-- Slide 1 -->
                <div class="item">
                    <div class="main-slider-two__item">
                        <div class="main-slider-two__item__shape">
                            <div class="main-slider-two__item__shape__bg" style="background-image: url(assets/images/shapes/features-bg-1-1.png);"></div>
                        </div>
                        <div class="main-slider-two__wrapper">
                            <div class="main-slider-two__bg" style="background-image: url(https://img.freepik.com/free-photo/authentic-scene-young-person-undergoing-psychological-therapy_23-2150161978.jpg);"></div>
                            <div class="main-slider-two__container container">
                                <div class="row">
                                    <div class="col-xxl-9 col-xl-11">
                                        <div class="main-slider-two__content">
                                            <p class="main-slider-two__sub-title">ATENDIMENTO HUMANIZADO</p>
                                            <h2 class="main-slider-two__title">
                                                Cuidar da Mente é um Ato de Amor Próprio
                                            </h2>
                                            <p class="main-slider-two__text">Há mais de 15 anos ajudando pessoas a encontrarem equilíbrio emocional, autoconhecimento e qualidade de vida por meio da psicologia.</p>
                                            <div class="main-slider-two__button-group">
                                                <div class="main-slider-two__button-1">
                                                    <a href="#services" class="mediox-btn main-slider-two__btn">
                                                        <span>Nossos Serviços</span>
                                                        <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                    </a>
                                                </div>
                                                <div class="main-slider-two__button-2">
                                                    <a href="https://wa.me/5562982045122" class="mediox-btn main-slider-two__btn">
                                                        <span>Agendar Sessão</span>
                                                        <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-two__info">
                                <div class="main-slider-two__info__inner">
                                    <div class="main-slider-two__call">
                                        <span class="main-slider-two__call__icon"><i class="icon-telephone"></i></span>
                                        <div class="main-slider-two__call__content">
                                            <p class="main-slider-two__call__title">Precisa de Apoio?</p>
                                            <h4 class="main-slider-two__call__number"><a href="tel:+5511999999999">(11) 99999-9999</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 e 3 podem ser adicionados da mesma forma -->
            </div>
        </section>

        <!-- Features -->
        <section class="features-one section-space-bottom">
            <div class="features-one__bg" style="background-image: url(assets/images/shapes/features-bg-1-1.png);"></div>
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="features-one__card">
                            <div class="features-one__card__content">
                                <span class="features-one__card__icon"><i class="icon-brain"></i></span>
                                <h3 class="features-one__card__title">Psicólogos Experientes</h3>
                                <p class="features-one__card__text">Equipe qualificada com anos de experiência em saúde mental e emocional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="features-one__card">
                            <div class="features-one__card__content">
                                <span class="features-one__card__icon"><i class="icon-heartbeat"></i></span>
                                <h3 class="features-one__card__title">Atendimento Personalizado</h3>
                                <p class="features-one__card__text">Terapias individuais, de casal e familiar adaptadas às suas necessidades.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="features-one__card">
                            <div class="features-one__card__content">
                                <span class="features-one__card__icon"><i class="icon-meditation"></i></span>
                                <h3 class="features-one__card__title">Ambiente Acolhedor</h3>
                                <p class="features-one__card__text">Espaço confortável e confidencial para o seu bem-estar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="features-one__card">
                            <div class="features-one__card__content">
                                <span class="features-one__card__icon"><i class="icon-support"></i></span>
                                <h3 class="features-one__card__title">Suporte 24/7</h3>
                                <p class="features-one__card__text">Atendimento emergencial e acompanhamento contínuo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sobre Nós -->
        <section class="about-two section-space-two" id="about">
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="about-two__image">
                            <div class="about-two__image__one">
                                <img src="https://img.freepik.com/free-photo/family-therapy-psychologist-office_23-2149175227.jpg" alt="Sobre Nós">
                            </div>
                            <div class="about-two__image__two">
                                <div class="about-two__image__two__inner">
                                    <img src="https://www.psitto.com.br/wp-content/uploads/2024/02/terapia-em-grupo-1.jpg" alt="Sobre Nós">
                                </div>
                            </div>
                            <img src="https://hospitalsantamonica.com.br/wp-content/uploads/2021/01/terapia-em-grupo-1024x683.jpeg" alt="Sobre Nós" class="about-two__image__three">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-two__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration="1500ms">
                                <div class="sec-title__top">
                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="Sobre Nós" class="sec-title__img">
                                    <h6 class="sec-title__tagline">Sobre Nós</h6>
                                </div>
                                <h3 class="sec-title__title">Seu Bem-Estar Emocional Começa com um Profissional Qualificado</h3>
                            </div>
                            <div class="about-two__description wow fadeInUp" data-wow-duration="1500ms">
                                <p class="about-two__text">No Instituto Harmonia, oferecemos atendimento psicológico humanizado, com foco no autoconhecimento, equilíbrio emocional e qualidade de vida.</p>
                            </div>
                            <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-duration="1500ms">
                                <li><span class="about-two__list__icon"><i class="icon-check"></i></span>Atendimento Individual e Familiar</li>
                                <li><span class="about-two__list__icon"><i class="icon-check"></i></span>Técnicas Modernas de Terapia</li>
                                <li><span class="about-two__list__icon"><i class="icon-check"></i></span>Psicólogos Qualificados e Empáticos</li>
                                <li><span class="about-two__list__icon"><i class="icon-check"></i></span>Preços Acessíveis e Acolhimento</li>
                            </ul>
                            <div class="about-two__button wow fadeInUp" data-wow-duration="1500ms">
                                <a href="https://wa.me/5562982045122" class="mediox-btn">
                                    <span>Agendar Sessão</span>
                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Serviços -->
        <section class="services-two section-space-bottom" id="services">
            <div class="services-two__bg" style="background-image: url(assets/images/shapes/services-bg-2-1.png);"></div>
            <div class="container">
                <div class="services-two__top">
                    <div class="row gutter-y-40 align-items-end">
                        <div class="col-xl-9 col-lg-8">
                            <div class="sec-title wow fadeInUp" data-wow-duration="1500ms">
                                <div class="sec-title__top">
                                    <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-2.png" alt="Nossos Serviços" class="sec-title__img">
                                    <h6 class="sec-title__tagline">Nossos Serviços</h6>
                                </div>
                                <h3 class="sec-title__title">Especialidades em Psicologia e Saúde Mental</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-two__container container">
                <div class="services-two__carousel mediox-owl__carousel mediox-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                    "items": 1,"margin": 10,"loop": true,"smartSpeed": 700,"nav": true,"navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],"dots": false,"autoplay": true,
                    "responsive": {"0":{"items":1},"768":{"items":2,"margin":30},"992":{"items":2,"margin":30},"1200":{"items":2.05,"margin":30}}
                }'>
                    <!-- Itens de serviço -->
                    <div class="item"><div class="service-card-two"><div class="service-card-two__bg"></div><div class="service-card-two__content"><img src="https://www.shutterstock.com/image-photo/young-man-mental-therapy-session-260nw-2607969505.jpg" alt="Terapia Individual" class="service-card-two__image"><h3 class="service-card-two__title"><a href="#">Terapia Individual</a></h3><a href="#" class="service-card-two__link"><i class="icon-up-right-arrow"></i></a></div></div></div>
                    <div class="item"><div class="service-card-two"><div class="service-card-two__bg"></div><div class="service-card-two__content"><img src="https://img.freepik.com/free-photo/family-therapy-psychologist-office_23-2149175227.jpg" alt="Terapia Familiar" class="service-card-two__image"><h3 class="service-card-two__title"><a href="#">Terapia Familiar</a></h3><a href="#" class="service-card-two__link"><i class="icon-up-right-arrow"></i></a></div></div></div>
                    <div class="item"><div class="service-card-two"><div class="service-card-two__bg"></div><div class="service-card-two__content"><img src="https://www.psitto.com.br/wp-content/uploads/2024/02/terapia-em-grupo-1.jpg" alt="Terapia em Grupo" class="service-card-two__image"><h3 class="service-card-two__title"><a href="#">Terapia em Grupo</a></h3><a href="#" class="service-card-two__link"><i class="icon-up-right-arrow"></i></a></div></div></div>
                    <div class="item"><div class="service-card-two"><div class="service-card-two__bg"></div><div class="service-card-two__content"><img src="https://media.istockphoto.com/id/1649071889/photo/vulnerable-woman-shares-something-with-therapist-during-therapy-session.jpg?s=612x612" alt="Terapia de Casal" class="service-card-two__image"><h3 class="service-card-two__title"><a href="#">Terapia de Casal</a></h3><a href="#" class="service-card-two__link"><i class="icon-up-right-arrow"></i></a></div></div></div>
                    <div class="item"><div class="service-card-two"><div class="service-card-two__bg"></div><div class="service-card-two__content"><img src="https://drconsulta.com/conteudo/wp-content/uploads/2024/08/dr.consulta_bem_estar_dicas-1024x576.webp" alt="Apoio para Ansiedade e Depressão" class="service-card-two__image"><h3 class="service-card-two__title"><a href="#">Apoio para Ansiedade e Depressão</a></h3><a href="#" class="service-card-two__link"><i class="icon-up-right-arrow"></i></a></div></div></div>
                    <div class="item"><div class="service-card-two"><div class="service-card-two__bg"></div><div class="service-card-two__content"><img src="https://www.terapiamed.com/wp-content/uploads/2024/04/terapia-em-grupo1.jpg" alt="Desenvolvimento Pessoal" class="service-card-two__image"><h3 class="service-card-two__title"><a href="#">Desenvolvimento Pessoal</a></h3><a href="#" class="service-card-two__link"><i class="icon-up-right-arrow"></i></a></div></div></div>
                </div>
            </div>
        </section>

        <!-- Equipe -->
        <section class="team-two section-space-two" id="team">
            <div class="container">
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
                    <div class="sec-title__top">
                        <img src="<?= base_url() ?>dist/modelos/tres/assets/images/shapes/sec-title-s-1-1.png" alt="Equipe" class="sec-title__img">
                        <h6 class="sec-title__tagline">Nossa Equipe</h6>
                    </div>
                    <h3 class="sec-title__title">Conheça nossos especialistas</h3>
                </div>
                <div class="team-two__carousel mediox-owl__carousel mediox-owl__carousel--with-shadow mediox-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                    "items": 1,"margin": 10,"loop": false,"smartSpeed": 700,"nav": false,"dots": true,"autoplay": true,
                    "responsive": {"0":{"items":1,"nav":true,"dots":false},"576":{"items":2,"margin":30},"992":{"items":3,"margin":30},"1200":{"items":4,"margin":30,"dots":false}}
                }'>
                    <div class="item">
                        <div class="team-card-two">
                            <div class="team-card-two__image"><div class="team-card-two__image__inner"><img src="https://www.shutterstock.com/image-photo/portrait-professional-psychologist-notebook-office-260nw-2630595975.jpg" alt="Dr. Ana Silva"></div></div>
                            <div class="team-card-two__identity">
                                <h3 class="team-card-two__name"><a href="#">Dr. Ana Silva</a></h3>
                                <p class="team-card-two__designation">Psicóloga Clínica</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card-two">
                            <div class="team-card-two__image"><div class="team-card-two__image__inner"><img src="https://www.shutterstock.com/image-photo/portrait-professional-psychologist-notebook-office-260nw-2590576733.jpg" alt="Dr. João Oliveira"></div></div>
                            <div class="team-card-two__identity">
                                <h3 class="team-card-two__name"><a href="#">Dr. João Oliveira</a></h3>
                                <p class="team-card-two__designation">Psicólogo Especialista em Casais</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card-two">
                            <div class="team-card-two__image"><div class="team-card-two__image__inner"><img src="https://img.freepik.com/fotos-premium/retrato-de-psicologo-profissional-de-mulher-de-meia-idade-no-escritorio_116407-9960.jpg" alt="Dra. Maria Fernandes"></div></div>
                            <div class="team-card-two__identity">
                                <h3 class="team-card-two__name"><a href="#">Dra. Maria Fernandes</a></h3>
                                <p class="team-card-two__designation">Psicóloga Infantil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card-two">
                            <div class="team-card-two__image"><div class="team-card-two__image__inner"><img src="https://www.shutterstock.com/image-photo/portrait-professional-psychologist-clipboard-office-260nw-2589073943.jpg" alt="Dr. Pedro Santos"></div></div>
                            <div class="team-card-two__identity">
                                <h3 class="team-card-two__name"><a href="#">Dr. Pedro Santos</a></h3>
                                <p class="team-card-two__designation">Neuropsicólogo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Restante do template (testimonials, faq, footer etc.) pode ser mantido como estava ou adaptado conforme necessidade -->

        <footer class="main-footer section-space-top">
            <!-- Footer content -->
        </footer>

    </div>

  <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery/jquery-3.7.0.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jarallax/jarallax.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-ui/jquery-ui.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-appear/jquery.appear.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-validate/jquery.validate.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/nouislider/nouislider.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/tiny-slider/tiny-slider.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/wnumb/wNumb.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/slick/js/slick.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/wow/wow.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/imagesloaded/imagesloaded.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/isotope/isotope.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/countdown/countdown.min.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-circleType/jquery.circleType.js"></script>

    <script src="<?= base_url() ?>dist/modelos/tres/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>

    <!-- template js -->

    <script src="<?= base_url() ?>dist/modelos/tres/assets/js/mediox.js"></script>
</body>
</html>