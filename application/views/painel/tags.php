<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Gerenciar Tags</title>
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
    </style>
</head>

<body style="margin:0px">

    <header>



        <div style="display:flex;justify-content:space-between;width:70%;margin-left:15%">

            <div>
                <center>
                    <br><br>
                    <a href="<?= base_url() ?>painel">
                        <button style="padding:12px; background-color:#fff;border:1px solid #fff;color:#FF6900;cursor:pointer">VOLTAR</button>
                    </a>
                </center>
            </div>
            <div>
                <h1><small></small> <br>Gerenciar Tags</h1>
                <br>
                <p></p>
            </div>
            <div>
                <center>
                    <br><br>

                    <button onclick="openAddModal()" style="padding:12px; background-color:#fff;border:1px solid #fff;color:#FF6900;cursor:pointer">CRIAR TAG</button>

                </center>
            </div>
        </div>
    </header>


    <table id="tags-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Slug</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        $(document).ready(function() {
            loadTags();
        });

        // 🔄 Carregar todas as tags
        function loadTags() {
            $.ajax({
                url: '<?= base_url("painel/act_get_tags") ?>',
                dataType: 'json',
                success: function(tags) {
                    const tbody = $("#tags-table tbody");
                    tbody.empty();

                    tags.forEach(tag => {
                        tbody.append(`
                    <tr>
                        <td>${tag.id}</td>
                        <td>${tag.tag_name}</td>
                        <td>${tag.tag_slug}</td>
                        <td>${tag.tag_description || ''}</td>
                        <td class="actions">
                            <button onclick="editTag(${tag.id}, '${tag.tag_name}', '${tag.tag_slug}', \`${tag.tag_description || ''}\`)">
                                <i style="color:#FFF" class="fa fa-pen">EDITAR</i>
                            </button>
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