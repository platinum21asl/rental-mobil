<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>Form Tambah Data Customer</h1>
            </div>

            <div class="card">
                  <div class="card-body">
                        <form action="<?= base_url('admin/data_customer/tambah_customer_aksi'); ?>" method="POST">

                              <div class="row">
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama">
                                                <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" name="username" class="form-control" id="username">
                                                <?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>
                                          <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" id="alamat">
                                                <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select name="gender" id="gender" class="form-control">
                                                      <option value=""> --Pilih--</option>
                                                      <option value="laki-laki">Laki-laki</option>
                                                      <option value="perempuan">Perempuan</option>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="col-md-6">

                                          <div class="form-group">
                                                <label for="no_telp">No. Telp</label>
                                                <input type="text" name="no_telp" class="form-control" id="no_telp">
                                                <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>
                                          <div class="form-group">
                                                <label for="no_ktp">No. KTP</label>
                                                <input type="text" name="no_ktp" class="form-control" id="no_ktp">
                                                <?= form_error('no_ktp', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>
                                          <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control" id="password">
                                                <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                          <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                          <a href="<?= base_url('admin/data_customer'); ?>" class="btn btn-dark mt-4">Kembali</a>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </section>
</div>