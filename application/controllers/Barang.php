<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("barang_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Barang';
    $data['barang'] = $this->barang_model->getAll();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('barang_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function get($id)
  {
    $data = $this->barang_model->getById($id);
    echo json_encode($data);
  }

  public function tambah()
  {
    $barang = $this->barang_model;
    $barang->save();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('barang');
  }

  public function edit()
  {
    $barang = $this->barang_model;
    $barang->edit();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('barang');
  }

  public function hapus($id)
  {
    $this->barang_model->delete($id);
    $this->session->set_flashdata('success', 'Berhasil dihapus');
    redirect('barang');
  }
}
