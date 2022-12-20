<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>LAPORAN TRANSAKSI</h1>
            </div>
      </section>

      <form action="<?= base_url('admin/laporan'); ?>" method="POST">
            <div class="form-group">

                  <label for="">Dari Tanggal</label>
                  <input type="date" name="dari" class="form-control">

                  <?= form_error('dari', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">

                  <label for="">Sampai Tanggal</label>
                  <input type="date" name="sampai" class="form-control">

                  <?= form_error('sampai', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i>Tampilkan Data</button>
      </form>
      <hr>
      <div class="form-group">
            <a href="<?= base_url('admin/laporan/print_laporan/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai')); ?>" target="_blank" class="btn btn-sm btn-success"><i class="fas fa-print"></i> Print</a>
      </div>
      <button></button>
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
            </tr>
            <tr>
                  <?php $no = 1;
                  foreach ($laporan as $tr) : ?>
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



                  <?php endforeach; ?>
            </tr>
      </table>
</div>