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
        <h1>Data Produk</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Nama Barang</th><th>Jumlah</th><th>Harga Barang</th><th>Alamat</th><th>Nomor HP</th><th>Email</th>
                <th>
                    <a href="input-data-produk.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from data_produk ");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama_barang']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['harga_barang']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['email']?></td>
                <td>

                <a href="edit-data-produk.php?id=<?php echo $row['barang_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-data-produk.php?id=<?php echo $row['barang_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>