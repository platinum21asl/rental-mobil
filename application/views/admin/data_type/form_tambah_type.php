<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>Form Tambah Data Type</h1>
            </div>

            <div class="card">
                  <div class="card-body">
                        <form action="<?= base_url('admin/data_type/tambah_type_aksi'); ?>" method="POST">

                              <div class="row">
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label for="kode_type">Kode Type</label>
                                                <input type="text" name="kode_type" class="form-control" id="kode_type">
                                                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <div class="form-group">
                                                <label for="nama_type">Nama Type</label>
                                                <input type="text" name="nama_type" class="form-control" id="nama_type">
                                                <?= form_error('nama_type', '<div class="text-small text-danger">', '</div>'); ?>
                                          </div>

                                          <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                          <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                          <a href="<?= base_url('admin/data_type'); ?>" class="btn btn-dark mt-4">Kembali</a>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </section>
</div>