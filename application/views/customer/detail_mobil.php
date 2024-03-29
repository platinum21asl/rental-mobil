<div class="container mt-5 mb-5">
      <div class="card" style="margin-top: 200px;">
            <div class="card-body">
                  <?php foreach ($detail as $dt) : ?>
                        <div class="row">
                              <div class="col-md-6">
                                    <img src="<?= base_url('assets/upload/' . $dt->gambar); ?>" alt="errors" width="90%">
                              </div>
                              <div class="col-md-6">
                                    <table class="table">
                                          <tr>
                                                <th>Merk</th>
                                                <td><?= $dt->merk; ?></td>
                                          </tr>
                                          <tr>
                                                <th>No. Plat</th>
                                                <td><?= $dt->no_plat; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Warna</th>
                                                <td><?= $dt->warna; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Tahun Production</th>
                                                <td><?= $dt->tahun; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Status</th>
                                                <td><?php if ($dt->status == 0) {
                                                            echo "<span>Tidak Tersedia</span>";
                                                      } else {
                                                            echo "<span>Tersedia</span>";
                                                      } ?>
                                                </td>
                                          </tr>
                                          <tr>
                                                <th></th>
                                                <td> <?php if ($dt->status == 0) {
                                                            echo "<span class='btn btn-danger btn-sm'>Telah direntel</span>";
                                                      } else {
                                                            echo anchor('customer/rental/tambah_rental' . $dt->id_mobil, '<button class="btn btn-success">Rental</button>');
                                                      } ?>
                                                </td>
                                          </tr>
                                    </table>
                                    <a href="<?= base_url('customer/dashboard'); ?>" class="btn btn-primary">Kembali</a>
                              </div>
                        </div>
                  <?php endforeach; ?>
            </div>
      </div>
</div>