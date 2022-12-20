<div class="container">
      <div class="card" style="margin-top: 200px;">
            <div class="card-header">
                  Data Transaksi Anda
            </div>

            <span class="mt-2 p-2"><?= $this->session->flashdata('pesan'); ?></span>
            <div class="card-body">
                  <div class="table-reponsive">
                        <table class="table table-bordered">
                              <tr>
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Merk Mobil</th>
                                    <th>No Plat</th>
                                    <th>Harga Sewa</th>
                                    <th>Aksi</th>
                                    <th>Batal</th>
                              </tr>
                              <tr>
                                    <?php $no = 1;
                                    foreach ($transaksi as $tr) : ?>
                                          <td><?= $no++; ?></td>
                                          <td><?= $tr->nama; ?></td>
                                          <td><?= $tr->merk; ?></td>
                                          <td><?= $tr->no_plat; ?></td>
                                          <td>Rp. <?= number_format($tr->harga, 0, ',', '.'); ?></td>
                                          <td><?php if ($tr->status_rental == "Selesai") { ?>
                                                      <button class="btn btn-sm btn-danger ml-2">Rental Selesai</button>
                                                <?php } else { ?>
                                                      <a href="<?= base_url('customer/transaksi/pembayaran/' . $tr->id_rental); ?>" class="btn btn-sm btn-success ml-2">Cek Pembayaran</a>
                                                <?php } ?>
                                          </td>
                                          <td>
                                                <?php if ($tr->status_rental == "Belum Selesai") { ?>
                                                      <a onclick="return confirm('Apakah Yakin Batal?')" href="<?= base_url('customer/transaksi/batal_transaksi/' . $tr->id_rental); ?>" class="btn btn-sm btn-danger ml-2">Batal</a>
                                                <?php } else { ?>
                                                      <button type="button" class="btn btn-sm btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">
                                                            Batal
                                                      </button>
                                                <?php } ?>

                                          </td>
                                    <?php endforeach; ?>
                              </tr>
                        </table>
                  </div>
            </div>
      </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        Maaf, transaksi ini tidak bisa di batalkan.
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
            </div>
      </div>
</div>