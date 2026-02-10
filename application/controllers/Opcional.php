<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opcional extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('identifier_model');
		$this->load->model('models_model');
		$this->load->model('form_model');
		$this->load->model('opcional_model');


		$this->load->helper('cookie');
		$this->load->library('session');
	}

	public function index()
	{

		$exist_session = $this->session->userdata('identifier');

		if (!$exist_session) {
			redirect(base_url());
		}

		$this->load->view('main/opcional');
	}


	public function act_add_opcional()
	{

		header('Content-Type: application/json');


		// Recebe dados do AJAX
		$servicos = isset($_POST['servicos']) ? $_POST['servicos'] : [];
		// $total = isset($_POST['total']) ? floatval($_POST['total']) : 0;



		if (!is_array($servicos)) {
			echo json_encode(['status' => false, 'error' => 'Formato inválido de serviços.']);
			exit;
		}


		$check_opcionals = $this->opcional_model->get_optionals_identifier($this->form_model->get_identifier());

		if ($check_opcionals) {

			$this->opcional_model->delete_opcional_identifier($this->form_model->get_identifier());
		}

		

		// Insere cada serviço selecionado
		foreach ($servicos as $id_servico) {


			$data = array(

				'cco_item' => $id_servico,
				'cco_identifier' => $this->form_model->get_identifier()

			);

			$this->opcional_model->add_opcional($data);
		}



		echo json_encode(['status' => true]);
	}
}
