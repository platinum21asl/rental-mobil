<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>Form Update Data Customer</h1>
            </div>

            <div class="card">
                  <div class="card-body">
                        <?php foreach ($customer as $cust) : ?>
                              <form action="<?= base_url('admin/data_customer/update_customer_aksi'); ?>" method="POST">

                                    <div class="row">
                                          <div class="col-md-6">
                                                <div class="form-group">
                                                      <input type="hidden" name="id_customer" id="id_customer" value="<?= $cust->id_customer; ?>">
                                                      <label for="nama">Nama</label>
                                                      <input type="text" name="nama" class="form-control" id="nama" value="<?= $cust->nama; ?>">
                                                      <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>

                                                <div class="form-group">
                                                      <label for="username">Username</label>
                                                      <input type="text" name="username" class="form-control" id="username" value="<?= $cust->username; ?>">
                                                      <?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="alamat">Alamat</label>
                                                      <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $cust->alamat; ?>">
                                                      <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>

                                                <div class="form-group">
                                                      <label for="gender">Gender</label>
                                                      <select name="gender" id="gender" class="form-control">
                                                            <option value="<?= $cust->gender; ?>"> <?= $cust->gender; ?></option>
                                                            <option value="<?= $cust->gender; ?>">Laki-laki</option>
                                                            <option value="<?= $cust->gender; ?>">Perempuan</option>
                                                      </select>
                                                </div>
                                          </div>
                                          <div class="col-md-6">

                                                <div class="form-group">
                                                      <label for="no_telp">No. Telp</label>
                                                      <input type="text" name="no_telp" class="form-control" id="no_telp" value="<?= $cust->no_telp; ?>">
                                                      <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="no_ktp">No. KTP</label>
                                                      <input type="text" name="no_ktp" class="form-control" id="no_ktp" value="<?= $cust->no_ktp; ?>">
                                                      <?= form_error('no_ktp', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="password">Password</label>
                                                      <input type="password" name="password" class="form-control" id="password" value="<?= $cust->password; ?>">
                                                      <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>

                                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                                <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                                <a href="<?= base_url('admin/data_customer'); ?>" class="btn btn-dark mt-4">Kembali</a>
                                          </div>
                                    </div>
                              </form>

                        <?php endforeach; ?>
                  </div>
            </div>
      </section>
</div>