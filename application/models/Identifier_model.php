<?php
class identifier_model extends CI_Model
{

    public function add_identifier($identifier_data)
    {
        return $this->db->insert('cco_identifiers', $identifier_data);
    }

    public function update_identifier($id, $identifier_data)
    {
        $this->db->where('id', $id);
        return $this->db->update('cco_identifiers', $identifier_data);
    }

    public function delete_identifier($id)
    {

        $this->db->where('id', $id);

        $data = array(
            'is_deleted' => 1,
        );

        return $this->db->update('cco_identifiers', $data);
    }


    
    public function get_identifiers_all()
    {
        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_identifiers')->result();
    }

    public function get_identifiers_by_tag($tag_id)
    {
        $this->db->where('tag_id', $tag_id);
        $this->db->where('is_deleted', 0);
        return $this->db->get('cco_identifiers_tags')->result();
    }


}
