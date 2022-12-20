<div class="container">
      <div class="card" style="margin-top: 200px; margin-bottom:50px;">
            <div class="card-header">
                  Form Rental Mobil
            </div>
            <div class="card-body">
                  <?php foreach ($detail as $data) : ?>
                        <form action="<?= base_url('customer/rental/tambah_rental_aksi'); ?>" method="POST">
                              <div class="form-group">
                                    <input type="hidden" name="id_mobil" value="<?= $data->id_mobil; ?>">
                                    <label for="">Harga Sewa</label>
                                    <input type="text" name="harga" class="form-control" value="<?= $data->harga; ?>" readonly>
                              </div>
                              <div class="form-group">
                                    <label for="">Denda Perhari</label>
                                    <input type="text" name="denda" class="form-control" value="<?= $data->denda; ?>" readonly>
                              </div>
                              <div class="form-group">
                                    <label for="">Tanggal Rental</label>
                                    <input type="date" name="tanggal_rental" class="form-control">
                              </div>
                              <div class="form-group">
                                    <label for="">Tanggal Kembali</label>
                                    <input type="date" name="tanggal_kembali" class="form-control">
                              </div>

                              <button type="submit" class="btn btn-warning">Rental</button>
                        </form>
                  <?php endforeach; ?>
            </div>
      </div>
</div>