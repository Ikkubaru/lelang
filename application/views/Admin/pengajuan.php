<h1>Data Pengajuan Lelang</h1>
<!-- dibuat form jangan lupa -->
<div class="col-xl-12 col-lg-4 col-md-4 col-sm-6">
    <?php foreach($barang as $thing){ ?>
                           <div class="panel panel-default">
                              <div class="panel-heading bg-info txt-white">
                                    <h4><?= $thing['nama_barang'] ?></h4>
                              </div>
                              <div class="panel-body"> <br>
                                <img src="<?= base_url('assets/upload/barang/').$thing['foto'] ?>" weight="300px" height="300px">
                                <div class="col-sm-6 col-xs-12 waves-effect waves-light">
                                    <form action="<?= base_url('') ?>" method="post">
                                    <div class="grid-material bg-info"><h5> Rincian Lelang : </h5></div>
                                    <label for="" class="form-control-label">Diajukan oleh : </label>
                                        <input type="text" name="" value="<?= $thing['nama'] ?>" class="form-control" readonly>
                                    <label for="" class="form-control-label">Kategori Lelang : </label>
                                        <input type="text" name="" value="<?= $thing['id_kategori'] ?>" class="form-control" readonly>
                                    <label for="" class="form-control-label">Tamggal diajukan : </label>
                                        <input type="text" name="" value="<?= $thing['tanggal'] ?>" class="form-control" readonly>
                                    <label for="" class="form-control-label">Deskripsi Barang : </label>
                                    <p><?= $thing['deskripsi_barang'] ?></p>
                                            </div>
                                            <div class="panel-footer">
                                                <h5>Harga Awal : Rp.<?= number_format($thing['harga_awal'])?></h5>
                                                <button type="submit" class="btn btn-success" value="dibuka">Disetujui</button>
                                                <button type="submit" class="btn btn-danger" value="ditolak">Ditolak</button>
                                                </div>
                                            </div>
        <?php } ?>
                                    </form>
                        </div>