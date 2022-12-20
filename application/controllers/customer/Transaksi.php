<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

      public function index()
      {
            $customer = $this->session->userdata('alamat');
            $data['transaksi'] = $this->db->query("SELECT * from transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil and tr.nama = cs.nama ORDER BY id_rental DESC")->result();

            $this->load->view('templates_customer/header');
            $this->load->view('customer/transaksi', $data);
            $this->load->view('templates_customer/footer');
      }
      public function pembayaran($id)
      {
            $data['transaksi'] = $this->db->query("SELECT * from transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil and tr.nama = cs.nama and  tr.id_rental = '$id' ")->result();


            $this->load->view('templates_customer/header');
            $this->load->view('customer/pembayaran', $data);
            $this->load->view('templates_customer/footer');
      }

      public function pembayaran_aksi()
      {
            $id = $this->input->post('id_rental');
            $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
            if ($bukti_pembayaran) {
                  $config['upload_path'] = './assets/upload';
                  $config['allowed_types'] = 'pdf|jpg|jpeg|png|tiff';

                  $this->load->library('upload', $config);
                  if (!$this->upload->do_upload('bukti_pembayaran')) {
                        echo 'Bukti Pembayaran Mobil Gagal di Upload';
                  } else {
                        $bukti_pembayaran = $this->upload->data('file_name');
                  }
            }

            $data = [
                  'bukti_pembayaran' => $bukti_pembayaran
            ];
            $where = [
                  'id_rental' => $id
            ];
            $this->rental_model->update_data('transaksi', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Bukti Pembayaran Berhasil di Upload
          </div>');
            redirect('customer/transaksi');
      }

      public function cetak_invoice($id)
      {
            $data['transaksi'] = $this->db->query("SELECT * from transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil and tr.nama = cs.nama and  tr.id_rental = '$id' ")->result();

            $this->load->view('customer/cetak_invoice', $data);
      }

      public function batal_transaksi($id)
      {

            $where = [
                  'id_rental' => $id
            ];

            $data = $this->rental_model->get_where($where, 'transaksi')->row();

            $where2 = [
                  'id_mobil' => $data->id_mobil
            ];

            $data2 = [
                  'status' => 1
            ];

            $this->rental_model->update_data('mobil', $data2, $where2);

            $this->rental_model->delete_data($where, 'transaksi');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Transaksi Berhasil Dibatalkan
          </div>');
            redirect('customer/transaksi');
      }

      // public function detail_mobil($id)
      // {
      //       $data['detail'] = $this->rental_model->ambil_id_mobil($id);
      //       $this->load->view('templates_customer/header');
      //       $this->load->view('customer/detail_mobil', $data);
      //       $this->load->view('templates_customer/footer');
      // }
}
