<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi_model extends CI_Model {

    public function get_all_lokasi()
    {
        $query = $this->db->get('lokasi');
        return $query->result();
    }

    public function insert_lokasi($data)
    {
        $this->db->insert('lokasi', $data);
    }

    public function get_lokasi_by_id($id)
    {
        $query = $this->db->get_where('lokasi', array('id' => $id));
        return $query->row();
    }

    public function update_lokasi($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('lokasi', $data);
    }

    public function delete_lokasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lokasi');
    }
}
