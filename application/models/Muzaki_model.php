<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muzaki_model extends CI_Model {
    
    public function create($data)
    {
        return $this->db->insert("t_muzaki", $data);
    }
    
    public function read()
    {
        $query = $this->db->get("t_muzaki");
        if ($query && $query->num_rows()) return $query->result();
        else return [];
    }
    
    public function update($where, $data)
    {
        $this->db->where($where);
        return $this->db->update("t_muzaki", $data);
    }
    
    public function delete($where)
    {
        $this->db->where($where);
        return $this->db->delete("t_muzaki");
    }
}