<?php
class hassio_model extends CI_Model
{

    public function get_adeptos($query = null)
    {

        if ($query != null) {
            $this->db->like('adepto_site', $query);
        }

        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');
        return $this->db->get('adeptos_main')->result();
    }

    public function get_adepto($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('adeptos_main')->row_array();
    }

    public function get_adepto_ads_active()
    {
        $this->db->where('ads_active', 1);
        $this->db->where('is_deleted', 0);
        return $this->db->get('adeptos_main')->result();
    }

    public function get_adepto_ads_single($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('adepto_ads')->row_array();
    }

    public function get_adepto_ads()
    {
        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');

        return $this->db->get('adepto_ads')->result();
    }

    public function get_adepto_adaptations_active($adepto_id)
    {
        $this->db->where('ads_adaptive_active', 1);
        $this->db->where('is_deleted', 0);
        $this->db->where('ads_adepto', $adepto_id);

        return $this->db->get('adeptos_main')->result();
    }

    public function get_adepto_adaptations($query = null)
    {

         if ($query != null) {
            $this->db->like('ads_adepto', $query);
        }

        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');

        // $this->db->where('ads_adepto', $adepto_id);

        return $this->db->get('adepto_adaptations')->result();
    }

     public function get_adepto_adaptation($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('adepto_adaptations')->row_array();
    }

    public function exist_adepto($adepto_site)
    {
        $this->db->where('adepto_site', $adepto_site);
        $this->db->where('is_deleted', 0);
        return $this->db->get('adeptos_main')->row_array();
    }

    // 

    public function update_adepto($id, $data)
    {

        $this->db->where('id', $id);
        return $this->db->update('adeptos_main', $data);
    }

    public function update_adepto_ads($id, $data)
    {

        $this->db->where('id', $id);
        return $this->db->update('adepto_ads', $data);
    }

    public function update_adepto_adaptations($id, $data)
    {

        $this->db->where('id', $id);
        return $this->db->update('adepto_adaptations', $data);
    }

    // 

    public function create_adepto($data)
    {
        return $this->db->insert('adeptos_main', $data);
    }

    public function create_adepto_ads($data)
    {
        return $this->db->insert('adepto_ads', $data);
    }

    public function create_adepto_adaptations($data)
    {
        return $this->db->insert('adepto_adaptations', $data);
    }

    // 

    public function delete_adepto($id)
    {

        $this->db->where('id', $id);
        $data = array(
            'is_deleted' => 1,
        );
        return $this->db->update('adeptos_main', $data);
    }

    public function delete_adepto_ads($id)
    {

        $this->db->where('id', $id);
        $data = array(
            'is_deleted' => 1,
        );
        return $this->db->update('adepto_ads', $data);
    }

    public function delete_adepto_adaptation($id)
    {
        $this->db->where('id', $id);
        $data = array(
            'is_deleted' => 1,
        );
        return $this->db->update('adepto_adaptations', $data);
    }
}
