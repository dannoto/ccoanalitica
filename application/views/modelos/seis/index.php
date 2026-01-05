<!-- wellco -->
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Wellco UpSkill HTML Template | Homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Description website">
  <meta name="author" content="Maksym Blank">
  <meta name="keywords" content="website, with, meta, tags">
  <meta name="robots" content="noindex, follow">
  <meta name="revisit-after" content="5 month">
  <meta name="image" content="http://mywebsite.com/image.jpg">
  <meta name="og:title" content="Title website">
  <meta name="og:description" content="Description website">
  <meta name="og:image" content="http://mywebsite.com/image.jpg">
  <meta name="og:site_name" content="My Website">
  <meta name="og:type" content="website">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Title website">
  <meta name="twitter:description" content="Description website">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
  <!-- Css -->
  <link href="<?=base_url()?>dist/modelos/seis/assets/css/plugins/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>dist/modelos/seis/assets/css/plugins/slick.css" rel="stylesheet">
  <link href="<?=base_url()?>dist/modelos/seis/assets/css/plugins/magnific-popup.css" rel="stylesheet">
  <link href="<?=base_url()?>dist/modelos/seis/assets/css/plugins/animate.css" rel="stylesheet">
  <link href="<?=base_url()?>dist/modelos/seis/assets/fonts/flaticon/flaticon.css" rel="stylesheet">
  <link href="<?=base_url()?>dist/modelos/seis/assets/fonts/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url()?>dist/modelos/seis/assets/css/style.css" rel="stylesheet">
  <link href="<?=base_url()?>dist/modelos/seis/assets/css/responsive.css" rel="stylesheet">
</head>

