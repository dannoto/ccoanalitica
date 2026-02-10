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

	public function visualizar($identifier)
	{
		$get_form_by_identifier = $this->form_model->get_form_by_identifier($identifier);

		if (!$get_form_by_identifier) {
			show_404();
		}

		$data = array(
			'dados' => $get_form_by_identifier,
		);

		$this->load->view('main/contrato_view', $data);
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

			// Simple HTML body with link
			$link_contrato = base_url() . 'contrato/visualizar/' . $user_identifier;

			$message = "
			<html>
			<head>
				<title>Contrato de Prestação de Serviços</title>
				<style>
					.btn { background: #FF6900; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold; }
				</style>
			</head>
			<body>
				<h2>Olá, " . ($company_data['idf_company_name'] ?? 'Cliente') . "</h2>
				<p>Confirmamos o recebimento do seu aceite no contrato de prestação de serviços em " . date('d/m/Y H:i', strtotime($data_aceite)) . ".</p>
				<p><strong>Hash de Validação:</strong> {$hash_validacao}</p>
				<br>
				<p>Você pode visualizar e imprimir o contrato completo clicando no botão abaixo:</p>
				<br>
				<a href='{$link_contrato}' class='btn'>VISUALIZAR CONTRATO</a>
				<br><br>
				<p>Ou acesse pelo link: <a href='{$link_contrato}'>{$link_contrato}</a></p>
				<br>
				<hr>
				<p>Atenciosamente,<br>Equipe CCO Analítica</p>
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
