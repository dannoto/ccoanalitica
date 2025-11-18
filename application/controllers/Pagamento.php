<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagamento extends CI_Controller
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

        $this->load->view('main/pagamento');
    }
}
