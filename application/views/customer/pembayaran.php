<div class="container mt-5 mb-5">
      <div class="row">
            <div class="col-md-8">
                  <div class="card" style="margin-top: 150px;">
                        <div class="card-header alert alert-success">
                              Invoice Pembayaran Anda
                        </div>
                        <div class="card-body">
                              <table>
                                    <?php foreach ($transaksi as $tr) : ?>
                                          <tr>
                                                <th>Merk Mobil</th>
                                                <td>:</td>
                                                <td><?= $tr->merk; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Tanggal Rental</th>
                                                <td>:</td>
                                                <td><?= $tr->tanggal_rental; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Tanggal Kembali</th>
                                                <td>:</td>
                                                <td><?= $tr->tanggal_kembali; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Biaya Sewa</th>
                                                <td>:</td>
                                                <td>Rp. <?= number_format($tr->harga, 0, ',', '.'); ?></td>
                                          </tr>
                                          <tr>
                                                <?php
                                                $x = strtotime($tr->tanggal_kembali);
                                                $y = strtotime($tr->tanggal_rental);
                                                $jml = abs(($x - $y) / (60 * 60 * 24));
                                                ?>
                                                <th>Jumlah Hari Sewa</th>
                                                <td>:</td>
                                                <td><?= $jml; ?> Hari</td>
                                          </tr>
                                          <tr class="text-success">
                                                <th>Jumlah Pembayaran</th>
                                                <td>:</td>
                                                <td><button class="btn btn-sm btn-success">Rp. <?= number_format($tr->harga * $jml, 0, ',', '.'); ?></button></td>
                                          </tr>
                                          <tr>
                                                <td></td>
                                                <td></td>
                                                <td><a href="<?= base_url('customer/transaksi/cetak_invoice/' . $tr->id_rental); ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                                          </tr>
                                    <?php endforeach; ?>
                              </table>
                        </div>
                  </div>
            </div>
            <div class="col-md-4" style="margin-top: 150px;">
                  <div class="card-header alert alert-primary">
                        Informasi Pembayaran
                  </div>
                  <div class="card">
                        <div class="card-body mb-3">
                              <p>Silahkan Melakukan Pembayaran Melalui Nomor Rekening Di bawah ini: </p>
                              <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Bank Mandiri 123456789</li>
                                    <li class="list-group-item">Bank BCA 1234567890</li>
                                    <li class="list-group-item">Bank BRI 0987654321</li>
                              </ul>
                              <?php if (empty($tr->bukti_pembayaran)) { ?>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#exampleModal" style="width: 100%;">
                                          Upload Bukti Pembayaran
                                    </button>

                              <?php } elseif ($tr->status_pembayaran == '0') { ?>
                                    <button class="btn btn-sm btn-danger" style="width: 100%;">
                                          Menunggu Konfirmasi
                                    </button>
                              <?php } elseif ($tr->status_pembayaran == '1') { ?>
                                    <button class="btn btn-sm btn-success" style="width: 100%;">
                                          Pembayaran Selesai
                                    </button>
                              <?php } ?>
                        </div>
                  </div>
            </div>
      </div>
</div>



<!-- Modal Untuk upload bukti pembayaran-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti pembayaran Anda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <form action="<?= base_url('customer/transaksi/pembayaran_aksi'); ?>" method="POST" enctype="multipart/form-data">

                        <div class="modal-body">
                              <div class="form-group">
                                    <input type="hidden" name="id_rental" value="<?= $tr->id_rental; ?>">
                                    <label for="">Upload Bukti Pembayaran</label>
                                    <input type="file" name="bukti_pembayaran" class="form-control">
                              </div>
                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                  </form>
            </div>
      </div>
</div>