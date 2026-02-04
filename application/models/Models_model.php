<?php
class models_model extends CI_Model
{

    public function add_model($model_data)
    {
         $this->db->insert('cco_models', $model_data);
         return $this->db->insert_id();
    }

    public function update_model($id, $model_data)
    {
        $this->db->where('id', $id);
        return $this->db->update('cco_models', $model_data);
    }

    public function get_model($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('cco_models')->row_array();
    }

    public function get_models_by_tag_home($tag_id)
    {
        $this->db->where('is_deleted', 0);
        $this->db->where('tag_id', $tag_id);
        $this->db->order_by('id', 'desc');

        return $this->db->get('cco_models_tags')->result();
    }

    public function delete_model($id)
    {

        $this->db->where('id', $id);

        $data = array(
            'is_deleted' => 1,
        );

        return $this->db->update('cco_models', $data);
    }

    public function get_models_all()
    {
        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');

        return $this->db->get('cco_models_tags')->result();
    }


    public function get_models_all_painel()
    {
        $this->db->where('is_deleted', 0);
        $this->db->order_by('id', 'desc');

        return $this->db->get('cco_models')->result();
    }
    public function get_models_by_tag($tag_id)
    {
        $this->db->where('tag_id', $tag_id);
        $this->db->order_by('id', 'desc');

        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_models_tags')->result();
    }

    public function get_tag_id_by_slug($slug)
    {
        $this->db->where('tag_slug', $slug);
        $this->db->order_by('id','asc');
        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_tags')->row_array();
    }

    public function search_models($tag_id = null)
    {

        if ($tag_id) {

            $this->db->like('tag_id', $tag_id);
        }
        $this->db->order_by('id', 'desc');


        $this->db->where('is_deleted', 0);

        return $this->db->get('cco_models_tags')->result();
    }
}
