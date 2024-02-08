<?php

include "koneksi.php";
$tanggal_pembelian = $koneksi->real_escape_string($_POST['tanggal_pembelian']);
$jumlah_barang= $koneksi->real_escape_string($_POST['jumlah_barang']);
$jenis_barang = $koneksi->real_escape_string($_POST['jenis_barang']);
$status_pembayaran= $koneksi->real_escape_string($_POST['status_pembayaran']);
$alamat_pengiriman= $koneksi->real_escape_string($_POST['alamat_pengiriman']);

$simpan=$koneksi->query("insert into pembeli(tanggal_pembelian,jumlah_barang,jenis_barang,status_pembayaran,alamat_pengiriman) 
						values ('$tanggal_pembelian','$jumlah_barang','$jenis_barang', '$status_pembayaran', '$alamat_pengiriman')");

if ($simpan==true){

	header ("location:beli1.php?pesan=inputBerhasil");
} else{
	echo "Error";


}

?>
