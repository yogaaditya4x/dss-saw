<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['page_title'] = 'Employee Data';
        $data['pegawais'] = $this->PegawaiModel->index();
        $this->load->view('backend/pegawai/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Create Employee Data';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('ttl', 'Ttl', 'required');
        $this->form_validation->set_rules('tmk', 'Tmk', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/pegawai/create', $data);
        } else {
            $this->PegawaiModel->create();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pegawai berhasil ditambahkan !</div>');
            redirect('pegawai');
        }
    }
    public function update($id)
    {
        $data['page_title'] = 'Update Employee Data';
        $data['pegawai'] = $this->PegawaiModel->getById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('ttl', 'Ttl', 'required');
        $this->form_validation->set_rules('tmk', 'Tmk', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/pegawai/update', $data);
        } else {
            $this->PegawaiModel->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pegawai berhasil diubah !</div>');
            redirect('pegawai');
        }
    }

    public function delete($id)
    {
        $this->PegawaiModel->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pegawai berhasil dihapus !</div>');
        redirect('pegawai');
    }
}
