<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>Form Input Data Mobil</h1>
            </div>

            <div class="card">
                  <div class="card-body">
                        <form action="<?= base_url('admin/data_mobil/tambah_mobil_aksi'); ?>" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label for="kode_type">Type Mobil</label>
                                                <select name="kode_type" id="kode_type" class="form-control">
                                                      <option value="">--Pilih Type Mobil--</option>
                                                      <?php foreach ($type as $tp) : ?>
                                                            <option value="<?= $tp->kode_type; ?>"><?= $tp->nama_type; ?></option>
                                                      <?php endforeach; ?>
                                                </select>

                                                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <div class="form-group">
                                                <label for="merk">Merk</label>
                                                <input type="text" name="merk" class="form-control" id="merk">
                                                <?= form_error('merk', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <div class="form-group">
                                                <label for="no_plat">NO. Plat</label>
                                                <input type="text" name="no_plat" class="form-control" id="no_plat">
                                                <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label for="tahun">Tahun</label>
                                                <input type="text" name="tahun" class="form-control" id="tahun">
                                                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <div class="form-group">
                                                <label for="tahun">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                      <option value="">--Pilih Status</option>
                                                      <option value="1">Tersedia</option>
                                                      <option value="0">Tidak Tersedia</option>
                                                </select>
                                                <?= form_error('status', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <div class="form-group">
                                                <label for="warna">Warna</label>
                                                <input type="text" name="warna" class="form-control" id="warna">
                                                <?= form_error('warna', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <input type="text" name="harga" class="form-control" id="harga">
                                                <?= form_error('harga', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label for="denda">Denda</label>
                                                <input type="text" name="denda" class="form-control" id="denda">
                                                <?= form_error('denda', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label for="ac">AC</label>
                                                <select name="ac" id="ac" class="form-control">
                                                      <option value="">--Pilih AC</option>
                                                      <option value="1">Tersedia</option>
                                                      <option value="0">Tidak Tersedia</option>
                                                </select>
                                                <?= form_error('ac', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>
                                          <div class="form-group">
                                                <label for="supir">Sopir</label>
                                                <select name="supir" id="supir" class="form-control">
                                                      <option value="">--Pilih Sopir</option>
                                                      <option value="1">Tersedia</option>
                                                      <option value="0">Tidak Tersedia</option>
                                                </select>
                                                <?= form_error('supir', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label for="mp3_player">Mp3 Player</label>
                                                <select name="mp3_player" id="mp3_player" class="form-control">
                                                      <option value="">--Pilih Mp3 Player</option>
                                                      <option value="1">Tersedia</option>
                                                      <option value="0">Tidak Tersedia</option>
                                                </select>
                                                <?= form_error('mp3_player', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>
                                          <div class="form-group">
                                                <label for="central_lock">Central_lock</label>
                                                <select name="central_lock" id="Central_lock" class="form-control">
                                                      <option value="">--Pilih Central_lock</option>
                                                      <option value="1">Tersedia</option>
                                                      <option value="0">Tidak Tersedia</option>
                                                </select>
                                                <?= form_error('central_lock', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" name="gambar" id="gambar">
                                          </div>
                                          <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                          <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                          <a href="<?= base_url('admin/data_mobil'); ?>" class="btn btn-dark mt-4">Kembali</a>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </section>
</div>