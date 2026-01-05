<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="<?= $d['seo']['author'] ?>">
  <!-- Favicon Icon -->
  <link rel="icon" href="<?= base_url($d['seo']['favicon']) ?>">
  <!-- Site Title -->
  <title><?= $d['seo']['title'] ?></title>
  <meta name="description" content="<?= $d['seo']['description'] ?>">
  <meta name="keywords" content="<?= $d['seo']['keywords'] ?>">

  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/animate.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/slick.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/odometer.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/light-gallerr.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/jquery-timepicker.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/modelos/quatro/assets/css/style.css">

  <style>
    :root {
      --primary-color:
        <?= $d['schema']['primary-color'] ?>
      ;
      --secondary-color:
        <?= $d['schema']['secondary-color'] ?>
      ;
      --accent-color:
        <?= $d['schema']['accent-color'] ?>
      ;
      --heading-color:
        <?= $d['schema']['color'] ?>
      ;
      --body-color:
        <?= $d['schema']['color'] ?>
      ;
      --white-color: #ffffff;
      --gray-color: #f4f7fa;
    }

    .cs_accent_color {
      color: var(--accent-color) !important;
    }

    .cs_accent_bg {
      background-color: var(--accent-color) !important;
    }

    .cs_btn.cs_style_1.cs_accent_bg {
      background-color: var(--accent-color);
      border-color: var(--accent-color);
    }

    .cs_btn.cs_style_1.cs_accent_bg:hover {
      background-color: transparent;
      color: var(--accent-color);
    }
  </style>
</head>

