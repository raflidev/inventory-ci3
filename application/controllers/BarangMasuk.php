<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangMasuk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("barangmasuk_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('level') == 2) redirect('admin');
    $data['title'] = 'Barang Masuk';
    $data['barangmasuk'] = $this->barangmasuk_model->getAll();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('barangmasuk_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function tambah()
  {
    $barangmasuk = $this->barangmasuk_model;
    $barangmasuk->save();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('barangmasuk');
  }

  public function get($id)
  {
    $data = $this->barangmasuk_model->getById($id);
    echo json_encode($data);
  }

  public function edit()
  {
    $barangmasuk = $this->barangmasuk_model;
    $barangmasuk->edit();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('barangmasuk');
  }

  public function simpan()
  {
    $this->barangmasuk_model->save();
    redirect('barangmasuk');
  }

  public function hapus($id)
  {
    $this->barangmasuk_model->delete($id);
    redirect('barangmasuk');
  }
}
