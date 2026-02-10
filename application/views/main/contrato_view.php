<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Contrato de Prestação de Serviço - CCO Analítica</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            max-width: 900px;
            margin: 28px auto;
            padding: 20px
        }

        .main-card {
            background: var(--card);
            border-radius: var(--radius);
            padding: 40px;
            box-shadow: 0 8px 30px rgba(12, 35, 64, 0.06)
        }

        h2 {
            margin: 0 0 12px;
            font-size: 1.2rem
        }

        h3 {
            margin-top: 30px;
            color: #333;
            border-bottom: 2px solid var(--cor-principal);
            padding-bottom: 5px;
        }

        p,
        li {
            line-height: 1.6;
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
            transition: 0.3s;
        }

        .btn-primary {
            background: var(--cor-principal);
            color: #fff
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #777;
        }

        @media print {
            body {
                background: white;
            }

            .no-print {
                display: none;
            }

            .main-card {
                box-shadow: none;
                padding: 0;
            }

            header {
                display: none;
            }
        }
    </style>
</head>

<body>

    <header class="no-print">
        <h1>Contrato de Prestação de Serviço</h1>
        <p>Cópia digital do contrato aceito.</p>
    </header>

    <main class="container">
        <div class="main-card">

            <div style="text-align: right;" class="no-print">
                <button onclick="window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Imprimir</button>
            </div>

            <br>
            <center>
                <h2 class="text-center">CONTRATO DE PRESTAÇÃO DE SERVIÇOS<br>DESENVOLVIMENTO DE SITE</h2>
            </center>

            <p>
                <strong>CONTRATANTE:</strong><br>
                <?= $dados['idf_company_name'] ?>,
                inscrita no CPF/CNPJ nº
                <?= $dados['idf_company_document'] ?>,
                com sede na
                <?= $dados['idf_company_logradouro'] ?>
                <?= !empty($dados['idf_company_numero']) ? ', nº ' . $dados['idf_company_numero'] : '' ?>
                <?= !empty($dados['idf_company_complemento']) ? ', ' . $dados['idf_company_complemento'] : '' ?>
                <?= ' - ' . $dados['idf_company_bairro'] ?>,
                <?= $dados['idf_company_cidade'] ?>/
                <?= $dados['idf_company_estado'] ?> –
                CEP
                <?= $dados['idf_company_cep'] ?>
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
          <li>A CONTRATADA não está obrigada a desenvolver logomarcas, apresentações, catálogos, ou qualquer tipo de artes gráficas adicionais, como banners, postagens para redes sociais etc. Nem gerenciamento de tráfego pago, artigos de blog, ou integrações com terceiros como ( Facebook, Google, CRM's, ERP's ou API's de qualquer natureza).</li>
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
          <li>Pelo serviço contratado, a CONTRATANTE pagará o valor de R$ 549,00 (trezentos e cinquenta e nove reais), via cartão de crédito, débito ou PIX.</li>
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
          <li>Está incluída na prestação dos serviços a hospedagem do site pelo período de 12 (doze) meses, sem custos adicionais, bem como o registro de domínio, também por 12 meses.</li>
          <li>Após esse período, a CONTRATANTE poderá:</li>
       
        <ul>
          <li>Manter o serviço por R$ 29,00 mensais, com cobrança anual;</li>
          <li>Ou solicitar os arquivos do site para transferir o serviço para outra hospedagem, sem obrigação de permanência com a CONTRATADA.</li>
        </ul>
       
          <li>Caso a CONTRATANTE já possua domínio ou serviço de hospedagem ativos, os serviços de registro e hospedagem serão desconsiderados, sem ônus para a CONTRATANTE.</li>
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
        <br>

            <div class="footer no-print">
                <p>CCO Analítica - 50.108.880/0001-92</p>
            </div>

        </div>
    </main>

</body>

</html>