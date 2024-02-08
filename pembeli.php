<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Pembeli</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>jenis tas</th>
							<th>nama pembeli</th>
							<th>jumlah beli</th>
							<th>harga</th>
							<th></th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from pembeli");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['jenis_tas']?></td>
							<td><?php echo $row['nama_pembeli']?></td>
							<td><?php echo $row['jumlah_beli']?></td>
							<td><?php echo $row['harga']?></td>
							<td><a href="detail-pembeli.php?id=<?php echo $row['pembeli_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>Seminar Nasional</h4>
				<img src="images/chris8.jpg" class="img-thumbnail img-responsive">
				<p>Seminar Nasional tentang pemanfaatan sosial media sebagai sarana pemasaran produk yang disampaikan oleh <b>Chris Benoit</b> pakar sosial media terkemuka akan dilakasanakan pada 3 Maret 2017. Untuk Informasi biaya dan tempat pelaksaanaan silakan klik link dibawa<br/><a class="btn btn-danger btn-xs" href="ruang_kelas.html"role="button">Info Seminar</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>