<body>
  <!-- Start Preloader -->
  <!-- <div class="cs_preloader">
    <div class="cs_preloader_in">
      <div class="cs_wave_first">
        <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" /></svg>
      </div>
      <div class="cs_wave_second">
        <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" /></svg>
      </div>
    </div>
  </div> -->
  <!-- End Preloader -->

  <!-- Start Header Section -->
  <header class="cs_site_header cs_style_1 cs_sticky_header cs_heading_color cs_heading_font">
    <div class="cs_main_header">
      <div class="container-fluid">
        <div class="cs_main_header_in">
          <div class="cs_main_header_left">
            <a class="cs_site_branding" href="<?= base_url() ?>" style="max-width: 250px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; display: block;">
              <?php if (isset($d['header']['logo']) && $d['header']['logo']): ?>
                <img src="<?= base_url($d['header']['logo']) ?>" alt="Logo">
              <?php else: ?>
                <h3 style="font-size: 20px; margin: 0; line-height: 1.2;"><?= $d['seo']['title'] ?></h3>
              <?php endif; ?>
            </a>
          </div>
          <div class="cs_main_header_center">
            <div class="cs_nav cs_fs_18 cs_semibold">
              <div class="cs_nav_list_wrap">
                <ul class="cs_nav_list">
                  <?php foreach ($d['header']['navbar'] as $nav): ?>
                    <li><a href="<?= $nav['link'] ?>"><?= $nav['texto'] ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="cs_main_header_right">
            <?php if (isset($d['header']['botao'])): ?>
              <a href="<?= $d['header']['botao']['link'] ?>"
                class="cs_header_number cs_accent_color cs_fs_24 cs_bold"><?= $d['header']['botao']['texto'] ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Section -->
  
  <!-- Helper for mobile menu since main.js appends to .cs_nav but might need layout help -->
  <style>
    @media (max-width: 991px) {
        .cs_nav { display: block !important; }
        .cs_nav_list_wrap { display: none; }
        .cs_nav_list_wrap.cs_active { display: block; position: absolute; top: 100%; left: 0; width: 100%; background: #fff; padding: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .cs_menu_toggle { display: block; position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; }
        .cs_site_branding { max-width: 200px; }
    }
  </style>

  <section id="inicio" class="cs_hero cs_style_1 cs_type_5 cs_bg_filed position-relative"
    data-src="<?= base_url($d['hero']['background'] ?? 'dist/modelos/quatro/assets/img/hero_bg_3.png') ?>">
    <div class="container">
      <div class="cs_hero_content_wrapper">
        <div class="cs_hero_thumbnail">
          <img src="<?= base_url($d['hero']['imagem']) ?>" alt="Hero Image">
        </div>
        <div class="cs_hero_content wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <h3 class="cs_hero_title_mini cs_fs_18 cs_accent_color cs_semibold"><?= $d['hero']['top'] ?></h3>
          <h1 class="cs_hero_title cs_fs_70"><?= $d['hero']['title'] ?></h1>
          <p class="cs_hero_subtitle cs_fs_20 cs_medium cs_heading_color"><?= $d['hero']['description'] ?></p>
          <div class="cs_hero_btn_group">
            <a href="<?= $d['hero']['botao']['link'] ?>"
              class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
              <span class="cs_btn_text"><?= $d['hero']['botao']['texto'] ?></span>
            </a>
            <?php if (isset($d['video']) && $d['video']['link']): ?>
              <a href="<?= $d['video']['link'] ?>" class="cs_player_btn cs_style_1 cs_type_1 cs_video_open">
                <span class="cs_player_btn_icon cs_center"><i class="fa-solid fa-play"></i></span>
                <span class="cs_play_btn_text cs_fs_18 cs_semibold cs_accent_color">Ver Vídeo</span>
              </a>
            <?php endif; ?>
          </div>
          <div class="cs_height_66 cs_height_lg_40"></div>
          <div class="cs_counter_1_wrap">
            <?php if (isset($d['contadores'])):
              foreach (array_slice($d['contadores'], 0, 2) as $cont): ?>
                <div class="cs_counter cs_style_1">
                  <h2 class="cs_counter_number cs_fs_48 cs_accent_color mb-0"><?= $cont['numero'] ?>+</h2>
                  <p class=" cs_fs_20 cs_medium mb-0"><?= $cont['texto'] ?></p>
                </div>
              <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cs_accent_bg">
    <div class="cs_height_60 cs_height_lg_60"></div>
    <div class="container-fluid">
      <div class="cs_iconbox_grid cs_type_3">
        <?php if (isset($d['features']['items'])):
          foreach ($d['features']['items'] as $item): ?>
            <div class="cs_iconbox cs_style_6">
              <div class="cs_iconbox_icon">
                <img src="<?= base_url($item['icone']) ?>" alt="Icon">
              </div>
              <h3 class="cs_iconbox_title cs_fs_20 cs_medium cs_white_color mb-0"><?= $item['titulo'] ?></h3>
            </div>
          <?php endforeach; endif; ?>
      </div>
    </div>
    <div class="cs_height_60 cs_height_lg_60"></div>
  </section>

  <section id="sobre" class="cs_about cs_style_1 cs_type_1 cs_hide_before_after position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="row align-items-center cs_gap_y_40">
        <div class="col-lg-6">
          <div class="cs_about_thumbnail">
            <div class="cs_about_thumbnail_1 cs_hide_before_after">
              <img src="<?= base_url($d['sobre']['imagens'][0]) ?>" alt="About Image">
              <div class="cs_about_thumbnailnail_shape_1"></div>
            </div>
            <div class="cs_about_thumbnail_2">
              <img src="<?= base_url($d['sobre']['imagens'][1] ?? $d['sobre']['imagens'][0]) ?>" alt="About Image 2">
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <div class="cs_about_content">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">
                <?= $d['sobre']['subtitulo'] ?>
              </p>
              <h2 class="cs_section_title cs_fs_48 mb-0"><?= $d['sobre']['titulo'] ?></h2>
            </div>
            <p class="cs_about_text"><?= $d['sobre']['description'] ?></p>
            <ul class="cs_list cs_style_3 cs_fs_18 cs_semibold cs_heading_color cs_mp0">
              <?php foreach ($d['sobre']['solucoes'] as $solucao): ?>
                <li><i class="fa-solid fa-check"></i><span><?= $solucao ?></span></li>
              <?php endforeach; ?>
            </ul>
            <a href="<?= $d['header']['botao']['link'] ?>"
              class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100"><span
                class="cs_btn_text"><?= $d['header']['botao']['texto'] ?></span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>

  <section id="servicos" class="cs_service_area cs_type_1">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">
            <?= $d['servicos']['subtitulo'] ?>
          </p>
          <h2 class="cs_section_title cs_fs_48 mb-0"><?= $d['servicos']['titulo'] ?></h2>
        </div>
        <div class="cs_section_heading_right cs_heading_color text-end"><?= $d['servicos']['descricao'] ?></div>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="row cs_row_gap_30 cs_gap_y_30">
        <?php foreach ($d['servicos']['items'] as $index => $item): ?>
          <div class="col-lg-4">
            <div class="cs_card cs_style_4 cs_radius_8">
              <div class="cs_card_header">
                <h3 class="cs_card_title cs_fs_24 mb-0"><?= $item['titulo'] ?></h3>
                <div class="cs_card_index cs_fs_36"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></div>
              </div>
              <div class="cs_card_thumbnail">
                <img src="<?= base_url($item['imagem']) ?>" alt="Service Image">
              </div>
              <p class="cs_card_subtitle cs_heading_color"><?= $item['descricao'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>


  <section class="position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_text_center wow fadeInUp" data-wow-duration="0.9s"
        data-wow-delay="0.25s">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">
          <?= $d['porque']['subtitulo'] ?>
        </p>
        <h2 class="cs_section_title cs_fs_48 mb-0"><?= $d['porque']['titulo'] ?></h2>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="row cs_row_gap_30 cs_gap_y_30">
        <?php foreach ($d['porque']['items'] as $index => $item): ?>
          <div class="col-lg-4">
            <div class="cs_card cs_style_5">
              <div class="cs_card_thumbnail cs_center cs_radius_50">
                <h3 class="cs_fs_32 cs_accent_color"><?= $index + 1 ?></h3>
              </div>
              <div class="cs_card_info">
                <h3 class="cs_card_title cs_fs_32"><?= $item['titulo'] ?></h3>
                <p class="cs_card_subtitle cs_heading_color mb-0"><?= $item['descricao'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>

  <div class="cs_video_section cs_style_3 cs_bg_filed" data-src="<?= base_url($d['video']['imagem']) ?>">
    <a href="<?= $d['video']['link'] ?>" class="cs_player_btn cs_style_2 cs_center cs_video_open">
      <span></span>
    </a>
  </div>

  <section id="contato" class="cs_appointment cs_style_1">
    <div class="container-fluid">
      <div class="cs_appointment_form_wrapper cs_type_2 cs_radius_8">
        <div class="cs_appointment_form cs_radius_8">
          <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_left">
              <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">
                <?= $d['contato']['subtitulo'] ?>
              </p>
              <h2 class="cs_section_title cs_fs_36 mb-0"><?= $d['contato']['titulo'] ?></h2>
            </div>
            <div class="cs_section_heading_right text-end"><?= $d['contato']['descricao'] ?></div>
          </div>
          <div class="cs_height_50 cs_height_lg_40"></div>
          <form class="row cs_row_gap_30 cs_gap_y_30" method="post" action="#">
            <div class="col-lg-6">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_8">
                <input type="text" name="name" class="cs_form_field cs_type_1" placeholder="Nome" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_8">
                <input type="email" name="email" class="cs_form_field cs_type_1" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_8">
                <input type="text" name="phone" class="cs_form_field cs_type_1" placeholder="Telefone" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_8">
                <input type="text" name="subject" class="cs_form_field cs_type_1" placeholder="Assunto">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_8">
                <textarea name="message" class="cs_form_field cs_type_1" placeholder="Sua Mensagem" required></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
                <span class="cs_btn_text">Enviar Mensagem</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section id="faq" class="position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_text_center wow fadeInUp" data-wow-duration="0.9s"
        data-wow-delay="0.25s">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">
          <?= $d['faq']['subtitulo'] ?>
        </p>
        <h2 class="cs_section_title cs_fs_48 mb-0"><?= $d['faq']['titulo'] ?></h2>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="row cs_row_gap_40">
        <div class="col-lg-12">
          <div class="">
            <?php foreach ($d['faq']['items'] as $index => $item): ?>
              <div class="cs_accordian cs_type_1 <?= $index == 0 ? 'active' : '' ?>">
                <div class="cs_accordian_head">
                  <h2 class="cs_accordian_title cs_fs_20 cs_semibold"><?= $item['pergunta'] ?></h2>
                  <span class="cs_accordian_toggle cs_center cs_radius_50"><i class="fa-solid fa-plus"></i></span>
                </div>
                <div class="cs_accordian_body cs_fs_18 cs_heading_color"
                  style="<?= $index == 0 ? '' : 'display:none;' ?>">
                  <p><?= $item['resposta'] ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>


  <div class="cs_accent_bg">
    <div class="cs_height_100 cs_height_lg_60"></div>
    <div class="container">
      <div class="row cs_row_gap_30 cs_gap_y_30">
        <?php foreach ($d['contadores'] as $cont): ?>
          <div class="col-lg-3 col-sm-6">
            <div class="cs_counter cs_style_2 cs_center">
              <div class="cs_heading_font cs_bold cs_counter_number cs_fs_48 mb-0"><span
                  data-count-to="<?= $cont['numero'] ?>" class="odometer"></span></div>
              <p class="cs_fs_24 cs_medium cs_white_color cs_heading_font mb-0">
                <?= $cont['texto'] ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="cs_height_100 cs_height_lg_60"></div>
  </div>

  <section id="depoimentos" class="cs_testimonial cs_style_1">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_text_center wow fadeInUp" data-wow-duration="0.9s"
        data-wow-delay="0.25s">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">
          <?= $d['depoimentos']['subtitulo'] ?? 'Depoimentos' ?>
        </p>
        <h2 class="cs_section_title cs_fs_48 mb-0">
          <?= $d['depoimentos']['titulo'] ?>
        </h2>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="row cs_gap_y_30 align-items-center">
        <div class="col-lg-6">
          <div class="cs_testimonial_left">
            <div class="cs_testimonial_thumbnail cs_type_1">
              <!-- Static image or dynamic if we want -->
              <img
                src="<?= base_url($d['depoimentos']['imagem_destaque'] ?? 'dist/modelos/quatro/assets/img/testimonial_thumbnail_1.jpeg') ?>"
                alt="Testimonial Image">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="cs_testimonial_content">
            <div class="cs_slider cs_style_1 cs_slider_gap_30 position-relative">
              <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1"
                data-md-slides="1" data-lg-slides="1" data-add-slides="1">
                <div class="cs_slider_wrapper">
                  <?php foreach ($d['depoimentos']['items'] as $item): ?>
                    <div class="cs_slide">
                      <div class="cs_testimonial cs_style_1">
                        <div class="cs_quote_icon">
                          <img src="<?= base_url() ?>dist/modelos/quatro/assets/img/icons/quote_icon.svg"
                            alt="Quote Icon">
                        </div>
                        <p class="cs_testimonial_subtitle cs_fs_32">
                          <?= $item['texto'] ?>
                        </p>
                        <div class="cs_avatar cs_style_1">
                          <div class="cs_rating_container">
                            <div class="cs_rating" data-rating="5">
                              <div class="cs_rating_percentage"></div>
                            </div>
                          </div>
                          <div class="cs_avatar_info">
                            <h3 class="cs_avatar_title cs_fs_24">
                              <?= $item['nome'] ?>
                            </h3>
                            <p class="cs_avatar_subtitle cs_fs_18 mb-0">
                              <?= $item['funcao'] ?? 'Cliente' ?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="cs_height_50 cs_height_lg_40"></div>
              <div class="cs_slider_arrows cs_style_1">
                <div class="cs_left_arrow cs_center cs_radius_6"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="cs_right_arrow cs_center cs_radius_6"><i class="fa-solid fa-chevron-right"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>

  <section id="equipe" class="cs_slider cs_style_1 cs_slider_gap_30 cs_accent_bg">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_white_color cs_heading_font">
          <?= $d['equipe']['subtitulo'] ?>
        </p>
        <h2 class="cs_section_title cs_fs_48 cs_white_color mb-0">
          <?= $d['equipe']['titulo'] ?>
        </h2>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="cs_full_screen_right cs_variable_width_wrap cs_ptb_12">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="700" data-center="0"
          data-variable-width="1" data-slides-per-view="1">
          <div class="cs_slider_wrapper">
            <?php foreach ($d['equipe']['items'] as $item): ?>
              <div class="cs_slide">
                <div class="cs_team cs_style_1">
                  <div class="cs_team_thumbnail cs_center">
                    <img src="<?= base_url($item['imagem']) ?>" alt="Team Thumbnail">
                  </div>
                  <div class="cs_team_bio cs_white_bg">
                    <h3 class="cs_team_title cs_fs_20 cs_medium cs_accent_color">
                      <?= $item['texto'] ?>
                    </h3>
                    <p class="cs_team_subtitle mb-0">
                      <?= $item['descripcao'] ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>

  <!-- Start Footer Section -->
  <footer class="cs_footer cs_style_1 cs_heading_bg">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container cs_white_color">
      <div class="cs_footer_row pt-0">
        <div class="cs_footer_col">
          <div class="cs_footer_widget">
            <div class="cs_footer_text_widget">
              <!-- <img src="assets/img/footer_logo.svg" alt="Logo"> -->
              <h3 class="cs_white_color"><?= $d['seo']['title'] ?></h3>
              <p><?= $d['footer']['description'] ?></p>
            </div>
            <div class="cs_social_btns cs_style_1">
              <?php foreach ($d['contato']['social'] as $key => $link): ?>
                <?php if ($link): ?>
                  <a href="<?= $link ?>" class="cs_center" target="_blank">
                    <i class="fa-brands fa-<?= $key ?>"></i>
                  </a>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="cs_footer_col">
          <div class="cs_footer_widget">
            <h2 class="cs_footer_widget_title cs_fs_32 cs_white_color cs_bold">Links</h2>
            <ul class="cs_footer_widget_menu">
              <?php foreach ($d['header']['navbar'] as $nav): ?>
                <li><a href="<?= $nav['link'] ?>"><?= $nav['texto'] ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="cs_footer_col">
          <div class="cs_footer_widget">
            <h2 class="cs_footer_widget_title cs_fs_32 cs_white_color cs_bold">Contato</h2>
            <ul class="cs_footer_widget_menu cs_address">
              <li><?= $d['contato']['endereco'] ?></li>
              <li class="cs_fs_32 cs_bold cs_phone_number">
                <div class="cs_height_20 cs_height_lg_20"></div>
                <a
                  href="tel:<?= preg_replace('/[^0-9]/', '', $d['contato']['telefone']) ?>"><?= $d['contato']['telefone'] ?></a>
                <br>
                <a href="mailto:<?= $d['contato']['email'] ?>" class="cs_fs_18"><?= $d['contato']['email'] ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_footer_bottom cs_white_color">
      <div class="container">
        <div class="cs_footer_bottom_in">
          <p class="cs_copyright mb-0"><?= $d['footer']['copyright'] ?></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Section -->

  <!-- Start Scroll Up Button -->
  <span class="cs_scrollup">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
    </svg>
  </span>
  <!-- End Scroll Up Button -->

  <!-- Script -->
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/jquery-3.7.1.min.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/wow.min.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/jquery.slick.min.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/odometer.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/light-gallery.min.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/jquery-ui.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/jquery-timepicker.min.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/select2.min.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/ripples.min.js"></script>
  <script src="<?= base_url() ?>dist/modelos/quatro/assets/js/main.js"></script>
  <script src="<?= base_url() ?>assets/js/model-loader.js"></script>
</body>

</html>