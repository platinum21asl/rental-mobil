<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rental extends CI_Controller
{

      public function tambah_rental($id)
      {
            $data['detail'] = $this->rental_model->ambil_id_mobil($id);
            $this->load->view('templates_customer/header');
            $this->load->view('customer/tambah-rental', $data);
            $this->load->view('templates_customer/footer');
      }

      public function tambah_rental_aksi()
      {
            $id_customer = $this->session->userdata('nama');
            $id_mobil = $this->input->post('id_mobil');
            $tanggal_rental = $this->input->post('tanggal_rental');
            $tanggal_kembali = $this->input->post('tanggal_kembali');
            $denda = $this->input->post('denda');
            $harga = $this->input->post('harga');
            $data = [
                  'nama' => $id_customer,
                  'id_mobil' => $id_mobil,
                  'tanggal_rental' => $tanggal_rental,
                  'tanggal_kembali' => $tanggal_kembali,
                  'denda' => $denda,
                  'harga' => $harga,
                  'tanggal_pengembalian' => '-',
                  'status_rental' => 'Belum Selesai',
                  'status_pengembalian' => 'Belum Kembali',
                  'bukti_pembayaran' => '-',
                  'status_pembayaran' => 0,
                  'total_denda' => 0
            ];

            $this->rental_model->insert_data($data, 'transaksi');

            $status = [
                  'status' => '0'
            ];
            $id = [
                  'id_mobil' => $id_mobil
            ];
            $this->rental_model->update_data('mobil', $status, $id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Transaksi Berhasil ditambahkan
          </div>');
            redirect('customer/data_mobil');
      }
}
