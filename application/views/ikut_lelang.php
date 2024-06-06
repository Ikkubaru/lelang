<?php require_once('layout/_navbar.php');?>
<div class="container-fluid banner bg-primary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-12">
                    <label for="" class="form-control-label"></label> <br>
                    <label for="" class="form-control-label"></label> <br>
                    <label for="" class="form-control-label"></label> <br>
                    <div class="container">
                            <div class="row">
                            <div class="col-sm-6 col-xs-12 waves-effect waves-light">
                           <div class="grid-material">
                           <img src="<?= base_url('assets/upload/barang/'.$lelang->foto)?>" class="img-fluid w-100 rounded-top" alt=""> <br> <br>
                           </div>
                            </div> <br>
                            <div class="col-sm-5 col-xs-12 waves-effect waves-light">
                           <div class="grid-material">
                           <h5><strong><?= $lelang->nama_barang ?></strong></h5>
                                <h5>Deskripsi Barang : <strong><?= $lelang->deskripsi_barang ?></strong></h5>
                                <h5>Harga Penawaran : <strong>Rp. <?= number_format($lelang->harga_awal) ?></strong></h5> <br>
                            <form action="<?= base_url('ikut_lelang/tawar/').$lelang->id_barang ?>" method="post">
                                <input type="hidden" name="id_lelang" value="<?= $lelang->id_lelang ?>">
                                <input type="number" name="harga" class="form-control" placeholder="Ajukan Harga Penawaran"> <br>
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </form>
                           </div>
                            </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('layout/_footer.php');?>