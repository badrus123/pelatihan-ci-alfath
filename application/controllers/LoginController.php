<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 23/03/2019
 * Time: 2:26
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginController extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('LoginModel');
  }

  public function index()
  {
    if ($this->session->userdata('login')==1) {
      redirect('BelajarController/index');
    }
    $this->load->view('login');
  }

  public function register_view(){
    $this->load->view('register');
  }

  public function cek_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $login = $this->LoginModel->login_user($username, $password);

    if ($login) {
      $sess_data = array(
          'logged_in' => 1,
          'username' => $login->username
      );
      $this->session->set_userdata($sess_data);
      redirect('BelajarController/index');
    } else {
      echo "<script>alert('Gagal login: Cek username, password!');</script>";
      redirect('LoginController/index');
    }
  }

  public function register()
  {
    $this->load->model('LoginModel');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $email = $this->input->post('email');
    $table = 'user';

    $data_insert = array (
      'username' => $username,
      'password' => $password,
      'email' => $email
    );

    $register = $this->LoginModel->register_user($table, $data_insert);

    if ($register) {
      $this->session->set_flashdata('alert', 'registrasi_berhasil');
      redirect('LoginController/index');
    }
  }

  public function Logout()
  {
    $this->session->sess_destroy();
    redirect('LoginController/index');
  }
}