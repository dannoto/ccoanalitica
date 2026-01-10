<!-- https://unifato.com/advisr/ -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!--=====TITLE=======-->
  <title>Home 1 || Business Consulting Consulting</title>
  <!--=====FAV ICON=======-->
  <link rel="shortcut icon" href="https://unifato.com/advisr/assets/img/logo/titel2.svg" />

  <!--=====CSS=======-->
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
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://unifato.com/advisr/assets/css/responsive.css" />

  <!--=====JQUERY=======-->
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

<header>
  <div class="header-area header-area-all d-none d-lg-block" id="header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-elements">

            <!-- Logo -->
            <div class="site-logo home1-site-logo">
              <a href="{{ $d['header']['logo']['link'] }}">
                <img src="{{ $d['header']['logo']['imagem'] }}" alt="{{ $d['header']['logo']['alt'] }}" />
              </a>
            </div>

            <!-- Menu -->
            <div class="main-menu-ex main-menu-ex2">
              <ul>
                @foreach($d['header']['menu'] as $menu)
                  <li class="{{ isset($menu['submenu']) ? 'has-dropdown' : '' }}">
                    <a href="{{ $menu['link'] }}">
                      {{ $menu['titulo'] }}
                      @if(isset($menu['submenu']))
                        <i class="fa-solid fa-angle-down"></i>
                      @endif
                    </a>

                    @if(isset($menu['submenu']))
                      <ul class="sub-menu">
                        @foreach($menu['submenu'] as $submenu)
                          <li class="{{ isset($submenu['submenu']) ? 'has-dropdown has-dropdown1' : '' }}">
                            <a href="{{ $submenu['link'] }}">
                              {{ $submenu['titulo'] }}
                              @if(isset($submenu['submenu']))
                                <span><i class="fa-solid fa-angle-right"></i></span>
                              @endif
                            </a>

                            @if(isset($submenu['submenu']))
                              <ul class="sub-menu">
                                @foreach($submenu['submenu'] as $nivel3)
                                  <li>
                                    <a href="{{ $nivel3['link'] }}">{{ $nivel3['titulo'] }}</a>
                                  </li>
                                @endforeach
                              </ul>
                            @endif
                          </li>
                        @endforeach
                      </ul>
                    @endif
                  </li>
                @endforeach
              </ul>
            </div>

            <!-- Botão -->
            <div class="home2-header-buttons">
              <div class="button2-all">
                <a href="{{ $d['header']['botao']['link'] }}" class="button-h-2 btnfos2">
                  {{ $d['header']['botao']['titulo'] }}
                </a>
              </div>
            </div>

            <!-- Mobile -->
            <div class="mobile-menu-bar d-lg-none">
              <i class="fas fa-bars"></i>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</header>


