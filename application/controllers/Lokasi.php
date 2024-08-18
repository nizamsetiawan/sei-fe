<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    public function index()
    {
        $this->load->model('Lokasi_model');
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        $this->load->view('lokasi_list', $data);
    }

    public function create()
    {
        $this->load->view('lokasi_form');
    }

    public function store()
    {
        $this->load->model('Lokasi_model');
        $this->Lokasi_model->insert_lokasi($this->input->post());
        redirect('lokasi');
    }

    public function edit($id)
    {
        $this->load->model('Lokasi_model');
        $data['lokasi'] = $this->Lokasi_model->get_lokasi_by_id($id);
        $this->load->view('lokasi_edit_form', $data);
    }

    public function update($id)
    {
        $this->load->model('Lokasi_model');
        $this->Lokasi_model->update_lokasi($id, $this->input->post());
        redirect('lokasi');
    }

    public function delete($id)
    {
        $this->load->model('Lokasi_model');
        $this->Lokasi_model->delete_lokasi($id);
        redirect('lokasi');
    }
}
