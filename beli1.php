<?php include "header.php"; ?>
		<div class="container mt-5">
        <h1>TOKO TAS PUTRI</h1>
        <p>Jalan Sei batang hari No.130, Medan sunggal</p>

        <div class="row">
            <div class="col-md-6">
                <h2>Informasi Kontak</h2>
                <p>Telepon:  +1 123-456-1478</p>
                <p>Email: tokoputri@gmail.com</p>
            </div>

		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Beli Produk </h2>
				 <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                   Terima kasih Anda telah memesan barang di toko kami
                    </div>
            <?php

            }

            ?>
					<form action="proses-beli1.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>tanggal pembelian
								<input type="date" name="tanggal_pembelian" class="form-control input-md" >
								</td>
							</tr>
							<tr>
								<td>jumlah Barang
								<input type="jumlah_barang" name="jumlah_barang" class="form-control input-md"> 
								</td>
							</tr>
							<tr>
								<td>jenis barang
								<input type="jenis_barang" name="jenis_barang" class="form-control input-md"> 
								</td>
							</tr>
							<tr>
								<td>status pembayaran
								<input type="status_pembayaran" name="status_pembayaran" class="form-control input-md"> 
								</td>
							</tr>
							<tr>
								<td>alamat pengiriman
								<input type="alamat_pengiriman" name="alamat_pengiriman" class="form-control input-md"> 
								</td>
							</tr>
							<tr>
								<td>
								<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
      </div>
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		
<?php include "footer.php"; ?>