<?php
class form_session_model extends CI_Model
{

    public function add_form_session($form_session)
    {
        return $this->db->insert('form_sessions', $form_session);
    }

    public function update_form_session($id, $form_session)
    {
        $this->db->where('id', $id);
        return $this->db->update('form_sessions', $form_session);
    }

    public function delete_form_session($id)
    {

        $this->db->where('id', $id);

        $data = array(
            'is_deleted' => 1,
        );

        return $this->db->update('form_sessions', $data);
    }

    public function get_form_sessions()
    {
        $this->db->where('is_deleted', 0);
        return $this->db->get('form_sessions')->result();
    }

    public function get_form_session($id)
    {
        $this->db->where('id', $id);
        $this->db->where('is_deleted', 0);
        return $this->db->get('form_sessions')->row_array();
    }

       public function get_form_session_by_identifier($form_identifier)
    {
        $this->db->where('form_identifier', $form_identifier);
        $this->db->where('is_deleted', 0);
        return $this->db->get('form_sessions')->row_array();
    }

    public function check_form_session_by_identifier($form_identifier)
    {
        $this->db->where('form_identifier', $form_identifier);
        $this->db->where('is_deleted', 0);
        return $this->db->get('form_sessions')->row_array();
    }
}
