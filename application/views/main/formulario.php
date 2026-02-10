<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Informações da Empresa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <style>
    :root {
      --cor-principal: #FF6900;
      --cor-sec: #ffffff;
      --accent: #25D366;
      --bg: #f6f7fb;
      --card: #ffffff;
      --radius: 12px;
      --text: #12202b;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Roboto", sans-serif;
    }

    body {
      background: var(--cor-secundaria);
      color: #222;
      line-height: 1.5;
    }

    header {
      background: var(--cor-principal);
      text-align: center;
      padding: 50px 15px;
    }

    header h1 {
      font-size: 2rem;
      color: #fff;
    }

    header p {
      color: #fff;
    }

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

    /* ==== Upload bonito ==== */
    .upload-area {
      border: 2px dashed var(--cor-principal);
      border-radius: 10px;
      padding: 25px;
      text-align: center;
      color: var(--cor-principal);
      background: #fffdfb;
      cursor: pointer;
      transition: 0.3s;
      margin-bottom: 10px;
    }

    .upload-area:hover {
      background: #fff5ed;
    }

    .upload-area input[type="file"] {
      display: none;
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


    label {
      font-weight: 600;
      display: block;
      margin-bottom: 1px !important;
    }

    .description {
      padding-bottom: 15px !important;
      color: gray !important;
    }
  </style>
</head>

<body>

  <header>
    <h1>Formulário de Informações para Criação</h1>
    <p>Preencha o <b>máximo</b> de informações para montarmos o seu site mais rápido.</p>
  </header>

  <form id="formEmpresa" enctype="multipart/form-data">

    <br>
    <!-- SOBRE A EMPRESA -->
    <div class="container">
      <h2>Sobre a Empresa</h2>
      <label>Breve história da sua empresa</label>
      <textarea name="historia"></textarea>
      <label>Descrição do que a empresa faz <small
          style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
      <textarea name="descricao_empresa" id="descricao_empresa"></textarea>

      <label>Arquivos ou Imagens da empresa, equipe, espaço físico etc.</label>
      <small class="description">Você pode enviar vários arquivos.</small>
      <br><br>
      <div class="upload-area" data-target="imagens_empresa">
        <i class="fa fa-cloud-upload-alt"></i> Clique ou arraste arquivos aqui
        <input type="file" name="imagens_empresa[]" multiple>
      </div>
      <div class="file-list" id="imagens_empresa-list"></div>
    </div>

    <!-- INFORMAÇÕES DA EMPRESA -->
    <div class="container">
      <h2>Informações da Empresa</h2>
      <label>Nome da Empresa <small
          style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
      <input type="text" name="nome_empresa" id="nome_empresa" required>

      <label>Já tem domínio e hospedagem?</label>
      <textarea name="dominio" rows="2" placeholder="Se sim, envie os acessos"></textarea>
    </div>


    <!-- SERVIÇOS OU PRODUTOS -->
    <div class="container">
      <h2>Serviços ou Produtos</h2>
      <label>Lista completa dos serviços/produtos <small
          style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
      <textarea name="servicos" id="servicos"></textarea>

      <label>Descrição de cada serviço/produto</label>
      <textarea name="descricao_servicos"></textarea>

      <label>Preços de cada serviço/produto</label>
      <textarea name="precos"></textarea>

      <label>Arquivos ou Imagens dos serviços/produtos</label>
      <small class="description">Você pode enviar vários arquivos.</small>
      <br><br>
      <div class="upload-area" data-target="imagens_servicos">
        <i class="fa fa-cloud-upload-alt"></i> Clique ou arraste arquivos aqui
        <input type="file" name="imagens_servicos[]" multiple>
      </div>
      <div class="file-list" id="imagens_servicos-list"></div>
    </div>

    <!-- VISUAL -->
    <div class="container">
      <h2>Visual & Design</h2>

      <label>Logomarca</label>
      <small class="description">Arquivos da sua logo e identidade visual. Você pode enviar vários arquivos.</small>
      <br><br>
      <div class="upload-area" data-target="logomarca">
        <i class="fa fa-cloud-upload-alt"></i> Envie sua logomarca & identidade visual
        <input type="file" name="logomarca[]" multiple>
      </div>
      <div class="file-list" id="logomarca-list"></div>
      <br>
      <label>Escolha as cores do site</label>
      <small class="description">Clique na cor para altera-lá.</small>
      <br> <br>

      <div class="cores">
        <div>
          <label>Cor principal <small
              style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
          <input type="color" name="cor_principal" id="cor_principal" value="#0c2340">
        </div>
        <div>
          <label>Cor secundária</label>
          <input type="color" name="cor_secundaria" value="#d4af37">
        </div>
        <div>
          <label>Cor terciária</label>
          <input type="color" name="cor_terciaria" value="#f4f4f4">
        </div>
      </div>
    </div>

    <!-- REDES SOCIAIS -->
    <div class="container">
      <h2>Redes Sociais e Mídia</h2>
      <label>Links das redes sociais</label>
      <textarea name="redes"></textarea>
      <label>Depoimentos de clientes/parceiros</label>
      <textarea name="depoimentos"></textarea>

      <label>Vídeos institucionais ou promocionais</label>
      <small class="description">Você pode enviar vários arquivos.</small>
      <br><br>
      <div class="upload-area" data-target="videos">
        <i class="fa fa-cloud-upload-alt"></i> Envie vídeos institucionais
        <input type="file" name="videos[]" multiple>
      </div>
      <div class="file-list" id="videos-list"></div>
    </div>

    <!-- CONTATO -->
    <div class="container">
      <h2>Página de Contato</h2>
      <label>Endereço Completo da empresa </small></label>
      <input type="text" id="endereco" name="mapa">
      <label>Telefones para contato <small
          style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
      <input type="text" name="telefones" id="telefones" placeholder="Ex: (11) 99999-9999 / (11) 3333-3333">
      <label>E-mail(s) para contato <small
          style="font-size: 15px;text-transform:uppercase;color:#e74c3c;margin-bottom:8px"><strong>*</strong></small></label>
      <input type="email" name="emails" id="emails" placeholder="Ex: exemplo@dominio.com / exemplo@dominio.com">
    </div>

    <div class="container-footer">
      <div style="display:flex;gap:10px;margin-top:12px;flex-wrap:wrap;justify-content:end;margin-top:30px">
        <a href="<?= base_url() ?>/identificacao">
          <button type="button" id="btnVoltar" class="btn btn-whats"><i class="fa fa-arrow-left"></i> VOLTAR</button>
        </a>
        <button type="button" id="btnEnviar" class="btn btn-primary">SALVAR E CONTINUAR <i
            class="fa fa-arrow-right"></i></button>
        <button type="button" style="display: none;" disabled id="btnEnviarLoading" class="btn btn-primary"><i
            style="color:#FFF" class="fa fa-spinner"></i> ENVIANDO. AGUARDE...</button>
      </div>
    </div>

  </form>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.all.min.js"></script>


  <script>
    const uploads = {};

    document.querySelectorAll('.upload-area').forEach(area => {
      const input = area.querySelector('input[type="file"]');
      const target = area.dataset.target;
      const fileList = document.getElementById(target + '-list');
      uploads[target] = [];

      area.addEventListener('click', () => input.click());

      input.addEventListener('change', e => {
        const newFiles = Array.from(e.target.files);
        const maxSize = 30 * 1024 * 1024; // 30MB

        const validFiles = newFiles.filter(file => {
          if (file.size > maxSize) {
            Swal.fire({
              title: 'Arquivo muito grande',
              text: `O arquivo "${file.name}" excede o limite de 30MB.`,
              icon: 'warning',
              confirmButtonColor: '#FF6900'
            });
            return false;
          }
          return true;
        });

        uploads[target].push(...validFiles);
        renderFiles(target);
        input.value = '';
      });

      function renderFiles(key) {
        fileList.innerHTML = '';
        uploads[key].forEach((file, index) => {
          const item = document.createElement('div');
          item.classList.add('file-item');
          item.innerHTML = `<span>${file.name}</span><button type="button" data-index="${index}"><i class="fa fa-times"></i></button>`;
          item.querySelector('button').addEventListener('click', () => {
            uploads[key].splice(index, 1);
            renderFiles(key);
          });
          fileList.appendChild(item);
        });
      }
    });

    $('#btnEnviar').on('click', function () {


      const formData = new FormData(document.getElementById('formEmpresa'));

      for (const [key, files] of Object.entries(uploads)) {
        files.forEach(file => formData.append(`${key}[]`, file));
      }

      //  --- VERIFICAÇÃO ---

      nome_empresa = document.getElementById('nome_empresa').value;
      descricao_empresa = document.getElementById('descricao_empresa').value;
      servicos = document.getElementById('servicos').value;
      cor_principal = document.getElementById('cor_principal').value;
      telefones = document.getElementById('telefones').value;
      emails = document.getElementById('emails').value;
      endereco = document.getElementById('endereco').value;


      if (nome_empresa.length == 0) {

        Swal.fire({
          title: 'Informações da Empresa',
          text: 'Preencha o nome da empresa.',
          icon: 'warning',
          confirmButtonText: 'OK',
          confirmButtonColor: "#FF6900"
        })

        return;

      } else if (descricao_empresa.length == 0) {

        Swal.fire({
          title: 'Sobre a Empresa',
          text: 'Preencha a Descrição do que a empresa faz.',
          icon: 'warning',
          confirmButtonText: 'OK',
          confirmButtonColor: "#FF6900"
        })

        return;

      } else if (servicos.length == 0) {

        Swal.fire({
          title: 'Serviços ou Produtos',
          text: 'Preencha a Lista completa dos serviços/produtos.',
          icon: 'warning',
          confirmButtonText: 'OK',
          confirmButtonColor: "#FF6900"
        })

        return;

      } else if (cor_principal.length == 0 || cor_principal == '#0c2340') {

        Swal.fire({
          title: 'Visual & Design',
          text: 'Preencha a Cor principal.',
          icon: 'warning',
          confirmButtonText: 'OK',
          confirmButtonColor: "#FF6900"
        })

        return;

      } else if (telefones.length == 0) {

        Swal.fire({
          title: 'Página de Contato',
          text: 'Preencha os Telefones para contato.',
          icon: 'warning',
          confirmButtonText: 'OK',
          confirmButtonColor: "#FF6900"
        })

        return;

      } else if (emails.length == 0) {

        Swal.fire({
          title: 'Página de Contato',
          text: 'Preencha os E-mail(s) para contato.',
          icon: 'warning',
          confirmButtonText: 'OK',
          confirmButtonColor: "#FF6900"
        })

        return;

      }

      //  --- VERIFICAÇÃO ---


      document.getElementById('btnEnviar').style.display = 'none';
      document.getElementById('btnEnviarLoading').style.display = 'block';


      $.ajax({
        url: '<?= base_url() ?>formulario/act_add_form',
        type: 'POST',
        data: formData,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function (res) {



          console.log(res.status)

          if (res.status) {

            window.location.href = "<?= base_url() ?>opcional"

          } else {

            Swal.fire({
              title: '',
              text: 'Houve um erro ao enviar. Tente novamente.',
              icon: 'error',
              confirmButtonText: 'OK',
              confirmButtonColor: "#FF6900"
            })

          }


        },
        error: function () {
          Swal.fire({
            title: '',
            text: 'Houve um erro ao enviar',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonColor: "#FF6900"
          })
        }
      });
    });
  </script>
</body>

</html>