<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PermintaanBarang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("permintaanbarang_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('level') == FALSE) redirect('/');
    if ($this->session->userdata('level') == 3) redirect('admin');
    $data['title'] = 'Permintaan Barang';
    $data['permintaanbarang'] = $this->permintaanbarang_model->getAll();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('permintaanbarang_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function get($id)
  {
    $data = $this->permintaanbarang_model->getById($id);
    echo json_encode($data);
  }

  public function tambah()
  {
    $permintaanbarang = $this->permintaanbarang_model;
    $permintaanbarang->save();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('permintaanbarang');
  }

  public function edit()
  {
    $permintaanbarang = $this->permintaanbarang_model;
    $permintaanbarang->edit();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('permintaanbarang');
  }

  public function hapus($id)
  {
    $this->permintaanbarang_model->delete($id);
    $this->session->set_flashdata('success', 'Berhasil dihapus');
    redirect('permintaanbarang');
  }
}
