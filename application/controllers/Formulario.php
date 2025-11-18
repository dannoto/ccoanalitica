<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulario extends CI_Controller
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


		$this->load->view('main/formulario');
	}



	// public function act_add_form()
	// {

	// 	// === CONFIGURAÇÃO DE PASTAS ===
	// 	// Onde os arquivos serão salvos (ex: /uploads/imagens_empresa/2025-10-25/)
	// 	$base_dir = './uploads/';
	// 	if (!is_dir($base_dir)) mkdir($base_dir, 0777, true);

	// 	// Função para sanitizar nomes de arquivos
	// 	function sanitizeFileName($filename)
	// 	{
	// 		$filename = preg_replace('/[^\w\d._-]/', '_', $filename);
	// 		return uniqid() . "_" . $filename;
	// 	}

	// 	// === 1. Captura dos campos normais (texto, textarea etc.) ===
	// 	$dados = [];
	// 	foreach ($_POST as $campo => $valor) {
	// 		$dados[$campo] = trim($valor);
	// 	}

	// 	// === 2. Tratamento dos uploads múltiplos ===
	// 	$arquivosSalvos = [];

	// 	foreach ($_FILES as $campo => $fileInfo) {
	// 		if (is_array($fileInfo['name'])) {
	// 			// múltiplos arquivos (ex: imagens_empresa[])
	// 			$total = count($fileInfo['name']);
	// 			for ($i = 0; $i < $total; $i++) {
	// 				if ($fileInfo['error'][$i] === UPLOAD_ERR_OK) {
	// 					$nomeOriginal = $fileInfo['name'][$i];
	// 					$ext = pathinfo($nomeOriginal, PATHINFO_EXTENSION);
	// 					$nomeLimpo = sanitizeFileName($nomeOriginal);

	// 					$pastaCampo = $base_dir . $campo . '/' . date('Y-m-d') . '/';
	// 					if (!is_dir($pastaCampo)) mkdir($pastaCampo, 0777, true);

	// 					$destino = $pastaCampo . $nomeLimpo;
	// 					if (move_uploaded_file($fileInfo['tmp_name'][$i], $destino)) {
	// 						$arquivosSalvos[$campo][] = str_replace(__DIR__, '', $destino);
	// 					}
	// 				}
	// 			}
	// 		} else {
	// 			// upload simples (ex: logomarca)
	// 			if ($fileInfo['error'] === UPLOAD_ERR_OK) {
	// 				$nomeOriginal = $fileInfo['name'];
	// 				$ext = pathinfo($nomeOriginal, PATHINFO_EXTENSION);
	// 				$nomeLimpo = sanitizeFileName($nomeOriginal);

	// 				$pastaCampo = $base_dir . $campo . '/' . date('Y-m-d') . '/';
	// 				if (!is_dir($pastaCampo)) mkdir($pastaCampo, 0777, true);

	// 				$destino = $pastaCampo . $nomeLimpo;
	// 				if (move_uploaded_file($fileInfo['tmp_name'], $destino)) {
	// 					$arquivosSalvos[$campo][] = str_replace(__DIR__, '', $destino);
	// 				}
	// 			}
	// 		}
	// 	}

	// 	// === 3. Salvar registro (opcional: em JSON local ou banco de dados) ===
	// 	// Aqui salvamos num JSON apenas pra visualização
	// 	// $registro = [
	// 	// 	'data_envio' => date('Y-m-d H:i:s'),
	// 	// 	'dados' => $dados,
	// 	// 	'arquivos' => $arquivosSalvos
	// 	// ];

	// 	// print_r($registro);


	// 	$this->form_model->add_form();



	// 	$this->form_model->add_form_files();



	// 	// $registro_json = json_encode($registro, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

	// 	// // salva log do envio (em logs/form_YYYY-MM-DD.json)
	// 	// $logDir = __DIR__ . '/logs/';
	// 	// if (!is_dir($logDir)) mkdir($logDir, 0777, true);

	// 	// file_put_contents($logDir . 'form_' . date('Y-m-d') . '.json', $registro_json . PHP_EOL, FILE_APPEND);

	// 	// // === 4. Retorno para o front-end ===
	// 	// echo json_encode([
	// 	// 	'status' => 'ok',
	// 	// 	'mensagem' => 'Formulário recebido com sucesso!',
	// 	// 	'arquivos' => $arquivosSalvos
	// 	// ]);
	// 	// exit;
	// }

	public function act_add_form()
	{
		// === CONFIGURAÇÃO DE PASTAS ===
		$base_dir = './uploads/';
		if (!is_dir($base_dir)) mkdir($base_dir, 0777, true);

		// Função auxiliar para sanitizar nomes de arquivo
		function sanitizeFileName($filename)
		{
			$filename = preg_replace('/[^\w\d._-]/', '_', $filename);
			return uniqid() . "_" . $filename;
		}

		// === 1. Captura dos campos normais (texto, textarea etc.) ===
		$dados = [];
		foreach ($_POST as $campo => $valor) {
			$dados[$campo] = trim($valor);
		}

		// Mapeamento dos campos para a tabela cco_forms
		$form_data = [
			'company_name' => $dados['nome_empresa'] ?? '',
			'company_domain' => $dados['dominio'] ?? '',
			'company_history' => $dados['historia'] ?? '',
			'company_description' => $dados['descricao_empresa'] ?? '',
			'company_services' => $dados['servicos'] ?? '',
			'company_services_descriptions' => $dados['descricao_servicos'] ?? '',
			'company_services_prices' => $dados['precos'] ?? '',
			'company_main_color' => $dados['cor_principal'] ?? '',
			'company_secundary_color' => $dados['cor_secundaria'] ?? '',
			'company_third_color' => $dados['cor_terciaria'] ?? '',
			'company_networks' => $dados['redes'] ?? '',
			'company_testmonials' => $dados['depoimentos'] ?? '',
			'company_map_address' => $dados['mapa'] ?? '',
			'company_phones' => $dados['telefones'] ?? '',
			'company_emails' => $dados['emails'] ?? '',
			'is_deleted' => 0,
		];


		if ($form_data['company_secundary_color'] == "#d4af37") {
			$form_data['company_secundary_color'] == "";
		}

		if ($form_data['company_third_color'] == "#f4f4f4") {
			$form_data['company_third_color'] == "";
		}

		// === 2. Insere os dados principais da empresa ===

		$this->form_model->update_form_identifier($this->form_model->get_identifier(), $form_data);
		// $this->db->insert('cco_forms', $form_data);
		// $form_id = $this->db->insert_id(); // ID do registro na tabela principal

		// === 3. Tratamento dos uploads múltiplos ===
		$arquivosSalvos = [];

		foreach ($_FILES as $campo => $fileInfo) {
			if (is_array($fileInfo['name'])) {
				$total = count($fileInfo['name']);
				for ($i = 0; $i < $total; $i++) {
					if ($fileInfo['error'][$i] === UPLOAD_ERR_OK) {
						$nomeOriginal = $fileInfo['name'][$i];
						$ext = pathinfo($nomeOriginal, PATHINFO_EXTENSION);
						$nomeLimpo = sanitizeFileName($nomeOriginal);

						$pastaCampo = $base_dir . $campo . '/' . date('Y-m-d') . '/';
						if (!is_dir($pastaCampo)) mkdir($pastaCampo, 0777, true);

						$destino = $pastaCampo . $nomeLimpo;

						if (move_uploaded_file($fileInfo['tmp_name'][$i], $destino)) {

							// Salva na tabela de arquivos
							$file_data = [
								'file_path' => $destino,
								'file_slug' => $campo,
								'file_identifier' => $this->form_model->get_identifier(),
								'is_deleted' => 0
							];
							$this->form_model->add_form_files($file_data);

							$arquivosSalvos[$campo][] = $destino;
						}
					}
				}
			} else {
				if ($fileInfo['error'] === UPLOAD_ERR_OK) {
					$nomeOriginal = $fileInfo['name'];
					$ext = pathinfo($nomeOriginal, PATHINFO_EXTENSION);
					$nomeLimpo = sanitizeFileName($nomeOriginal);

					$pastaCampo = $base_dir . $campo . '/' . date('Y-m-d') . '/';
					if (!is_dir($pastaCampo)) mkdir($pastaCampo, 0777, true);

					$destino = $pastaCampo . $nomeLimpo;

					if (move_uploaded_file($fileInfo['tmp_name'], $destino)) {

						$file_data = [
							'file_path' => $destino,
							'file_slug' => $campo,
							'file_identifier' => $this->form_model->get_identifier(),
							'is_deleted' => 0
						];
						$this->form_model->add_form_files($file_data);

						$arquivosSalvos[$campo][] = $destino;
					}
				}
			}
		}

		// === 4. Retorno JSON para o front-end ===
		echo json_encode([
			'status' => true,
			'message' => 'Formulário e arquivos salvos com sucesso!',
			'form_id' => $this->form_model->get_identifier(),
			'arquivos' => $arquivosSalvos
		]);
	}
}
