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
        <h1> Pembeli</h1>
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
                <th>tanggal pembelian</th><th>jumlah barang</th><th>jenis barang</th><th>status pembayaran</th><th>alamat pengiriman</th>
                <th>
                    <a href="input-tas.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from pembeli ");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['tanggal_pembelian']?></td>
                <td><?php echo $row['jumlah_barang']?></td>
                <td><?php echo $row['jenis_barang']?></td>
                <td><?php echo $row['status_pembayaran']?></td>
                <td><?php echo $row['alamat_pengiriman']?></td>
                <td>

                <a href="edit-pembeli.php?id=<?php echo $row['pembeli_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-pembeli.php?id=<?php echo $row['pembeli_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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