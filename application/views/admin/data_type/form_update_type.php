<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>Form Update Data Type</h1>
            </div>

            <div class="card">
                  <div class="card-body">
                        <?php foreach ($type as $tp) : ?>
                              <form action="<?= base_url('admin/data_type/update_type_aksi'); ?>" method="POST">

                                    <div class="row">
                                          <div class="col-md-6">
                                                <input type="hidden" name="id_type" id="" value="<?= $tp->id_type; ?>">
                                                <div class="form-group">
                                                      <label for="kode_type">Kode Type</label>
                                                      <input type="text" name="kode_type" class="form-control" id="kode_type" value="<?= $tp->kode_type; ?>">
                                                      <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>

                                                <div class="form-group">
                                                      <label for="nama_type">Nama Type</label>
                                                      <input type="text" name="nama_type" class="form-control" id="nama_type" value="<?= $tp->nama_type; ?>">
                                                      <?= form_error('nama_type', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>

                                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                                <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                                <a href="<?= base_url('admin/data_type'); ?>" class="btn btn-dark mt-4">Kembali</a>
                                          </div>
                                    </div>
                              </form>
                        <?php endforeach; ?>
                  </div>
            </div>
      </section>
</div>