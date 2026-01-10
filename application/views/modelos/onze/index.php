<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home 1 || Business Consulting</title>
    <link rel="shortcut icon" href="https://unifato.com/advisr/assets/img/logo/titel2.svg" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/font-awesome-pro.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/slick-slider.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/meanmenu.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/typography.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/preloader.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/mobile-menu.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/aos.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/header.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/footer.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/fonts.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/blog-page.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/modal-video.min.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/nice-select.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/comon.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/animation.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/advisr-unit.css" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/advisr-core.css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/responsive.css" />

    <script src="https://unifato.com/advisr/assets/js/jquery-3-6-0.min.js"></script>
</head>

<body class="font-f-2">

    <!-- Loader -->
    <div class="theme-loader">
        <div class="spinner">
            <div class="spinner-bounce one"></div>
            <div class="spinner-bounce two"></div>
            <div class="spinner-bounce three"></div>
        </div>
    </div>

    <!-- Scroll Progress -->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    <!-- Header Desktop -->
    <header>
        <div class="header-area header-area-all d-none d-lg-block" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-elements">

                            <div class="site-logo home1-site-logo">
                                <a href="<?php echo $d['header']['logo']['link']; ?>">
                                    <img src="<?php echo $d['header']['logo']['imagem']; ?>" alt="<?php echo $d['header']['logo']['alt']; ?>" />
                                </a>
                            </div>

                            <div class="main-menu-ex main-menu-ex2">
                                <ul>
                                    <?php foreach ($d['header']['menu'] as $menu): ?>
                                        <li class="<?php echo isset($menu['submenu']) ? 'has-dropdown' : ''; ?>">
                                            <a href="<?php echo $menu['link']; ?>">
                                                <?php echo $menu['titulo']; ?>
                                                <?php if (isset($menu['submenu'])): ?>
                                                    <i class="fa-solid fa-angle-down"></i>
                                                <?php endif; ?>
                                            </a>

                                            <?php if (isset($menu['submenu'])): ?>
                                                <ul class="sub-menu">
                                                    <?php foreach ($menu['submenu'] as $submenu): ?>
                                                        <li class="<?php echo isset($submenu['submenu']) ? 'has-dropdown has-dropdown1' : ''; ?>">
                                                            <a href="<?php echo $submenu['link']; ?>">
                                                                <?php echo $submenu['titulo']; ?>
                                                                <?php if (isset($submenu['submenu'])): ?>
                                                                    <span><i class="fa-solid fa-angle-right"></i></span>
                                                                <?php endif; ?>
                                                            </a>

                                                            <?php if (isset($submenu['submenu'])): ?>
                                                                <ul class="sub-menu">
                                                                    <?php foreach ($submenu['submenu'] as $nivel3): ?>
                                                                        <li>
                                                                            <a href="<?php echo $nivel3['link']; ?>"><?php echo $nivel3['titulo']; ?></a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="home2-header-buttons">
                                <div class="button2-all">
                                    <a href="<?php echo $d['header']['botao']['link']; ?>" class="button-h-2 btnfos2">
                                        <?php echo $d['header']['botao']['titulo']; ?>
                                    </a>
                                </div>
                            </div>

                            <div class="mobile-menu-bar d-lg-none">
                                <i class="fas fa-bars"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Header e Sidebar -->
    <div class="mobile-header mobile-header-4 d-block d-lg-none">
        <div class="container-fluid">
            <div class="col-12">
                <div class="mobile-header-elements">
                    <div class="mobile-logo">
                        <a href="<?php echo $d['mobile_header']['logo']['link']; ?>">
                            <img src="<?php echo $d['mobile_header']['logo']['imagem']; ?>" alt="<?php echo $d['mobile_header']['logo']['alt']; ?>">
                        </a>
                    </div>
                    <div class="mobile-nav-icon">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-sidebar d-block d-lg-none">
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>

        <div class="mobile-nav">
            <?php foreach ($d['mobile_menu'] as $menu): ?>
                <li class="<?php echo isset($menu['submenu']) ? 'has-dropdown' : ''; ?>">
                    <a href="<?php echo $menu['link']; ?>"><?php echo $menu['titulo']; ?></a>

                    <?php if (isset($menu['submenu'])): ?>
                        <ul class="sub-menu">
                            <?php foreach ($menu['submenu'] as $submenu): ?>
                                <li class="<?php echo isset($submenu['submenu']) ? 'has-dropdown has-dropdown1' : ''; ?>">
                                    <a href="<?php echo $submenu['link']; ?>"><?php echo $submenu['titulo']; ?></a>

                                    <?php if (isset($submenu['submenu'])): ?>
                                        <ul class="sub-menu">
                                            <?php foreach ($submenu['submenu'] as $nivel3): ?>
                                                <li>
                                                    <a href="<?php echo $nivel3['link']; ?>"><?php echo $nivel3['titulo']; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>

            <li>
                <a class="mobile-menu-button" href="<?php echo $d['mobile_cta']['link']; ?>">
                    <?php echo $d['mobile_cta']['titulo']; ?>
                </a>
            </li>
        </div>

        <div class="single-footer single-footer-menu single-footer4">
            <h3><?php echo $d['mobile_footer']['titulo']; ?></h3>

            <div class="footer4-contact-info">
                <div class="contact-info-single">
                    <div class="contact-info-icon">
                        <img src="<?php echo $d['mobile_footer']['telefone']['icone']; ?>" alt="">
                    </div>
                    <div class="contact-info-text">
                        <a href="tel:<?php echo $d['mobile_footer']['telefone']['link']; ?>">
                            <?php echo $d['mobile_footer']['telefone']['texto']; ?>
                        </a>
                    </div>
                </div>

                <div class="contact-info-single">
                    <div class="contact-info-icon">
                        <img src="<?php echo $d['mobile_footer']['email']['icone']; ?>" alt="">
                    </div>
                    <div class="contact-info-text">
                        <a href="mailto:<?php echo $d['mobile_footer']['email']['texto']; ?>">
                            <?php echo $d['mobile_footer']['email']['texto']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero -->
    <div class="main-hero main-hero2" style="background-color: #EDF2F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="main-hadding2">
                        <span class="span"><?php echo $d['hero']['subtitulo']; ?></span>
                        <div class="space16"></div>
                        <h1><?php echo $d['hero']['titulo']; ?></h1>
                        <div class="space24"></div>
                        <p><?php echo $d['hero']['descricao']; ?></p>
                        <div class="space40"></div>

                        <div class="header2-buttons">
                            <div class="button2-all">
                                <a href="<?php echo $d['hero']['botao_principal']['link']; ?>" class="button-h-2 btnfos2">
                                    <?php echo $d['hero']['botao_principal']['titulo']; ?>
                                </a>
                            </div>
                            <div class="button2-all2">
                                <a href="<?php echo $d['hero']['botao_secundario']['link']; ?>" class="button-h2-2 btnfos3">
                                    <?php echo $d['hero']['botao_secundario']['titulo']; ?>
                                </a>
                            </div>
                        </div>

                        <div class="space40"></div>

                        <div class="brand2-slider-all">
                            <h4><?php echo $d['hero']['parceiros']['titulo']; ?></h4>
                            <div class="space24"></div>
                            <div class="brand2-slider owl-carousel">
                                <?php foreach ($d['hero']['parceiros']['logos'] as $logo): ?>
                                    <div class="brand2-logo">
                                        <img src="<?php echo $logo; ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 text-center">
                    <div class="hero2-image-all1">
                        <div class="hero2-img1 img100 border-70">
                            <img src="<?php echo $d['hero']['imagens']['img1']; ?>" alt="">
                        </div>
                        <div class="hero2-img2 img100 border-70">
                            <img src="<?php echo $d['hero']['imagens']['img2']; ?>" alt="">
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="hero2-img3 img100 border-80">
                        <img src="<?php echo $d['hero']['imagens']['img3']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    


 <!-- Sobre -->
