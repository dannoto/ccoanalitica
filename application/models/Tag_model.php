<?php
class tag_model extends CI_Model
{

    public function get_tag($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('cco_tags')->row_array();
    }

    public function get_tags()
    {
        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_tags')->result();
    }
  public function add_tag($tag_data)
    {
      
        return $this->db->insert('cco_tags', $tag_data);
    }

    
    public function add_tag_model($tag_data)
    {
        $this->db->where('is_deleted', 0);
        return $this->db->insert('cco_models_tags', $tag_data);
    }


public function get_tags_by_model($model_id)
{
    return $this->db
        ->select('mt.id AS model_tag_id, t.id AS tag_id, t.tag_name')
        ->from('cco_models_tags mt')
        ->join('cco_tags t', 't.id = mt.tag_id')
        ->where('mt.model_id', $model_id)
        ->where('mt.is_deleted', 0)
        ->get()
        ->result_array();
}



    public function search_tags($query)
    {

        $this->db->like('tag_name', $query);

        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_tags')->result();
    }


    public function update_tag($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('cco_tags', $data);
    }

    public function delete_tag($id)
    {

        $this->db->where('id', $id);

        $data = array(
            'is_deleted' => 1,
        );

        return $this->db->update('cco_tags', $data);
    }

       public function delete_tag_model($id)
    {

        $this->db->where('id', $id);

        $data = array(
            'is_deleted' => 1,
        );

        return $this->db->update('cco_models_tags', $data);
    }
}
