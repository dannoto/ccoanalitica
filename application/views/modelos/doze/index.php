<!-- https://winsfolio.net/html/busniz/ -->
<!DOCTYPE html>

<html lang="en">

<head


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Busniz - Home 1</title>
  <link rel="icon" href="img/logo-icon.png">
  <!--font star-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- fancybox -->

  <link rel="stylesheet" href="https://winsfolio.net/html/busniz/css/jquery.fancybox.min.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!--slick-->

  <link rel="stylesheet" type="text/css" href="https://winsfolio.net/html/busniz/css/slick-theme.css" />

  <link rel="stylesheet" type="text/css" href="https://winsfolio.net/html/busniz/css/slick.css" />

  <!-- nice-select -->

  <link rel="stylesheet" href="https://winsfolio.net/html/busniz/css/nice-select.css">

  <!-- font-awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- owl carousel -->

  <link rel="stylesheet" href="https://winsfolio.net/html/busniz/css/owl.carousel.min.css" />

  <!-- aos -->

  <link rel="stylesheet" href="https://winsfolio.net/html/busniz/css/aos.css" />

  <!-- style -->

  <link rel="stylesheet" href="https://winsfolio.net/html/busniz/css/style.css">

  <!--responsive  -->

  <link rel="stylesheet" href="https://winsfolio.net/html/busniz/css/responsive.css">

  <!-- color -->

  <link rel="stylesheet" href="https://winsfolio.net/html/busniz/css/color.css">

</head>

