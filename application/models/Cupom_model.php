<?php
class cupom_model extends CI_Model
{


    public function get_cupons_by_loja($loja_id)
    {
        $this->db->where('cupom_loja', $loja_id);
        return $this->db->get('cupons')->result();
    }

    public function get_last_cupons()
    {
        $this->db->order_by('id', 'desc');
        $this->db->where('is_deleted', 0);
        $this->db->limit(30);
        return $this->db->get('cupons')->result();
    }



    public function get_categorias($query = null)
    {

        if ($query != null) {
            $this->db->like('categoria_titulo', $query);
        }

        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');
        return $this->db->get('cupons')->result();
    }

    public function get_loja($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('cupons')->row_array();
    }


    public function exist_categoria_by_nome($categoria_titulo)
    {
        $this->db->where('categoria_titulo', $categoria_titulo);
        $this->db->where('is_deleted', 0);
        return $this->db->get('cupons')->row_array();
    }


    public function update_loja($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('cupons', $data);
    }


    public function create_loja($data)
    {
        return $this->db->insert('cupons', $data);
    }


    public function delete_categorias($id)
    {

        $this->db->where('id', $id);
        $data = array(
            'is_deleted' => 1,
        );
        return $this->db->update('cupons', $data);
    }
}
