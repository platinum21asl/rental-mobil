<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_customer extends CI_Controller
{

      public function index()
      {
            // $data['mobil'] = $this->rental_model->get_data('mobil')->result();
            // $data['type'] = $this->rental_model->get_data('type')->result();
            $data['customer'] = $this->rental_model->get_data('customer')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_customer/data_customer', $data);
            $this->load->view('templates_admin/footer');
      }

      public function tambah_customer()
      {
            // $data['customer'] = $this->rental_model->get_data('customer')->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_customer/form_tambah_customer');
            $this->load->view('templates_admin/footer');
      }

      public function tambah_customer_aksi()
      {
            $this->_rules();

            if (!$this->form_validation->run()) {
                  $this->tambah_customer();
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
                        'password' => $password
                  ];

                  $this->rental_model->insert_data($data, 'customer');
                  $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                  Data Customer Berhasil ditambahkan
                </div>');
                  redirect('admin/data_customer');
            }
      }

      public function update_customer($id)
      {

            $data['customer'] = $this->db->query("SELECT * FROM `customer` WHERE id_customer = '$id'")->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_customer/form_update_customer', $data);
            $this->load->view('templates_admin/footer');
      }
      public function update_customer_aksi()
      {
            $this->_rules();
            $id = $this->input->post('id_customer');

            if ($this->form_validation->run() == FALSE) {
                  $this->update_customer($id);
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
                        'password' => $password
                  ];

                  $where = [
                        'id_customer' => $id
                  ];

                  $this->rental_model->update_data('customer', $data, $where);
                  $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                  Data Customer Berhasil diupdate
                </div>');
                  redirect('admin/data_customer');
            }
      }

      public function delete_customer($id)
      {
            $where = [
                  'id_customer' => $id
            ];

            $this->rental_model->delete_data($where, 'customer');
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Data Customer berhasil di hapus
          </div>');
            redirect('admin/data_customer');
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
