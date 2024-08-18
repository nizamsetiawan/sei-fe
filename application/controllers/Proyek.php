<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

    public function index()
    {
        $this->load->model('Proyek_model');
        $data['proyek'] = $this->Proyek_model->get_all_proyek();
        $this->load->view('proyek_list', $data);
    }

    public function create()
    {
        $this->load->view('proyek_form');
    }

    public function store()
    {
        $this->load->model('Proyek_model');
        $this->Proyek_model->insert_proyek($this->input->post());
        redirect('proyek');
    }

    public function edit($id)
    {
        $this->load->model('Proyek_model');
        $data['proyek'] = $this->Proyek_model->get_proyek_by_id($id);
        $this->load->view('proyek_edit_form', $data);
    }

    public function update($id)
    {
        $this->load->model('Proyek_model');
        $this->Proyek_model->update_proyek($id, $this->input->post());
        redirect('proyek');
    }

    public function delete($id)
    {
        $this->load->model('Proyek_model');
        $this->Proyek_model->delete_proyek($id);
        redirect('proyek');
    }
}
