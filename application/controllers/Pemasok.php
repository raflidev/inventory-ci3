<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemasok extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("pemasok_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('level') == 2) redirect('admin');
    if ($this->session->userdata('level') == FALSE) redirect('/');
    $data['title'] = 'Pemasok';
    $data['pemasok'] = $this->pemasok_model->getAll();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('pemasok_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function get($id)
  {
    $data = $this->pemasok_model->getById($id);
    echo json_encode($data);
  }

  public function tambah()
  {
    $pemasok = $this->pemasok_model;
    $pemasok->save();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('pemasok');
  }

  public function edit()
  {
    $pemasok = $this->pemasok_model;
    $pemasok->edit();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('pemasok');
  }

  public function hapus($id)
  {
    $this->pemasok_model->delete($id);
    $this->session->set_flashdata('success', 'Berhasil dihapus');
    redirect('pemasok');
  }
}
