<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>INVOICE</title>
</head>

<body>
      <main>
            <section>
                  <div class="main-content">
                        <table class="" style="width: 60%;">
                              <h2>INVOICE PEMBAYARAN ANDA</h2>
                              <?php foreach ($transaksi as $tr) : ?>
                                    <tr>
                                          <td>Merk Mobil</td>
                                          <td>:</td>
                                          <td><?= $tr->nama; ?></td>
                                    </tr>
                                    <tr>
                                          <td>Merk Mobil</td>
                                          <td>:</td>
                                          <td><?= $tr->merk; ?></td>
                                    </tr>
                                    <tr>
                                          <td>Tanggal Rental</td>
                                          <td>:</td>
                                          <td><?= $tr->tanggal_rental; ?></td>
                                    </tr>
                                    <tr>
                                          <td>Tanggal Kembali</td>
                                          <td>:</td>
                                          <td><?= $tr->tanggal_kembali; ?></td>
                                    </tr>
                                    <tr>
                                          <td>Biaya Sewa</td>
                                          <td>:</td>
                                          <td>Rp. <?= number_format($tr->harga, 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                          <?php
                                          $x = strtotime($tr->tanggal_kembali);
                                          $y = strtotime($tr->tanggal_rental);
                                          $jml = abs(($x - $y) / (60 * 60 * 24));
                                          ?>
                                          <td>Jumlah Hari Sewa</td>
                                          <td>:</td>
                                          <td><?= $jml; ?> Hari</td>
                                    </tr>
                                    <tr>
                                          <td>Status Pembayaran</td>
                                          <td>:</td>
                                          <td>
                                                <?php if (empty($tr->bukti_pembayaran)) { ?>
                                                      <!-- Button trigger modal -->
                                                      <button type="button" class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
                                                            Upload Bukti Pembayaran
                                                      </button>

                                                <?php } elseif ($tr->status_pembayaran == '0') { ?>
                                                      <button class="btn btn-sm btn-danger">
                                                            Menunggu Konfirmasi
                                                      </button>
                                                <?php } elseif ($tr->status_pembayaran == '1') { ?>
                                                      <button class="btn btn-sm btn-success">
                                                            Pembayaran Selesai
                                                      </button>
                                                <?php } ?>
                                          </td>
                                    </tr>

                                    <tr style="font-weight: bold; color: red;">
                                          <td>Jumlah Pembayaran</td>
                                          <td>:</td>
                                          <td>Rp. <?= number_format($tr->harga * $jml, 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                          <td>Rekening Pembayaran</td>
                                          <td>:</td>
                                          <td>
                                                <ul style="text-decoration: none;">
                                                      <li>Bank Mandiri 123456789</li>
                                                      <li>Bank BCA 1234567890</li>
                                                      <li>Bank BRI 0987654321</li>
                                                </ul>
                                          </td>
                                    </tr>
                              <?php endforeach; ?>
                        </table>
                  </div>
            </section>
      </main>

      <script type="text/javascript">
            window.print();
      </script>
</body>

</html>