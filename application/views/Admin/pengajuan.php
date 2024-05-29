<h1>Data Pengajuan Lelang</h1>
<!-- dibuat form jangan lupa -->
<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6" style="border: 1px solid black;">
    <?php foreach($barang as $thing){ ?>
                           <div class="panel panel-default">
                              <div class="panel-heading bg-info txt-white">
                                    <h4><?= $thing['nama_barang'] ?></h4>
                                    <h6>Diajukan Oleh : <?= $thing['nama'] ?></h6>
                              </div>
                              <div class="panel-body">
                                <img src="<?= base_url('assets/upload/barang/').$thing['foto'] ?>" weight="500px" height="500px">
                                <h5>Kategori : <?= $thing['id_kategori'] ?></h5> <br>
                                <h5>Tanggal Diajukan : <?= $thing['tanggal'] ?></h5><br> 
                                <h5>Deskripsi Barang :</h5> <br>
                                <h6><?= $thing['deskripsi_barang'] ?></h6><br> 
                              </div>
                              <div class="panel-footer">
                                 <h5>Harga Awal : Rp.<?= number_format($thing['harga_awal'])?></h5>
                              </div>
                            </div>
                            <button type="submit" value="Dibuka">Dibuka</button>
                            <button type="submit" value="Ditolak">Ditolak</button>
                            <?php } ?>
                        </div>