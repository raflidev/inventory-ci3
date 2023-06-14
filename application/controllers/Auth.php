<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Login';
    $this->load->view('_part/login_head', $data);
    $this->load->view('login_v');
    $this->load->view('_part/login_footer');
  }

  public function forgotpass()
  {
    $data['title'] = 'Recovery password';
    $this->load->view('_part/login_head', $data);
    $this->load->view('forgotpass_v');
    $this->load->view('_part/login_footer');
  }

  public function login()
  {
    $post = $this->input->post();

    $this->load->model('user_model');
    $user = $this->user_model->get($post["username"]);



    if ($user) {
      if ($user->password == $post["password"]) {
        $data = [
          'username' => $user->username,
          'nama_lengkap' => $user->nama_lengkap,
          'level' => $user->level
        ];
        $this->session->set_userdata($data);

        if ($user->level == 1) {
          redirect('admin');
        } else {
          redirect('admin');
        }
      } else {
        $this->session->set_flashdata('error', 'Password salah');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('error', 'Username tidak terdaftar');
      redirect('auth');
    }
  }

  public function register()
  {
    $data['title'] = 'Recovery password';
    $this->load->view('_part/login_head', $data);
    $this->load->view('register_v');
    $this->load->view('_part/login_footer');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }
}
