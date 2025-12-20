<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informações da Empresa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a2e0e9b6b1.js" crossorigin="anonymous"></script>
  <style>
    .file-preview {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
      margin-top: 0.5rem;
      transition: all 0.3s ease;
    }
    .file-preview:hover {
      background: #f1f5f9;
    }
    .file-preview i {
      margin-right: 8px;
      color: #475569;
    }
    .remove-btn {
      color: #ef4444;
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">
  <div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6 text-center">🧾 Formulário de Informações da Empresa</h1>

    <form id="empresaForm" class="space-y-8" enctype="multipart/form-data">

      <!-- INFORMAÇÕES DA EMPRESA -->
      <section class="bg-white shadow-md rounded-2xl p-6 space-y-4">
        <h2 class="text-xl font-semibold border-b pb-2">Informações da Empresa</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="nome" placeholder="Nome da empresa/marca" class="border p-3 rounded-xl w-full">
          <input type="text" name="cnpj" placeholder="CNPJ" class="border p-3 rounded-xl w-full">
          <input type="text" name="endereco" placeholder="Endereço completo" class="border p-3 rounded-xl w-full md:col-span-2">
          <input type="text" name="telefone" placeholder="Telefones para contato" class="border p-3 rounded-xl w-full">
          <input type="email" name="email" placeholder="E-mail para contato" class="border p-3 rounded-xl w-full">
          <textarea name="dominio" placeholder="Já tem domínio e hospedagem? (Se sim, envie os acessos)" class="border p-3 rounded-xl w-full md:col-span-2"></textarea>
        </div>
      </section>

      <!-- SOBRE A EMPRESA -->
      <section class="bg-white shadow-md rounded-2xl p-6 space-y-4">
        <h2 class="text-xl font-semibold border-b pb-2">Sobre a Empresa</h2>

        <textarea name="historia" placeholder="Breve história da empresa" class="border p-3 rounded-xl w-full"></textarea>
        <textarea name="missao" placeholder="Missão, visão e valores" class="border p-3 rounded-xl w-full"></textarea>
        <textarea name="descricao" placeholder="Descrição do que a empresa faz" class="border p-3 rounded-xl w-full"></textarea>
      </section>

      <!-- SERVIÇOS OU PRODUTOS -->
      <section class="bg-white shadow-md rounded-2xl p-6 space-y-4">
        <h2 class="text-xl font-semibold border-b pb-2">Serviços ou Produtos</h2>

        <textarea name="servicos" placeholder="Lista de serviços ou produtos oferecidos" class="border p-3 rounded-xl w-full"></textarea>
        <textarea name="descricao_servicos" placeholder="Descrição de cada serviço/produto" class="border p-3 rounded-xl w-full"></textarea>
        <input type="text" name="precos" placeholder="Preços (se for exibir no site)" class="border p-3 rounded-xl w-full">

        <label class="block font-semibold">📸 Imagens dos serviços/produtos:</label>
        <input type="file" name="imagens_produtos[]" multiple class="border p-3 rounded-xl w-full file-input">
        <div class="file-list space-y-2"></div>
      </section>

      <!-- CONTEÚDOS PARA O SITE -->
      <section class="bg-white shadow-md rounded-2xl p-6 space-y-4">
        <h2 class="text-xl font-semibold border-b pb-2">Conteúdos para o Site</h2>

        <label class="block font-semibold">🖼 Logomarca:</label>
        <input type="file" name="logomarca[]" multiple class="border p-3 rounded-xl w-full file-input">
        <div class="file-list space-y-2"></div>

        <textarea name="textos" placeholder="Textos ou frases para o site" class="border p-3 rounded-xl w-full"></textarea>

        <label class="block font-semibold">📷 Imagens da empresa, equipe, espaço físico:</label>
        <input type="file" name="imagens_empresa[]" multiple class="border p-3 rounded-xl w-full file-input">
        <div class="file-list space-y-2"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div>
            <label class="font-semibold block mb-1">Cor Principal</label>
            <input type="color" name="cor_principal" class="border p-2 rounded-xl w-full">
          </div>
          <div>
            <label class="font-semibold block mb-1">Cor Secundária</label>
            <input type="color" name="cor_secundaria" class="border p-2 rounded-xl w-full">
          </div>
          <div>
            <label class="font-semibold block mb-1">Cor Terciária</label>
            <input type="color" name="cor_terciaria" class="border p-2 rounded-xl w-full">
          </div>
        </div>
      </section>

      <!-- REDES SOCIAIS -->
      <section class="bg-white shadow-md rounded-2xl p-6 space-y-4">
        <h2 class="text-xl font-semibold border-b pb-2">Redes Sociais e Mídia</h2>
        <input type="text" name="instagram" placeholder="Instagram" class="border p-3 rounded-xl w-full">
        <input type="text" name="facebook" placeholder="Facebook" class="border p-3 rounded-xl w-full">
        <input type="text" name="youtube" placeholder="YouTube" class="border p-3 rounded-xl w-full">
        <input type="text" name="linkedin" placeholder="LinkedIn" class="border p-3 rounded-xl w-full">

        <label class="block font-semibold">🎥 Vídeos institucionais ou promocionais:</label>
        <input type="file" name="videos[]" multiple class="border p-3 rounded-xl w-full file-input">
        <div class="file-list space-y-2"></div>
      </section>

      <!-- PÁGINA DE CONTATO -->
      <section class="bg-white shadow-md rounded-2xl p-6 space-y-4">
        <h2 class="text-xl font-semibold border-b pb-2">Página de Contato</h2>
        <input type="text" name="mapa" placeholder="Endereço para mapa (Google Maps)" class="border p-3 rounded-xl w-full">
        <input type="text" name="whatsapp_contato" placeholder="WhatsApp para contato" class="border p-3 rounded-xl w-full">
        <textarea name="formulario_campos" placeholder="Campos desejados no formulário de contato" class="border p-3 rounded-xl w-full"></textarea>
      </section>

      <div class="text-center pt-6">
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700">
          Enviar Informações
        </button>
      </div>
    </form>
  </div>

  <script>
    // Ícones por tipo de arquivo
    const icons = {
      'image': 'fa-regular fa-image',
      'video': 'fa-solid fa-video',
      'pdf': 'fa-regular fa-file-pdf',
      'word': 'fa-regular fa-file-word',
      'excel': 'fa-regular fa-file-excel',
      'default': 'fa-regular fa-file'
    };

    // Função de exibição e remoção
    document.querySelectorAll('.file-input').forEach(input => {
      input.addEventListener('change', function () {
        const fileListDiv = this.nextElementSibling;
        fileListDiv.innerHTML = '';
        Array.from(this.files).forEach((file, index) => {
          const fileType = file.type;
          let iconClass = icons.default;
          if (fileType.includes('image')) iconClass = icons.image;
          else if (fileType.includes('video')) iconClass = icons.video;
          else if (fileType.includes('pdf')) iconClass = icons.pdf;
          else if (fileType.includes('word')) iconClass = icons.word;
          else if (fileType.includes('excel')) iconClass = icons.excel;

          const fileDiv = document.createElement('div');
          fileDiv.classList.add('file-preview');
          fileDiv.innerHTML = `
            <div class="flex items-center">
              <i class="${iconClass}"></i>
              <span>${file.name}</span>
            </div>
            <span class="remove-btn"><i class="fa-solid fa-xmark"></i></span>
          `;
          fileListDiv.appendChild(fileDiv);

          fileDiv.querySelector('.remove-btn').addEventListener('click', () => {
            fileDiv.remove();
            const dt = new DataTransfer();
            const files = Array.from(this.files);
            files.splice(index, 1);
            files.forEach(f => dt.items.add(f));
            this.files = dt.files;
          });
        });
      });
    });

    // Envio do formulário (via FormData)
    document.getElementById('empresaForm').addEventListener('submit', e => {
      e.preventDefault();
      const formData = new FormData(e.target);
      fetch('server.php', {
        method: 'POST',
        body: formData
      }).then(r => alert('Informações enviadas com sucesso!'));
    });
  </script>
</body>
</html>
