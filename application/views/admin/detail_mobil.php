<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>Detail Mobil</h1>
            </div>

      </section>

      <?php foreach ($detail as $dt) : ?>
            <div class="card">
                  <div class="card-body">
                        <div class="row">
                              <div class="col-md-5">
                                    <img src="<?= base_url() . 'assets/upload/' . $dt->gambar ?>" alt="Error" width="200px">
                              </div>
                              <div class="col-md-7">
                                    <table class="table">
                                          <tr>
                                                <td>Type Mobil </td>
                                                <td>
                                                      <?php if ($dt->kode_type == "SP-003") {
                                                            echo "$dt->kode_type";
                                                      } else if ($dt->kode_type == "SP-004") {
                                                            echo "$dt->kode_type";
                                                      } else if ($dt->kode_type == "MPV") {
                                                            echo "Multi Purpose Vechile";
                                                      } else {
                                                            echo "<span class='text-danger'>Type mobil belum terdaftar</span>";
                                                      } ?>
                                                </td>
                                          </tr>
                                          <tr>
                                                <td>Merk</td>
                                                <td><?= $dt->merk; ?></td>

                                          </tr>
                                          <tr>
                                                <td>No. Plat</td>
                                                <td><?= $dt->no_plat; ?></td>
                                          </tr>
                                          <tr>
                                                <td>Warma</td>
                                                <td><?= $dt->warna; ?></td>
                                          </tr>
                                          <tr>
                                                <td>Tahun</td>
                                                <td><?= $dt->tahun; ?></td>

                                          </tr>
                                          <tr>
                                                <td>Harga</td>
                                                <td><?= $dt->harga; ?></td>

                                          </tr>
                                          <tr>
                                                <td>Denda</td>
                                                <td><?= $dt->denda; ?></td>

                                          </tr>
                                          <tr>
                                                <td>Status</td>
                                                <td> <?php if ($dt->status == "0") {
                                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                                      } else {
                                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                                      } ?>

                                                </td>
                                          </tr>
                                          <tr>
                                                <td>Ac</td>
                                                <td> <?php if ($dt->ac == "0") {
                                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                                      } else {
                                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                                      } ?>

                                                </td>
                                          </tr>
                                          <tr>
                                                <td>Supir</td>
                                                <td> <?php if ($dt->supir == "0") {
                                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                                      } else {
                                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                                      } ?>

                                                </td>
                                          </tr>
                                          <tr>
                                                <td>Mp3 Player</td>
                                                <td> <?php if ($dt->mp3_player == "0") {
                                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                                      } else {
                                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                                      } ?>

                                                </td>
                                          </tr>
                                          <tr>
                                                <td>Central_lock</td>
                                                <td> <?php if ($dt->central_lock == "0") {
                                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                                      } else {
                                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                                      } ?>

                                                </td>
                                          </tr>
                                    </table>
                                    <a href="<?= base_url('admin/data_mobil'); ?>" class="btn btn-sm btn-primary ml-4">Kembali</a>
                                    <a href="<?= base_url('admin/data_mobil/update_mobil/' . $dt->id_mobil); ?>" class="btn btn-sm btn-success ml-2">Update</a>
                              </div>
                        </div>
                  </div>
            </div>
      <?php endforeach; ?>
</div>