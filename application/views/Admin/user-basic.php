<div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Data User</h5> <br>
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table table-hover"> 
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Nama</th>
                                       <th>Telepon</th>
                                       <th>Alamat</th>
                                       <th>Username</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $no=1;
                                     foreach ($user as $use){ ?>
                                    <tr>
                                       <td><?= $no++ ?></td>
                                       <td><?= $use['nama'] ?></td>
                                       <td><?= $user['no_telp'] ?></td>
                                       <td><?= $use['alamat'] ?></td>
                                       <td><?= $use['username'] ?></td>
                                       <td>
                                        <a onClick="return confirm('Yakin Ingin Menghapus Data?')"
                                        href="" class="btn btn-danger">
                                            <i class="icon-trash"> Hapus</i>
                                        </a>
                                        <!--  -->
                                        <a href="" class="btn btn-warning">
                                            <i class="icon-wrench"> Edit</i>
                                        </a>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>