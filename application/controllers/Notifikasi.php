<?php

class Notifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_notifikasi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Notifikasi';

        $data['notifikasi'] = $this->M_notifikasi->getData();
        $this->load->view('templates/header', $data);
        $this->load->view('notifikasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Notifikasi';
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');
        $this->form_validation->set_rules('sistem_id', 'Sistem Id', 'required|numeric');
        $this->form_validation->set_rules('no_pegawai', 'No. Pegawai', 'required|numeric');
        // $this->form_validation->set_rules('is_terkirim', 'Status', 'required');
        // $this->form_validation->set_rules('created_at', 'Created At', 'required');
        $this->form_validation->set_rules('kode', 'Kode BPS', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('notifikasi/tambah');
            $this->load->view('templates/footer');
        } else {
            // $this->M_notifikasi->tambahData();
            // $this->session->set_flashdata('flash', 'Ditambahkan');
            // redirect('notifikasi');
            echo "berhasil";
        }
    }
}