<body>

  <div class="preloader">
    <img src="https://winsfolio.net/html/busniz/css/ajax-loader.gif" alt="loader-img">
  </div>


  <div class="mobile-search">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-11">
          <label><?= $d['busca']['label']; ?></label>
          <input type="text" placeholder="<?= $d['busca']['placeholder']; ?>">
        </div>
        <div class="col-1 d-flex justify-content-end align-items-center">
          <div class="search-cross-btn">
            <i class="fa fa-times"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="header-one">

    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">
        <div class="contact-details">
          <a href="callto:<?= $d['topo']['telefone_link']; ?>">
            <i class="fa fa-phone"></i><?= $d['topo']['telefone']; ?>
          </a>
          <a href="mailto:<?= $d['topo']['email']; ?>">
            <i class="fa fa-envelope"></i><?= $d['topo']['email']; ?>
          </a>
        </div>
      </div>
    </div>

    <!-- Desktop Nav -->
    <div class="desktop-nav">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-lg-3">
            <div class="logo-head">
              <a href="<?= $d['logo']['link']; ?>">
                <img src="<?= $d['logo']['imagem']; ?>" alt="logo">
              </a>
              <i class="fa fa-solid fa-bars desplay" id="nav-icon4"></i>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="menu-container">
              <nav>
                <ul class="menu">
                  <?php foreach ($d['menu'] as $item): ?>
                    <li class="dropdown dropdown-1 <?= isset($item['submenu']) ? 'item-has-children' : ''; ?>">
                      <?php if ($item['link']): ?>
                        <a href="<?= $item['link']; ?>"><?= $item['titulo']; ?></a>
                      <?php else: ?>
                        <?= $item['titulo']; ?>
                      <?php endif; ?>

                      <?php if (isset($item['submenu'])): ?>
                        <ul class="dropdown_menu dropdown_menu-1">
                          <?php foreach ($item['submenu'] as $sub): ?>
                            <li><a href="<?= $sub['link']; ?>"><?= $sub['titulo']; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </nav>
            </div>
          </div>

          <div class="col-lg-3">
            <ul class="top-bar-icon">
              <li class="bar-menu"><a href="javascript:void(0)"><i class="fa fa-solid fa-bars"></i></a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-search search-btn"></i></a></li>
              <li>
                <div class="work top">
                  <a class="btn-one" href="<?= $d['cta']['link']; ?>">
                    <span class="txt"><?= $d['cta']['titulo']; ?></span>
                  </a>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>

  </header>
  <div class="owl-carousel">
    <?php foreach ($d['slider']['items'] as $slide): ?>
      <div class="item"
        style="background-image:url('<?= $slide['background']; ?>')"
        data-navipicture="<?= $slide['thumbnail']; ?>">

        <div class="develop-create">
          <h2><?= $slide['titulo']; ?></h2>
          <p><?= $slide['descricao']; ?></p>
          <a class="btn-one" href="<?= $slide['botao']['link']; ?>">
            <span class="txt"><?= $slide['botao']['titulo']; ?></span>
          </a>
        </div>

      </div>
    <?php endforeach; ?>
  </div>
  <div class="navPrev">
    <span>
      <img src="<?= $d['slider']['nav_prev_imagem']; ?>" alt="preview">
      <i class="fa fa-angle-left"></i>
    </span>
  </div>
  <div class="navNext">
    <span>
      <img src="<?= $d['slider']['nav_next_imagem']; ?>" alt="preview">
      <i class="fa fa-angle-right"></i>
    </span>
  </div>
  <section class="Consulting gap">
    <div class="container">

      <div class="heading" data-aos="fade-up" data-aos-duration="1000">
        <img alt="heading-img" src="<?= $d['consulting']['icone']; ?>">
        <span><?= $d['consulting']['subtitulo']; ?></span>
        <h3><?= $d['consulting']['titulo']; ?></h3>
      </div>

      <div class="row">
        <?php foreach ($d['consulting']['items'] as $item): ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="Consult"
              data-aos="fade-up"
              data-aos-delay="<?= $item['delay']; ?>"
              data-aos-duration="<?= $item['duration']; ?>">

              <figure>
                <img alt="<?= $item['titulo']; ?>"
                  src="<?= $item['imagem']; ?>"
                  class="w-100 img-fluid">
              </figure>

              <a href="<?= $item['link']; ?>"><?= $item['titulo']; ?></a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
  <section class="Expert-1 gap no-top">
    <div class="container">

      <div class="row align-items-center">

        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="Industry"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="400">

            <span class="a"><?= $d['sobre']['subtitulo']; ?></span>
            <h2><?= $d['sobre']['titulo']; ?></h2>
            <p><?= $d['sobre']['descricao']; ?></p>

            <img alt="assinatura" src="<?= $d['sobre']['assinatura']; ?>">
            <span class="2"><?= $d['sobre']['cargo']; ?></span>
            <h5><?= $d['sobre']['nome']; ?></h5>

          </div>
        </div>

        <div class="col-lg-6">
          <div class="row"
            data-aos="fade-up"
            data-aos-delay="400"
            data-aos-duration="600">

            <?php foreach ($d['sobre']['midias'] as $midia): ?>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="<?= $midia['classe']; ?>">
                  <?php if ($midia['tipo'] === 'video'): ?>
                    <a data-fancybox href="<?= $midia['url']; ?>">
                      <i class="fa fa-play"></i>
                    </a>
                  <?php else: ?>
                    <img alt="<?= $midia['alt']; ?>" src="<?= $midia['imagem']; ?>">
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>

      </div>

      <div class="custome-min custome-one"
        data-aos="fade-down"
        data-aos-delay="200"
        data-aos-duration="400">

        <?php foreach ($d['sobre']['logos'] as $logo): ?>
          <div class="custome">
            <img alt="cliente" src="<?= $logo; ?>">
          </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section>
  <section class="Services gap" style="background-image: url(<?= $d['servicos']['background']; ?>)">
    <div class="container">

      <div class="heading" data-aos="fade-up" data-aos-duration="1000">
        <img alt="heading-img" src="<?= $d['servicos']['icone']; ?>">
        <span><?= $d['servicos']['subtitulo']; ?></span>
        <h3><?= $d['servicos']['titulo']; ?></h3>
      </div>

      <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <?php foreach ($d['servicos']['items'] as $servico): ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="Service drop-box">

              <div class="pan">
                <img class="img-gapp" src="<?= $servico['icone_1']; ?>" alt="icone">
                <img src="<?= $servico['icone_2']; ?>" alt="icone">
              </div>

              <a href="<?= $servico['link']; ?>"><?= $servico['titulo']; ?></a>
              <p><?= $servico['descricao']; ?></p>

            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
  <section class="solutions gap no-bottom">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="solutions-img"
            data-aos="fade-right"
            data-aos-delay="200"
            data-aos-duration="400">

            <img alt="imagem principal" src="<?= $d['solutions']['imagem_principal']; ?>">

            <div class="box bounce-3">
              <div class="bulb-img">
                <img alt="imagem destaque" src="<?= $d['solutions']['imagem_destaque']; ?>">
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-12 col-sm-12">
          <div class="solution"
            data-aos="fade-right"
            data-aos-delay="400"
            data-aos-duration="600">

            <span><?= $d['solutions']['subtitulo']; ?></span>
            <h3><?= $d['solutions']['titulo']; ?></h3>
            <p><?= $d['solutions']['descricao']; ?></p>

          </div>

          <div class="progresbar">
            <?php foreach ($d['solutions']['progresso'] as $progress): ?>
              <div class="progressbar">
                <div class="circle <?= $progress['classe']; ?>" data-percent="<?= $progress['percentual']; ?>">
                  <div></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>

      </div>
    </div>
  </section>
  <section class="Business-1 gap">
    <div class="container-fluid">

      <div class="heading" data-aos="fade-up" data-aos-duration="1000">
        <img alt="heading-img" src="<?= $d['business']['icone']; ?>">
        <span><?= $d['business']['subtitulo']; ?></span>
        <h3><?= $d['business']['titulo']; ?></h3>
      </div>

      <div class="container">
        <div class="row number" data-aos="fade-up" data-aos-duration="1000">

          <?php foreach ($d['business']['items'] as $item): ?>
            <div class="col-lg-4">
              <div class="Busines-img">
                <img alt="<?= $item['titulo']; ?>" src="<?= $item['imagem']; ?>">
                <div class="Strategy">
                  <span><?= $item['categoria']; ?></span>
                  <a href="<?= $item['link']; ?>"><?= $item['titulo']; ?></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

    </div>
  </section>
  <section class="partnership gap no-bottom">
    <div class="container">

      <div class="work">
        <h6 data-aos="fade-up" data-aos-delay="100" data-aos-duration="300">
          <?= $d['parceria']['frase']; ?>
        </h6>

        <h3 data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
          <?= $d['parceria']['titulo']; ?>
        </h3>

        <a class="btn-one"
          href="<?= $d['parceria']['botao']['link']; ?>"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
          data-aos="fade-up"
          data-aos-duration="1000">

          <span class="txt"><?= $d['parceria']['botao']['titulo']; ?></span>
        </a>
      </div>

      <div class="ship" data-aos="zoom-in-right" data-aos-duration="1000">
        <div class="row">

          <?php foreach ($d['parceria']['cards'] as $card): ?>
            <div class="col-lg-4">
              <div class="Location">

                <div class="Location-img">
                  <i class="<?= $card['icone']; ?>"></i>
                </div>

                <div class="Location-data">
                  <h5><?= $card['titulo']; ?></h5>

                  <?php foreach ($card['linhas'] as $linha): ?>
                    <?php if ($linha['link']): ?>
                      <a href="<?= $linha['link']; ?>">
                        <p><?= $linha['texto']; ?></p>
                      </a>
                    <?php else: ?>
                      <p><?= $linha['texto']; ?></p>
                    <?php endif; ?>
                  <?php endforeach; ?>

                </div>

              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

    </div>
  </section>
  <section class="Trusted gap no-bottom">
    <div class="container">

      <div class="Trusted-img slider slider-for-two" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">

        <?php foreach ($d['depoimentos']['items'] as $item): ?>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="Trusted-data">
                <h3><?= $d['depoimentos']['titulo']; ?></h3>
                <p>"<?= $item['texto']; ?>"</p>
                <span><?= $item['autor']; ?></span>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div>
                <img alt="<?= $item['alt']; ?>" src="<?= $item['imagem']; ?>">
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <div class="trusted slider slider-nav-two" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
        <?php foreach ($d['depoimentos']['items'] as $item): ?>
          <div>
            <img alt="<?= $item['alt']; ?>" src="<?= $item['imagem']; ?>">
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
  <section class="Articles gap">
    <div class="container">

      <div class="heading" data-aos="fade-up" data-aos-duration="1000">
        <img alt="heading-img" src="<?= $d['artigos']['icone']; ?>">
        <span class="a"><?= $d['artigos']['subtitulo']; ?></span>
        <h3><?= $d['artigos']['titulo']; ?></h3>
      </div>

      <div class="row">
        <?php foreach ($d['artigos']['items'] as $item): ?>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="blog-post" data-aos="fade-up" data-aos-delay="<?= $item['delay']; ?>" data-aos-duration="600">

              <div class="Update-img">
                <figure>
                  <img alt="<?= $item['alt']; ?>" src="<?= $item['imagem']; ?>" class="w-100 img-fluid">
                </figure>
              </div>

              <div class="Update">
                <ul class="date-tim">
                  <li class="date"><?= $item['data']; ?></li>
                  <li><i class="fa fa-eye"></i><?= $item['visualizacoes']; ?></li>
                  <li><i class="fa fa-envelope"></i><?= $item['comentarios']; ?></li>
                </ul>

                <a href="<?= $item['link']; ?>"><?= $item['titulo']; ?></a>
                <p><?= $item['descricao']; ?></p>
              </div>

            </div>
          </div>
        <?php endforeach; ?>

        <div class="work">
          <a class="btn-one" href="<?= $d['artigos']['botao']['link']; ?>">
            <span class="txt"><?= $d['artigos']['botao']['titulo']; ?></span>
          </a>
        </div>

      </div>
    </div>
  </section>
  <footer class="footer-one">
    <div class="container">

      <div class="updates">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="Newsletter">
              <h3><?= $d['footer']['newsletter']['titulo']; ?></h3>
              <p><?= $d['footer']['newsletter']['descricao']; ?></p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <form>
              <input type="text" placeholder="<?= $d['footer']['newsletter']['placeholder']; ?>">
              <button class="one"><?= $d['footer']['newsletter']['botao']; ?></button>
            </form>
          </div>

        </div>
      </div>

      <div class="Lorem">
        <div class="row">

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="logo">
              <img alt="logo" src="<?= $d['footer']['logo']['imagem']; ?>">
              <p><?= $d['footer']['logo']['descricao']; ?></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <h4><?= $d['footer']['links']['titulo']; ?></h4>
            <ul class="Quick-Links">
              <?php foreach ($d['footer']['links']['items'] as $link): ?>
                <li><a href="<?= $link['url']; ?>"><i class="fa fa-angle-right"></i><?= $link['titulo']; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <h4><?= $d['footer']['instagram']['titulo']; ?></h4>
            <ul class="Instagram Photos">
              <?php foreach ($d['footer']['instagram']['imagens'] as $img): ?>
                <li><img alt="<?= $img['alt']; ?>" src="<?= $img['src']; ?>"></li>
              <?php endforeach; ?>
            </ul>
          </div>

        </div>
      </div>

    </div>
  </footer>


  <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <!-- jQuery -->

  <script src="https://winsfolio.net/html/busniz/js/jquery-3.6.0.min.js"></script>

  <!-- fancybox -->

  <script src="https://winsfolio.net/html/busniz/js/jquery.fancybox.min.js"></script>

  <!-- nice-select -->

  <script src="https://winsfolio.net/html/busniz/js/jquery.nice-select.min.js"></script>

  <!--owl carousel  -->

  <script src="https://winsfolio.net/html/busniz/js/owl.carousel.js"></script>

  <!-- carousel -->

  <script src="https://winsfolio.net/html/busniz/js/carousel-in.js"></script>

  <!-- aos -->

  <script src="https://winsfolio.net/html/busniz/js/aos.js"></script>

  <!--slick-->

  <script src="https://winsfolio.net/html/busniz/js/slick.min.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>

  <!-- custom -->

  <script src="https://winsfolio.net/html/busniz/js/custom.js"></script>

  <div class="modal fade request-quote" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="consultation" data-aos="zoom-in-left" data-aos-delay="400" data-aos-duration="600">
            <h3>Contact me if you have any concerns</h3>
            <form class="fast">
              <select class="nice-select Advice">
                <option>Finance Advice</option>
                <option>Finance Advice 1</option>
                <option>Finance Advice 2</option>
                <option>Finance Advice 3</option>
              </select>
              <input class="a" type="text" name="Complete Name" placeholder="Complete Name">
              <input class="a" type="text" name="Email" placeholder="Email Address">
              <textarea name="message" placeholder="Message Here"></textarea>
              <div class="view V">
                <button type="submit" class="btn-one" href="JavaScript:void(0)">
                  <span class="txt">Send Message</span>
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>



</body>