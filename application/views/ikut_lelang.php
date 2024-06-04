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
                            <div class="col-sm-5 col-xs-12 waves-effect waves-light">
                           <div class="grid-material">
                           <img src="<?= base_url('assets/upload/barang/'.$lelang->foto)?>" class="img-fluid w-100 rounded-top" alt=""> <br> <br>
                                <input type="text" class="form-control" value=" Nama Barang : <?= $lelang->nama_barang ?>" readonly> <br>
                                <input type="text" class="form-control" value=" Nama Barang : <?= $lelang->nama_barang ?>" readonly> <br>
                                <input type="text" class="form-control" value=" Nama Barang : <?= $lelang->nama_barang ?>" readonly> <br>
                                <input type="text" class="form-control" value=" Nama Barang : <?= $lelang->nama_barang ?>" readonly> <br>
                           </div>
                            </div> <br>
                            <div class="col-sm-5 col-xs-12 waves-effect waves-light">
                           <div class="grid-material">
                                Harga tertinggi saat ini 
                            <form action="<?= base_url('ikut_lelang/tawar') ?>" method="post">
                                <input type="number" name="" class="form-control" placeholder="Ajukan Harga Penawaran"> <br>
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
        <?php require_once('layout/_footer.php')?>