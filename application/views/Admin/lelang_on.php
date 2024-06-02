<h1>Data Pengajuan Lelang</h1>
<!-- dibuat form jangan lupa -->
<div class="col-xl-12 col-lg-4 col-md-4 col-sm-6">
                           <div class="panel panel-default">
                                <div class="panel-heading bg-info txt-white">
                                            <h3>Rincian Lelang Yang Dibuka</h3>
                                </div>
                            <div class="panel-body"> <br>
                                <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                <div class="col-sm-12 table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Id Barang</th>
                                       <th>Tgl Lelang</th>
                                       <th>Harga Awal</th>
                                       <th>Id user</th>
                                       <th>Id petugas</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php 
                                 $no = 1;
                                 foreach($lelang as $auction){ ?>
                                    <tr>
                                       <td><?= $no++ ?></td>
                                       <td><?= $auction['id_barang'] ?></td>
                                       <td><?= $auction['tgl_lelang'] ?></td>
                                       <td><?= $auction['harga_awal'] ?></td>
                                       <td><?= $auction['id_user'] ?></td>
                                       <td><?= $auction['id_petugas'] ?></td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                                </div>
                            </div>
                        </div>