<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>DATA TRANSAKSI</h1>
            </div>
            <?= $this->session->flashdata('pesan'); ?>
            <table class="table-responsive table table-bordered table-striped">
                  <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Mobil</th>
                        <th>Tanggal Rental</th>
                        <th>Tanggal Kembali</th>
                        <th>Harga/hari</th>
                        <th>Denda/hari</th>
                        <th>Total Denda</th>
                        <th>Tgl. Dikembalikan</th>
                        <th>Status Pengembalian</th>
                        <th>Status Rental</th>
                        <th>Cek Pembayaran</th>
                        <th>Action</th>
                  </tr>
                  <tr>
                        <?php $no = 1;
                        foreach ($transaksi as $tr) : ?>
                              <td><?= $no++; ?></td>
                              <td><?= $tr->nama; ?></td>
                              <td><?= $tr->merk; ?></td>
                              <td><?= date('d/m/y', strtotime($tr->tanggal_rental)); ?></td>
                              <td><?= date('d/m/y', strtotime($tr->tanggal_kembali)); ?></td>
                              <td>Rp. <?= number_format($tr->harga, 0, ',', '.'); ?></td>
                              <td>Rp. <?= number_format($tr->denda, 0, ',', '.'); ?></td>
                              <td>Rp. <?= number_format($tr->total_denda, 0, ',', '.'); ?></td>
                              <td><?php if ($tr->tanggal_pengembalian == "0000-00-00") {
                                          echo '-';
                                    } else {
                                          echo date('d/m/y', strtotime($tr->tanggal_pengembalian));
                                    } ?></td>
                              <td><?php if ($tr->status_pengembalian == "Kembali") {
                                          echo "Kembali";
                                    } else {
                                          echo "Belum Kembali";
                                    } ?></td>
                              <td><?= $tr->status_rental; ?></td>

                              <td>
                                    <?php if (empty($tr->bukti_pembayaran) || $tr->status_pembayaran == 1) { ?>

                                          <?php if ($tr->status_pembayaran == 1) { ?>
                                                <button class="btn btn-sm btn-success">
                                                      <i class="fas fa-check-circle"></i>
                                                </button>
                                          <?php } else {
                                          ?>
                                                <button class="btn btn-sm btn-danger">
                                                      <i class="fas fa-times-circle"></i>
                                                </button>
                                          <?php } ?>

                                    <?php } else { ?>
                                          <a class="btn btn-sm btn-primary" href="<?= base_url('admin/transaksi/pembayaran/' . $tr->id_rental); ?>">
                                                <i class="fas fa-check-circle"></i>
                                          </a>
                                    <?php } ?>
                              </td>
                              <td><?php if ($tr->status == "1") {
                                          echo "-";
                                    } else { ?>
                                          <div class="row">
                                                <a href="<?= base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental); ?>" class="btn btn-sm btn-success mr-2"><i class="fas fa-check"></i></a>
                                                <a onclick="return confirm('Apakah Yakin Ingin batalkan transaksi?')" href="<?= base_url('admin/transaksi/transaksi_batal/' . $tr->id_rental); ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                          </div>
                                    <?php } ?>
                              </td>
                        <?php endforeach; ?>
                  </tr>
            </table>
      </section>
</div>