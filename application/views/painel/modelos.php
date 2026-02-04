<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos de Sites para</title>
    <meta name="description" content="Escolha o modelo que mais gostar e preencha as informações para criarmos seus site.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --cor-principal: #FF6900;
            --cor-secundaria: #f4f4f4;
            --cor-destaque: #d4af37;
            --texto-claro: #fff;
            --texto-escuro: #222;
            --radius: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", Sans-serif;
        }

        body {
            background: var(--cor-secundaria);
            color: var(--texto-escuro);
            line-height: 1.6;
        }

        header {
            background: var(--cor-principal);
            color: var(--texto-claro);
            text-align: center;
            padding: 30px 20px;
        }

        header h1 {
            font-size: 2.0rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        section.modelos {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .modelo {
            background: #fff;
            border-radius: var(--radius);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .modelo:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }

        .modelo img {
            width: 100%;
            display: block;
            height: 350px;

            object-fit: cover;
        }

        .modelo-conteudo {
            padding: 20px;
            text-align: center;
        }

        .modelo h3 {
            font-size: 1.3rem;
            color: var(--cor-principal);
            margin-bottom: 10px;
        }

        .btn {
            display: block;
            text-decoration: none;
            padding: 10px 0;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn--outline {
            border: 2px solid var(--cor-principal);
            color: var(--cor-principal);
            margin-bottom: 10px;
        }

        .btn--outline:hover {
            background: var(--cor-principal);
            color: var(--texto-claro);
        }

        .btn--whats {
            background: #25D366;
            color: #fff;
            border: none;
        }

        .btn--whats:hover {
            background: #1ebe5d;
        }

        footer {
            background: var(--cor-principal);
            color: var(--texto-claro);
            text-align: center;
            padding: 30px 15px;
            font-size: 0.95rem;
            margin-top: 60px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 1.8rem;
            }

            .modelo img {
                height: 200px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div style="display:flex;justify-content:space-between;width:70%;margin-left:15%">
             <div>
                <center>
                    <br><br>
                    <a href="<?= base_url() ?>painel/">
                        <button style="padding:12px; background-color:#fff;border:1px solid #fff;color:#FF6900;cursor:pointer">MENU</button>
                    </a>
                </center>
            </div>
            <div>
                <h1><small></small> <br>Gerenciar Modelos </h1>
                <br>
                <p></p>
            </div>
            <div>
              <center>
<br><br>
                <a href="<?=base_url()?>painel/modelos/criar">
                    <button style="padding:12px; background-color:#fff;border:1px solid #fff;color:#FF6900;cursor:pointer">CRIAR MODELO</button>
                </a>
              </center>
            </div>
        </div>

        <div>
            <form method="GET" id="search_form">
                <div style="display:flex;margin-left:350px;margin-right:350px">
                    <!-- <div style="padding:3px">
                        <input name="model_name" style="cursor:pointer;height: 40px;width:400px;padding:12px;border:1px solid" placeholder="Digite um termo..." type="text">
                    </div> -->
                    <div style="padding:3px">

                        <select name="tag_id" style="cursor:pointer;height: 40px;width:500px;padding:12px;border:1px solid;background-color:#fff">
                            <option value="">Todas</option>
                            <?php foreach ($this->tag_model->get_tags() as $t) { ?>
                                <option value="<?= $t->id ?>"><?= $t->tag_name ?></option>
                            <?php } ?>
                        </select>

                    </div>
                    <div style="padding:3px">
                        <button type="submit" style="cursor:pointer;width: 50px;height:40px;border-radius:0px;background-color:#fff;border:1px solid #fff" class="btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </header>

    <section class="modelos">


    <?php print_r($modelos); ?>

        <?php if (count($modelos) > 0) { ?>

            <?php foreach ($modelos as $m) { ?>

                <?php $model_data = $this->models_model->get_model($m->id); ?>
    <?php if ($model_data['is_deleted'] == 0) { ?>
                <div class="modelo">
                    <img src="<?= $model_data['model_image'] ?>" alt="<?= $model_data['model_title'] ?> -">
                    <div class="modelo-conteudo">
                        <h3><?= $model_data['model_title'] ?></h3>
                        <a target="_blank" href="<?= $model_data['model_link'] ?>" target="_blank" class="btn btn--whats">VER MODELO AO VIVO</a>

                        <div style="margin-top:10px">
                            <a style="text-decoration: none;" href="<?= base_url() ?>painel/modelos/editar/<?= $model_data['id'] ?>">
                                <button style="cursor: pointer;width:100%;background-color:#FFF;color:#FF6900;border:3px solid #FF6900;" class="btn"><i class="fa fa-edit"></i> EDITAR MODELO</button>
                            </a>
                        </div>
                    </div>
                </div>
<?php } ?>
            <?php } ?>
        <?php } else { ?>

            <div style="height: 200px;">
                <center>
                    <br><br>
                    <h3>NENHUM MODELO NESTA CATEGORIA</h3>
                </center>
            </div>
        <?php } ?>

    </section>

    <footer>
        © 2025 - CCO ANALITICA. Todos os direitos reservados.
        <br>
        50.108.880/0001-92
        <br>
        Rua Alumínio, 107 – Aparecida de Goiânia – GO
        <br>
        ccoanalitica@gmail.com

    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        function choose_model(model_id) {


            $.ajax({
                url: '<?= base_url() ?>identificacao/act_add_model',
                type: 'POST',
                data: {
                    model_id
                },
                success: function(res) {


                    window.location.href = '<?= base_url() ?>identificacao';


                },
                error: function() {
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Não foi possível conectar ao servidor.',
                        icon: 'error',
                        confirmButtonColor: '#FF6900'
                    });
                }
            });
        }
    </script>

</body>

</html>