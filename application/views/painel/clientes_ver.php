<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Gerenciar Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-D1A7eUwYd+1I4Mbmcq+uLf66W5k3o7sR5oUuE/hcI6rjV5ZbQ/lS7hIlV4a4t5q7+fCvw2HdyE9eP2N93+qZVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-D1A7eUwYd+1I4Mbmcq+uLf66W5k3o7sR5oUuE/hcI6rjV5ZbQ/lS7hIlV4a4t5q7+fCvw2HdyE9eP2N93+qZVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --laranja: #FF6900;
            --cinza: #f5f5f5;
        }

        body {
            background: var(--cinza);
            font-family: 'Roboto', sans-serif;
        }

        header {
            background: var(--laranja);
            color: white;
            /* padding: 20px; */
            text-align: center;
        }

        table {
            width: 90%;
            margin: 40px auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #ff6900;
            color: white;
        }

        tr:hover {
            background: #fdf2e9;
        }

        button {
            background: var(--laranja);
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #e65f00;
        }

        .actions {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .add-btn {
            display: block;
            margin: 20px auto;
            background: #27ae60;
        }

        /* ======== */

        form {
            background-color: var(--bg);
        }

        .container-footer {
            max-width: 900px;
            margin: 0px auto;
            border-radius: 0px;
            padding: 0px;
            margin-top: 10px;
            margin-bottom: 50px;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            border-radius: 0px;
            padding: 30px;
            padding-top: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin: 5px 0 15px;
            border-left: 5px solid var(--cor-destaque);
            padding-left: 10px;
            color: var(--cor-principal);
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            border-radius: 0px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        input[type="color"] {
            height: 45px;
            cursor: pointer;
        }

        .cores {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 16px;
            border-radius: 0px;
            border: 0;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-primary {
            background: var(--cor-principal);
            color: #fff
        }

        .btn-whats {
            border: 1px solid var(--accent);
            background-color: transparent;
            color: var(--accent)
        }


        .file-list {
            margin-top: 10px;
        }

        .file-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 6px 10px;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .file-item button {
            background: none;
            border: none;
            color: #e74c3c;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
</head>

<body style="margin:0px">

    <header>



        <div style="display:flex;justify-content:space-between;width:70%;margin-left:15%">

            <div>
                <center>
                    <br><br>
                    <a href="<?= base_url() ?>painel/clientes">
                        <button style="padding:12px; background-color:#fff;border:1px solid #fff;color:#FF6900;cursor:pointer">VOLTAR</button>
                    </a>
                </center>
            </div>
            <div>
                <h1><small></small> <br><?=$form['idf_company_name']?></h1>
                <br>
                <p></p>
            </div>
            <div>

            </div>
        </div>
    </header>

    <div>


        <form id="formEmpresa" enctype="multipart/form-data">

            <br>
            <!-- SOBRE A EMPRESA -->
            <div class="container">
                <h2>Sobre a Empresa</h2>
                <label>Breve história</label>
                <p style="color:#FF6900;white-space:pre-wrap"><?= $form['company_history'] ? $form['company_history'] : '----------' ?></p>
                <label>Descrição do que a empresa faz <small style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_description'] ? $form['company_description'] : '----------'  ?></p>

                <label>Arquivos ou Imagens da empresa, equipe, espaço físico etc.</label>
                <br><br>

                <div class="file-list" id="videos-list">

                    <?php foreach ($files as $f) { ?>


                        <?php if ($f->file_slug == "imagens_empresa") { ?>


                            <a target="_blank" style="text-decoration:none" href="<?= base_url() ?><?= $f->file_path ?>">

                                <div class="file-item" style="margin-bottom:8px"><span><?= $f->file_path ?></span><button type="button" data-index="1"></button></div>

                            </a>

                        <?php     } ?>



                    <?php } ?>

                </div>


            </div>

            <!-- INFORMAÇÕES DA EMPRESA -->
            <div class="container">
                <h2>Informações da Empresa</h2>
                <label>Nome da Empresa <small style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>

                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_name'] ? $form['company_name'] : '----------'  ?></p>

                <label>Já tem domínio e hospedagem?</label>

                <p style="color:#FF6900;white-space:pre-wrap"><?= $form['company_domain'] ? $form['company_domain'] : '----------' ?></p>

                  
            </div>


            <!-- SERVIÇOS OU PRODUTOS -->
            <div class="container">
                <h2>Serviços ou Produtos</h2>
                <label>Lista completa dos serviços/produtos <small style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_services'] ? $form['company_services'] : '----------' ?></p>

                <label>Descrição de cada serviço/produto</label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_services_descriptions'] ? $form['company_services_descriptions'] : '----------' ?></p>


                <label> Preços de cada serviço/produto</label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_services_prices'] ? $form['company_services_prices'] : '----------' ?></p>


                <label>Arquivos ou Imagens dos serviços/produtos</label>

                <div class="file-list" id="videos-list">

                    <?php foreach ($files as $f) { ?>


                        <?php if ($f->file_slug == "imagens_servicos") { ?>


                            <a target="_blank" style="text-decoration:none" href="<?= base_url() ?><?= $f->file_path ?>">

                                <div class="file-item" style="margin-bottom:8px"><span><?= $f->file_path ?></span><button type="button" data-index="1"></button></div>

                            </a>

                        <?php     } ?>



                    <?php } ?>

                </div>
            </div>

            <!-- VISUAL -->
            <div class="container">
                <h2>Visual & Design</h2>

                <label>Logomarca</label>
                <div class="file-list" id="videos-list">

                    <?php foreach ($files as $f) { ?>


                        <?php if ($f->file_slug == "logomarca") { ?>


                            <a target="_blank" style="text-decoration:none" href="<?= base_url() ?><?= $f->file_path ?>">

                                <div class="file-item" style="margin-bottom:8px"><span><?= $f->file_path ?></span><button type="button" data-index="1"></button></div>

                            </a>

                        <?php     } ?>



                    <?php } ?>

                </div>
                <br>
                <label>Escolha as cores do site</label>
                <br> <br>

                <div class="cores">
                    <div>
                        <label>Cor principal <small style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>

                        <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_main_color'] ? $form['company_main_color'] : '----------' ?></p>
                    </div>
                    <div>
                        <label>Cor secundária</label>
                        <!-- <input type="color" name="cor_secundaria" value="#d4af37"> -->
                        <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_secundary_color'] == '#d4af37' ?  '----------' : $form['company_secundary_color'] ?></p>

                    </div>
                    <div>
                        <label>Cor terciária</label>
                        <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_third_color'] == '#f4f4f4' ?  '----------' : $form['company_third_color'] ?></p>

                        <!-- <input type="color" name="cor_terciaria" value="#f4f4f4"> -->
                    </div>
                </div>
            </div>

            <!-- REDES SOCIAIS -->
            <div class="container">
                <h2>Redes Sociais e Mídia</h2>
                <label>Links das redes sociais</label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_networks'] ? $form['company_networks'] : '----------'  ?></p>

                <label>Depoimentos de clientes/parceiros</label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_testmonials']  ? $form['company_testmonials'] : '----------' ?></p>


                <label>Vídeos institucionais ou promocionais</label>

                <div class="file-list" id="videos-list">

                    <?php foreach ($files as $f) { ?>


                        <?php if ($f->file_slug == "videos") { ?>


                            <a target="_blank" style="text-decoration:none" href="<?= base_url() ?><?= $f->file_path ?>">

                                <div class="file-item" style="margin-bottom:8px"><span><?= $f->file_path ?></span><button type="button" data-index="1"></button></div>

                            </a>

                        <?php     } ?>



                    <?php } ?>

                </div>
            </div>

            <!-- CONTATO -->
            <div class="container">
                <h2>Página de Contato</h2>
                <label>Endereço Completo da empresa <small style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_map_address'] ? $form['company_map_address'] : '----------' ?></p>

                <label>Telefones para contato <small style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_phones'] ? $form['company_phones'] : '----------' ?></p>

                <label>E-mail(s) para contato <small style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
                <p style="color:#FF6900;white-space:pre-wrap"> <?= $form['company_emails'] ? $form['company_emails'] : '----------' ?></p>

            </div>

        </form>
    </div>



    <script>
        $(document).ready(function() {
            loadTags();
        });

        // 🔄 Carregar todas as tags
        function loadTags() {
            $.ajax({
                url: '<?= base_url("painel/act_get_clientes") ?>',
                dataType: 'json',
                success: function(tags) {
                    const tbody = $("#tags-table tbody");
                    tbody.empty();

                    tags.forEach(tag => {
                        tbody.append(`
                    <tr>
                        <td>#${tag.id}</td>
                        <td>${tag.idf_company_name }</td>
                        <td>${tag.company_data}</td>
                        <td>${tag.idf_company_whatsapp  || ''}</td>
                        <td>${tag.idf_company_email  || ''}</td>
                        <td class="actions">
                            <a href="<?= base_url() ?>painel/clientes/ver/${tag.id}">
                                <button >
                                    <i style="color:#FFF" class="fa fa-pen">VER</i>
                                </button>
                            </a>
                            <button onclick="deleteTag(${tag.id})" style="background:#c0392b">
                                <i style="color:#FFF" class="fa fa-trash">X</i>
                            </button>
                        </td>
                    </tr>
                `);
                    });
                }
            });
        }

        // ➕ Adicionar nova tag
        function openAddModal() {
            Swal.fire({
                title: 'Adicionar Tag',
                html: `
            <input id="tag_name" class="swal2-input" placeholder="Nome da tag">
            <input id="tag_slug" class="swal2-input" placeholder="Slug">
            <textarea id="tag_description" class="swal2-textarea" placeholder="Descrição"></textarea>
        `,
                confirmButtonText: 'Salvar',
                preConfirm: () => {
                    return {
                        tag_name: $('#tag_name').val(),
                        tag_slug: $('#tag_slug').val(),
                        tag_description: $('#tag_description').val()
                    };
                }
            }).then(result => {
                if (result.isConfirmed) {
                    $.post('<?= base_url("painel/act_add_tag") ?>', result.value, function() {
                        Swal.fire('Sucesso', 'Tag adicionada!', 'success');
                        loadTags();
                    });
                }
            });
        }

        // ✏️ Editar tag
        function editTag(id, name, slug, description) {
            Swal.fire({
                title: 'Editar Tag',
                html: `
            <input id="tag_name" class="swal2-input" value="${name}">
            <input id="tag_slug" class="swal2-input" value="${slug}">
            <textarea id="tag_description" class="swal2-textarea">${description}</textarea>
        `,
                confirmButtonText: 'Salvar',
                preConfirm: () => {
                    return {
                        tag_id: id,
                        tag_name: $('#tag_name').val(),
                        tag_slug: $('#tag_slug').val(),
                        tag_description: $('#tag_description').val()
                    };
                }
            }).then(result => {
                if (result.isConfirmed) {
                    $.post('<?= base_url("painel/act_update_tag") ?>', result.value, function() {
                        Swal.fire('Atualizado!', 'Tag editada com sucesso.', 'success');
                        loadTags();
                    });
                }
            });
        }

        // 🗑️ Excluir tag
        function deleteTag(id) {
            Swal.fire({
                title: 'Tem certeza?',
                text: "Essa tag será desativada.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then(result => {
                if (result.isConfirmed) {
                    $.post('<?= base_url("painel/act_delete_tag") ?>', {
                        tag_id: id
                    }, function() {
                        Swal.fire('Removida!', 'A tag foi excluída.', 'success');
                        loadTags();
                    });
                }
            });
        }
    </script>

</body>

</html>