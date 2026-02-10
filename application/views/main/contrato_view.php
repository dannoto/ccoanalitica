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
                CCO ANALÍTICA LTDA, inscrita no CNPJ nº 50.108.880/0001-92, com sede na Rua Alumínio, nº 2, Apto 107 -
                Aparecida de Goiânia, Goiás/GO - 74955-030.<br>
                <a href="https://www.ccoanalitica.com" target="_blank">www.ccoanalitica.com</a><br>
            </p>

            <h3>CLÁUSULA PRIMEIRA – DA PRESTAÇÃO DE SERVIÇOS</h3>
            <p>1. O serviço a ser prestado pela CONTRATADA consiste no desenvolvimento de um website para a CONTRATANTE,
                com estrutura previamente definida a partir de modelo escolhido pela CONTRATANTE.</p>
            <p>2. O desenvolvimento será realizado com base em informações fornecidas pela CONTRATANTE, tais como
                conteúdo, imagens, dados institucionais, entre outros.</p>

            <h3>CLÁUSULA SEGUNDA – DAS CONDIÇÕES DE PRESTAÇÃO DOS SERVIÇOS</h3>
            <p><strong>Obrigações da CONTRATADA:</strong></p>
            <ol>
                <li>Utilizar recursos que facilitem a navegação entre páginas, tratamento de imagens, codificação e
                    programação visual, assegurando ao projeto boa usabilidade, desempenho e design.</li>
                <li>Realizar manutenção e atualizações gratuitas por até 30 (trinta) dias após a entrega do site. Após
                    esse prazo, quaisquer serviços de suporte deverão ser contratados separadamente, mediante novo
                    acordo.</li>
                <li>A CONTRATADA não está obrigada a desenvolver logomarcas, apresentações, catálogos, ou qualquer tipo
                    de artes gráficas adicionais. Nem gerenciamento de tráfego pago, artigos de blog, ou integrações com
                    terceiros.</li>
                <li>A execução de serviços adicionais pela CONTRATADA só fica obrigada, caso haja pagamento para tal
                    serviço, acordados de forma prévia.</li>
            </ol>

            <p><strong>Obrigações da CONTRATANTE:</strong></p>
            <ol>
                <li>Fornecer à CONTRATADA todas as informações e materiais necessários para o início do projeto, dentro
                    do prazo acordado.</li>
                <li>Cumprir os prazos acordados para envio de conteúdo e realização de pagamentos.</li>
                <li>É de responsabilidade exclusiva da CONTRATANTE o conteúdo publicado no site, respondendo civil e
                    criminalmente por eventuais informações falsas, ofensivas, enganosas ou que violem direitos
                    autorais.</li>
                <li>Após a escolha do modelo do site, a CONTRATANTE poderá solicitar alterações visuais (como cores,
                    fontes, imagens e textos). Alterações que descaracterizem o modelo inicial não estão inclusas neste
                    plano.</li>
            </ol>

            <h3>CLÁUSULA TERCEIRA – DOS PRAZOS</h3>
            <ol>
                <li>O prazo estimado para entrega do site é de até 5 (cinco) dias úteis, contados a partir do
                    recebimento completo de todos os materiais necessários por parte da CONTRATANTE.</li>
                <li>A CONTRATANTE deverá entregar os conteúdos entre o 1º e o 3º dia após a assinatura deste contrato.
                    Atrasos por parte da CONTRATANTE acarretarão prorrogação proporcional no prazo final de entrega.
                </li>
                <li>A vigência deste contrato inicia-se na data de sua assinatura e poderá ser ajustada por termo
                    aditivo, em comum acordo entre as partes.</li>
            </ol>

            <h3>CLÁUSULA QUARTA – DOS VALORES E FORMAS DE PAGAMENTO</h3>
            <ol>
                <li>Pelo serviço contratado, a CONTRATANTE pagará o valor de R$ 549,00 (trezentos e cinquenta e nove
                    reais), via cartão de crédito, débito ou PIX.</li>
                <li>O pagamento poderá ser:
                    <ul>
                        <li>À vista;</li>
                        <li>Ou parcelado: 50% no início e 50% na conclusão do projeto.</li>
                    </ul>
                </li>
                <li>Caso a CONTRATANTE opte pelo pagamento parcelado, após a conclusão do projeto, a mesma tem até 7
                    dias corridos para realizar o pagamento da parcela restante. Caso contrário o site será removido do
                    ar.</li>
                <li>A CONTRATADA poderá rescindir este contrato mediante aviso prévio, caso identifique descumprimento
                    contratual por parte da CONTRATANTE.</li>
            </ol>

            <h3>CLÁUSULA QUINTA – DA RESCISÃO</h3>
            <ol>
                <li>Este contrato poderá ser rescindido automaticamente em caso de inadimplência ou descumprimento de
                    cláusulas por qualquer das partes.</li>
                <li>Também poderá ser rescindido em caso de encerramento das atividades, falência, ou manifestação
                    formal de uma das partes.</li>
            </ol>

            <h3>CLÁUSULA SEXTA – DAS ASSINATURAS DIGITAIS E DO ACEITE ELETRÔNICO</h3>
            <ol>
                <li>As partes reconhecem como válida e eficaz a assinatura deste contrato por meio eletrônico.</li>
                <li>O aceite eletrônico realizado no site da CONTRATANTE, mesmo que fora do padrão ICP-Brasil, serão
                    consideradas válidas e plenamente eficazes.</li>
                <li>O registro eletrônico do aceite será considerado meio de prova válido para todos os fins legais.
                </li>
                <li>Uma cópia integral deste contrato será enviada automaticamente ao e-mail informado pela CONTRATANTE
                    no momento do aceite.</li>
            </ol>

            <h3>CLÁUSULA SÉTIMA – DAS GARANTIAS TÉCNICAS</h3>
            <ol>
                <li>A CONTRATADA se compromete a garantir o pleno funcionamento técnico do site por um período de 30
                    (trinta) dias corridos a contar da data da entrega final.</li>
                <li>Durante esse período, eventuais falhas técnicas serão corrigidas sem custos adicionais.</li>
            </ol>

            <h3>CLÁUSULA OITAVA – DOS DIREITOS AUTORAIS E DE PROPRIEDADE DO WEBSITE</h3>
            <ol>
                <li>A propriedade intelectual do website será transferida à CONTRATANTE somente após a quitação integral
                    do valor acordado.</li>
                <li>Até que o pagamento seja concluído, o site permanece como propriedade da CONTRATADA.</li>
            </ol>

            <h3>CLÁUSULA NONA – DO CANCELAMENTO ANTECIPADO PELO CONTRATANTE</h3>
            <ol>
                <li>Caso a CONTRATANTE opte por cancelar o projeto após o início da execução, e sem justificativa legal
                    ou técnica, deverá pagar à CONTRATADA:</li>
                <li>50% do valor acordado, se o cancelamento ocorrer até a metade do prazo previsto de entrega;</li>
                <li>100% do valor acordado, caso o cancelamento ocorra após mais da metade do prazo de desenvolvimento
                    ou se o site já estiver concluído.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA – DA CONFIDENCIALIDADE</h3>
            <ol>
                <li>Ambas as partes se comprometem a manter sigilo absoluto sobre todas as informações trocadas durante
                    a vigência deste contrato.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA PRIMEIRA – DO REGISTRO E PROPRIEDADE DO DOMÍNIO</h3>
            <ol>
                <li>Quando o registro do domínio for realizado pela CONTRATADA em nome da CONTRATANTE, este será
                    considerado propriedade exclusiva da CONTRATANTE.</li>
                <li>Em caso de cancelamento, o custo referente ao registro do domínio não será reembolsável.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA SEGUNDA – DO ABANDONO DO PROJETO</h3>
            <ol>
                <li>Caso a CONTRATANTE deixe de fornecer informações, conteúdos ou aprovações necessárias por período
                    superior a 15 (quinze) dias corridos, o projeto será considerado suspenso.</li>
                <li>Após 30 (trinta) dias de inatividade por responsabilidade da CONTRATANTE, o projeto será considerado
                    abandonado.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA TERCEIRA – DO LIMITE DE ALTERAÇÕES</h3>
            <ol>
                <li>Estão incluídas neste contrato até 2 (duas) rodadas de ajustes visuais e textuais após a primeira
                    apresentação do site.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA QUARTA – DAS LIMITAÇÕES DE RESPONSABILIDADE</h3>
            <ol>
                <li>A CONTRATADA não se responsabiliza por falhas, interrupções ou indisponibilidades causadas por
                    serviços de terceiros.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA QUINTA – DOS BACKUPS E DOS DADOS</h3>
            <ol>
                <li>A CONTRATANTE é responsável por manter cópias de segurança (backup) de seus conteúdos.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA SEXTA – DO USO PARA FINS DE PORTFÓLIO</h3>
            <ol>
                <li>A CONTRATADA poderá utilizar o website desenvolvido como parte de seu portfólio profissional.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA SÉTIMA – DO REAJUSTE DE VALORES FUTUROS</h3>
            <ol>
                <li>Os valores referentes a serviços recorrentes, manutenção ou hospedagem poderão ser reajustados
                    anualmente com base no índice IPCA.</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA OITAVA – DA HOSPEDAGEM</h3>
            <ol>
                <li>Está incluída na prestação dos serviços a hospedagem do site pelo período de 12 (doze) meses, sem
                    custos adicionais.</li>
                <li>Após esse período, a renovação terá custo de R$ 29,00 mensais (cobrança anual).</li>
            </ol>

            <h3>CLÁUSULA DÉCIMA NONA – DISPOSIÇÕES GERAIS</h3>
            <ol>
                <li>As partes são independentes entre si. Este contrato não gera vínculo empregatício ou societário.
                </li>
                <li>Fica eleito o foro da comarca de Aparecida de Goiânia – GO.</li>
            </ol>
            <br>

            <div class="footer no-print">
                <p>CCO Analítica - Soluções Digitais</p>
            </div>

        </div>
    </main>

</body>

</html>