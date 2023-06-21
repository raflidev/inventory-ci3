<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StokBarang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("stokbarang_model");
    $this->load->model("barang_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('level') == 2) redirect('admin');
    if ($this->session->userdata('level') == FALSE) redirect('/');
    $data['title'] = 'Stok Barang';
    $data['barang'] = $this->barang_model->getAll();
    $data['stokbarang'] = $this->stokbarang_model->getBarang();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('stokbarang_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function tambah()
  {
    $stokbarang = $this->stokbarang_model;
    $stokbarang->save();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('stokbarang');
  }

  public function get($id)
  {
    $data = $this->stokbarang_model->getById($id);
    echo json_encode($data);
  }

  public function edit()
  {
    $stokbarang = $this->stokbarang_model;
    $stokbarang->edit();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('stokbarang');
  }

  public function simpan()
  {
    $this->stokbarang_model->save();
    redirect('stokbarang');
  }

  public function hapus($id)
  {
    $this->stokbarang_model->delete($id);
    redirect('stokbarang');
  }
}
