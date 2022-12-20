<div class="main-content">
      <section class="section">
            <div class="section-header">
                  <h1>Data Customer</h1>
            </div>

            <a href="<?= base_url('admin/data_customer/tambah_customer'); ?>" class="btn btn-primary mb-3">Tambah Data Customer</a>

            <!-- Set Flash Data -->
            <?= $this->session->flashdata('pesan'); ?>
            <!-- Set Flash Data -->

            <table class="table table-striped table-responsive table-bordered">
                  <thead>
                        <tr>
                              <th width="20px">No</th>
                              <th>Nama Customer</th>
                              <th>Username</th>
                              <th>Alamat</th>
                              <th>Gender</th>
                              <th>No. Telp</th>
                              <th>Password</th>
                              <th>Aksi</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php $no = 1;
                        foreach ($customer as $cust) : ?>
                              <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $cust->nama; ?></td>
                                    <td><?= $cust->username; ?></td>
                                    <td><?= $cust->alamat; ?></td>
                                    <td><?= $cust->gender; ?></td>
                                    <td><?= $cust->no_telp; ?></td>
                                    <td><?= $cust->password; ?></td>
                                    <td>
                                          <div class="row">
                                                <a href="<?= base_url('admin/data_customer/update_customer/') . $cust->id_customer; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="<?= base_url('admin/data_customer/delete_customer/') . $cust->id_customer; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                          </div>
                                    </td>
                              </tr>
                        <?php endforeach; ?>
                  </tbody>
            </table>
      </section>
</div>