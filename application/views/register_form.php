<div id="app">
      <section class="section">
            <div class="container mt-5">
                  <div class="row">
                        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                              <div class="login-brand">
                                    <img src="<?= base_url('assets/assets_stisla/') ?>assets/img/stisla.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                              </div>

                              <div class="card card-primary">
                                    <div class="card-header">
                                          <h4>Register</h4>
                                    </div>

                                    <div class="card-body">
                                          <form action="<?= base_url('register'); ?>" method="POST">
                                                <div class="row">
                                                      <div class="form-group col-6">
                                                            <label for="nama">Nama Lengkap</label>
                                                            <input id="nama" type="text" class="form-control" name="nama" autofocus>
                                                            <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
                                                      </div>
                                                      <div class="form-group col-6">
                                                            <label for="username">Username</label>
                                                            <input id="username" type="text" class="form-control" name="username">
                                                            <?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                                                      </div>
                                                </div>

                                                <div class="form-group">
                                                      <label for="alamat">Alamat</label>
                                                      <input id="alamat" type="text" class="form-control" name="alamat"> <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>

                                                </div>
                                                <div class="row">
                                                      <div class="form-group col-6">
                                                            <label for="gender" class="d-block">Gender</label>
                                                            <select name="gender" id="" class="form-control">
                                                                  <option value="">--Pilih--</option>
                                                                  <option value="Laki-laki">Laki-laki</option>
                                                                  <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                      </div>
                                                      <div class="form-group col-6">
                                                            <label for="no_telp" class="d-block">Nomor Telepon</label>
                                                            <input id="no_telp" type="text" class="form-control" name="no_telp">
                                                            <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>'); ?>
                                                      </div>
                                                </div>
                                                <div class="row">
                                                      <div class="form-group col-6">
                                                            <label for="no_ktp">Nomor KTP</label>
                                                            <input id="no_ktp" type="text" class="form-control" name="no_ktp">
                                                            <?= form_error('no_ktp', '<div class="text-small text-danger">', '</div>'); ?>
                                                      </div>
                                                      <div class="form-group col-6">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password">
                                                            <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                                                      </div>
                                                </div>

                                                <!-- <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                  <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                                                  <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                                            </div>
                                                      </div> -->

                                                <div class="form-group">
                                                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                            Register
                                                      </button>
                                                </div>
                                          </form>
                                          <div class="mt-5 text-muted text-center">
                                                Have an account? <a href="<?= base_url('auth'); ?>">Sign in</a>
                                          </div>
                                    </div>
                              </div>
                              <div class="simple-footer">
                                    Copyright &copy; Stisla 2018
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</div>