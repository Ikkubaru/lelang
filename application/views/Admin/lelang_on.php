<h1>Data Lelang Yang Sedang Berlangsung</h1>
<!-- dibuat form jangan lupa -->
<div class="col-xl-12 col-lg-4 col-md-4 col-sm-6">
   <div class="panel panel-default">
                              <?php foreach($lelang as $lel){ ?>
                              <div class="panel-heading bg-success txt-white">
                                    <h4>Data Lelang Sedang Berlangsung</h4>
                              </div>
                              <div class="panel-body"> <br>
                                <img src="<?= base_url('assets/upload/barang/').$lel['foto'] ?>" weight="300px" height="300px">
                                <div class="col-sm-5 col-xs-12 waves-effect waves-light">
                        <form action="<?= base_url('lelang_on/close'.$lel['id_lelang']) ?>" method="post">
                                    <div class="grid-material bg-success"><h5> Rincian Lelang : </h5></div>
                                    <label for="" class="form-control-label">Diajukan oleh : <?= $lel['nama'] ?></label> <br>
                                    <label for="" class="form-control-label">Tanggal diajukan : <?= $lel['tanggal'] ?></label> <br>
                                    <label for="" class="form-control-label">Harga Akhir : </label> <br>
                                            </div>
                                            <div class="panel-footer">
                                                <button type="submit" class="btn btn-danger" value="ditutup" name="status" href="<?= base_url('admin/lelang_on/close'.$lel['id_lelang']) ?>">Tutup lelang</button>
                                                </div>
                                            </div>
                                          </form>
        <?php } ?>
                        </div>