<!-- Mobile Header -->
<div class="mobile-header mobile-header-4 d-block d-lg-none ">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="{{ $d['mobile_header']['logo']['link'] }}">
            <img src="{{ $d['mobile_header']['logo']['imagem'] }}" alt="{{ $d['mobile_header']['logo']['alt'] }}">
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
    @foreach($d['mobile_menu'] as $menu)
      <li class="{{ isset($menu['submenu']) ? 'has-dropdown' : '' }}">
        <a href="{{ $menu['link'] }}">{{ $menu['titulo'] }}</a>

        @if(isset($menu['submenu']))
          <ul class="sub-menu">
            @foreach($menu['submenu'] as $submenu)
              <li class="{{ isset($submenu['submenu']) ? 'has-dropdown has-dropdown1' : '' }}">
                <a href="{{ $submenu['link'] }}">{{ $submenu['titulo'] }}</a>

                @if(isset($submenu['submenu']))
                  <ul class="sub-menu">
                    @foreach($submenu['submenu'] as $nivel3)
                      <li>
                        <a href="{{ $nivel3['link'] }}">{{ $nivel3['titulo'] }}</a>
                      </li>
                    @endforeach
                  </ul>
                @endif
              </li>
            @endforeach
          </ul>
        @endif
      </li>
    @endforeach

    <li>
      <a class="mobile-menu-button" href="{{ $d['mobile_cta']['link'] }}">
        {{ $d['mobile_cta']['titulo'] }}
      </a>
    </li>
  </div>

  <div class="single-footer single-footer-menu single-footer4">
    <h3>{{ $d['mobile_footer']['titulo'] }}</h3>

    <div class="footer4-contact-info">
      <div class="contact-info-single">
        <div class="contact-info-icon">
          <img src="{{ $d['mobile_footer']['telefone']['icone'] }}" alt="">
        </div>
        <div class="contact-info-text">
          <a href="tel:{{ $d['mobile_footer']['telefone']['link'] }}">
            {{ $d['mobile_footer']['telefone']['texto'] }}
          </a>
        </div>
      </div>

      <div class="contact-info-single">
        <div class="contact-info-icon">
          <img src="{{ $d['mobile_footer']['email']['icone'] }}" alt="">
        </div>
        <div class="contact-info-text">
          <a href="mailto:{{ $d['mobile_footer']['email']['texto'] }}">
            {{ $d['mobile_footer']['email']['texto'] }}
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
          <span class="span">{{ $d['hero']['subtitulo'] }}</span>
          <div class="space16"></div>

          <h1>
            {!! $d['hero']['titulo'] !!}
          </h1>

          <div class="space24"></div>
          <p>{!! $d['hero']['descricao'] !!}</p>

          <div class="space40"></div>

          <div class="header2-buttons">
            <div class="button2-all">
              <a href="{{ $d['hero']['botao_principal']['link'] }}" class="button-h-2 btnfos2">
                {{ $d['hero']['botao_principal']['titulo'] }}
              </a>
            </div>

            <div class="button2-all2">
              <a href="{{ $d['hero']['botao_secundario']['link'] }}" class="button-h2-2 btnfos3">
                {{ $d['hero']['botao_secundario']['titulo'] }}
              </a>
            </div>
          </div>

          <div class="space40"></div>

          <div class="brand2-slider-all">
            <h4>{{ $d['hero']['parceiros']['titulo'] }}</h4>
            <div class="space24"></div>

            <div class="brand2-slider owl-carousel">
              @foreach($d['hero']['parceiros']['logos'] as $logo)
                <div class="brand2-logo">
                  <img src="{{ $logo }}" alt="">
                </div>
              @endforeach
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-5 col-md-12 text-center">
        <div class="hero2-image-all1">
          <div class="hero2-img1 img100 border-70">
            <img src="{{ $d['hero']['imagens']['img1'] }}" alt="">
          </div>

          <div class="hero2-img2 img100 border-70">
            <img src="{{ $d['hero']['imagens']['img2'] }}" alt="">
          </div>
        </div>

        <div class="space20"></div>

        <div class="hero2-img3 img100 border-80">
          <img src="{{ $d['hero']['imagens']['img3'] }}" alt="">
        </div>
      </div>

    </div>
  </div>
</div>

<!-- SOBRE -->
<div class="about2 sp3">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about2-images">
          <div class="about2-img1 aniamtion-key-1">
            <img src="{{ $d['sobre']['shape'] }}" alt="">
          </div>
          <div class="about2-img2 border-70" data-aos="zoom-out" data-aos-duration="800">
            <img src="{{ $d['sobre']['imagem_principal'] }}" alt="">
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hadding2 about2-hadding">
          <span class="span">{{ $d['sobre']['subtitulo'] }}</span>
          <div class="space16"></div>

          <h1>{!! $d['sobre']['titulo'] !!}</h1>

          <div class="space24"></div>

          <p>{{ $d['sobre']['descricao1'] }}</p>

          <div class="space20"></div>

          <p>{{ $d['sobre']['descricao2'] }}</p>

          <div class="space40"></div>

          <a href="{{ $d['sobre']['botao']['link'] }}" class="button-h-2 btnfos2">
            {{ $d['sobre']['botao']['titulo'] }}
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SERVIÇOS -->
<div class="service2 sp3" style="background-color: #254969;">
  <div class="container">

    <div class="row">
      <div class="col-lg-7 m-auto text-center">
        <div class="hadding2-w">
          <span class="span">{{ $d['servicos']['subtitulo'] }}</span>
          <div class="space16"></div>
          <h1>{!! $d['servicos']['titulo'] !!}</h1>
          <div class="space24"></div>
          <p>{{ $d['servicos']['descricao'] }}</p>
        </div>
      </div>
    </div>

    <div class="space30"></div>

    <div class="row">
      @foreach($d['servicos']['items'] as $item)
        <div class="col-lg-6">
          <div data-aos="fade-up" data-aos-duration="{{ $item['aos'] }}">
            <div class="service2-box">
              <div class="serivce2-icon">
                <img src="{{ $item['icone'] }}" alt="">
              </div>

              <div class="space24"></div>

              <div class="service2-hadding hadding2-w">
                <h4>
                  <a href="{{ $item['link'] }}">{{ $item['titulo'] }}</a>
                </h4>

                <div class="space14"></div>

                <p>{{ $item['descricao'] }}</p>

                <div class="space24"></div>

                <a class="read-more-btn-w" href="{{ $item['link'] }}">
                  {{ $item['botao'] }} <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="space40"></div>

    <div class="row">
      <div class="col-lg-12 text-center">
        <a href="{{ $d['servicos']['botao']['link'] }}" class="button-h-2 btnfos2">
          {{ $d['servicos']['botao']['titulo'] }}
        </a>
      </div>
    </div>

  </div>
