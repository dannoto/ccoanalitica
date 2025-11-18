<?php
class categoria_model extends CI_Model
{

    public function get_categorias($query = null)
    {

        if ($query != null) {
            $this->db->like('categoria_nome', $query);
        }

        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');
        return $this->db->get('categorias')->result();
    }

    public function get_loja($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('categorias')->row_array();
    }

    public function exist_categoria_by_nome($categoria_nome)
    {
        $this->db->where('categoria_nome', $categoria_nome);
        $this->db->where('is_deleted', 0);
        return $this->db->get('categorias')->row_array();
    }


    public function update_loja($id, $data)
    {

        $this->db->where('id', $id);
        return $this->db->update('categorias', $data);
    }


    public function create_loja($data)
    {
        return $this->db->insert('categorias', $data);
    }


    public function delete_categorias($id)
    {

        $this->db->where('id', $id);
        $data = array(
            'is_deleted' => 1,
        );
        return $this->db->update('categorias', $data);
    }

   
}
