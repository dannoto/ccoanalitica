<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Modelo</title>
    <meta name="description" content="Edite as informações do modelo de site que deseja atualizar.">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-D1A7eUwYd+1I4Mbmcq+uLf66W5k3o7sR5oUuE/hcI6rjV5ZbQ/lS7hIlV4a4t5q7+fCvw2HdyE9eP2N93+qZVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --cor-principal: #FF6900;
            --cor-secundaria: #f4f4f4;
            --texto-claro: #fff;
            --texto-escuro: #222;
            --radius: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }

        input {
            width: 100%;
            height: 40px;
            padding: 8px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: var(--radius);
        }

        button {
            width: 100%;
            height: 45px;
            padding: 10px;
            border-radius: var(--radius);
            border: none;
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
            padding: 20px 15px;
        }

        header h1 {
            font-size: 2rem;
        }

        section.modelos {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .btn {
            display: block;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn--outline {
            background: var(--cor-principal);
            color: var(--texto-claro);
        }

        .btn--outline:hover {
            background: #e05e00;
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
                font-size: 1.5rem;
            }
        }
    </style>

    <style>
        .tag-container {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 5px;
            background: #fff;
        }

        .tag-container input {
            border: none;
            outline: none;
            flex: 1;
            min-width: 120px;
            padding: 8px;
        }

        .selected-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .tag {
            background: #ff6900;
            color: white;
            border-radius: 6px;
            padding: 5px 8px;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .tag i {
            cursor: pointer;
            color: #fff;
            font-size: 12px;
        }

        .tag-suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-top: 2px;
            z-index: 10;
            display: none;
            max-height: 150px;
            overflow-y: auto;
        }

        .tag-suggestions div {
            padding: 8px 10px;
            cursor: pointer;
        }

        .tag-suggestions div:hover {
            background: #f4f4f4;
        }
    </style>
</head>

<body>

    <header>



        <div style="display:flex;justify-content:space-between;width:70%;margin-left:15%">

            <div>
                <h1><small></small> <br>Editar Modelo </h1>
                <br>
                <p></p>
            </div>
            <div>
                <center>
                    <br><br>
                    <a href="<?= base_url() ?>painel/modelos">
                        <button style="padding:12px; background-color:#fff;border:1px solid #fff;color:#FF6900;cursor:pointer">VOLTAR</button>
                    </a>
                </center>
            </div>
        </div>
    </header>

    <section class="modelos">

        <div style="margin: 0 auto; width: 100%; max-width: 600px;">
            <form id="update_model" action="">

                <input type="hidden" name="id" value="<?= $modelo['id'] ?>">

                <label for="model_title">TÍTULO</label>
                <input id="model_title" name="model_title" value="<?= $modelo['model_title'] ?>" type="text" required>

                <label for="model_image">IMAGEM</label>
                <input id="model_image" name="model_image" value="<?= $modelo['model_image'] ?>" type="text">

                <label for="model_link">LINK DO MODELO</label>
                <input id="model_link" name="model_link" value="<?= $modelo['model_link'] ?>" type="text">

                <label for="model_description">DESCRIÇÃO</label>
                <input id="model_description" name="model_description" value="<?= $modelo['model_description'] ?>" type="text">

                <label for="model_language">LINGUAGEM / CMS</label>
                <input id="model_language" name="model_language" value="<?= $modelo['model_language'] ?>" type="text">

                <!-- 🔽 NOVO CAMPO DE TAGS -->
                <label for="tag_input">TAGS</label>
                <div class="tag-container">
                    <div id="selected-tags" class="selected-tags">


                    </div>
                    <input id="tag_input" type="text" placeholder="Digite para buscar tags...">
                    <div id="tag-suggestions" class="tag-suggestions">


                    </div>
                </div>
                <input type="hidden" name="tags" id="tags_hidden">
                <br><br>

                <button type="submit" class="btn btn--outline">SALVAR ALTERAÇÕES</button>

                <br><br>
                <button id="excluir-modelo">EXCLUIR MODELO</button>
            </form>
        </div>

    </section>

    <footer>
        <p>&copy; <?= date('Y') ?> - Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('#update_model').on('submit', function(e) {
            e.preventDefault(); // Impede o reload da página

            var dados = $(this).serialize();

            $.ajax({
                url: '<?= base_url() ?>painel/act_update_model',
                type: 'POST',
                data: dados,
                // dataType: 'json',
                success: function(res) {

                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'Modelo atualizado com sucesso.',
                        icon: 'success',
                        confirmButtonColor: '#FF6900'
                    }).then(() => {
                        window.location.href = "<?= base_url('painel/modelos') ?>";
                    });


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
        });

        $('#excluir-modelo').on('click', function(e) {
            $.ajax({
                url: '<?= base_url() ?>painel/act_delete_model',
                type: 'POST',
                data: {id: "<?$modelo['id']?>"},
                // dataType: 'json',
                success: function(res) {

                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'Modelo excluido com sucesso.',
                        icon: 'success',
                        confirmButtonColor: '#FF6900'
                    }).then(() => {
                        window.location.href = "<?= base_url('painel/modelos') ?>";
                    });


                },
                error: function() {
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Não foi possível excluir o servidor.',
                        icon: 'error',
                        confirmButtonColor: '#FF6900'
                    });
                }
            });
        })
    </script>

    <!-- <script>
        const selectedTags = [];
        const $input = $('#tag_input');
        const $suggestions = $('#tag-suggestions');
        const $selectedTags = $('#selected-tags');
        const $tagsHidden = $('#tags_hidden');

        // 🔍 Buscar sugestões de tags no servidor
        $input.on('input', function() {
            const query = $(this).val();

            if (query.length < 1) {
                $suggestions.hide();
                return;
            }

            $.ajax({
                url: '<?= base_url("painel/act_search_tag") ?>', // endpoint que retorna JSON de tags [{id, tag_name}]
                type: 'GET',
                data: {
                    q: query
                },
                success: function(res) {
                    $suggestions.empty();
                    if (res.length > 0) {
                        res.forEach(tag => {
                            $suggestions.append(`<div data-id="${tag.id}" data-name="${tag.tag_name}">${tag.tag_name}</div>`);
                        });
                        $suggestions.show();
                    } else {
                        $suggestions.hide();
                    }
                }
            });
        });

        // 🟠 Clicar em sugestão → adiciona tag
        $suggestions.on('click', 'div', function() {
            const id = $(this).data('id');
            const name = $(this).data('name');

            if (!selectedTags.some(t => t.id === id)) {
                selectedTags.push({
                    id,
                    name
                });
                renderTags();
            }

            $input.val('');
            $suggestions.hide();
        });

        // ❌ Remover tag ao clicar no ícone
        $selectedTags.on('click', 'i', function() {
            const id = $(this).parent().data('id');
            const index = selectedTags.findIndex(t => t.id === id);
            if (index !== -1) selectedTags.splice(index, 1);
            renderTags();
        });

        // 🧩 Atualizar tags visuais + campo hidden
        function renderTags() {
            $selectedTags.empty();
            selectedTags.forEach(tag => {
                $selectedTags.append(
                    `<div class="tag" data-id="${tag.id}">${tag.name} <i class="fa fa-times"></i></div>`
                );
            });

            $tagsHidden.val(selectedTags.map(t => t.id).join(','));
        }

        // Fechar sugestões ao clicar fora
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.tag-container').length) {
                $suggestions.hide();
            }
        });
    </script> -->
    <script>
        const selectedTags = [];
        const $input = $('#tag_input');
        const $suggestions = $('#tag-suggestions');
        const $selectedTags = $('#selected-tags');
        const $tagsHidden = $('#tags_hidden');
        const modelId = <?= $modelo['id'] ?>;

        // 🟢 1. Carregar tags já associadas ao modelo
        function loadModelTags() {
            $.ajax({
                url: '<?= base_url("painel/act_get_tags_by_model") ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    model_id: modelId
                },
                success: function(res) {
                    selectedTags.length = 0;
                    res.forEach(tag => {
                        selectedTags.push({
                            id: tag.id,
                            name: tag.tag_name,
                            rel_id: tag.id,
                            model_tag_id: tag.model_tag_id

                        });
                    });
                    renderTags();
                }
            });
        }

        // 🔍 2. Buscar tags ao digitar
        $input.on('input', function() {
            const query = $(this).val();
            if (query.length < 1) {
                $suggestions.hide();
                return;
            }

            $.ajax({
                url: '<?= base_url("painel/act_search_tag") ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    query
                },
                success: function(res) {
                    $suggestions.empty();
                    if (res.length > 0) {
                        res.forEach(tag => {
                            $suggestions.append(`<div data-id="${tag.id}" data-name="${tag.tag_name}">${tag.tag_name}</div>`);
                        });
                        $suggestions.show();
                    } else {
                        $suggestions.hide();
                    }
                }
            });
        });

        // 🟠 3. Adicionar tag ao clicar na sugestão
        $suggestions.on('click', 'div', function() {
            const id = $(this).data('id');
            const name = $(this).data('name');

            // Evita duplicação
            if (selectedTags.some(t => t.id == id)) {
                $input.val('');
                $suggestions.hide();
                return;
            }

            // Adiciona no banco
            $.ajax({
                url: '<?= base_url("painel/add_tag_to_model") ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    tag_id: id,
                    model_id: modelId
                },
                success: function() {
                    selectedTags.push({
                        id,
                        name
                    });
                    // renderTags();

                }
            });
            loadModelTags();
            $input.val('');
            $suggestions.hide();
        });

        // ❌ 4. Remover tag do modelo
        $selectedTags.on('click', 'i', function() {
            const relId = $(this).parent().data('rel-id');
            const modelTag = $(this).parent().data('model-tag');

            const tagId = $(this).parent().data('id');

            $.ajax({
                url: '<?= base_url("painel/remove_tag_to_model") ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: modelTag
                },
                success: function() {
                    const index = selectedTags.findIndex(t => t.id == tagId);
                    if (index !== -1) selectedTags.splice(index, 1);
                    // renderTags();
                    loadModelTags();
                }
            });
        });

        // 🧩 Renderizar tags na tela
        function renderTags() {
            $selectedTags.empty();
            selectedTags.forEach(tag => {

                console.log(tag)
                $selectedTags.append(`
            <div class="tag" data-id="${tag.id}" data-rel-id="${tag.id || ''}" data-model-tag ="${tag.model_tag_id}">
                ${tag.name} <i style="color:#FFF" class="fa fa-times">X</i>
            </div>
        `);
            });

            $tagsHidden.val(selectedTags.map(t => t.id).join(','));
        }

        // Fechar sugestões ao clicar fora
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.tag-container').length) {
                $suggestions.hide();
            }
        });

        // 🚀 Inicia carregando as tags do modelo
        $(document).ready(loadModelTags);
    </script>


</body>

</html>