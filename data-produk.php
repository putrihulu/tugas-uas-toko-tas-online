<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Produk</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nama Barang</th>
							<th>Jumlah</th>
							<th>Harga Barang</th>
							<th>Alamat</th>
							<th>No Hp</th>
							<th>Email</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
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
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>