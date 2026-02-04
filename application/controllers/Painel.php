<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Painel extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->load->model('identifier_model');
        $this->load->model('models_model');
        $this->load->model('form_model');
        $this->load->model('opcional_model');
        $this->load->model('tag_model');


        $this->load->helper('cookie');
        $this->load->library('session');
    }

    public function index()
    {

        $this->load->view('painel/home');
    }


    public function tags()
    {

        $this->load->view('painel/tags');
    }


    public function act_add_tag()
    {
        $tag_data = array(
            'tag_name' => htmlspecialchars($this->input->post('tag_name')),
            'tag_slug' => htmlspecialchars($this->input->post('tag_slug')),
            'tag_description' => htmlspecialchars($this->input->post('tag_description')),
            'is_deleted' => 0
        );

        $result = $this->tag_model->add_tag($tag_data);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['status' => true, 'result' => $result]);
    }

    public function act_update_tag()
    {
        $tag_id = htmlspecialchars($this->input->post('tag_id'));

        $tag_data = array(
            'tag_name' => htmlspecialchars($this->input->post('tag_name')),
            'tag_slug' => htmlspecialchars($this->input->post('tag_slug')),
            'tag_description' => htmlspecialchars($this->input->post('tag_description')),
        );

        $result = $this->tag_model->update_tag($tag_id, $tag_data);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['status' => true, 'result' => $result]);
    }

    public function act_delete_tag()
    {
        $tag_id = htmlspecialchars($this->input->post('tag_id'));
        $result = $this->tag_model->delete_tag($tag_id);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['status' => true, 'result' => $result]);
    }

    public function act_get_tags()
    {
        $result = $this->tag_model->get_tags();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }



    // =============================


    public function modelos()
    {



        if (strlen($this->input->get('tag_id')) > 0) {

            $modelos = $this->models_model->search_models($this->input->get('tag_id'));
        } else {

            $modelos = $this->models_model->get_models_all_painel();
        }




        $data = array(

            'modelos' => $modelos
        );


        $this->load->view('painel/modelos', $data);
    }

    public function editar_modelos($modelo_id)
    {

        $modelo = $this->models_model->get_model($modelo_id);

        if ($modelo) {


            $data = array(
                'modelo' => $modelo
            );

            $this->load->view('painel/editar_modelos', $data);
        } else {

            redirect(base_url('painel/modelos'));
        }
    }

    public function criar_modelos()
    {
        $this->load->view('painel/criar_modelos');
    }



    public function informacoes()
    {

        $this->load->view('painel/informacoes');
    }



    public function act_delete_model()
    {

        $model_id = htmlspecialchars($this->input->post('id'));

        $model_data = array(
            'is_deleted' => 1,
      
        );

        $this->models_model->update_model($model_id, $model_data);
    }

    public function act_update_model()
    {

        $model_id = htmlspecialchars($this->input->post('id'));

        $model_data = array(
            'model_title' => htmlspecialchars($this->input->post('model_title')),
            'model_image' => htmlspecialchars($this->input->post('model_image')),
            'model_link' => htmlspecialchars($this->input->post('model_link')),
            'model_description' => htmlspecialchars($this->input->post('model_description')),
            'model_language' => htmlspecialchars($this->input->post('model_language')),
        );

        $this->models_model->update_model($model_id, $model_data);
    }

    public function act_add_model()
    {

        $model_data = array(
            'model_title' => htmlspecialchars($this->input->post('model_title')),
            'model_image' => htmlspecialchars($this->input->post('model_image')),
            'model_link' => htmlspecialchars($this->input->post('model_link')),
            'model_description' => htmlspecialchars($this->input->post('model_description')),
            'model_language' => htmlspecialchars($this->input->post('model_language')),
            'is_deleted' => 0
        );

        $result = $this->models_model->add_model($model_data);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }

    public function act_search_tag()
    {
        // Recebe o termo de busca (pode vir via GET ou POST)
        $query =  $this->input->post('query');

        // Busca as tags no banco
        $result = $this->tag_model->search_tags($query);

        // Retorna em JSON (para o front usar direto no autocomplete)
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }


    public function act_get_tags_by_model()
    {


        $modelo_id = htmlspecialchars($this->input->post('model_id'));


        $result =  $this->tag_model->get_tags_by_model($modelo_id);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }

    public function add_tag_to_model()
    {

        $tag_id = htmlspecialchars($this->input->post('tag_id'));
        $model_id = htmlspecialchars($this->input->post('model_id'));

        $tag_data = array(
            'tag_id' => $tag_id,
            'model_id' => $model_id,
            'is_deleted' => 0
        );


        $this->tag_model->add_tag_model($tag_data);
    }


    public function remove_tag_to_model()
    {
        $id = htmlspecialchars($this->input->post('id'));

        $this->tag_model->delete_tag_model($id);

        echo json_encode(['status' => true]);
    }

    public function clientes()
    {

        $this->load->view('painel/clientes');
    }

       public function clientes_ver($id)
    {



        $data = array(
            'form' =>$this->form_model->get_form($id),
            'files' => $this->form_model->get_form_files($this->form_model->get_form($id)['company_identifier']),
        );

        // print_r($data);
  

        $this->load->view('painel/clientes_ver', $data);
    }



    
    public function act_get_clientes()
    {
        $result = $this->form_model->get_forms_all();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }


      public function remove_clientes()
    {
        $id = htmlspecialchars($this->input->post('id'));

        $this->form_model->delete_form($id);

        echo json_encode(['status' => true]);
    }

}
