<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>Konfrimasi Pembayaran</h1>
            </div>

            <div class="card" style="width: 55%;">
                  <div class="card-header">
                        Konfrimasi Pembayaran

                  </div>
                  <div class="card-body">
                        <form action="<?= base_url('admin/transaksi/cek_pembayaran'); ?>" method="POST">
                              <?php foreach ($pembayaran as $pb) : ?>
                                    <a href="<?= base_url('admin/transaksi/download_pembayaran/' . $pb->id_rental); ?>" class="btn btn-sm btn-success">
                                          <i class="fas fa-download">
                                          </i>Download Bukti Pembayaran</a>

                                    <div class="custom-control custom-switch ml-4">
                                          <input type="hidden" value="<?= $pb->id_rental; ?>" name="id_rental">
                                          <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                                          <label class="custom-control-label" for="customSwitch1">Konfrimasi Pembayaran</label>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-sm btn-primary">
                                          Simpan
                                    </button>
                              <?php endforeach; ?>
                        </form>
                  </div>
            </div>

      </section>
</div>