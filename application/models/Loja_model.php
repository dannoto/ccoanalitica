<?php
class loja_model extends CI_Model
{

    public function get_lojas($query = null)
    {

        if ($query != null) {
            $this->db->like('loja_nome', $query);
        }

        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');
        return $this->db->get('lojas')->result();
    }

    public function get_loja_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('lojas')->row_array();
    }

    public function get_loja_by_slug($loja_slug)
    {
        $this->db->where('loja_slug', $loja_slug);
        return $this->db->get('lojas')->row_array();
    }

    public function exist_loja_by_nome($loja_nome)
    {
        $this->db->where('loja_nome', $loja_nome);
        $this->db->where('is_deleted', 0);
        return $this->db->get('lojas')->row_array();
    }


    public function update_loja($id, $data)
    {

        $this->db->where('id', $id);
        return $this->db->update('lojas', $data);
    }


    public function create_loja($data)
    {
        return $this->db->insert('lojas', $data);
    }


    public function delete_lojas($id)
    {

        $this->db->where('id', $id);
        $data = array(
            'is_deleted' => 1,
        );
        return $this->db->update('lojas', $data);
    }
}
