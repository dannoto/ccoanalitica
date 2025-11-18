<style>
    /* Exibe somente o formulário de desktop em telas grandes */
    .desktop-form {
        display: block;
    }

    .mobile-form {
        display: none;
    }

    /* A partir de 768px para baixo, esconde o desktop e exibe o mobile */
    @media (max-width: 768px) {
        .desktop-form {
            display: none;
        }

        .mobile-form {
            display: block;
        }
    }
</style>

<header id="top" class="" tabindex="-1" data-track="trackHeader" data-selector="#top">
    <div class="container search-mobile">
        <a class="logo" title="Ir para a página inicial" href="<?= base_url() ?>"> <img
                src="https://static.vecteezy.com/system/resources/previews/019/632/927/non_2x/3d-minimal-discount-coupon-special-offer-promotion-flash-sale-icon-3d-illustration-free-png.png"
                alt="Cuponomia - Cupons de Desconto Online Grátis" width="137" height="18" crossorigin="anonymous">
        </a>
        <nav class="nav-top js-nav-top">

            <ul id="menu" class="nav-menu js-nav-menu">

                <li class="nav-item nav-stores nav-mobile-item js-nav-mobile-item"> <a href="<?= base_url() ?>lojas"
                        target="_self" id="" class="eko-button " data-size="medium" data-type="Ghost"
                        data-state="active" data-fill-width="false">
                        <div class="icon icon--left">
                        </div>
                        <p class="label" style="margin-left:40px"><small>VER TODAS AS LOJAS</small></p>
                        <div class="icon icon--right">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="eko-icon icon__success" data-size="size20" width="20" height="20"
                                data-color="" data-mobile-size="size20" aria-hidden="true" focusable="false">
                                <path
                                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="eko-icon icon__pressed" data-size="size20" width="20" height="20"
                                data-color="" data-mobile-size="size20" aria-hidden="true" focusable="false">
                                <path
                                    d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z">
                                </path>
                            </svg>
                            <img src="" width="20" height="20" class="icon__loading" alt="loading">
                        </div>
                    </a>
                </li>

            </ul>

        </nav>
        <div style="width:100%" class="js-searchTop searchtop" data-test-id="search">

            <!-- Formulário para Desktop -->
            <form method="get" id="search-form-desktop" class="search-form js-searchForm desktop-form" action="<?= base_url() ?>/lojas">
                <input type="search" data-test-id="search-field" class="search-field js-searchField"
                    placeholder="Pesquisar loja" aria-label="Pesquisar loja" name="busca" id="busca"
                    autocomplete="off">
                <div class="search-submit show" id="search-submit"></div>
            </form>

            <!-- Formulário para Mobile -->
            <form method="get" id="search-form-mobile" class="mobile-form" action="<?= base_url() ?>/lojas" style="width:100%;margin-top:5px">
                <input type="search"
                    style="height:35px;width:100%"
                    class="js-searchField"
                    placeholder="Pesquisar loja" aria-label="Pesquisar loja" name="busca" id="busca"
                    autocomplete="off">
                <div class="search-submit show" id="search-submit"></div>
            </form>


        </div>
    </div>
</header>