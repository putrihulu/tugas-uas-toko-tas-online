<?php include "header.php"; ?>

   <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Pesan anda berhasil terkirim!
                    </div>
            <?php

            }

            ?>


		
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
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
					<form action="proses-komentar.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>Nama Lengkap
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Alamat Email
								<input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
								</td>
							</tr>
							<tr>
								<td>Pesan
								<textarea name="pesan" class="form-control input-md" required> </textarea>
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