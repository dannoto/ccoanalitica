<?php
class form_model extends CI_Model
{

    public function add_form($model_data)
    {
        return $this->db->insert('cco_forms', $model_data);
    }

    public function update_form($id, $model_data)
    {
        $this->db->where('id', $id);
        return $this->db->update('cco_forms', $model_data);
    }

    public function update_form_identifier($id, $model_data)
    {
        $this->db->where('company_identifier', $id);
        return $this->db->update('cco_forms', $model_data);
    }
    public function add_form_files($model_data)
    {
        return $this->db->insert('cco_forms_files', $model_data);
    }


    public function get_form_files($file_identifier)
    {
        $this->db->where('file_identifier', $file_identifier);
        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_forms_files')->result();
    }



    public function delete_form($id)
    {

        $this->db->where('id', $id);

        $data = array(
            'is_deleted' => 1,
        );

        return $this->db->update('cco_forms', $data);
    }

    public function get_forms_all()
    {
        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');
        return $this->db->get('cco_forms')->result();
    }

    public function get_form_by_identifier($identifier)
    {
        $this->db->where('company_identifier', $identifier);
        return $this->db->get('cco_forms')->row_array();
    }


    public function get_form($identifier)
    {
        $this->db->where('id', $identifier);
        return $this->db->get('cco_forms')->row_array();
    }



    public function get_forms_by_tag($tag_id)
    {
        $this->db->where('tag_id', $tag_id);
        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_forms_tags')->result();
    }

    public function create_identifier($identifier = null)
    {

        $this->load->library('session');

        $exist_session = $this->session->userdata('identifier');

        if (!$exist_session) {
            if ($identifier) {
                $this->session->set_userdata('identifier', $identifier);
            } else {
                // Generates a unique ID based on microtime
                $new_identifier = uniqid('cco_', true);
                $this->session->set_userdata('identifier', $new_identifier);
            }
        }

        return $this->session->userdata('identifier');
    }

    public function get_identifier()
    {
        $this->load->library('session');

        $exist_session = $this->session->userdata('identifier');

        if ($exist_session) {
            return $exist_session;
        } else {
            // If no session exists, create one immediately
            return $this->create_identifier();
        }
    }
}
