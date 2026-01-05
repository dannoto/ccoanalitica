<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Talking Minds – Psychotherapist Site Template</title>
    <link rel="shortcut icon" href="<?= base_url() ?>dist/modelos/quatro/assets/images/site_logo/favourite_icon.svg">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/cursor.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/odometer.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/modelos/quatro/assets/css/style.min.css">
</head>

<body>
    <div class="page_wrapper">
        <div class="backtotop"><a href="#" class="scroll"><i class="fa-solid fa-arrow-up"></i></a></div>
        <header class="site_header">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-lg-3 col-5">
                        <div class="site_logo">
                            <a class="site_link" href="<?= $d['header']['home_link'] ?>">
                                <img src="<?= $d['header']['logo'] ?>" alt="<?= $d['header']['logo_alt'] ?>">
                            </a>
                        </div>
                    </div>

                    <!-- Menu Principal -->
                    <div class="col-lg-6 col-2">
                        <nav class="main_menu navbar navbar-expand-lg">
                            <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                                <ul class="main_menu_list unordered_list">
                                    <?php foreach ($d['header']['menu'] as $menu_item): ?>
                                        <?php if (!empty($menu_item['submenu'])): ?>
                                            <li class="dropdown">
                                                <a class="nav-link" href="#" id="<?= $menu_item['id'] ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <?= $menu_item['titulo'] ?>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="<?= $menu_item['id'] ?>">
                                                    <?php foreach ($menu_item['submenu'] as $sub_item): ?>
                                                        <?php if (!empty($sub_item['submenu'])): ?>
                                                            <li class="dropdown">
                                                                <a class="nav-link" href="#" id="<?= $sub_item['id'] ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <?= $sub_item['titulo'] ?>
                                                                </a>
                                                                <ul class="dropdown-menu" aria-labelledby="<?= $sub_item['id'] ?>">
                                                                    <?php foreach ($sub_item['submenu'] as $nested_item): ?>
                                                                        <li><a href="<?= $nested_item['link'] ?>"><?= $nested_item['titulo'] ?></a></li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </li>
                                                        <?php else: ?>
                                                            <li><a href="<?= $sub_item['link'] ?>"><?= $sub_item['titulo'] ?></a></li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>
                                        <?php else: ?>
                                            <li class="<?= $menu_item['active'] ? 'active' : '' ?>"><a class="nav-link" href="<?= $menu_item['link'] ?>"><?= $menu_item['titulo'] ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Botões do Header -->
                    <div class="col-lg-3 col-5">
                        <ul class="header_btns_group unordered_list justify-content-end">
                            <li>
                                <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="far fa-bars"></i>
                                </button>
                            </li>
                            <li>
                                <a class="btn_hotline" href="tel:<?= $d['header']['telefone'] ?>">
                                    <span class="btn_icon"><i class="fa-solid fa-phone"></i></span>
                                    <span class="btn_text"><?= $d['header']['telefone_formatado'] ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main class="page_content">

            <section class="hero_section decoration_wrapper">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero_content_wrap">
                                <h1 class="heading_text"><?= $d['hero']['titulo'] ?></h1>
                                <p class="heading_description"><?= $d['hero']['descricao'] ?></p>

                                <ul class="btns_group unordered_list">
                                    <?php foreach ($d['hero']['botoes'] as $btn): ?>
                                        <li>
                                            <a class="btn <?= $btn['classe'] ?>" href="<?= $btn['link'] ?>">
                                                <span class="btn_text" data-text="<?= $btn['titulo'] ?>"><?= $btn['titulo'] ?></span>
                                                <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                                <ul class="hero_section_counter unordered_list">
                                    <?php foreach ($d['hero']['contadores'] as $contador): ?>
                                        <li>
                                            <div class="counter_item">
                                                <div class="counter_value mb-0">
                                                    <span class="odometer" data-count="<?= $contador['numero'] ?>">0</span>
                                                    <span><?= $contador['simbolo'] ?></span>
                                                </div>
                                                <hr>
                                                <p class="counter_description mb-0"><?= $contador['descricao'] ?></p>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero_image_wrap">
                                <img src="<?= $d['hero']['imagem'] ?>" alt="<?= $d['hero']['imagem_alt'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="decoration_item shape_blur_shadow"></div>
                <div class="decoration_item shape_leaf">
                    <img src="<?= $d['hero']['decoracao'] ?>" alt="Decoração">
                </div>
            </section>

            <section class="service_section section_space_lg bg_primary_light">
                <div class="container">
                    <div class="section_heading text-center">
                        <h2 class="section_heading_text"><?= $d['servicos']['titulo'] ?></h2>
                        <p class="section_heading_description mb-0"><?= $d['servicos']['descricao'] ?></p>
                    </div>
                    <div class="row justify-content-center">
                        <?php foreach ($d['servicos']['items'] as $item): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="service_item">
                                    <div class="item_icon">
                                        <img src="<?= $item['imagem'] ?>" alt="<?= $item['titulo'] ?>">
                                    </div>
                                    <div class="item_contact">
                                        <h3 class="item_title"><?= $item['titulo'] ?></h3>
                                        <p><?= $item['descricao'] ?></p>
                                        <a class="btn-link" href="<?= $item['link'] ?>">
                                            <span class="btn_text">Mais Informações</span>
                                            <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="btn_wrap pb-0 text-center">
                        <a class="btn btn-primary" href="<?= $d['servicos']['link_todos'] ?>">
                            <span class="btn_text" data-text="<?= $d['servicos']['botao_todos'] ?>"><?= $d['servicos']['botao_todos'] ?></span>
                            <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="about_section section_space_lg">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 order-lg-last">
                            <div class="image_widget">
                                <img src="<?= $d['sobre']['imagem_principal'] ?>" alt="<?= $d['sobre']['titulo'] ?>">
                                <div class="image_shape bg_primary_light"></div>
                                <?php if (!empty($d['sobre']['video'])): ?>
                                    <div class="about_video_icon">
                                        <a class="video_play_btn popup_video" href="<?= $d['sobre']['video'] ?>">
                                            <i class="fa-duotone fa-play"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about_content">
                                <div class="section_heading mb-4">
                                    <h2 class="section_heading_text"><?= $d['sobre']['titulo'] ?></h2>
                                    <p class="section_heading_description mb-0"><?= $d['sobre']['descricao'] ?></p>
                                </div>
                                <div class="row">
                                    <?php foreach ($d['sobre']['listas'] as $lista): ?>
                                        <div class="col-md-5 col-sm-6">
                                            <ul class="info_list unordered_list_block">
                                                <?php foreach ($lista as $item): ?>
                                                    <li>
                                                        <span class="info_icon"><i class="fa-light fa-circle-check"></i></span>
                                                        <span class="info_text"><?= $item ?></span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="btn_wrap pb-0">
                                    <a class="btn btn-primary" href="<?= $d['sobre']['botao']['link'] ?>">
                                        <span class="btn_text" data-text="<?= $d['sobre']['botao']['titulo'] ?>"><?= $d['sobre']['botao']['titulo'] ?></span>
                                        <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="pricing_section section_space_lg bg_primary_light decoration_wrapper">
                <div class="container">
                    <div class="section_heading text-center">
                        <h2 class="section_heading_text"><?= $d['planos']['titulo'] ?></h2>
                        <p class="section_heading_description mb-0"><?= $d['planos']['descricao'] ?></p>
                    </div>

                    <div class="pricing_toggle_btn_wrap">
                        <button class="pricing_toggle_btn" type="button">
                            <span><?= $d['planos']['toggle']['mensal'] ?></span>
                            <span><?= $d['planos']['toggle']['anual'] ?> <mark><?= $d['planos']['toggle']['desconto'] ?></mark></span>
                        </button>
                    </div>

                    <div class="row justify-content-center">
                        <?php foreach ($d['planos']['items'] as $plano): ?>
                            <div class="col-lg-4">
                                <div class="pricing_item">
                                    <?php if (!empty($plano['badge'])): ?>
                                        <h3 class="badge_popular"><?= $plano['badge'] ?></h3>
                                    <?php endif; ?>
                                    <h4 class="pricing_heading"><?= $plano['titulo'] ?></h4>
                                    <div class="pricing_price_value">
                                        <span class="pricing_monthly"><?= $plano['preco_mensal'] ?> <sub><?= $plano['sub_mensal'] ?></sub></span>
                                        <span class="pricing_annually"><?= $plano['preco_anual'] ?> <sub><?= $plano['sub_anual'] ?></sub></span>
                                    </div>
                                    <hr>
                                    <ul class="info_list unordered_list_block">
                                        <?php foreach ($plano['beneficios'] as $item): ?>
                                            <li><span class="info_icon"><i class="fa-light fa-circle-check"></i></span><span class="info_text"><?= $item ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="btn_wrap pb-0 text-center">
                                        <a class="btn <?= $plano['botao_classe'] ?>" href="<?= $plano['botao_link'] ?>">
                                            <span class="btn_text" data-text="<?= $plano['botao_texto'] ?>"><?= $plano['botao_texto'] ?></span>
                                            <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="decoration_item shape_leaf_1">
                    <img src="<?= $d['planos']['decoracao1'] ?>" alt="Decoração Leaf">
                </div>
                <div class="decoration_item shape_leaf_2">
                    <img src="<?= $d['planos']['decoracao2'] ?>" alt="Decoração Leaf">
                </div>
            </section>
            <section class="testimonial_section section_space_lg">
                <div class="container">
                    <div class="section_heading text-center">
                        <h2 class="section_heading_text"><?= $d['testemunhos']['titulo'] ?></h2>
                        <p class="section_heading_description mb-0"><?= $d['testemunhos']['descricao'] ?></p>
                    </div>

                    <div class="testimonial_carousel">
                        <div class="carousel_2col row" data-slick='{"arrows":false}'>
                            <?php foreach ($d['testemunhos']['items'] as $item): ?>
                                <div class="carousel_item col-">
                                    <div class="testimonial_item">
                                        <ul class="rating_star unordered_list">
                                            <?php for ($i = 0; $i < $item['avaliacao']; $i++): ?>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            <?php endfor; ?>
                                        </ul>
                                        <div class="author_box">
                                            <div class="author_box_image">
                                                <img src="<?= $item['imagem'] ?>" alt="<?= $item['nome'] ?>">
                                            </div>
                                            <div class="author_box_content">
                                                <h3 class="author_box_name"><?= $item['nome'] ?></h3>
                                                <span class="author_box_designation"><?= $item['profissao'] ?></span>
                                            </div>
                                        </div>
                                        <p class="mb-0"><?= $item['depoimento'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="consultation_section">
                <div class="container">
                    <div class="consultation_form bg_primary_light decoration_wrapper">
                        <div class="section_heading text-center">
                            <h2 class="section_heading_text mb-0"><?= $d['consulta']['titulo'] ?></h2>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_name"><?= $d['consulta']['form']['nome_label'] ?></label>
                                            <input id="input_name" class="form-control" type="text" name="name" placeholder="<?= $d['consulta']['form']['nome_placeholder'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_phone"><?= $d['consulta']['form']['telefone_label'] ?></label>
                                            <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="<?= $d['consulta']['form']['telefone_placeholder'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="select_therapy"><?= $d['consulta']['form']['sessao_label'] ?></label>
                                            <select id="select_therapy" class="form-select">
                                                <?php foreach ($d['consulta']['form']['sessao_options'] as $option): ?>
                                                    <option value="<?= $option ?>"><?= $option ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_calendar"><?= $d['consulta']['form']['data_label'] ?></label>
                                            <input id="input_calendar" class="form-control" type="date" name="date">
                                        </div>
                                    </div>
                                </div>

                                <div class="btn_wrap pb-0 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="btn_text"><?= $d['consulta']['form']['botao_texto'] ?></span>
                                        <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="decoration_item shape_leaf_1">
                            <img src="<?= $d['consulta']['decoracao1'] ?>" alt="Decoração Leaf">
                        </div>
                        <div class="decoration_item shape_leaf_2">
                            <img src="<?= $d['consulta']['decoracao2'] ?>" alt="Decoração Leaf">
                        </div>
                    </div>
                </div>
            </section>


            <section class="blog_section section_space_lg">
                <div class="container">
                    <div class="section_heading">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2 class="section_heading_text mb-0"><?= $d['blog']['titulo'] ?></h2>
                            </div>
                            <div class="col-md-6 d-none d-md-flex justify-content-end">
                                <a class="btn btn-primary" href="<?= $d['blog']['botao']['link'] ?>">
                                    <span class="btn_text" data-text="<?= $d['blog']['botao']['titulo'] ?>"><?= $d['blog']['botao']['titulo'] ?></span>
                                    <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php foreach ($d['blog']['posts'] as $post): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="blog_item">
                                    <div class="blog_image">
                                        <a class="blog_image_wrap" href="<?= $post['link'] ?>">
                                            <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?>">
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <ul class="post_category unordered_list">
                                            <?php foreach ($post['categorias'] as $cat): ?>
                                                <li><a href="<?= $cat['link'] ?>"><?= $cat['nome'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <ul class="post_meta unordered_list">
                                            <li><?= $post['data'] ?></li>
                                            <li><a href="#!"><?= $post['views'] ?> Visualizações</a></li>
                                            <li><a href="#!"><?= $post['comentarios'] ?> Comentários</a></li>
                                        </ul>
                                        <h3 class="item_title"><a href="<?= $post['link'] ?>"><?= $post['titulo'] ?></a></h3>
                                        <p><?= $post['descricao'] ?></p>
                                        <a class="btn-link" href="<?= $post['link'] ?>">
                                            <span class="btn_text"><?= $post['botao']['titulo'] ?></span>
                                            <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="btn_wrap pb-0 text-center d-md-none d-block">
                        <a class="btn btn-primary" href="<?= $d['blog']['botao']['link'] ?>">
                            <span class="btn_text"><?= $d['blog']['botao']['titulo'] ?></span>
                            <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="faq_section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="images_group_widget">
                                <ul class="unordered_list">
                                    <?php foreach ($d['faq']['imagens'] as $grupo): ?>
                                        <li>
                                            <?php foreach ($grupo as $img): ?>
                                                <img src="<?= $img ?>" alt="FAQ Imagem">
                                            <?php endforeach; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ps-lg-5">
                                <div class="section_heading mb-lg-4 mb-2">
                                    <h2 class="section_heading_text mb-0"><?= $d['faq']['titulo'] ?></h2>
                                </div>
                                <div class="accordion" id="faq_accordion">
                                    <?php foreach ($d['faq']['perguntas'] as $index => $pergunta): ?>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="heading_<?= $index ?>">
                                                <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse_<?= $index ?>"
                                                    aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="collapse_<?= $index ?>">
                                                    <?= $pergunta['pergunta'] ?>
                                                </button>
                                            </div>
                                            <div id="collapse_<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                                                aria-labelledby="heading_<?= $index ?>" data-bs-parent="#faq_accordion">
                                                <div class="accordion-body">
                                                    <p class="m-0"><?= $pergunta['resposta'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact_section section_space_lg">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-5">
                            <div class="section_heading mb-lg-5">
                                <h2 class="section_heading_text"><?= $d['contato']['titulo'] ?></h2>
                                <p class="section_heading_description mb-0"><?= $d['contato']['descricao'] ?></p>
                            </div>
                            <div class="row">
                                <?php foreach ($d['contato']['info'] as $col): ?>
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="contact_info_list unordered_list_block">
                                            <?php foreach ($col as $item): ?>
                                                <li>
                                                    <div class="item_icon"><i class="<?= $item['icone'] ?>"></i></div>
                                                    <div class="item_content">
                                                        <h3 class="item_title"><?= $item['titulo'] ?></h3>
                                                        <p class="item_info mb-0"><?= $item['valor'] ?></p>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="office_hour_list bg_primary_light mt-5">
                                <h3 class="area_title"><?= $d['contato']['horario']['titulo'] ?></h3>
                                <ul class="unordered_list_block">
                                    <?php foreach ($d['contato']['horario']['horas'] as $hora): ?>
                                        <li><span><?= $hora['dia'] ?>:</span> <span><?= $hora['hora'] ?></span></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gmap_canvas">
                                <iframe src="<?= $d['contato']['mapa'] ?>"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <footer class="site_footer bg_primary">
            <div class="container">
                <div class="site_footer_content">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="site_logo">
                                <a class="site_link" href="<?= $d['footer']['logo']['link'] ?>">
                                    <img src="<?= $d['footer']['logo']['imagem'] ?>" alt="<?= $d['footer']['logo']['alt'] ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="info_list unordered_list justify-content-center">
                                <?php foreach ($d['footer']['menu'] as $item): ?>
                                    <li>
                                        <a href="<?= $item['link'] ?>">
                                            <span class="info_icon"><i class="<?= $item['icone'] ?>"></i></span>
                                            <span class="info_text"><?= $item['titulo'] ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <ul class="social_links unordered_list justify-content-center justify-content-lg-end">
                                <?php foreach ($d['footer']['redes'] as $rede): ?>
                                    <li><a href="<?= $rede['link'] ?>"><i class="<?= $rede['icone'] ?>"></i></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright_widget text-center">
                    <p class="copyright_text m-0">
                        <?= $d['footer']['copyright']['texto'] ?>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/bootstrap-dropdown-ml-hack.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/cursor.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/slick.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/appear.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/odometer.min.js"></script>
    <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/main.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8CZB4YJTLB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-8CZB4YJTLB');
    </script>
</body>

</html>