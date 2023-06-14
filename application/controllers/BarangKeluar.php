<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangKeluar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("barangkeluar_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('level') == 2) redirect('admin');
    $data['title'] = 'Barang Keluar';
    $data['barangkeluar'] = $this->barangkeluar_model->getAll();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('barangkeluar_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function tambah()
  {
    $barangkeluar = $this->barangkeluar_model;
    $barangkeluar->save();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('barangkeluar');
  }

  public function get($id)
  {
    $data = $this->barangkeluar_model->getById($id);
    echo json_encode($data);
  }

  public function edit()
  {
    $barangkeluar = $this->barangkeluar_model;
    $barangkeluar->edit();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('barangkeluar');
  }

  public function simpan()
  {
    $this->barangkeluar_model->save();
    redirect('barangkeluar');
  }

  public function hapus($id)
  {
    $this->barangkeluar_model->delete($id);
    redirect('barangkeluar');
  }
}
