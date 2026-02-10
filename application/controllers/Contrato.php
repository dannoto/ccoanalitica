<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contrato extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('identifier_model');
		$this->load->model('models_model');
		$this->load->model('form_model');

		$this->load->helper('cookie');
		$this->load->library('session');
	}

	public function index()
	{

		$exist_session = $this->session->userdata('identifier');

		if (!$exist_session) {
			redirect(base_url());
		}


		$identifier = $this->form_model->get_identifier();

		// echo $identifier;



		$get_form_by_identifier = $this->form_model->get_form_by_identifier($identifier);
		// print_r($get_form_by_identifier);
		$data = array(
			'dados' => $get_form_by_identifier,
		);

		$this->load->view('main/contrato', $data);
	}

	public function act_add_contrato()
	{


		// Dados do usuário autenticado (se houver login)
		$user_identifier = $this->form_model->get_identifier();

		// Dados do dispositivo e rede
		$ip_address = $_SERVER['REMOTE_ADDR'] ?? null;
		$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? null;
		$accept_lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? null;
		$referer = $_SERVER['HTTP_REFERER'] ?? null;

		// Data/hora do aceite
		$data_aceite = date('Y-m-d H:i:s');


		// Hash de integridade (prova de aceite)
		$dados_para_hash = $user_identifier . '|' . $data_aceite . '|' . $ip_address;
		$hash_validacao = hash('sha256', $dados_para_hash);

		// Monta o registro
		$dados = [
			'user_identifier' => $user_identifier,
			'ip_address' => $ip_address,
			'user_agent' => $user_agent,
			'accept_lang' => $accept_lang,
			'data_aceite' => $data_aceite,
			'hash_validacao' => $hash_validacao,
		];

		// Salva no banco
		$this->db->insert('cco_contratos_logs', $dados);

		//  enviar email
		//  para $user_identifier['if_company_email'] 
		// copiar para ccoanalitica@gmail.com

		$this->load->library('email');

		// SMTP Configuration (PLACEHOLDERS - UPDATE WITH REAL CREDENTIALS)
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.hostinger.com', // TODO: Update host
			'smtp_port' => 465, // TODO: Update port
			'smtp_user' => 'contato@ccoanalitica.com', // TODO: Update user
			'smtp_pass' => 'DTZF#6v|K', // TODO: Update password
			'smtp_crypto' => 'ssl',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);
		$this->email->initialize($config);

		// Get company details for the email
		$company_data = $this->form_model->get_form_by_identifier($user_identifier);
		$to_email = $company_data['idf_company_email'] ?? null;

		if ($to_email) {
			$this->email->from('contato@ccoanalitica.com', 'CCO Analítica'); // TODO: Update sender
			$this->email->to($to_email);
			$this->email->bcc('ccoanalitica@gmail.com');

			$this->email->subject('Cópia do Contrato - CCO Analítica');

			// Get address components for easier reading
			$endereco_completo = $company_data['idf_company_logradouro'] . 
				(!empty($company_data['idf_company_numero']) ? ', nº ' . $company_data['idf_company_numero'] : '') . 
				(!empty($company_data['idf_company_complemento']) ? ', ' . $company_data['idf_company_complemento'] : '') . 
				' - ' . $company_data['idf_company_bairro'] . ', ' . 
				$company_data['idf_company_cidade'] . '/' . $company_data['idf_company_estado'] . 
				' – CEP ' . $company_data['idf_company_cep'];

			$message = "
			<html>
			<head>
				<title>Contrato de Prestação de Serviços - CCO Analítica</title>
				<style>
					body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
					h2 { color: #FF6900; }
					h3 { color: #333; border-bottom: 2px solid #FF6900; padding-bottom: 5px; margin-top: 20px; font-size: 16px; }
					p, li { font-size: 14px; }
					strong { color: #000; }
					.container { max-width: 800px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
					.footer { margin-top: 30px; font-size: 12px; color: #777; border-top: 1px solid #eee; padding-top: 10px; }
				</style>
			</head>
			<body>
				<div class='container'>
					<center>
						<h2>CONTRATO DE PRESTAÇÃO DE SERVIÇOS<br>DESENVOLVIMENTO DE SITE</h2>
					</center>

					<p>
						<strong>CONTRATANTE:</strong><br>
						{$company_data['idf_company_name']}, inscrita no CPF/CNPJ nº {$company_data['idf_company_document']},
						com sede na {$endereco_completo}.
					</p>

					<p><strong>CONTRATADA:</strong><br>
						CCO ANALÍTICA LTDA, inscrita no CNPJ nº 50.108.880/0001-92, com sede na Rua Alumínio, nº 2, Apto 107 - Aparecida de Goiânia, Goiás/GO - 74955-030.<br>
						<a href='https://www.ccoanalitica.com'>www.ccoanalitica.com</a>
					</p>

					<h3>CLÁUSULA PRIMEIRA – DA PRESTAÇÃO DE SERVIÇOS</h3>
					<p>1. O serviço a ser prestado pela CONTRATADA consiste no desenvolvimento de um website para a CONTRATANTE, com estrutura previamente definida a partir de modelo escolhido pela CONTRATANTE.</p>
					<p>2. O desenvolvimento será realizado com base em informações fornecidas pela CONTRATANTE, tais como conteúdo, imagens, dados institucionais, entre outros.</p>

					<h3>CLÁUSULA SEGUNDA – DAS CONDIÇÕES DE PRESTAÇÃO DOS SERVIÇOS</h3>
					<p><strong>Obrigações da CONTRATADA:</strong></p>
					<ul>
						<li>Utilizar recursos que facilitem a navegação entre páginas, tratamento de imagens, codificação e programação visual, assegurando ao projeto boa usabilidade, desempenho e design.</li>
						<li>Realizar manutenção e atualizações gratuitas por até 30 (trinta) dias após a entrega do site. Após esse prazo, quaisquer serviços de suporte deverão ser contratados separadamente, mediante novo acordo.</li>
						<li>A CONTRATADA não está obrigada a desenvolver logomarcas, apresentações, catálogos, ou qualquer tipo de artes gráficas adicionais. Nem gerenciamento de tráfego pago, artigos de blog, ou integrações com terceiros.</li>
						<li>A execução de serviços adicionais pela CONTRATADA só fica obrigada, caso haja pagamento para tal serviço, acordados de forma prévia.</li>
					</ul>

					<p><strong>Obrigações da CONTRATANTE:</strong></p>
					<ul>
						<li>Fornecer à CONTRATADA todas as informações e materiais necessários para o início do projeto, dentro do prazo acordado.</li>
						<li>Cumprir os prazos acordados para envio de conteúdo e realização de pagamentos.</li>
						<li>É de responsabilidade exclusiva da CONTRATANTE o conteúdo publicado no site, respondendo civil e criminalmente por eventuais informações falsas, ofensivas, enganosas ou que violem direitos autorais.</li>
						<li>Após a escolha do modelo do site, a CONTRATANTE poderá solicitar alterações visuais (como cores, fontes, imagens e textos). Alterações que descaracterizem o modelo inicial não estão inclusas neste plano.</li>
					</ul>

					<h3>CLÁUSULA TERCEIRA – DOS PRAZOS</h3>
					<ul>
						<li>O prazo estimado para entrega do site é de até 5 (cinco) dias úteis, contados a partir do recebimento completo de todos os materiais necessários por parte da CONTRATANTE.</li>
						<li>A CONTRATANTE deverá entregar os conteúdos entre o 1º e o 3º dia após a assinatura deste contrato. Atrasos por parte da CONTRATANTE acarretarão prorrogação proporcional no prazo final de entrega.</li>
					</ul>

					<h3>CLÁUSULA QUARTA – DOS VALORES E FORMAS DE PAGAMENTO</h3>
					<ul>
						<li>Pelo serviço contratado, a CONTRATANTE pagará o valor de R$ 549,00 (trezentos e cinquenta e nove reais), via cartão de crédito, débito ou PIX.</li>
						<li>O pagamento poderá ser à vista ou parcelado (50% no início e 50% na conclusão).</li>
						<li>Caso a CONTRATANTE opte pelo pagamento parcelado, após a conclusão do projeto, a mesma tem até 7 dias corridos para realizar o pagamento da parcela restante. Caso contrário o site será removido do ar.</li>
						<li>A CONTRATADA poderá rescindir este contrato mediante aviso prévio, caso identifique descumprimento contratual por parte da CONTRATANTE.</li>
					</ul>

					<h3>CLÁUSULA QUINTA – DA RESCISÃO</h3>
					<ul>
						<li>Este contrato poderá ser rescindido automaticamente em caso de inadimplência ou descumprimento de cláusulas.</li>
						<li>Também poderá ser rescindido em caso de encerramento das atividades, falência, ou manifestação formal de uma das partes.</li>
					</ul>

					<h3>CLÁUSULA SEXTA – DAS ASSINATURAS DIGITAIS E DO ACEITE ELETRÔNICO</h3>
					<ul>
						<li>As partes reconhecem como válida e eficaz a assinatura deste contrato por meio eletrônico.</li>
						<li>O aceite eletrônico realizado no site da CONTRATANTE, mesmo que fora do padrão ICP-Brasil, serão consideradas válidas e plenamente eficazes.</li>
						<li>O registro eletrônico do aceite, incluindo data, hora, endereço IP, navegador e e-mail informado, será considerado meio de prova válido.</li>
					</ul>

					<h3>CLÁUSULA SÉTIMA – DAS GARANTIAS TÉCNICAS</h3>
					<ul>
						<li>A CONTRATADA se compromete a garantir o pleno funcionamento técnico do site por um período de 30 (trinta) dias corridos a contar da data da entrega final.</li>
						<li>Durante esse período, eventuais falhas técnicas serão corrigidas sem custos adicionais.</li>
					</ul>

					<h3>CLÁUSULA OITAVA – DOS DIREITOS AUTORAIS E DE PROPRIEDADE DO WEBSITE</h3>
					<ul>
						<li>A propriedade intelectual do website será transferida à CONTRATANTE somente após a quitação integral do valor acordado.</li>
						<li>Até que o pagamento seja concluído, o site permanece como propriedade da CONTRATADA.</li>
					</ul>

					<h3>CLÁUSULA NONA – DO CANCELAMENTO ANTECIPADO</h3>
					<ul>
						<li>Caso a CONTRATANTE opte por cancelar o projeto após o início da execução, deverá pagar 50% do valor se até a metade do prazo, ou 100% se após a metade do prazo.</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA – DA CONFIDENCIALIDADE</h3>
					<ul>
						<li>Ambas as partes se comprometem a manter sigilo absoluto sobre todas as informações trocadas durante a vigência deste contrato.</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA PRIMEIRA – DO REGISTRO E PROPRIEDADE DO DOMÍNIO</h3>
					<ul>
						<li>Quando o registro do domínio for realizado pela CONTRATADA em nome da CONTRATANTE, este será considerado propriedade exclusiva da CONTRATANTE.</li>
						<li>Em caso de cancelamento, o custo referente ao registro do domínio não será reembolsável.</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA SEGUNDA – DO ABANDONO DO PROJETO</h3>
					<ul>
						<li>Caso a CONTRATANTE deixe de fornecer informações por período superior a 15 dias, o projeto será suspenso. Após 30 dias de inatividade, será considerado abandonado.</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA TERCEIRA – DO LIMITE DE ALTERAÇÕES</h3>
					<ul>
						<li>Estão incluídas neste contrato até 2 (duas) rodadas de ajustes visuais e textuais após a primeira apresentação do site.</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA QUARTA – DAS LIMITAÇÕES DE RESPONSABILIDADE</h3>
					<ul>
						<li>A CONTRATADA não se responsabiliza por falhas causadas por serviços de terceiros (hospedagem, domínio, e-mails, etc).</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA QUINTA – DOS BACKUPS E DOS DADOS</h3>
					<ul>
						<li>A CONTRATANTE é responsável por manter cópias de segurança (backup) de seus conteúdos.</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA SEXTA – DO USO PARA FINS DE PORTFÓLIO</h3>
					<ul>
						<li>A CONTRATADA poderá utilizar o website desenvolvido como parte de seu portfólio profissional.</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA SÉTIMA – DO REAJUSTE DE VALORES</h3>
					<ul>
						<li>Os valores referentes a serviços recorrentes poderão ser reajustados anualmente com base no índice IPCA.</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA OITAVA – DA HOSPEDAGEM</h3>
					<ul>
						<li>Está incluída a hospedagem do site pelo período de 12 meses, sem custos adicionais. Após esse período, a renovação terá custo de R$ 29,00 mensais (cobrança anual).</li>
					</ul>

					<h3>CLÁUSULA DÉCIMA NONA – DISPOSIÇÕES GERAIS</h3>
					<ul>
						<li>Fica eleito o foro da comarca de Aparecida de Goiânia – GO.</li>
					</ul>

					<div class='footer'>
						<p>Contrato aceito eletronicamente em " . date('d/m/Y H:i', strtotime($data_aceite)) . "</p>
						<p><strong>IP:</strong> {$ip_address} | <strong>Hash de Validação:</strong> {$hash_validacao}</p>
					</div>
				</div>
			</body>
			</html>
			";

			$this->email->message($message);

			if (!$this->email->send()) {
				// Log email error if needed, but don't stop the flow
				log_message('error', 'Erro ao enviar email de contrato: ' . $this->email->print_debugger());
			}
		}

		// Retorna resposta JSON
		echo json_encode([
			'status' => true,
			'message' => 'Aceite registrado com sucesso!',
			'hash' => $hash_validacao
		]);
	}
}
