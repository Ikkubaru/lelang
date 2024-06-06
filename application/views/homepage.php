<?php require_once('layout/_navbar.php');?>
        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 col-lg-8">
                        <?php if($this->session->userdata('nama') == NULL){ ?>
                            <h4 class="mb-3 text-dark">Selamat Datang di NoeLelang</h4>
                            <?php }else{?>
                        <h4 class="mb-3 text-dark">Selamat Datang <?= $this->session->userdata('nama') ?></h4>
                        <?php } ?>
                        <h1 class="mb-5 display-3 text-primary">Lelang Online Nomor Satu di Teyvat</h1>
                        <div class="position-relative mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <div class="container-fluid banner bg-primary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-12">
                        <div class="py-4">
                            <h1 class="display-3 text-white">NoeLelang</h1>
                            <p class="fw-normal display-3 text-dark mb-4">Dijamin Terpercaya</p>
                            <p class="mb-4 text-dark">Mulai dari barang, jasa, dan berhala semua ada disini dan dijamin murah</p> <br>
                            <p class="mb-4 text-dark">Terjamin aman dan anti penipuan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="row g-4">
                        <div class="col-lg-4 text-start">
                            <h1>Kategori Lelang : </h1>
                        </div>
                        <div class="col-lg-8 text-end">
                            <ul class="nav nav-pills d-inline-flex text-center mb-5">
                                <?php foreach($kategori as $kate){ ?>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill active"  href="<?= base_url('') ?>">
                                        <span class="text-dark" style="width: 130px;"><?= $kate['nama_kategori'] ?></span>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <?php foreach($barang as $barank){ ?>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="<?= base_url('assets/upload/barang/').$barank['foto'] ?>" class="img-fluid w-100 rounded-top">
                                                </div>
                                                <!-- <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?= $barank['nama_kategori'] ?></div> -->
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4><?= $barank['nama_barang'] ?></h4>
                                                    <p><?= $barank['deskripsi_barang'] ?></p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <?php if( $barank['harga_tertinggi']==NULL){?>
                                                            <p class="text-dark fs-5 fw-bold mb-0">Harga penawaran : Rp. <?= $barank['harga_awal'] ?></p> <br>
                                                            <?php }else{?>
                                                        <p class="text-dark fs-5 fw-bold mb-0">Harga penawaran : Rp. <?php echo htmlspecialchars(is_numeric($barank['harga_tertinggi']) ? number_format($barank['harga_tertinggi'], 0, ',', '.') : $barank['harga_tertinggi']); ?></p> <br>
                                                        <?php }?>
                                                        <center><a href="<?= base_url('ikut_lelang/lelang/'.$barank['id_barang'])?>" class="btn border border-secondary rounded-pill px-3 text-primary">ikut lelang</a></center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
        <?php require_once('layout/_lib.php') ?>
        <?php require_once('layout/_footer.php') ?>