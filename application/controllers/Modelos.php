<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelos extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('models_model');
		$this->load->model('form_model');

		$this->load->helper('cookie');
		$this->load->library('session');
	}

	public function index($slug, $identifier = null)
	{

		// echo "Já identificador de url: " . $identifier;

		// $exist_session = $this->session->userdata('identifier');

		// if (!$exist_session) {
		// 	redirect(base_url());
		// }

		if (!$slug) {

			redirect(base_url());
		}

		$tag_data = $this->models_model->get_tag_id_by_slug($slug);

		if (!$tag_data) {

			redirect(base_url());
		}

		$get_modelos_by_slug = $this->models_model->get_models_by_tag_home($tag_data['id']);


		$this->session->set_userdata('slug', $slug);

		$exist_session = $this->session->userdata('identifier');

		if (!$exist_session) {

			$this->form_model->create_identifier($identifier);
		}


		// $exist_session = $this->session->userdata('identifier');


		// echo $exist_session;


		$data = array(
			'tag' => $tag_data,
			'modelos' => $get_modelos_by_slug
		);


		$this->load->view('main/modelos', $data);
	}

	public function demo($segmento, $modelo)
	{

		// Caminho do JSON
		$jsonPath =  "dist/modelos/".$modelo."/".$segmento.".json";

		if (!file_exists($jsonPath)) {
			show_404();
		}

		// Lê o JSON
		$json = file_get_contents($jsonPath);

		// Converte pra array PHP
		$data = json_decode($json, true);

		if ($data === null) {
			die('JSON inválido');
		}


		$data = array(
			'segmento' => $segmento,
			'modelo' => $modelo,
			'd' => $data
		);

		$this->load->view('modelos/' . $modelo . '/index', $data);
	}
}
