<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Identificacao extends CI_Controller
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

	public function index( $identifier = null )
	{


		$exist_session = $this->session->userdata('identifier');

		// if (!$exist_session) {

		// 	redirect(base_url());
		// }

		if (!$exist_session) {

			$this->form_model->create_identifier($identifier);
		}

		echo "identifier: ".$this->form_model->get_identifier();

		$data = array(
			'idf' => $this->form_model->get_form_by_identifier($this->form_model->get_identifier()),
		);



		$this->load->view('main/identificacao', $data);
	}

	public function act_add_identifier()

	{


		header('Content-Type: application/json');


		$data = array(
			'idf_company_type' => htmlspecialchars($this->input->post('company_type')),
			'idf_company_name' => htmlspecialchars($this->input->post('company_name')),
			'idf_company_document' => htmlspecialchars($this->input->post('company_document')),
			'idf_company_document_type' => htmlspecialchars($this->input->post('company_document_type')),
			'idf_company_whatsapp' => htmlspecialchars($this->input->post('company_whatsapp')),
			'idf_company_email' => htmlspecialchars($this->input->post('company_email')),
			'idf_company_responsible_name' => htmlspecialchars($this->input->post('company_responsible_name')),

			'idf_company_cep' => htmlspecialchars($this->input->post('company_cep')),
			'idf_company_logradouro' => htmlspecialchars($this->input->post('company_logradouro')),
			'idf_company_numero' => htmlspecialchars($this->input->post('company_numero')),
			'idf_company_bairro' => htmlspecialchars($this->input->post('company_bairro')),
			'idf_company_complemento' => htmlspecialchars($this->input->post('company_complemento')),
			'idf_company_cidade' => htmlspecialchars($this->input->post('company_cidade')),
			'idf_company_estado' => htmlspecialchars($this->input->post('company_estado')),

		);

		if ($data['idf_company_type'] == "company") {

			if (!$this->isValidCNPJ($data['idf_company_document'])) {

				$response = array(
					'status' => false,
					'message' => 'O CNPJ é inválido. Verifique',
				);
				return print_r(json_encode($response));
			}
		} else if ($data['idf_company_type'] == "personal") {

			if (!$this->isValidCPF($data['idf_company_document'])) {

				$response = array(
					'status' => false,
					'message' => 'O CPF é inválido. Verifique',
				);
				return print_r(json_encode($response));
			}
		}

		if (!$this->isValidEmail($data['idf_company_email'])) {

			$response = array(
				'status' => false,
				'message' => 'O e-mail é inválido. Verifique',
			);
			return print_r(json_encode($response));
		}


		if (strlen($data['idf_company_whatsapp']) != 16) {

			$response = array(
				'status' => false,
				'message' => 'Preencha o whatsapp corretamente.',
			);
			return print_r(json_encode($response));
		}


		if ($this->form_model->update_form_identifier($this->form_model->get_identifier(), $data)) {

			$response = array(
				'status' => true,
				'message' => 'Identificação salva com sucesso!',
			);
			return print_r(json_encode($response));
		} else {

			$response = array(
				'status' => false,
				'message' => 'Erro ao salvar Identificação!',
			);
			return print_r(json_encode($response));
		}


		exit;
	}

	public function act_add_model()
	{
		$model_id = $this->input->post('model_id');
		$identifier = $this->form_model->get_identifier();


		$get_form_by_identifier = $this->form_model->get_form_by_identifier($identifier);

		if (!$get_form_by_identifier) {

			$model_data = array(
				'company_model' => $model_id,
				'company_identifier' => $identifier
			);

			$this->form_model->add_form($model_data);
		} else {

			$model_data = array(
				'company_model' => $model_id,
			);

			$this->form_model->update_form_identifier($identifier, $model_data);
		}
	}
















	// Valida CPF (retorna true/false)
	function isValidCPF(string $cpf): bool
	{
		// Remove tudo que não é dígito
		$cpf = preg_replace('/\D/', '', $cpf);

		// Deve ter 11 dígitos
		if (strlen($cpf) !== 11) {
			return false;
		}

		// Elimina CPF com todos dígitos iguais (ex: 11111111111)
		if (preg_match('/^(\d)\1{10}$/', $cpf)) {
			return false;
		}

		// Cálculo do primeiro dígito verificador
		$sum = 0;
		for ($i = 0, $weight = 10; $i < 9; $i++, $weight--) {
			$sum += (int)$cpf[$i] * $weight;
		}
		$rem = $sum % 11;
		$d1 = ($rem < 2) ? 0 : 11 - $rem;

		// Cálculo do segundo dígito verificador
		$sum = 0;
		for ($i = 0, $weight = 11; $i < 10; $i++, $weight--) {
			$sum += (int)$cpf[$i] * $weight;
		}
		$rem = $sum % 11;
		$d2 = ($rem < 2) ? 0 : 11 - $rem;

		return ($d1 == (int)$cpf[9] && $d2 == (int)$cpf[10]);
	}

	// Valida CNPJ (retorna true/false)
	function isValidCNPJ(string $cnpj): bool
	{
		// Remove tudo que não é dígito
		$cnpj = preg_replace('/\D/', '', $cnpj);

		// Deve ter 14 dígitos
		if (strlen($cnpj) !== 14) {
			return false;
		}

		// Elimina CNPJ com todos dígitos iguais
		if (preg_match('/^(\d)\1{13}$/', $cnpj)) {
			return false;
		}

		// Pesos para o primeiro dígito
		$weights1 = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
		$sum = 0;
		for ($i = 0; $i < 12; $i++) {
			$sum += (int)$cnpj[$i] * $weights1[$i];
		}
		$rem = $sum % 11;
		$d1 = ($rem < 2) ? 0 : 11 - $rem;

		// Pesos para o segundo dígito
		$weights2 = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
		$sum = 0;
		for ($i = 0; $i < 13; $i++) {
			$sum += (int)$cnpj[$i] * $weights2[$i];
		}
		$rem = $sum % 11;
		$d2 = ($rem < 2) ? 0 : 11 - $rem;

		return ($d1 == (int)$cnpj[12] && $d2 == (int)$cnpj[13]);
	}

	// Valida e-mail (retorna true/false)
	function isValidEmail(string $email): bool
	{
		// Normaliza possíveis domínios IDN (opcional)
		if (function_exists('idn_to_ascii')) {
			$parts = explode('@', $email);
			if (count($parts) === 2) {
				$local = $parts[0];
				$domain = $parts[1];
				$domain_ascii = idn_to_ascii($domain, IDNA_DEFAULT, INTL_IDNA_VARIANT_UTS46);
				if ($domain_ascii !== false) {
					$email = $local . '@' . $domain_ascii;
				}
			}
		}

		// Usa o filtro nativo (boa prática)
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return false;
		}

		// Opcional: verificar que domínio tem pelo menos um ponto (ex: example.com)
		$domain = substr(strrchr($email, "@"), 1);
		if ($domain === false || strpos($domain, '.') === false) {
			return false;
		}

		return true;
	}
}
