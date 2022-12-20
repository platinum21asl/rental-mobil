<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
      public function index()
      {
            $this->_rules();
            if ($this->form_validation->run() == false) {
                  $this->load->view('templates_admin/header');
                  $this->load->view('register_form');
                  $this->load->view('templates_admin/footer');
            } else {
                  $nama = $this->input->post('nama');
                  $username = $this->input->post('username');
                  $alamat = $this->input->post('alamat');
                  $gender = $this->input->post('gender');
                  $no_telp = $this->input->post('no_telp');
                  $no_ktp = $this->input->post('no_ktp');
                  $password = md5($this->input->post('password'));

                  $data = [
                        'nama' => $nama,
                        'username' => $username,
                        'alamat' => $alamat,
                        'no_telp' => $no_telp,
                        'gender' => $gender,
                        'no_ktp' => $no_ktp,
                        'password' => $password,
                        'role_id' => 2
                  ];

                  $this->rental_model->insert_data($data, 'customer');
                  $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                  Berhasil Daftar
                </div>');
                  redirect('auth/index');
            }
      }


      public function _rules()
      {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('no_telp', 'No. Telp', 'required');
            $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
      }
}
