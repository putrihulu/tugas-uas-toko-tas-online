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
                <form action="proses-edit-pembeli.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pembeli where pembeli_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                        <input type="hidden" name="pembeli_id" value="<?php echo $row['pembeli_id']?>" class="form-control">
                        <input type="date" name="tanggal_pembelian" value="<?php echo $row['tanggal_pembelian']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" name="jumlah_barang" value="<?php echo $row['jumlah_barang']?>" class="form-control">
                    </div>

                       <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" name="jenis_barang" value="<?php echo $row['jenis_barang']?>" class="form-control">
                    </div>

                       <div class="form-group">
                        <label for="status_pembayaran">Status Pembayaran</label>
                        <input type="text" name="status_pembayaran" value="<?php echo $row['status_pembayaran']?>" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="alamat_pengiriman">Alamat Pengiriman</label>
                        <textarea name="alamat_pengiriman" class="form-control"><?php echo $row['alamat_pengiriman']?></textarea>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>