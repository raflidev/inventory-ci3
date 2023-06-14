<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("pelanggan_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('level') == 2) redirect('admin');
    $data['title'] = 'Pelanggan';
    $data['pelanggan'] = $this->pelanggan_model->getAll();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('pelanggan_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function get($id)
  {
    $data = $this->pelanggan_model->getById($id);
    echo json_encode($data);
  }

  public function tambah()
  {
    $pelanggan = $this->pelanggan_model;
    $pelanggan->save();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('pelanggan');
  }

  public function edit()
  {
    $pelanggan = $this->pelanggan_model;
    $pelanggan->edit();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('pelanggan');
  }

  public function hapus($id)
  {
    $this->pelanggan_model->delete($id);
    $this->session->set_flashdata('success', 'Berhasil dihapus');
    redirect('pelanggan');
  }
}
