<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek_model extends CI_Model {

    public function get_all_proyek()
    {
        $query = $this->db->get('proyek');
        return $query->result();
    }

    public function insert_proyek($data)
    {
        $this->db->insert('proyek', $data);
    }

    public function get_proyek_by_id($id)
    {
        $query = $this->db->get_where('proyek', array('id' => $id));
        return $query->row();
    }

    public function update_proyek($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('proyek', $data);
    }

    public function delete_proyek($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('proyek');
    }
}
