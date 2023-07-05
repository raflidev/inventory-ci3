<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("user_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('level') !== "3" && $this->session->userdata('level') !== "1") redirect('admin');
    if ($this->session->userdata('level') == FALSE) redirect('/');
    $data['title'] = 'User Manajemen';
    $data['user'] = $this->user_model->getAll();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('user_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function tambah()
  {
    $user = $this->user_model;
    $user->save();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('user');
  }

  public function get($id)
  {
    $data = $this->user_model->getById($id);
    echo json_encode($data);
  }

  public function edit()
  {
    $user = $this->user_model;
    $user->edit();
    $this->session->set_flashdata('success', 'Berhasil disimpan');
    redirect('user');
  }

  public function simpan()
  {
    $this->user_model->save();
    redirect('user');
  }

  public function hapus($id)
  {
    $this->user_model->delete($id);
    redirect('user');
  }
}