</div>

<!-- POR QUE ESCOLHER -->
<div class="choose2 sp3">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6">
        <div class="hadding2">
          <span class="span">{{ $d['porque_escolher']['subtitulo'] }}</span>

          <div class="space16"></div>

          <h1>{!! $d['porque_escolher']['titulo'] !!}</h1>

          <div class="space24"></div>

          <p>{{ $d['porque_escolher']['descricao1'] }}</p>

          <div class="space20"></div>

          <p>{{ $d['porque_escolher']['descricao2'] }}</p>

          <div class="counter-boxs">
            @foreach($d['porque_escolher']['contadores'] as $contador)
              <div class="counter2-box">
                <h2><span class="counter">{{ $contador['numero'] }}</span></h2>
                <p>{!! $contador['titulo'] !!}</p>
              </div>
            @endforeach
          </div>

        </div>
      </div>

      <div class="col-lg-6 text-right">
        <div class="choose2-images">
          <div class="choose2-img1 aniamtion-key-1">
            <img src="{{ $d['porque_escolher']['shape'] }}" alt="">
          </div>
          <div class="choose2-img2 border-70" data-aos="zoom-out" data-aos-duration="800">
            <img src="{{ $d['porque_escolher']['imagem'] }}" alt="">
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

 
  <!-- CTA -->
