<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../assets/assets_shop/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                  <div class="col-md-9 ftco-animate pb-5">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
                        <h1 class="mb-3 bread">Choose Your Car</h1>
                  </div>
            </div>
      </div>
</section>


<section class="ftco-section bg-light">
      <div class="container">
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="row">
                  <?php foreach ($mobil as $mb) : ?>
                        <div class="col-md-4">
                              <div class="car-wrap rounded ftco-animate">
                                    <img src="<?= base_url('assets/upload/' . $mb->gambar); ?>" alt="error" class="img rounded d-flex align-items-end ">
                                    <div class="text">
                                          <h2 class="mb-0"><a href="#"><?= $mb->merk; ?></a></h2>
                                          <div class="d-flex mb-3">
                                                <span class="cat"><?= $mb->no_plat; ?></span>
                                                <p class="price ml-auto">Rp <?= number_format($mb->harga, 0, ',', '.');  ?><span>/hari</span></p>
                                          </div>
                                          <ul class="car-info-list" style="text-decoration: none;">
                                                <li><?php if ($mb->ac == "1") {
                                                            echo "<i class='fa fa-check-square'>Tersedia</i>";
                                                      } else {
                                                            echo "<i class='fa fa-check-square'>Tidak Tersedia</i>";
                                                      } ?> AC</li>
                                                <li><?php if ($mb->supir == "1") {
                                                            echo "<i class='fa fa-check-square'>Tersedia</i>";
                                                      } else {
                                                            echo "<i class='fa fa-check-square'>Tidak Tersedia</i>";
                                                      } ?> SUPIR</li>
                                                <li><?php if ($mb->mp3_player == "1") {
                                                            echo "<i class='fa fa-check-square'>Tersedia</i>";
                                                      } else {
                                                            echo "<i class='fa fa-check-square'>Tidak Tersedia</i>";
                                                      } ?> MP3 Player</li>
                                                <li><?php if ($mb->central_lock == "1") {
                                                            echo "<i class='fa fa-check-square'>Tersedia</i>";
                                                      } else {
                                                            echo "<i class='fa fa-check-square'>Tidak Tersedia</i>";
                                                      } ?> CENTRAL CLOCK</li>
                                          </ul>
                                          <p class="d-flex mb-0 d-block">
                                                <?php if ($mb->status == "1") {
                                                      echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, "<span class='btn btn-primary py-2 mr-1'>Book Now</span>");
                                                } else {
                                                      echo "<span class='btn btn-danger py-2 mr-1'>Tidak Tersedia</span>";
                                                } ?>
                                                <a href="<?= base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil); ?>" class="btn btn-secondary py-2 ml-1">Details</a>
                                                <!-- <a href="#" class="btn btn-primary py-2 mr-1">Book now</a> -->
                                          </p>
                                    </div>
                              </div>
                        </div>
                  <?php endforeach; ?>

            </div>
      </div>
</section>