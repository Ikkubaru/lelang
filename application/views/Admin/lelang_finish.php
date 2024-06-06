<h1>Data Lelang Yang Sedang Berlangsung</h1>
<!-- dibuat form jangan lupa -->
<div class="col-xl-12 col-lg-4 col-md-4 col-sm-6">
   <div class="panel panel-default">
   <div class="panel-heading bg-primary txt-white">
                                    <h4>Data Lelang Selesai</h4>
                              </div>
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Nama Barang</th>
                                       <th>Gambar Barang</th>
                                       <th>Nama Penawar</th>
                                       <th>Harga Tertinggi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php if (!empty($grouped_lelang)): ?>
                                          <?php $no = 1; 
                                             foreach ($grouped_lelang as $id_barang => $items): ?>
                                             <?php foreach ($items as $item): ?>
                                                <div class="col-sm-12 table-responsive">
                                    <tr>
                                       <td><?= $no++ ?></td>
                                       <td><?= $item['nama_barang'] ?></td>
                                       <td><img src="<?= base_url('assets/upload/barang/'.$item['foto']) ?>" class="img-fluid w-60 rounded-top"></td>
                                       <td><?= $item['nama_user'] ?></td>
                                       <td>Rp. <?= htmlspecialchars(is_numeric($item['harga_tertinggi']) ? number_format($item['harga_tertinggi'], 0, ',', '.') : $item['harga_tertinggi']); ?></td>
                                       <?php endforeach; ?>
                                          <?php endforeach; ?>
                                             <?php else: ?>
                                                <p>Tidak ada data lelang yang tersedia.</p>
                                             <?php endif; ?>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                                            </div>
                                            </div>
                                          </form>
                        </div>