<div class="about2 sp3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about2-images">
                    <div class="about2-img1 aniamtion-key-1">
                        <img src="<?php echo $d['sobre']['shape']; ?>" alt="">
                    </div>
                    <div class="about2-img2 border-70" data-aos="zoom-out" data-aos-duration="800">
                        <img src="<?php echo $d['sobre']['imagem_principal']; ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hadding2 about2-hadding">
                    <span class="span"><?php echo $d['sobre']['subtitulo']; ?></span>
                    <div class="space16"></div>
                    <h1><?php echo $d['sobre']['titulo']; ?></h1>
                    <div class="space24"></div>
                    <p><?php echo $d['sobre']['descricao1']; ?></p>
                    <div class="space20"></div>
                    <p><?php echo $d['sobre']['descricao2']; ?></p>
                    <div class="space40"></div>
                    <a href="<?php echo $d['sobre']['botao']['link']; ?>" class="button-h-2 btnfos2">
                        <?php echo $d['sobre']['botao']['titulo']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Serviços -->
<div class="service2 sp3" style="background-color: #254969;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="hadding2-w">
                    <span class="span"><?php echo $d['servicos']['subtitulo']; ?></span>
                    <div class="space16"></div>
                    <h1><?php echo $d['servicos']['titulo']; ?></h1>
                    <div class="space24"></div>
                    <p><?php echo $d['servicos']['descricao']; ?></p>
                </div>
            </div>
        </div>

        <div class="space30"></div>

        <div class="row">
            <?php foreach($d['servicos']['items'] as $item): ?>
                <div class="col-lg-6">
                    <div data-aos="fade-up" data-aos-duration="<?php echo $item['aos']; ?>">
                        <div class="service2-box">
                            <div class="serivce2-icon">
                                <img src="<?php echo $item['icone']; ?>" alt="">
                            </div>
                            <div class="space24"></div>
                            <div class="service2-hadding hadding2-w">
                                <h4>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['titulo']; ?></a>
                                </h4>
                                <div class="space14"></div>
                                <p><?php echo $item['descricao']; ?></p>
                                <div class="space24"></div>
                                <a class="read-more-btn-w" href="<?php echo $item['link']; ?>">
                                    <?php echo $item['botao']; ?> 
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="space40"></div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="<?php echo $d['servicos']['botao']['link']; ?>" class="button-h-2 btnfos2">
                    <?php echo $d['servicos']['botao']['titulo']; ?>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Por que escolher -->
