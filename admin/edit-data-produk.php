<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-data-produk.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from data_produk where barang_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nim">Nama Barang</label>
                        <input type="hidden" name="barang_id" value="<?php echo $row['barang_id']?>" class="form-control">
                        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" value="<?php echo $row['jumlah']?>" class="form-control">
                    </div>

                       <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="number" name="harga_barang" value="<?php echo $row['harga_barang']?>" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                       <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="number" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>