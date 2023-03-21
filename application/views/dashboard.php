<!-- slide gambar  -->
<div class="container-fluid py-4">
    <div class="row">
        <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active bg-white" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?php echo base_url() ?>assets/img/bg-20.jpg" width="100%" height="320px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-weight-bolder text-dark text-gradient">SELAMAT DATANG DI WEBSITE</h5>
                        <p class="font-weight-bolder text-dark text-gradient">Aplikasi Pembayaran SPP sekolah SMK Negeri 1 Cijati</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url() ?>assets/img/bg-20.jpg" width="100%" height="320px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-weight-bolder text-dark text-gradient">Kegunaan</h5>
                        <p class="font-weight-bolder text-dark text-gradient">Memudahkan Untuk bertransaksi dengan siswa yang membayar spp.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url() ?>assets/img/bg-01.jpg" width="100%" height="320px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-weight-bolder text-dark text-gradient">SMK Negeri 1 Cijati</h5>
                        <p class="font-weight-bolder text-dark text-gradient">Cianjur, provinsi jawa barat</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- End slide gambar -->
<?= $this->session->flashdata('pesans'); ?>
<!-- card body -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Users Aktif</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo $user_aktif ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient- shadow text-center border-radius-md">
                                <img src="<?php echo base_url() ?>assets/img/profil.jpg" width="60px" height="60px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Data siswa</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo $siswa_aktif ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient- shadow text-center border-radius-md">
                                <img src="<?php echo base_url() ?>assets/img/SMA.png" width="60px" height="60px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Guru</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo $guru_aktif ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient- shadow text-center border-radius-md">
                                <img src="<?php echo base_url() ?>assets/img/CPNS.png" width="60px" height="60px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card-body -->