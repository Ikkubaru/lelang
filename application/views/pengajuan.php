<?php
require_once('layout/_navbar.php')?>
<div class="container-fluid banner bg-primary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-12">
                        <div class="py-4">
                         <form action="" method="post" action="">
                                    <div class="form-group">
                                        <label for="" class="form-control-label"></label>
                                        <input type="text" class="form-control" placeholder="Nama Barang" name="" required>
                                    </div>  

                                <div class="form-group">
                                    <label for="exampleSelect1" class="form-control-label"></label>
                                        <select class="form-control" id="exampleSelect1" required>
                                            <option> kategori 1</option>
                                            <option> kategori 2</option>
                                            <option> kategori 3</option>
                                            <option> kategori 4</option>
                                        </select>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="form-control-label"></label>
                                        <input type="date" class="form-control" id="tanggal" name="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-control-label"></label>
                                        <input type="number" class="form-control" placeholder="Harga Awal (Rp.)" name="">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-control-label"></label>
                                        <input type="file" class="form-control" placeholder="Gambar" name="">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-control-label"></label>
                                    <textarea class="form-control" placeholder="" name="">Deskripsi :
                                    </textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success waves-effect waves-light">Ajukan</button>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('layout/_footer.php')?>
        <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Ambil elemen input tanggal
            const dateInput = document.getElementById('tanggal');
            
            // Buat objek Date baru untuk tanggal hari ini
            const today = new Date();
            
            // Format tanggal menjadi yyyy-mm-dd
            const year = today.getFullYear();
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const day = String(today.getDate()).padStart(2, '0');
            
            // Gabungkan untuk membentuk string tanggal yang sesuai dengan format input date
            const formattedDate = `${year}-${month}-${day}`;
            
            // Atur nilai default input date menjadi tanggal hari ini
            dateInput.value = formattedDate;
        });
    </script>