<div class="choose2 sp3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hadding2">
                    <span class="span"><?php echo $d['porque_escolher']['subtitulo']; ?></span>
                    <div class="space16"></div>
                    <h1><?php echo $d['porque_escolher']['titulo']; ?></h1>
                    <div class="space24"></div>
                    <p><?php echo $d['porque_escolher']['descricao1']; ?></p>
                    <div class="space20"></div>
                    <p><?php echo $d['porque_escolher']['descricao2']; ?></p>

                    <div class="counter-boxs">
                        <?php foreach($d['porque_escolher']['contadores'] as $contador): ?>
                            <div class="counter2-box">
                                <h2><span class="counter"><?php echo $contador['numero']; ?></span></h2>
                                <p><?php echo $contador['titulo']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-right">
                <div class="choose2-images">
                    <div class="choose2-img1 aniamtion-key-1">
                        <img src="<?php echo $d['porque_escolher']['shape']; ?>" alt="">
                    </div>
                    <div class="choose2-img2 border-70" data-aos="zoom-out" data-aos-duration="800">
                        <img src="<?php echo $d['porque_escolher']['imagem']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="cta2" style="background-image: url(<?php echo $d['cta']['background']; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed; padding: 70px 0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hadding2-w">
                    <h1 data-aos="fade-up" data-aos-duration="700"><?php echo $d['cta']['titulo']; ?></h1>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="header2-buttons header2-buttons2">
                    <div class="button2-all" data-aos-duration="800" data-aos="fade-up">
                        <a href="<?php echo $d['cta']['botao_principal']['link']; ?>" class="button-h-2 btnfos2">
                            <?php echo $d['cta']['botao_principal']['titulo']; ?>
                        </a>
                    </div>
                    <div class="button2-all2" data-aos-duration="800" data-aos="fade-down">
                        <a href="<?php echo $d['cta']['botao_secundario']['link']; ?>" class="button-h2-2 btnfos4">
                            <?php echo $d['cta']['botao_secundario']['titulo']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



   <!-- Projetos -->
<div class="projects sp3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hadding2">
                    <span class="span" data-aos-duration="700" data-aos="fade-up"><?php echo $d['projetos']['subtitulo']; ?></span>
                    <div class="space16"></div>
                    <h1 data-aos-duration="900" data-aos="fade-up"><?php echo $d['projetos']['titulo']; ?></h1>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="project-button" data-aos-duration="800" data-aos="fade-up">
                    <a href="<?php echo $d['projetos']['botao']['link']; ?>" class="button-h-2 btnfos2">
                        <?php echo $d['projetos']['botao']['titulo']; ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="space30"></div>

        <div class="row">
            <?php foreach($d['projetos']['items'] as $item): ?>
                <div class="col-lg-6">
                    <div class="project-all-box" data-aos-duration="<?php echo $item['aos']; ?>" data-aos="fade-up">
                        <div class="project-img img100">
                            <img src="<?php echo $item['imagem']; ?>" alt="">
                        </div>
                        <div class="project-box">
                            <div class="project-hadding hadding2-w">
                                <h4><a href="<?php echo $item['link']; ?>"><?php echo $item['titulo']; ?></a></h4>
                                <div class="space14"></div>
                                <p><?php echo $item['descricao']; ?></p>
                                <div class="space24"></div>
                                <a class="read-more-btn-w" href="<?php echo $item['link']; ?>">
                                    <?php echo $item['botao']; ?> 
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Depoimentos -->
<div class="testimonial2 sp3" style="background-color: #03163B;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="hadding2-w">
                    <span class="span" data-aos-duration="700" data-aos="fade-up"><?php echo $d['depoimentos']['subtitulo']; ?></span>
                    <div class="space16"></div>
                    <h1 data-aos-duration="900" data-aos="fade-up"><?php echo $d['depoimentos']['titulo']; ?></h1>
                </div>
            </div>
        </div>

        <div class="space30"></div>

        <div class="row" data-aos-duration="1000" data-aos="fade-up">
            <div class="testimonial2-slider-all owl-carousel">
                <?php foreach($d['depoimentos']['items'] as $item): ?>
                    <div class="testimonial-sliders">
                        <div class="testimonial-single-slider testimonial-single-slider2">
                            <div class="testimonial2-slider-img">
                                <img src="<?php echo $item['imagem']; ?>" alt="">
                            </div>

                            <div class="testimonial1-hadding testimonial2-hadding">
                                <div class="testimonial-stars">
                                    <ul>
                                        <?php for($i = 0; $i < $item['estrelas']; $i++): ?>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                                <p style="font-style: italic;">“<?php echo $item['texto']; ?>”</p>
                                <div class="space20"></div>
                                <div class="slider1-bottom">
                                    <h4><a href="#"><?php echo $item['nome']; ?></a></h4>
                                    <div class="space6"></div>
                                    <p><?php echo $item['cargo']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Contato -->
<div class="contact2 sp3" style="background-color: #254969;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hadding2-w">
                    <div class="space10"></div>
                    <h1 data-aos="fade-right" data-aos-duration="700">
                        <?php echo $d['contato']['titulo']; ?> 
                        <span class="after2"><?php echo $d['contato']['titulo_destaque']; ?></span>
                    </h1>
                    <div class="space24"></div>
                    <p data-aos="fade-right" data-aos-duration="900"><?php echo $d['contato']['descricao']; ?></p>
                </div>

                <div class="space10"></div>

                <div class="contact2-contacts">
                    <?php foreach($d['contato']['informacoes'] as $info): ?>
                        <div class="contact2-single" data-aos="fade-right" data-aos-duration="<?php echo $info['aos_duration']; ?>">
                            <div class="contact2-icon">
                                <img src="<?php echo $info['icone']; ?>" alt="">
                            </div>
                            <div class="contact2-icon-hadding">
                                <a href="<?php echo $info['link']; ?>"><?php echo $info['texto']; ?></a>
                            </div>
                        </div>
                        <div class="space10"></div>
                    <?php endforeach; ?>
                </div>

                <div class="space30"></div>

                <div class="hadding2-w" data-aos="fade-right" data-aos-duration="800">
                    <?php foreach($d['contato']['observacoes'] as $obs): ?>
                        <p><?php echo $obs; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact2-form-box-all" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="contact-form">
                        <form action="<?php echo $d['contato']['form']['action']; ?>">
                            <div class="hadding2">
                                <h1><?php echo $d['contato']['form']['titulo']; ?></h1>
                            </div>

                            <div class="sapce24"></div>

                            <div class="contact-inputs">
                                <div class="contact-input">
                                    <div class="contact-input-signle">
                                        <input type="text" placeholder="<?php echo $d['contato']['form']['campos']['nome']; ?>">
                                        <input type="text" placeholder="<?php echo $d['contato']['form']['campos']['sobrenome']; ?>">
                                    </div>

                                    <div class="contact-input-signle contact-input-signle1">
                                        <input type="text" placeholder="<?php echo $d['contato']['form']['campos']['email']; ?>">
                                    </div>

                                    <div class="contact-input-signle contact-input-signle1">
                                        <select class="wide">
                                            <?php foreach($d['contato']['form']['campos']['assunto'] as $opcao): ?>
                                                <option value=""><?php echo $opcao; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="contact-input-signle">
                                        <textarea cols="30" rows="3" placeholder="<?php echo $d['contato']['form']['campos']['mensagem']; ?>"></textarea>
                                    </div>

                                    <div class="space30"></div>

                                    <button class="button2">
                                        <?php echo $d['contato']['form']['botao']; ?>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer-area footer-area2 padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer mr50">
                    <a href="<?php echo $d['footer']['logo_link']; ?>" class="footer-logo">
                        <img src="<?php echo $d['footer']['logo']; ?>" alt="" />
                    </a>
                    <div class="space20"></div>
                    <p><?php echo $d['footer']['descricao']; ?></p>
                </div>
            </div>

            <div class="col-lg col-sm-6">
                <div class="single-footer">
                    <h3><?php echo $d['footer']['menus']['empresa']['titulo']; ?></h3>
                    <div class="footer-menu">
                        <ul>
                            <?php foreach($d['footer']['menus']['empresa']['links'] as $item): ?>
                                <li><a href="<?php echo $item['link']; ?>"><?php echo $item['titulo']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg col-sm-6">
                <div class="single-footer">
                    <h3><?php echo $d['footer']['menus']['util']['titulo']; ?></h3>
                    <div class="footer-menu">
                        <ul>
                            <?php foreach($d['footer']['menus']['util']['links'] as $item): ?>
                                <li><a href="<?php echo $item['link']; ?>"><?php echo $item['titulo']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-footer">
                    <h3><?php echo $d['footer']['newsletter']['titulo']; ?></h3>
                    <div class="footer-subscribe-area">
                        <div class="hadding1">
                            <p><?php echo $d['footer']['newsletter']['descricao']; ?></p>
                        </div>
                        <div class="space24"></div>
                        <div class="footer-contact-input">
                            <div class="input-footer2">
                                <input type="email" placeholder="<?php echo $d['footer']['newsletter']['placeholder']; ?>">
                            </div>
                            <div class="button-footer">
                                <button class="button2"><?php echo $d['footer']['newsletter']['botao']; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center copyright2">
            <div class="col-lg-6">
                <p class="copyright-p"><?php echo $d['footer']['copyright']; ?></p>
                <ul class="Conditions2">
                    <li><a href="<?php echo $d['footer']['termos']['link']; ?>"><?php echo $d['footer']['termos']['titulo']; ?></a></li>
                </ul>
            </div>

            <div class="col-lg-6 text-right">
                <div class="social social2">
                    <ul>
                        <?php foreach($d['footer']['social'] as $social): ?>
                            <li>
                                <a data-bs-toggle="tooltip" title="<?php echo $social['titulo']; ?>" href="<?php echo $social['link']; ?>">
                                    <i class="<?php echo $social['icone']; ?>"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Demo Sidebar (opcional - pode remover se não for usar) -->
<!-- Demo Sidebar -->
<div class="demo-sidebar" id="demo-sidebar">
    <div class="demo-sidebar-wrap">
        <div class="demo-sidebar-menu">
            <span data-bs-toggle="tooltip" title="Ver Demos" class="demosIcon" id="demosIcon">
                <i class="fa-solid fa-gear"></i>
            </span>
            <span data-bs-toggle="tooltip" title="Comprar Tema">
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </span>
        </div>

        <div class="demo-sidebar-content">
            <div class="heading2">
                <h2><?php echo $d['demo_sidebar']['titulo']; ?></h2>
            </div>
            <div class="space20"></div>

            <div class="demo-sidebar-items">
                <?php foreach($d['demo_sidebar']['homes'] as $home): ?>
                    <div class="single-demo-sidebar-item">
                        <div class="demo-sidebar-item-img">
                            <img src="<?php echo $home['imagem']; ?>" alt="" />
                            <div class="demo-sidebar-buttons">
                                <?php foreach($home['botoes'] as $botao): ?>
                                    <a href="<?php echo $botao['link']; ?>"><?php echo $botao['titulo']; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="demo-item-content">
                            <a href="<?php echo $home['link']; ?>"><?php echo $home['titulo']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="space30"></div>

            <div class="heading2">
                <h2><?php echo $d['demo_sidebar']['inner_titulo']; ?></h2>
            </div>

            <div class="demo-sidebar-items inner-dmeos">
                <?php foreach($d['demo_sidebar']['inner_pages'] as $page): ?>
                    <div class="single-demo-sidebar-item">
                        <div class="demo-sidebar-item-img">
                            <img src="<?php echo $page['imagem']; ?>" alt="" />
                            <div class="demo-sidebar-buttons">
                                <a href="<?php echo $page['link']; ?>"><?php echo $page['botao']; ?></a>
                            </div>
                        </div>
                        <div class="demo-item-content">
                            <a href="<?php echo $page['link']; ?>"><?php echo $page['titulo']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

    <!-- Scripts -->
    <script src="https://unifato.com/advisr/assets/js/bootstrap.min.js"></script>
    <script src="https://unifato.com/advisr/assets/js/fontawesome.js"></script>
    <script src="https://unifato.com/advisr/assets/js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unifato.com/advisr/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://unifato.com/advisr/assets/js/slick-slider.js"></script>
    <script src="https://unifato.com/advisr/assets/js/mobile-menu.js"></script>
    <script src="https://unifato.com/advisr/assets/js/tilt.jquery.js"></script>
    <script src="https://unifato.com/advisr/assets/js/jquery.countup.js"></script>
    <script src="https://unifato.com/advisr/assets/js/jquery.nice-select.js"></script>
    <script src="https://unifato.com/advisr/assets/js/jquery.lineProgressbar.js"></script>
    <script src="https://unifato.com/advisr/assets/js/mobile-meanmenu.js"></script>
    <script src="https://unifato.com/advisr/assets/js/modal-video.min.js"></script>
    <script src="https://unifato.com/advisr/assets/js/main.js"></script>
</body>

</html>