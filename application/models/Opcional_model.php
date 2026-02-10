<?php
class opcional_model extends CI_model
{

    public function add_opcional($model_data)
    {
        return $this->db->insert('cco_optionals', $model_data);
    }

    public function update_opcional($id, $model_data)
    {
        $this->db->where('id', $id);
        return $this->db->update('cco_opcionals', $model_data);
    }

    public function delete_opcional_identifier($id)
    {

        $this->db->where('cco_identifier', $id);

        $data = array(
            'is_deleted' => 1,
        );

        return $this->db->update('cco_optionals', $data);
    }

    public function get_optionals_identifier($id)
    {
        $this->db->select('cco_optionals.*, cco_optionals_shop.cco_item_name as optional_name, cco_optionals_shop.cco_item_price as optional_price');
        $this->db->from('cco_optionals');
        $this->db->join('cco_optionals_shop', 'cco_optionals.cco_item = cco_optionals_shop.id');
        $this->db->where('cco_optionals.cco_identifier', $id);
        $this->db->where('cco_optionals.is_deleted', 0);
        return $this->db->get()->result();
    }



    public function get_opcionals_shop()
    {
        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_optionals_shop')->result();
    }


    public function get_opcionals_all()
    {
        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_opcionals')->result();
    }
}
