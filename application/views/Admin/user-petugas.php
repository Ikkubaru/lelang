<div class="card">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Petugas
</button>
                     <div class="card-header">
                        <h5 class="card-header-text">Data Petugas</h5> <br>
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
                                     foreach ($petugas as $pet){ ?>
                                    <tr>
                                       <td><?= $no++ ?></td>
                                       <td><?= $pet['nama_petugas'] ?></td>
                                       <td><?= $pet['telp'] ?></td>
                                       <td><?= $pet['alamat'] ?></td>
                                       <td><?= $pet['username'] ?></td>
                                       <td>
                                        <a onClick="return confirm('Yakin Ingin Menghapus Data?')"
                                        href="<?= base_url('admin/petugas/delete/'.$pet['id_petugas']); ?>" class="btn btn-danger">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Admin/petugas/save') ?>" method="post">
                <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Nama</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama" placeholder="Nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Telepon</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" name="no_telp" placeholder="Nomor Telepon" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Alamat</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="alamat" placeholder="Alamat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Username</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Level</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="exampleSelect1" name="level" readonly>
                        <option value="petugas">Petugas</option>
                    </select>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
        </form>
      </div>
    </div>
  </div>
</div>