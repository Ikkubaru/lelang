<div class="card">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Kategori
</button>
                     <div class="card-header">
                        <h5 class="card-header-text">Data Kategori Lelang</h5> <br>
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table table-hover"> 
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Nama Kategori</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    $no=1; 
                                    foreach
                                    ($kategori as $kate){?>

                                    <tr>
                                       <td><?= $no++ ?></td>
                                       <td><?=$kate['nama_kategori'] ?></td>
                                       <td>
                                        <a onClick="return confirm('Yakin Ingin Menghapus Data?')"
                                        href="<?= base_url('admin/kategori/delete/'.$kate['id_kategori']); ?>" class="btn btn-danger">
                                            <i class="icon-trash"> Hapus</i>
                                        </a>
                                        <!--  -->
                                        <a href="" class="btn btn-warning">
                                            <i class="icon-wrench"> Edit</i>
                                        </a>
                                       </td>
                                    </tr>
                                    <?php }?>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/kategori/save')?>"  method="post">
                <div class="form-group row">
                    <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama_kategori" placeholder="Nama Kategori" required>
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