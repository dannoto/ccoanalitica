<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cadastro - Escolha do Modelo | Seu Site Profissional</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      box-sizing: border-box;

      font-family: "Roboto", Sans-serif;

    }

    body {
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial;
      margin: 0;
      background: var(--bg);
      color: var(--text);
      -webkit-font-smoothing: antialiased
    }

    header {
      background: var(--cor-principal);
      color: var(--cor-sec);
      padding: 48px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 1.8rem
    }

    header p {
      margin-top: 8px;
      opacity: .95
    }

    .container {
      max-width: 1100px;
      margin: 28px auto;
      padding: 20px
    }

    .grid {
      display: grid;
      gap: 28px
    }

    @media(max-width:995px) {
      .grid {
        grid-template-columns: 1fr
      }
    }

    .main-card {
      background: var(--card);
      border-radius: var(--radius);
      padding: 20px;
      box-shadow: 0 8px 30px rgba(12, 35, 64, 0.06)
    }

    .side-card {
      background: var(--card);
      border-radius: var(--radius);
      padding: 18px;
      box-shadow: 0 8px 30px rgba(12, 35, 64, 0.04)
    }

    h2 {
      margin: 0 0 12px;
      font-size: 1.2rem
    }

    p.lead {
      margin: 0 0 16px;
      color: #475569
    }

    form .row {
      display: flex;
      gap: 12px;
      flex-wrap: wrap
    }

    label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
      font-size: 13px
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid rgba(8, 22, 40, 0.08);
      border-radius: 8px;
      background: transparent;
      font-size: 14px;
      color: var(--text)
    }

    textarea {
      min-height: 100px;
      resize: vertical
    }

    .field {
      margin-bottom: 12px
    }

    .muted {
      color: #61748a;
      font-size: 13px;
      margin-top: 6px
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 12px 16px;
      border-radius: 10px;
      border: 0;
      font-weight: 700;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-primary {
      background: var(--cor-principal);
      color: #fff
    }

    .btn-whats {
      background: var(--accent);
      color: #fff
    }

    .btn-ghost {
      background: transparent;
      border: 1px solid rgba(8, 22, 40, 0.06);
      color: var(--text)
    }

    .toggle-type {
      display: flex;
      gap: 8px;
      margin-bottom: 10px;
      align-items: center
    }

    .chip {
      padding: 8px 12px;
      border-radius: 999px;
      border: 1px solid rgba(8, 22, 40, 0.06);
      cursor: pointer;
      background: #fff
    }

    .chip.active {
      border-color: var(--cor-principal);
      box-shadow: 0 6px 18px rgba(12, 35, 64, 0.06)
    }

    .model-preview {
      display: flex;
      gap: 12px;
      align-items: center
    }

    .model-preview img {
      width: 84px;
      height: 64px;
      object-fit: cover;
      border-radius: 8px;
      border: 1px solid rgba(8, 22, 40, 0.04)
    }

    .model-name {
      font-weight: 700;
      font-size: 14px
    }

    .small {
      font-size: 13px;
      color: #475569
    }

    .legal {
      font-size: 13px;
      color: #51606f;
      margin-top: 8px
    }

    /* modal contrato */
    .modal {
      position: fixed;
      inset: 0;
      display: none;
      align-items: center;
      justify-content: center;
      background: rgba(3, 7, 18, 0.6);
      z-index: 120
    }

    .modal.open {
      display: flex
    }

    .modal-card {
      width: min(920px, 96%);
      max-height: 88vh;
      overflow: auto;
      background: var(--card);
      padding: 18px;
      border-radius: 10px
    }

    .modal-card h3 {
      margin-top: 0
    }

    .modal-footer {
      display: flex;
      gap: 10px;
      justify-content: flex-end;
      margin-top: 12px
    }

    .alert {
      padding: 12px;
      border-radius: 10px;
      background: #eef7f4;
      border: 1px solid #cfece0;
      color: #0b6a4b;
      margin-top: 10px
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
      background: #FF6900;
      color: #fff
    }

    .btn-whats {
      border: 1px solid #25D366;
      background-color: transparent;
      color: #25D366;
    }
  </style>
</head>

<body>

  <header>
    <h1>Contrato de Prestação de Serviço</h1>
    <p>Leia atentamente o contrato de prestação de serviços. </p>
  </header>

  <main class="container">
    <div class="grid">

      <div class="contrato" style="height: 450px;overflow-y:scroll">
        <br>

        <center>
          <h2 class="text-center">CONTRATO DE PRESTAÇÃO DE SERVIÇOS<br>DESENVOLVIMENTO DE SITE</h2>
        </center>

        <p>
          <strong>CONTRATANTE:</strong><br>
          <?= $dados['idf_company_name'] ?>,
          inscrita no CPF nº <?= $dados['idf_company_document'] ?>,
          com sede na <?= $dados['idf_company_logradouro'] ?>
          <?= !empty($dados['idf_company_numero']) ? ', nº ' . $dados['idf_company_numero'] : '' ?>
          <?= !empty($dados['idf_company_complemento']) ? ', ' . $dados['idf_company_complemento'] : '' ?>
          <?= ' - ' . $dados['idf_company_bairro'] ?>,
          <?= $dados['idf_company_cidade'] ?>/<?= $dados['idf_company_estado'] ?> –
          CEP <?= $dados['idf_company_cep'] ?>
        </p>

        <p><strong>CONTRATADA:</strong><br>
          CCO ANALÍTICA LTDA, inscrita no CNPJ nº 50.108.880/0001-92, com sede na Rua Alumínio, nº 2, Apto 107 - Aparecida de Goiânia, Goiás/GO - 74955-030.<br>
          <a href="https://www.ccoanalitica.com" target="_blank">www.ccoanalitica.com</a><br>
        </p>

        <h3>CLÁUSULA PRIMEIRA – DA PRESTAÇÃO DE SERVIÇOS</h3>
        <p>1. O serviço a ser prestado pela CONTRATADA consiste no desenvolvimento de um website para a CONTRATANTE, com estrutura previamente definida a partir de modelo escolhido pela CONTRATANTE.</p>
        <p>2. O desenvolvimento será realizado com base em informações fornecidas pela CONTRATANTE, tais como conteúdo, imagens, dados institucionais, entre outros.</p>

        <h3>CLÁUSULA SEGUNDA – DAS CONDIÇÕES DE PRESTAÇÃO DOS SERVIÇOS</h3>
        <p><strong>Obrigações da CONTRATADA:</strong></p>
        <ol>
          <li>Utilizar recursos que facilitem a navegação entre páginas, tratamento de imagens, codificação e programação visual, assegurando ao projeto boa usabilidade, desempenho e design.</li>
          <li>Realizar manutenção e atualizações gratuitas por até 30 (trinta) dias após a entrega do site. Após esse prazo, quaisquer serviços de suporte deverão ser contratados separadamente, mediante novo acordo.</li>
          <li>A CONTRATADA não está obrigada a desenvolver logomarcas, apresentações, catálogos, ou artes gráficas adicionais, como banners, postagens para redes sociais etc.</li>
          <li>A execução de serviços adicionais pela CONTRATADA só fica obrigada, caso haja pagamento para tal serviço, acordados de forma prévia.</li>
        </ol>

        <p><strong>Obrigações da CONTRATANTE:</strong></p>
        <ol>
          <li>Fornecer à CONTRATADA todas as informações e materiais necessários para o início do projeto, dentro do prazo acordado, a fim de evitar atrasos no cronograma.</li>
          <li>Cumprir os prazos acordados para envio de conteúdo e realização de pagamentos.</li>
          <li>É de responsabilidade exclusiva da CONTRATANTE o conteúdo publicado no site, respondendo civil e criminalmente por eventuais informações falsas, ofensivas, enganosas ou que violem direitos autorais.</li>
          <li>Após a escolha do modelo do site, a CONTRATANTE poderá solicitar alterações visuais (como cores, fontes, imagens e textos). Alterações que descaracterizem o modelo inicial não estão inclusas neste plano.</li>
        </ol>

        <h3>CLÁUSULA TERCEIRA – DOS PRAZOS</h3>
        <ol>
          <li>O prazo estimado para entrega do site é de até 5 (cinco) dias úteis, contados a partir do recebimento completo de todos os materiais necessários por parte da CONTRATANTE.</li>
          <li>A CONTRATANTE deverá entregar os conteúdos (textos, imagens e outros) entre o 1º e o 3º dia após a assinatura deste contrato. Atrasos por parte da CONTRATANTE acarretarão prorrogação proporcional no prazo final de entrega.</li>
          <li>A vigência deste contrato inicia-se na data de sua assinatura e poderá ser ajustada por termo aditivo, em comum acordo entre as partes ou por motivos técnicos/legais.</li>
        </ol>

        <h3>CLÁUSULA QUARTA – DOS VALORES E FORMAS DE PAGAMENTO</h3>
        <ol>
          <li>Pelo serviço contratado, a CONTRATANTE pagará o valor de R$ 359,00 (trezentos e cinquenta e nove reais), via cartão de crédito, débito ou PIX.</li>
          <li>O pagamento poderá ser:
            <ul>
              <li>À vista;</li>
              <li>Ou parcelado: 50% no início e 50% na conclusão do projeto.</li>
            </ul>
          </li>
          <li>Caso a CONTRATANTE opte pelo pagamento parcelado, após a conclusão do projeto, a mesma tem até 7 dias corridos para realizar o pagamento da parcela restante. Caso contrário o site será removido do ar.
          <li>
          <li>A CONTRATADA poderá rescindir este contrato mediante aviso prévio, caso identifique descumprimento contratual por parte da CONTRATANTE.</li>
          <li>Observação: Quaisquer solicitações que excedam a proposta original serão cobradas separadamente, com autorização prévia da CONTRATANTE.</li>
        </ol>

        <h3>CLÁUSULA QUINTA – DA RESCISÃO</h3>
        <ol>
          <li>Este contrato poderá ser rescindido automaticamente em caso de inadimplência ou descumprimento de cláusulas por qualquer das partes.</li>
          <li>Também poderá ser rescindido nos seguintes casos:
            <ul>
              <li>Encerramento das atividades de uma das partes;</li>
              <li>Pedido de falência ou recuperação judicial;</li>
              <li>Doenças, acidentes ou eventuais contratempos inesperados;</li>
              <li>Manifestação formal de uma das partes, diante dos eventos citados acima.</li>
            </ul>
          </li>
        </ol>

        <h3>CLÁUSULA SEXTA – DAS ASSINATURAS DIGITAIS E DO ACEITE ELETRÔNICO</h3>
        <ol>
          <li>As partes reconhecem como válida e eficaz a assinatura deste contrato por meio eletrônico.</li>
          <li>O aceite eletrônico realizado no site da CONTRATANTE, mesmo que fora do padrão ICP-Brasil, serão consideradas válidas e plenamente eficazes para todos os fins legais.</li>
          <li>Os dados de e-mail e demais informações fornecidas pelas partes serão considerados oficiais e utilizados como critério de autenticação e assinatura eletrônica.</li>
          <li>O CONTRATANTE declara que o clique no botão "Aceitar e continuar" e o preenchimento dos dados equivalem à sua assinatura eletrônica, com efeitos previstos em lei.</li>
          <li>O aceite eletrônico realizado no site da CONTRATADA, mediante leitura do contrato, marcação da opção de concordância e acionamento do botão “Aceitar e continuar”, constitui manifestação inequívoca de vontade.</li>
          <li>O registro eletrônico do aceite, incluindo data, hora, endereço IP, navegador e e-mail informado, será considerado meio de prova válido para todos os fins legais.</li>
          <li>Uma cópia integral deste contrato será enviada automaticamente ao e-mail informado pela CONTRATANTE no momento do aceite.</li>
        </ol>

        <h3>CLÁUSULA SÉTIMA – DAS GARANTIAS TÉCNICAS</h3>
        <ol>
          <li>A CONTRATADA se compromete a garantir o pleno funcionamento técnico do site por um período de 30 (trinta) dias corridos a contar da data da entrega final.</li>
          <li>Durante esse período, eventuais falhas técnicas, erros de exibição ou mau funcionamento do site serão corrigidos sem custos adicionais, desde que não sejam causados por terceiros ou alterações indevidas.</li>
          <li>Após o prazo estabelecido, qualquer suporte técnico será considerado serviço adicional, sujeito a orçamento e aprovação prévia da CONTRATANTE.</li>
        </ol>

        <h3>CLÁUSULA OITAVA – DOS DIREITOS AUTORAIS E DE PROPRIEDADE DO WEBSITE</h3>
        <ol>
          <li>A propriedade intelectual do website será transferida à CONTRATANTE somente após a quitação integral do valor acordado.</li>
          <li>Até que o pagamento seja concluído, o site permanece como propriedade da CONTRATADA, que poderá suspender o acesso em caso de inadimplência.</li>
          <li>A CONTRATADA declara que o modelo utilizado é original ou licenciado para uso e não infringe direitos de terceiros.</li>
          <li>A CONTRATANTE é responsável pelos conteúdos enviados, respondendo por qualquer infração de direitos autorais.</li>
        </ol>

        <h3>CLÁUSULA NONA – DO CANCELAMENTO ANTECIPADO PELO CONTRATANTE</h3>
        <ol>
          <li>Caso a CONTRATANTE opte por cancelar o projeto após o início da execução, e sem justificativa legal ou técnica, deverá pagar à CONTRATADA:</li>
          <li>50% do valor acordado, se o cancelamento ocorrer até a metade do prazo previsto de entrega;</li>
          <li>100% do valor acordado, caso o cancelamento ocorra após mais da metade do prazo de desenvolvimento ou se o site já estiver concluído.</li>
          <li>A CONTRATANTE poderá solicitar o cancelamento sem ônus caso a CONTRATADA não cumpra os prazos acordados, sem justificativa válida.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA – DA CONFIDENCIALIDADE</h3>
        <ol>
          <li>Ambas as partes se comprometem a manter sigilo absoluto sobre todas as informações trocadas durante a vigência deste contrato.</li>
          <li>A obrigação de confidencialidade subsiste mesmo após a rescisão, por um período de 12 (doze) meses.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA PRIMEIRA – DO REGISTRO E PROPRIEDADE DO DOMÍNIO</h3>
        <ol>
          <li>Quando o registro do domínio for realizado pela CONTRATADA em nome da CONTRATANTE, este será considerado propriedade exclusiva da CONTRATANTE, independentemente da rescisão contratual.</li>
          <li>Em caso de cancelamento, rescisão ou reembolso de valores, o custo referente ao registro do domínio não será reembolsável, sendo automaticamente descontado de qualquer valor a ser restituído, uma vez que se trata de bem digital de titularidade da CONTRATANTE.</li>
          <li>A CONTRATANTE declara ciência de que o domínio é um serviço de terceiros, com validade anual, não sendo possível seu cancelamento ou devolução após o registro.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA SEGUNDA – DO ABANDONO DO PROJETO</h3>
        <ol>
          <li>Caso a CONTRATANTE deixe de fornecer informações, conteúdos ou aprovações necessárias por período superior a 15 (quinze) dias corridos, o projeto será considerado suspenso.</li>
          <li>Após 30 (trinta) dias de inatividade por responsabilidade da CONTRATANTE, o projeto será considerado abandonado, não havendo obrigação de retomada sem novo agendamento ou reajuste de prazo.</li>
          <li>A suspensão ou abandono do projeto não gera direito total do reembolso dos valores já pagos. Tendo que cumprir os itens da CLÁUSULA NONA e CLÁUSULA DÉCIMA PRIMEIRA.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA TERCEIRA – DO LIMITE DE ALTERAÇÕES</h3>
        <ol>
          <li>Estão incluídas neste contrato até 2 (duas) rodadas de ajustes visuais e textuais após a primeira apresentação do site.</li>
          <li>Solicitações adicionais ou alterações que modifiquem significativamente a estrutura, funcionalidades ou layout original serão consideradas serviços extras e deverão ser orçadas separadamente.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA QUARTA – DAS LIMITAÇÕES DE RESPONSABILIDADE</h3>
        <ol>
          <li>A CONTRATADA não se responsabiliza por falhas, interrupções ou indisponibilidades causadas por serviços de terceiros, tais como servidores de hospedagem, provedores de domínio, serviços de e-mail, plugins, APIs ou integrações externas.</li>
          <li>Eventuais instabilidades decorrentes desses serviços não caracterizam descumprimento contratual.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA QUINTA – DOS BACKUPS E DOS DADOS</h3>
        <ol>
          <li>A CONTRATANTE é responsável por manter cópias de segurança (backup) de seus conteúdos, textos, imagens e dados.</li>
          <li>A CONTRATADA não se responsabiliza por perda de dados causada por falhas técnicas, ataques externos, exclusões indevidas ou problemas originados fora de sua atuação direta.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA SEXTA – DO USO PARA FINS DE PORTFÓLIO</h3>
        <ol>
          <li>A CONTRATADA poderá utilizar o website desenvolvido como parte de seu portfólio profissional, incluindo menção ao nome e logotipo da CONTRATANTE, exclusivamente para fins de divulgação de seus serviços.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA SÉTIMA – DO REAJUSTE DE VALORES FUTUROS</h3>
        <ol>
          <li>Os valores referentes a serviços recorrentes, manutenção ou hospedagem poderão ser reajustados anualmente com base no índice IPCA ou outro que venha a substituí-lo.</li>
        </ol>

        <h3>CLÁUSULA DÉCIMA OITAVA – DA HOSPEDAGEM</h3>
        <ol>
          <p>1. Está incluída na prestação dos serviços a hospedagem do site pelo período de 12 (doze) meses, sem custos adicionais, bem como o registro de domínio, também por 12 meses.</p>

          <p>2. Após esse período, a CONTRATANTE poderá:</p>
          <ul>
            <li>Manter o serviço por R$ 29,00 mensais, com cobrança anual;</li>
            <li>Ou solicitar os arquivos do site para transferir o serviço para outra hospedagem, sem obrigação de permanência com a CONTRATADA.</li>
          </ul>
          <p>3. Caso a CONTRATANTE já possua domínio ou serviço de hospedagem ativos, os serviços de registro e hospedagem serão desconsiderados, sem ônus para a CONTRATANTE.</p>

        </ol>

        <h3>CLÁUSULA DÉCIMA NONA – DISPOSIÇÕES GERAIS</h3>
        <ol>
          <li>As partes são independentes entre si. Este contrato não gera vínculo empregatício ou societário.</li>
          <li>A CONTRATADA não será responsabilizada por falhas decorrentes de informações incorretas fornecidas pela CONTRATANTE.</li>
          <li>Serviços adicionais não previstos serão cobrados à parte, com autorização da CONTRATANTE.</li>
          <li>Este contrato prevê criação de site apenas em português. Outros idiomas deverão ser orçados separadamente.</li>
          <li>Fica eleito o foro da comarca de Aparecida de Goiânia – GO, renunciando-se a qualquer outro.</li>
        </ol>
        <br>

        <p class="mt-3"><strong>Aparecida de Goiânia, <?= date('d/m/Y') ?>.</strong></p>

      </div>

      <div class="modal-footer text-center">
        <a href="./opcional">
          <button class="btn btn-whats">
            <i class="fa fa-arrow-left"></i> VOLTAR
          </button>
        </a>

        <button onclick="add_contrato()" id="nextButton" class="btn btn-primary">
          ACEITAR E CONTINUAR <i class="fa fa-arrow-right"></i>
        </button>
      </div>
    </div>
  </main>

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script>
    function add_contrato() {
      $.ajax({
        url: '<?= base_url() ?>contrato/act_add_contrato',
        type: 'POST',
        // data: formData,
        // dataType: 'json',
        // contentType: false,
        // processData: false,
        success: function(res) {

          window.location.href = "<?= base_url() ?>pagamento"

        },
        error: function() {
          Swal.fire({
            title: '',
            text: 'Houve um erro ao enviar',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonColor: "#FF6900"
          })
        }
      });
    }
  </script>

  <script>
    // Configurações iniciais
    const phoneToContact = '5521986198925'; // altere para o seu número com DDI+DDD+numero sem símbolos
    const qs = new URLSearchParams(location.search);
    const modeloFromQS = qs.get('modelo') || '';
    const modeloInput = document.getElementById('modeloEscolhido');
    const modeloNomeEl = document.getElementById('modeloNome');
    const modeloSlugEl = document.getElementById('modeloSlug');
    const modeloThumb = document.getElementById('modeloThumb');
    const btnVerModelo = document.getElementById('btnVerModelo');
    const resModelo = document.getElementById('resModelo');

    // Padrões (troque as URLs reais dos modelos conforme necessário)
    const modelosData = {
      'Modelo-Classico': {
        nome: 'Modelo Clássico',
        slug: 'Modelo-Classico',
        demo: 'https://seudominio.com/modelo1',
        thumb: 'imagens/modelo1.webp'
      },
      'Modelo-Moderno': {
        nome: 'Modelo Moderno',
        slug: 'Modelo-Moderno',
        demo: 'https://seudominio.com/modelo2',
        thumb: 'imagens/modelo2.webp'
      },
      'Modelo-Minimalista': {
        nome: 'Modelo Minimalista',
        slug: 'Modelo-Minimalista',
        demo: 'https://seudominio.com/modelo3',
        thumb: 'imagens/modelo3.webp'
      },
      'Modelo-Elegante': {
        nome: 'Modelo Elegante',
        slug: 'Modelo-Elegante',
        demo: 'https://seudominio.com/modelo4',
        thumb: 'imagens/modelo4.webp'
      },
      'Modelo-Institucional': {
        nome: 'Modelo Institucional',
        slug: 'Modelo-Institucional',
        demo: 'https://seudominio.com/modelo5',
        thumb: 'imagens/modelo5.webp'
      },
      'Modelo-Premium': {
        nome: 'Modelo Premium',
        slug: 'Modelo-Premium',
        demo: 'https://seudominio.com/modelo6',
        thumb: 'imagens/modelo6.webp'
      }
    };

    // Sevier: preencher modelo a partir da query string
    if (modeloFromQS && modelosData[modeloFromQS]) {
      const m = modelosData[modeloFromQS];
      modeloInput.value = m.slug;
      modeloNomeEl.textContent = 'Modelo: ' + m.nome;
      modeloSlugEl.textContent = m.slug;
      modeloThumb.src = m.thumb;
      btnVerModelo.onclick = () => window.open(m.demo, '_blank');
      resModelo.innerHTML = `<strong>${m.nome}</strong><div class="small">${m.demo}</div>`;
    } else {
      modeloNomeEl.textContent = 'Modelo: (não selecionado)';
      modeloSlugEl.textContent = '';
      btnVerModelo.onclick = () => alert('Nenhum modelo definido. Passe ?modelo=Nome-do-Modelo na URL ou ajuste a variável modelosData.');
      resModelo.textContent = 'Nenhum modelo definido. Volte à vitrine e escolha um modelo.';
    }

    // Alternância PJ / PF
    const chipPJ = document.getElementById('chipPJ');
    const chipPF = document.getElementById('chipPF');
    const pjFields = document.getElementById('pjFields');
    const pfFields = document.getElementById('pfFields');

    function setType(type) {
      if (type === 'pj') {
        chipPJ.classList.add('active');
        chipPJ.setAttribute('aria-selected', 'true');
        chipPF.classList.remove('active');
        chipPF.setAttribute('aria-selected', 'false');
        pjFields.style.display = '';
        pfFields.style.display = 'none';
        // set required
        document.getElementById('razao').required = true;
        document.getElementById('cnpj').required = true;
        document.getElementById('nome').required = false;
        document.getElementById('cpf').required = false;
      } else {
        chipPF.classList.add('active');
        chipPF.setAttribute('aria-selected', 'true');
        chipPJ.classList.remove('active');
        chipPJ.setAttribute('aria-selected', 'false');
        pjFields.style.display = 'none';
        pfFields.style.display = '';
        document.getElementById('razao').required = false;
        document.getElementById('cnpj').required = false;
        document.getElementById('nome').required = true;
        document.getElementById('cpf').required = true;
      }
    }
    chipPJ.addEventListener('click', () => setType('pj'));
    chipPF.addEventListener('click', () => setType('pf'));

    // Modal contrato comportamento
    const modal = document.getElementById('modalContrato');
    const verContrato = document.getElementById('verContrato');
    const abrirContrato = document.getElementById('abrirContrato');
    const btnFecharModal = document.getElementById('btnFecharModal');
    const btnAceitarModal = document.getElementById('btnAceitarModal');
    const aceitoCheckbox = document.getElementById('aceitoTermos');

    function openModal() {
      modal.classList.add('open');
      modal.setAttribute('aria-hidden', 'false')
    }

    function closeModal() {
      modal.classList.remove('open');
      modal.setAttribute('aria-hidden', 'true')
    }
    verContrato.addEventListener('click', (e) => {
      e.preventDefault();
      openModal()
    });
    abrirContrato.addEventListener('click', () => openModal());
    btnFecharModal.addEventListener('click', () => closeModal());

    // Quando o usuário aceitar no modal -> marcar o checkbox e fechar
    btnAceitarModal.addEventListener('click', () => {
      aceitoCheckbox.checked = true;
      // Simula evento de validação
      const status = document.getElementById('status');
      status.innerHTML = '<div class="alert">Contrato aceito (registro temporário). Agora finalize o envio.</div>';
      closeModal();
    });

    // Envio: abrir WhatsApp com mensagem formatada
    const btnEnviar = document.getElementById('btnEnviar');
    const form = document.getElementById('contratoForm');
    const status = document.getElementById('status');
    const alertSaved = document.getElementById('alertSaved');

    function escapeForWhats(text) {
      return encodeURIComponent(text).replace(/%20/g, '+');
    }

    btnEnviar.addEventListener('click', (e) => {
      e.preventDefault();
      // validação básica
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      if (!aceitoCheckbox.checked) {
        alert('Você precisa aceitar os termos antes de continuar.');
        return;
      }

      // coletar dados
      const data = {
        modelo: modeloInput.value || 'não informado',
        tipo: document.getElementById('nome').required ? 'PF' : 'PJ',
        razao: document.getElementById('razao').value || '',
        cnpj: document.getElementById('cnpj').value || '',
        nome: document.getElementById('nome').value || '',
        cpf: document.getElementById('cpf').value || '',
        whatsapp: document.getElementById('whatsapp').value || '',
        email: document.getElementById('email').value || '',
        responsavel: document.getElementById('responsavel').value || '',
        site: document.getElementById('site').value || '',
        endereco: document.getElementById('endereco').value || '',
        observacoes: document.getElementById('observacoes').value || '',
        aceite: new Date().toISOString()
      };

      // gerar mensagem
      let mensagem = `Olá!%0ANovo%20pedido%20de%20site%20-%20modelo:%20${escapeForWhats(data.modelo)}%0A%0A`;

      if (data.tipo === 'PJ') {
        mensagem += `Razão%20Social:%20${escapeForWhats(data.razao)}%0A`;
        mensagem += `CNPJ:%20${escapeForWhats(data.cnpj)}%0A`;
      } else {
        mensagem += `Nome:%20${escapeForWhats(data.nome)}%0A`;
        mensagem += `CPF:%20${escapeForWhats(data.cpf)}%0A`;
      }

      mensagem += `WhatsApp:%20${escapeForWhats(data.whatsapp)}%0A`;
      if (data.email) mensagem += `Email:%20${escapeForWhats(data.email)}%0A`;
      if (data.responsavel) mensagem += `Responsável:%20${escapeForWhats(data.responsavel)}%0A`;
      if (data.site) mensagem += `Site:%20${escapeForWhats(data.site)}%0A`;
      if (data.endereco) mensagem += `Endereço:%20${escapeForWhats(data.endereco)}%0A`;
      if (data.observacoes) mensagem += `%0AObservações:%20${escapeForWhats(data.observacoes)}%0A`;
      mensagem += `%0AAceite:%20${escapeForWhats(data.aceite)}`;

      // registrar localmente (demo)
      alertSaved.style.display = 'block';
      alertSaved.textContent = 'Dados preparados. Abrindo WhatsApp para contato...';

      // abrir WhatsApp
      const url = `https://api.whatsapp.com/send?phone=${phoneToContact}&text=${mensagem}`;
      window.open(url, '_blank');

      // mostrar resumo na tela
      status.innerHTML = `<div class="alert">Pedido gerado. Aceite registrado em: <strong>${new Date(data.aceite).toLocaleString()}</strong>. Mensagem aberta no WhatsApp.</div>`;
    });

    // Botão "Salvar e continuar" (apenas demo local)
    document.getElementById('btnSalvar').addEventListener('click', () => {
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      alertSaved.style.display = 'block';
      alertSaved.textContent = 'Dados salvos localmente (demo). Implemente backend para persistência real.';
    });

    // acessibilidade: fechar modal com ESC
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
    });

    // inicializar tipo
    setType('pj');
  </script>
</body>

</html>