<div class="cta2" style="background-image: url({{ $d['cta']['background'] }}); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed; padding: 70px 0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hadding2-w">
          <h1 data-aos="fade-up" data-aos-duration="700">
            {!! $d['cta']['titulo'] !!}
          </h1>
        </div>
      </div>
      <div class="col-lg-6 text-right">
        <div class="header2-buttons header2-buttons2">
          <div class="button2-all" data-aos-duration="800" data-aos="fade-up">
            <a href="{{ $d['cta']['botao_principal']['link'] }}" class="button-h-2 btnfos2">
              {{ $d['cta']['botao_principal']['titulo'] }}
            </a>
          </div>
          <div class="button2-all2" data-aos-duration="800" data-aos="fade-down">
            <a href="{{ $d['cta']['botao_secundario']['link'] }}" class="button-h2-2 btnfos4">
              {{ $d['cta']['botao_secundario']['titulo'] }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROJETOS / ESTUDOS DE CASO -->
<div class="projects sp3">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hadding2">
          <span class="span" data-aos-duration="700" data-aos="fade-up">
            {{ $d['projetos']['subtitulo'] }}
          </span>
          <div class="space16"></div>
          <h1 data-aos-duration="900" data-aos="fade-up">
            {!! $d['projetos']['titulo'] !!}
          </h1>
        </div>
      </div>
      <div class="col-lg-6 text-right">
        <div class="project-button" data-aos-duration="800" data-aos="fade-up">
          <a href="{{ $d['projetos']['botao']['link'] }}" class="button-h-2 btnfos2">
            {{ $d['projetos']['botao']['titulo'] }}
          </a>
        </div>
      </div>
    </div>

    <div class="space30"></div>

    <div class="row">
      @foreach($d['projetos']['items'] as $item)
        <div class="col-lg-6">
          <div class="project-all-box" data-aos-duration="{{ $item['aos'] }}" data-aos="fade-up">
            <div class="project-img img100">
              <img src="{{ $item['imagem'] }}" alt="">
            </div>
            <div class="project-box">
              <div class="project-hadding hadding2-w">
                <h4>
                  <a href="{{ $item['link'] }}">{{ $item['titulo'] }}</a>
                </h4>
                <div class="space14"></div>
                <p>{{ $item['descricao'] }}</p>
                <div class="space24"></div>
                <a class="read-more-btn-w" href="{{ $item['link'] }}">
                  {{ $item['botao'] }}
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

<!-- DEPOIMENTOS -->
<div class="testimonial2 sp3" style="background-color: #03163B;">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 m-auto text-center">
        <div class="hadding2-w">
          <span class="span" data-aos-duration="700" data-aos="fade-up">
            {{ $d['depoimentos']['subtitulo'] }}
          </span>
          <div class="space16"></div>
          <h1 data-aos-duration="900" data-aos="fade-up">
            {!! $d['depoimentos']['titulo'] !!}
          </h1>
        </div>
      </div>
    </div>

    <div class="space30"></div>

    <div class="row" data-aos-duration="1000" data-aos="fade-up">
      <div class="testimonial2-slider-all owl-carousel">
        @foreach($d['depoimentos']['items'] as $item)
          <div class="testimonial-sliders">
            <div class="testimonial-single-slider testimonial-single-slider2">
              <div class="">
                <div class="testimonial2-slider-img">
                  <img src="{{ $item['imagem'] }}" alt="">
                </div>
              </div>

              <div class="testimonial1-hadding testimonial2-hadding">
                <div class="testimonial-stars">
                  <ul>
                    @for($i = 0; $i < $item['estrelas']; $i++)
                      <li><i class="fa-solid fa-star"></i></li>
                    @endfor
                  </ul>
                </div>

                <p style="font-style: italic;">
                  “{{ $item['texto'] }}”
                </p>

                <div class="space20"></div>

                <div class="slider1-bottom">
                  <h4>
                    <a href="#">{{ $item['nome'] }}</a>
                  </h4>
                  <div class="space6"></div>
                  <p>{{ $item['cargo'] }}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>


 

<!-- CONTATO -->
<div class="contact2 sp3" style="background-color: #254969;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hadding2-w">
          <div class="space10"></div>
          <h1 data-aos="fade-right" data-aos-duration="700">
            {{ $d['contato']['titulo'] }} <span class="after2">{{ $d['contato']['titulo_destaque'] }}</span>
          </h1>
          <div class="space24"></div>
          <p data-aos="fade-right" data-aos-duration="900">
            {{ $d['contato']['descricao'] }}
          </p>
        </div>

        <div class="space10"></div>

        <div class="contact2-contacts">
          @foreach ($d['contato']['informacoes'] as $info)
            <div class="contact2-single" data-aos="fade-right" data-aos-duration="{{ $info['aos_duration'] }}">
              <div class="contact2-icon">
                <img src="{{ $info['icone'] }}" alt="">
              </div>
              <div class="contact2-icon-hadding">
                <a href="{{ $info['link'] }}">{!! $info['texto'] !!}</a>
              </div>
            </div>
            <div class="space10"></div>
          @endforeach
        </div>

        <div class="space30"></div>

        <div class="hadding2-w" data-aos="fade-right" data-aos-duration="800">
          @foreach ($d['contato']['observacoes'] as $obs)
            <p>{{ $obs }}</p>
          @endforeach
        </div>
      </div>

      <div class="col-lg-6">
        <div class="contact2-form-box-all" data-aos="zoom-in-up" data-aos-duration="800">
          <div class="contact-form">
            <form action="{{ $d['contato']['form']['action'] }}">
              <div class="hadding2">
                <h1>{{ $d['contato']['form']['titulo'] }}</h1>
              </div>

              <div class="sapce24"></div>

              <div class="contact-inputs">
                <div class="contact-input">
                  <div class="contact-input-signle">
                    <input type="text" placeholder="{{ $d['contato']['form']['campos']['nome'] }}">
                    <input type="text" placeholder="{{ $d['contato']['form']['campos']['sobrenome'] }}">
                  </div>

                  <div class="contact-input-signle contact-input-signle1">
                    <input type="text" placeholder="{{ $d['contato']['form']['campos']['email'] }}">
                  </div>

                  <div class="contact-input-signle contact-input-signle1">
                    <select class="wide">
                      @foreach ($d['contato']['form']['campos']['assunto'] as $opcao)
                        <option value="">{{ $opcao }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="contact-input-signle">
                    <textarea cols="30" rows="3" placeholder="{{ $d['contato']['form']['campos']['mensagem'] }}"></textarea>
                  </div>

                  <div class="space30"></div>

                  <button class="button2">
                    {{ $d['contato']['form']['botao'] }}
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

<footer class="footer-area footer-area2 padding-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="single-footer mr50">
          <a href="{{ $d['footer']['logo_link'] }}" class="footer-logo">
            <img src="{{ $d['footer']['logo'] }}" alt="" />
          </a>
          <div class="space20"></div>
          <p>{{ $d['footer']['descricao'] }}</p>
        </div>
      </div>

      <div class="col-lg col-sm-6">
        <div class="single-footer">
          <h3>{{ $d['footer']['menus']['empresa']['titulo'] }}</h3>
          <div class="footer-menu">
            <ul>
              @foreach($d['footer']['menus']['empresa']['links'] as $item)
                <li><a href="{{ $item['link'] }}">{{ $item['titulo'] }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg col-sm-6">
        <div class="single-footer">
          <h3>{{ $d['footer']['menus']['util']['titulo'] }}</h3>
          <div class="footer-menu">
            <ul>
              @foreach($d['footer']['menus']['util']['links'] as $item)
                <li><a href="{{ $item['link'] }}">{{ $item['titulo'] }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div class="single-footer">
          <h3>{{ $d['footer']['newsletter']['titulo'] }}</h3>

          <div class="footer-subscribe-area">
            <div class="hadding1">
              <p>{{ $d['footer']['newsletter']['descricao'] }}</p>
            </div>
            <div class="space24"></div>

            <div class="footer-contact-input">
              <div class="input-footer2">
                <input type="email" placeholder="{{ $d['footer']['newsletter']['placeholder'] }}">
              </div>
              <div class="button-footer">
                <button class="button2">{{ $d['footer']['newsletter']['botao'] }}</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="row align-items-center copyright2">
      <div class="col-lg-6">
        <p class="copyright-p">
          {{ $d['footer']['copyright'] }}
        </p>
        <ul class="Conditions2">
          <li><a href="{{ $d['footer']['termos']['link'] }}">{{ $d['footer']['termos']['titulo'] }}</a></li>
        </ul>
      </div>

      <div class="col-lg-6 text-right">
        <div class="social social2">
          <ul>
            @foreach($d['footer']['social'] as $social)
              <li>
                <a data-bs-toggle="tooltip" title="{{ $social['titulo'] }}" href="{{ $social['link'] }}">
                  <i class="{{ $social['icone'] }}"></i>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

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
        <h2>{{ $d['demo_sidebar']['titulo'] }}</h2>
      </div>

      <div class="space20"></div>

      <div class="demo-sidebar-items">
        @foreach($d['demo_sidebar']['homes'] as $home)
          <div class="single-demo-sidebar-item">
            <div class="demo-sidebar-item-img">
              <img src="{{ $home['imagem'] }}" alt="" />
              <div class="demo-sidebar-buttons">
                @foreach($home['botoes'] as $botao)
                  <a href="{{ $botao['link'] }}">{{ $botao['titulo'] }}</a>
                @endforeach
              </div>
            </div>
            <div class="demo-item-content">
              <a href="{{ $home['link'] }}">{{ $home['titulo'] }}</a>
            </div>
          </div>
        @endforeach
      </div>

      <div class="space30"></div>

      <div class="heading2">
        <h2>{{ $d['demo_sidebar']['inner_titulo'] }}</h2>
      </div>

      <div class="demo-sidebar-items inner-dmeos">
        @foreach($d['demo_sidebar']['inner_pages'] as $page)
          <div class="single-demo-sidebar-item">
            <div class="demo-sidebar-item-img">
              <img src="{{ $page['imagem'] }}" alt="" />
              <div class="demo-sidebar-buttons">
                <a href="{{ $page['link'] }}">{{ $page['botao'] }}</a>
              </div>
            </div>
            <div class="demo-item-content">
              <a href="{{ $page['link'] }}">{{ $page['titulo'] }}</a>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </div>
</div>

 
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