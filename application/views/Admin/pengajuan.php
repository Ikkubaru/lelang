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
                                <div class="col-sm-5 col-xs-12 waves-effect waves-light">
                        <form action="<?= base_url('admin/pengajuan/tambah/').$thing['id_barang'] ?>" method="post">
                                    <div class="grid-material bg-info"><h5> Rincian Lelang : </h5></div>

                                    <label for="" class="form-control-label">Diajukan oleh : </label> <br>
                                        <input type="hidden" name="id_user" value="<?= $thing['id_user'] ?>" class="form-control" readonly>
                                        <label for="" class="form-control-label"><?= $thing['nama'] ?></label> <br>
                                    <label for="" class="form-control-label">Kategori Lelang : </label>
                                        <input type="text" name="" value="<?= $thing['nama_kategori'] ?>" class="form-control" readonly>
                                    <label for="" class="form-control-label">Tamggal diajukan : </label>
                                        <input type="text" name="tgl_lelang" value="<?= $thing['tanggal'] ?>" class="form-control" readonly>
                                    <label for="" class="form-control-label">Deskripsi Barang : </label>
                                    <p><?= $thing['deskripsi_barang'] ?></p>
                                            </div>
                                            <div class="panel-footer">
                                            <label for="" class="form-control-label">Harga Awal</label>
                                            <input type="number" name="harga_awal" value="<?= $thing['harga_awal'] ?>" class="form-control" readonly> <br>
                                                <button type="submit" class="btn btn-success" value="dibuka" name="status" href="<?= base_url('admin/pengajuan/tambah'.$thing['id_barang']) ?>">Disetujui</button>
                                                <button type="submit" class="btn btn-danger" value="ditolak" name="status" href="<?= base_url('admin/pengajuan/tambah'.$thing['id_barang']) ?>">Ditolak</button>
                                                </div>
                                            </div>
        <?php } ?>
                                    </form>
                        </div>