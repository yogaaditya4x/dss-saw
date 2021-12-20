<?php

class PegawaiModel extends CI_Model
{
    public function index()
    {
        return $this->db->get('pegawai')->result_array();
    }

    public function create()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'gender' => $this->input->post('gender'),
            'nip' => $this->input->post('nip'),
            'ttl' => $this->input->post('ttl'),
            'tmk' => $this->input->post('tmk'),
            'status' => $this->input->post('status'),
            'pendidikan' => $this->input->post('pendidikan'),
            'golongan' => $this->input->post('golongan'),
        ];
        $this->db->insert('pegawai', $data);
    }

    public function getById($id)
    {
        return $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();
    }

    public function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'gender' => $this->input->post('gender'),
            'nip' => $this->input->post('nip'),
            'ttl' => $this->input->post('ttl'),
            'tmk' => $this->input->post('tmk'),
            'status' => $this->input->post('status'),
            'pendidikan' => $this->input->post('pendidikan'),
            'golongan' => $this->input->post('golongan'),
        ];
        $this->db->where('id_pegawai', $this->input->post('id_pegawai'));
        $this->db->update('pegawai', $data);
    }

    public function delete($id)
    {
        $this->db->delete('pegawai', ['id_pegawai' => $id]);
    }
}
