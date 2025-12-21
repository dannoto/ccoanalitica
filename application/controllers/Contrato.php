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
			'user_identifier'         => $user_identifier,
			'ip_address'      => $ip_address,
			'user_agent'      => $user_agent,
			'accept_lang'     => $accept_lang,
			'data_aceite'     => $data_aceite,
			'hash_validacao'  => $hash_validacao,
		];

		// Salva no banco
		$this->db->insert('cco_contratos_logs', $dados);

		//  enviar email
		//  para $user_identifier['if_company_email'] 
		// copiar para ccoanalitica@gmail.com

		// Retorna resposta JSON
		echo json_encode([
			'status' => true,
			'message' => 'Aceite registrado com sucesso!',
			'hash' => $hash_validacao
		]);
	}
}
