<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('categoria_model');
		$this->load->model('loja_model');
		$this->load->model('cupom_model');
	}

	public function index()
	{

		$this->load->view('main/home');
	}
}