<body>
  <!-- Preloader Start -->
  <div class="preloader">
    <img src="<?=base_url()?>dist/modelos/seis/ts/images/preloader.svg" alt="preloader">
  </div>
  <!-- Preloader End -->
  <!-- Mobile Menu Start -->
  <aside class="aside_bar aside_bar_left aside_mobile">

    <!-- Logo -->
    <a href="<?= $d['aside']['logo']['link']; ?>" class="logo">
      <img
        src="<?=base_url()?><?=  $d['aside']['logo']['imagem']; ?>"
        alt="<?= $d['aside']['logo']['alt']; ?>">
    </a>
    <!-- Logo -->

    <!-- Menu -->
    <nav>
      <ul class="main-menu">

        <?php foreach ($d['aside']['menu'] as $menu): ?>

          <?php if (isset($menu['submenu'])): ?>
            <li class="menu-item menu-item-has-children">
              <a href="#"><?= $menu['titulo']; ?></a>
              <ul class="sub-menu">

                <?php foreach ($menu['submenu'] as $submenu): ?>

                  <?php if (isset($submenu['submenu'])): ?>
                    <li class="menu-item menu-item-has-children">
                      <a href="#"><?= $submenu['titulo']; ?></a>
                      <ul class="sub-menu">
                        <?php foreach ($submenu['submenu'] as $nivel3): ?>
                          <li class="menu-item">
                            <a href="<?= $nivel3['link']; ?>">
                              <?= $nivel3['titulo']; ?>
                            </a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </li>
                  <?php else: ?>
                    <li class="menu-item">
                      <a href="<?= $submenu['link']; ?>">
                        <?= $submenu['titulo']; ?>
                      </a>
                    </li>
                  <?php endif; ?>

                <?php endforeach; ?>

              </ul>
            </li>
          <?php else: ?>
            <li class="menu-item">
              <a href="<?= $menu['link']; ?>">
                <?= $menu['titulo']; ?>
              </a>
            </li>
          <?php endif; ?>

        <?php endforeach; ?>

      </ul>
    </nav>
    <!-- Menu -->

  </aside>

  <div class="aside-overlay trigger-left"></div>

  <!-- Mobile Menu End -->
  <!-- Header Start -->
  <header class="header header-3">

    <!-- Topbar -->
    <div class="topbar bg-thm-color-two">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="left-side">
              <p><?= $d['header']['topbar']['mensagem']; ?></p>
              <div
                class="countdown-timer"
                data-countdown="<?= $d['header']['topbar']['countdown']; ?>">
                0
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <ul class="right-side">
              <li>
                <a href="<?= $d['header']['topbar']['telefone']['link']; ?>">
                  <i class="fal fa-phone"></i>
                  <?= $d['header']['topbar']['telefone']['numero']; ?>
                </a>
              </li>
              <li>
                <a href="<?= $d['header']['topbar']['email']['link']; ?>">
                  <i class="fal fa-envelope"></i>
                  <?= $d['header']['topbar']['email']['endereco']; ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar -->

    <!-- Navegação -->
    <div class="nav_sec">
      <div class="container">
        <div class="nav_warp">
          <nav>

            <!-- Logo -->
            <div class="logo">
              <a href="<?= $d['header']['logo']['link']; ?>">
                <img
                  src="<?=base_url()?><?=  $d['header']['logo']['imagem']; ?>"
                  alt="<?= $d['header']['logo']['alt']; ?>"
                  class="image-fit">
              </a>
            </div>
            <!-- Logo -->

            <!-- Menu -->
            <ul class="main-menu">

              <?php foreach ($d['header']['menu'] as $menu): ?>

                <?php if (isset($menu['submenu'])): ?>
                  <li class="menu-item menu-item-has-children">
                    <a href="#"><?= $menu['titulo']; ?></a>
                    <ul class="sub-menu">

                      <?php foreach ($menu['submenu'] as $submenu): ?>

                        <?php if (isset($submenu['submenu'])): ?>
                          <li class="menu-item menu-item-has-children">
                            <a href="#"><?= $submenu['titulo']; ?></a>
                            <ul class="sub-menu">
                              <?php foreach ($submenu['submenu'] as $nivel3): ?>
                                <li class="menu-item">
                                  <a href="<?= $nivel3['link']; ?>">
                                    <?= $nivel3['titulo']; ?>
                                  </a>
                                </li>
                              <?php endforeach; ?>
                            </ul>
                          </li>
                        <?php else: ?>
                          <li class="menu-item">
                            <a href="<?= $submenu['link']; ?>">
                              <?= $submenu['titulo']; ?>
                            </a>
                          </li>
                        <?php endif; ?>

                      <?php endforeach; ?>

                    </ul>
                  </li>
                <?php else: ?>
                  <li class="menu-item">
                    <a href="<?= $menu['link']; ?>">
                      <?= $menu['titulo']; ?>
                    </a>
                  </li>
                <?php endif; ?>

              <?php endforeach; ?>

              <li class="menu-item search_trigger">
                <a href="#"><i class="fas fa-search"></i></a>
              </li>

            </ul>
            <!-- Menu -->

            <!-- Ações -->
            <div class="head_actions">
              <a
                href="<?= $d['header']['acoes']['botao']['link']; ?>"
                class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">
                <?= $d['header']['acoes']['botao']['titulo']; ?>
                <i class="fal fa-chevron-right ml-2"></i>
              </a>

              <button type="button" class="head_trigger mobile_trigger">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
            <!-- Ações -->

          </nav>
        </div>
      </div>
    </div>
    <!-- Navegação -->

    <!-- Busca -->
    <div class="search-form-wrapper">
      <div class="close-search-trigger close_trigger">
        <span></span>
        <span></span>
      </div>
      <form class="search-form">
        <input
          type="text"
          placeholder="<?= $d['header']['search']['placeholder']; ?>"
          required>
        <button type="submit" class="search-btn">
          <i class="fal fa-search m-0"></i>
        </button>
      </form>
    </div>
    <!-- Busca -->

  </header>

  <!-- Header End -->
  <!-- Banner Start -->
  <div
    class="bg-banner relative z-1"
    style="background-image: url('<?=base_url()?><?=  $d['banner']['background']; ?>');">
    <div class="container">
      <div class="row">
        <div class="col-xl-7 col-lg-10 relative z-1">

          <div class="banner_text">
            <h1
              class="title thm-color-white wow fadeInDown"
              data-wow-delay=".30ms">
              <?= $d['banner']['titulo']; ?>
            </h1>

            <form class="wow fadeInUp" data-wow-delay=".40ms">
              <div class="input-group">
                <span class="input-group-preappend">
                  <i class="fal fa-search"></i>
                </span>

                <input
                  type="text"
                  class="form-control"
                  placeholder="<?= $d['banner']['formulario']['placeholder_busca']; ?>"
                  autocomplete="off">

                <div class="input-group-append">
                  <button
                    type="submit"
                    class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle ml-0">
                    <?= $d['banner']['formulario']['botao']['titulo']; ?>
                    <i class="fal fa-chevron-right ml-2"></i>
                  </button>
                </div>
              </div>

              <?php foreach ($d['banner']['formulario']['opcoes'] as $opcao): ?>
                <div class="form-check-inline <?= isset($opcao['desabilitado']) ? 'disabled' : ''; ?>">
                  <label class="form-check-label">
                    <input
                      type="radio"
                      class="form-check-input"
                      name="tipo_atendimento"
                      value="<?= $opcao['valor']; ?>"
                      <?= $opcao['ativo'] ? 'checked' : ''; ?>
                      <?= isset($opcao['desabilitado']) ? 'disabled' : ''; ?>>
                    <?= $opcao['titulo']; ?>
                  </label>
                </div>
              <?php endforeach; ?>

            </form>
          </div>

          <?php foreach ($d['banner']['elementos'] as $elemento): ?>
            <img
              src="<?=base_url()?><?=  $elemento['imagem']; ?>"
              alt="Elemento decorativo"
              class="<?= $elemento['classe']; ?>">
          <?php endforeach; ?>

        </div>
      </div>

      <div class="think_box wow fadeInDown" data-wow-delay=".50ms">
        <img
          src="<?=base_url()?><?=  $d['banner']['destaque']['imagem']; ?>"
          alt="Destaque"
          class="think_element">
        <div class="text_box">
          <p class="top mb-0">
            <span><?= $d['banner']['destaque']['percentual']; ?></span>%
            <?= $d['banner']['destaque']['titulo']; ?>
          </p>
          <p class="bottom mb-0">
            <?= $d['banner']['destaque']['descricao']; ?>
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- Banner End -->
  <!-- About Us Start -->
  <section
    class="section section-bg about_bg about style_2"
    style="background-image: url('<?=base_url()?><?=  $d['sobre']['background']; ?>');">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Imagens -->
        <div class="col-lg-6">
          <div class="image_boxes relative z-1 mb-md-80 h-100">

            <img
              src="<?=base_url()?><?=  $d['sobre']['imagens']['secundaria']; ?>"
              class="small_img wow fadeInUp"
              alt="Atendimento psicológico">

            <img
              src="<?=base_url()?><?=  $d['sobre']['imagens']['principal']; ?>"
              class="big_img wow fadeInDown"
              alt="Clínica de Psicologia">

            <?php foreach ($d['sobre']['elementos'] as $elemento): ?>
              <img
                src="<?=base_url()?><?=  $elemento['imagem']; ?>"
                class="<?= $elemento['classe']; ?>"
                alt="Elemento decorativo">
            <?php endforeach; ?>

          </div>
        </div>
        <!-- Imagens -->

        <!-- Conteúdo -->
        <div class="col-lg-4">
          <div class="section-title left-align wow fadeInDown">
            <p class="subtitle">
              <i class="fal fa-book"></i>
              <?= $d['sobre']['subtitulo']; ?>
            </p>
            <h3 class="title">
              <?= $d['sobre']['titulo']; ?>
            </h3>
            <p class="mb-0">
              <?= $d['sobre']['descricao']; ?>
            </p>
          </div>

          <ul class="about_list style_2 mb-xl-30 wow fadeInUp">
            <?php foreach ($d['sobre']['lista'] as $item): ?>
              <li><?= $item; ?></li>
            <?php endforeach; ?>
          </ul>

          <a
            href="<?= $d['sobre']['botao']['link']; ?>"
            class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle wow fadeInDown">
            <?= $d['sobre']['botao']['titulo']; ?>
            <i class="fal fa-chevron-right ml-2"></i>
          </a>
        </div>
        <!-- Conteúdo -->

      </div>
    </div>
  </section>

  <!-- About Us End -->
  <!-- Features Start -->
  <section class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title wow fadeInUp">
            <p class="subtitle">
              <i class="fal fa-brain"></i>
              <?= $d['servicos']['subtitulo'] ?>
            </p>
            <h3 class="title"><?= $d['servicos']['titulo'] ?></h3>
          </div>
        </div>

        <?php foreach ($d['servicos']['items'] as $item): ?>
          <div class="col-lg-3 col-md-6">
            <div class="features_box style_2 wow fadeInUp" data-wow-delay=".20ms">
              <div class="icon">
                <img src="<?= $item['imagem'] ?>" alt="icon">
              </div>
              <h5><?= $item['titulo'] ?></h5>
              <p><?= $item['descricao'] ?? 'Oferecemos atendimento psicológico especializado para seu bem-estar.' ?></p>
              <a href="<?= $item['link'] ?>" class="thm-btn bg-thm-color-two-light thm-color-two btn-rectangle btn-small mt-2">
                <i class="fal fa-chevron-right font-weight-bold"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- Features End -->
  <!-- Skills Start -->
  <section class="skills-sec relative z-1">
    <div class="container-fluid p-0 h-100">
      <div class="row no-gutters h-100">
        <div class="col-lg-6">
          <div class="section-bg bg-thm-color-one h-100" style="background-image: url('<?= $d['skills']['background'] ?>');"></div>
        </div>
        <div class="col-lg-6">
          <img src="<?= $d['skills']['imagem_principal'] ?>" class="image-fit" alt="img">
        </div>
      </div>
    </div>

    <div class="transform-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title left-align white wow fadeInUp">
              <p class="subtitle">
                <i class="fal fa-brain"></i>
                <?= $d['skills']['subtitulo'] ?>
              </p>
              <h3 class="title"><?= $d['skills']['titulo'] ?></h3>
              <p class="thm-color-white"><?= $d['skills']['descricao'] ?></p>
            </div>
          </div>

          <div class="col-xl-6 col-lg-8">
            <div class="row justify-content-center">
              <?php foreach ($d['skills']['items'] as $item): ?>
                <div class="col-md-4 col-sm-6">
                  <div class="progress_box grid wow fadeInDown" data-wow-delay="<?= $item['delay'] ?>">
                    <div class="circle_bar" data-percent="<?= $item['percent'] ?>" data-track-color="#ecf2ff" data-bar-color="<?= $item['cor'] ?>" data-size="80">
                      <div class="counter transform-center text-center">
                        <b data-from="0" data-to="<?= $item['percent'] ?>">0</b>
                      </div>
                    </div>
                    <div class="text">
                      <h5 class="mb-0"><?= $item['titulo'] ?></h5>
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

  <!-- Skills End -->
  <!-- Pricing Start -->
  <section class="pricing_sec section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title wow fadeInDown">
            <p class="subtitle">
              <i class="fal fa-brain"></i>
              <?= $d['planos']['subtitulo'] ?>
            </p>
            <h3 class="title"><?= $d['planos']['titulo'] ?></h3>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <ul class="nav nav-tabs style_1 border-0 justify-content-center justify-content-lg-end wow fadeInRight">
            <?php foreach ($d['planos']['tabs'] as $tab): ?>
              <li class="nav-item">
                <a href="#<?= $tab['id'] ?>" class="nav-link mb-0 border-0 thm-btn bg-thm-color-one btn-rectangle <?= $tab['active'] ? 'active' : '' ?>" data-toggle="tab">
                  <?= $tab['titulo'] ?> <i class="fal fa-chevron-right ml-2"></i>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>

          <div class="tab-content">
            <?php foreach ($d['planos']['tabs'] as $tab): ?>
              <div class="tab-pane fade <?= $tab['active'] ? 'show active' : '' ?>" id="<?= $tab['id'] ?>">
                <div class="row no-gutters justify-content-center">
                  <?php foreach ($tab['items'] as $item): ?>
                    <div class="col-lg-4 col-md-6">
                      <div class="plan_box <?= $item['active'] ? 'active' : '' ?> wow fadeInDown">
                        <h4 class="plan_title"><?= $item['titulo'] ?></h4>
                        <p class="plan_subtext"><?= $item['descricao'] ?></p>
                        <h2 class="plan_price"><?= $item['preco'] ?></h2>
                        <ul class="about_list style_2 mb-xl-30">
                          <?php foreach ($item['beneficios'] as $beneficio): ?>
                            <li><?= $beneficio ?></li>
                          <?php endforeach; ?>
                        </ul>
                        <a href="<?= $item['link'] ?>" class="thm-btn bg-thm-color-two-light thm-color-one btn-rectangle">
                          <?= $item['botao_titulo'] ?> <i class="fal fa-chevron-right ml-2"></i>
                        </a>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Pricing End -->
  <!-- Video Start -->
  <div class="section pt-0 video_box_elements">
    <div class="container relative z-1">
      <div class="row">
        <div class="col-12">
          <div class="video_warp style_2 relative z-1 wow fadeInUp">
            <img src="<?= $d['video']['imagem_principal'] ?>" alt="img" class="image-fit">
            <a href="<?= $d['video']['link_video'] ?>" class="popup-youtube video_btn transform-center justify-content-center d-flex style_2 big">
              <i class="fas fa-play video_icon bg-thm-color-three pulse-animated"></i>
            </a>
          </div>
        </div>
      </div>

      <?php foreach ($d['video']['elementos'] as $elem): ?>
        <img src="<?= $elem['imagem'] ?>" alt="element" class="<?= $elem['classe'] ?>">
      <?php endforeach; ?>

      <?php foreach ($d['video']['setas'] as $seta): ?>
        <div class="arrows to_up <?= $seta['classe'] ?> slideTop">
          <?php for ($i = 0; $i < $seta['quantidade']; $i++): ?>
            <div class="arrow"></div>
          <?php endfor; ?>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <!-- Video End -->
  <!-- Plane Start -->
  <div class="bg-thm-color-two plane_box relative z-1">
    <div class="container relative z-1">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-11 relative z-1">
          <img src="<?= $d['plane']['elementos'][0]['imagem'] ?>" class="<?= $d['plane']['elementos'][0]['classe'] ?>" alt="Element">
          <h2 class="thm-color-white"><?= $d['plane']['titulo'] ?></h2>
        </div>
      </div>
      <img src="<?= $d['plane']['elementos'][1]['imagem'] ?>" class="<?= $d['plane']['elementos'][1]['classe'] ?>" alt="Element">
    </div>
  </div>
  <!-- Plane End -->

  <!-- Portfolio Start -->
  <section class="section-padding">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <div class="section-title left-align wow fadeInLeft">
            <p class="subtitle">
              <i class="fal fa-book"></i>
              <?= $d['portfolio']['subtitulo'] ?>
            </p>
            <h3 class="title"><?= $d['portfolio']['titulo'] ?></h3>
          </div>
        </div>
        <div class="col-lg-5 text-left text-lg-right wow fadeInRight">
          <a href="<?= $d['portfolio']['botao']['link'] ?>" class="thm-btn bg-thm-color-white thm-color-one btn-border btn-rectangle mb-xl-60">
            <?= $d['portfolio']['botao']['titulo'] ?>
            <i class="fal fa-chevron-right ml-2"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <?php foreach ($d['portfolio']['items'] as $item): ?>
          <div class="col-lg-6">
            <div class="portfolio_box wow <?= $item['animacao'] ?>" data-wow-delay="<?= $item['delay'] ?>">
              <div class="portfolio_img">
                <img src="<?= $item['imagem'] ?>" class="image-fit" alt="img">
              </div>
              <div class="portfolio_caption">
                <div class="text_box">
                  <h4 class="title mb-0">
                    <a href="<?= $item['link'] ?>"><?= $item['titulo'] ?></a>
                  </h4>
                  <p><?= $item['subtitulo'] ?></p>
                </div>
                <div class="btn_box mb-xl-30">
                  <a href="<?= $item['link'] ?>" class="thm-btn bg-thm-color-two-light thm-color-two btn-rectangle btn-small">
                    <i class="fal fa-chevron-right font-weight-bold"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- Portfolio End -->

  <!-- Testimonials Start -->
  <section class="section section-bg" style="background-image: url(<?= $d['testemunhos']['bg'] ?>);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title wow fadeInUp">
            <p class="subtitle">
              <i class="fal fa-book"></i>
              <?= $d['testemunhos']['subtitulo'] ?>
            </p>
            <h3 class="title"><?= $d['testemunhos']['titulo'] ?></h3>
          </div>
        </div>
      </div>
      <div class="testimonial_slider_main mb-xl-30 justify-content-center wow fadeInDown">
        <?php foreach ($d['testemunhos']['items'] as $item): ?>
          <div class="slide-item row">
            <div class="testimonial_item style_3 col-lg-7">
              <p class="comment"><?= $item['comentario'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="row justify-content-center">
        <div class="testimonial_slider_nav col-lg-7">
          <?php foreach ($d['testemunhos']['autores'] as $autor): ?>
            <div class="slide-item">
              <div class="testimonial_item_img">
                <img src="<?= $autor['imagem'] ?>" class="image-fit" alt="img">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials End -->



  <!-- CTA Start -->
  <div class="cta_box style_2">
    <div class="container relative z-2">
      <div class="bg-thm-color-two cta_box_inner z-2 mb-negative">
        <img src="<?= $d['cta']['elementos'][0]['imagem'] ?>" alt="shape" class="<?= $d['cta']['elementos'][0]['classe'] ?>">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-6">
            <div class="text_block wow fadeInLeft">
              <div class="section-title left-align white">
                <p class="subtitle">
                  <i class="fal fa-book"></i>
                  <?= $d['cta']['subtitulo'] ?>
                </p>
                <h3 class="title"><?= $d['cta']['titulo'] ?></h3>
                <a href="<?= $d['cta']['botao']['link'] ?>" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">
                  <?= $d['cta']['botao']['titulo'] ?>
                  <i class="fal fa-chevron-right ml-2"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="image_box relative z-1 wow fadeInRight">
              <img src="<?= $d['cta']['elementos'][1]['imagem'] ?>" alt="shape" class="<?= $d['cta']['elementos'][1]['classe'] ?>">
              <img src="<?= $d['cta']['imagem_principal'] ?>" alt="img" class="image-fit">
              <div class="arrows slideRight">
                <?php for ($i = 0; $i < 5; $i++): ?>
                  <div class="arrow"></div>
                <?php endfor; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="arrows to_up slideTop">
        <?php for ($i = 0; $i < 5; $i++): ?>
          <div class="arrow"></div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
  <!-- CTA End -->

  <!-- Footer Start -->
  <footer class="footer bg-thm-color-one style_2 style_3 z-1" style="background-image:url(<?= $d['footer']['bg'] ?>);">
    <div class="container relative z-1">
      <div class="footer_top section-padding">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="ft_widget ft_about wow fadeInDown">
              <a href="<?= $d['footer']['logo']['link'] ?>" class="logo">
                <img src="<?= $d['footer']['logo']['imagem'] ?>" alt="logo" class="image-fit">
              </a>
              <ul class="info">
                <li><a href="#"><?= $d['footer']['contato']['endereco'] ?></a></li>
                <li><a href="tel:<?= $d['footer']['contato']['telefone'] ?>"><?= $d['footer']['contato']['telefone_formatado'] ?></a></li>
                <li><a href="mailto:<?= $d['footer']['contato']['email'] ?>"><?= $d['footer']['contato']['email'] ?></a></li>
              </ul>
              <ul class="social">
                <?php foreach ($d['footer']['redes'] as $rede): ?>
                  <li>
                    <a href="<?= $rede['link'] ?>"><i class="<?= $rede['icone'] ?>"></i></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="ft_widget ft_menu wow fadeInUp">
              <h6 class="ft-title"><?= $d['footer']['menus'][0]['titulo'] ?></h6>
              <ul>
                <?php foreach ($d['footer']['menus'][0]['itens'] as $item): ?>
                  <li><a href="<?= $item['link'] ?>"><?= $item['titulo'] ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="ft_widget ft_menu wow fadeInDown">
              <h6 class="ft-title"><?= $d['footer']['menus'][1]['titulo'] ?></h6>
              <ul>
                <?php foreach ($d['footer']['menus'][1]['itens'] as $item): ?>
                  <li><a href="<?= $item['link'] ?>"><?= $item['titulo'] ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="ft_widget ft_newsletter wow fadeInUp">
              <h6 class="ft-title"><?= $d['footer']['newsletter']['titulo'] ?></h6>
              <p class="mb-xl-20"><?= $d['footer']['newsletter']['descricao'] ?></p>
              <form>
                <input type="email" name="#" placeholder="<?= $d['footer']['newsletter']['placeholder'] ?>" autocomplete="off">
                <button type="submit" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">
                  <?= $d['footer']['newsletter']['botao'] ?>
                  <i class="fal fa-chevron-right ml-2"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="footer_bottom">
        <p class="mb-0"><?= $d['footer']['direitos'] ?></p>
      </div>

      <img src="<?= $d['footer']['elemento_extra'] ?>" alt="element" class="element_3 rotate_elem">
      <div class="arrows to_up slideTop">
        <?php for ($i = 0; $i < 5; $i++): ?>
          <div class="arrow"></div>
        <?php endfor; ?>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <a href="#" data-target="html" class="back-to-top ft-sticky">
    <i class="fal fa-long-arrow-up"></i>
  </a>

  <!-- Scripts -->
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/jquery-3.6.0.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/slick.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/imagesloaded.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/jquery.counterup.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/jquery.inview.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/jquery.easypiechart.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/jquery.countdown.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/plugins/wow.min.js"></script>
  <script src="<?=base_url()?>dist/modelos/seis/assets/js/custom.js"></script>
</body>

</html>