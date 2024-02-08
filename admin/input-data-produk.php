<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-data-produk.php" method="POST">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <select name="nama_barang" class="form-control">
                            <option value="tas_ransel">tas_ransel</option>
                            <option value="tas_kulit">tas_kulit</option>
                            <option value="tas_resseller">tas_resseller</option>
                            <option value="tas_ideas">tas_ideas</option>
                            <option value="tas_selempang">tas_selempang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="text" name="jumlah" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga_barang">harga barang</label>
                        <input type="number" name="harga_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                     <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <textarea name="no_hp" class="form-control"></textarea>
                    </div>

                     <div class="form-group">
                        <label for="email">Email</label>
                        <textarea name="email" class="form-control"></textarea>
                    </div>



                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>