<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['pembeli_id'];
$tanggal_pembelian=$_POST['tanggal_pembelian'];
$jumlah_barang=$_POST['jumlah_barang'];
$jenis_barang=$_POST['jenis_barang'];
$status_pembayaran=$_POST['status_pembayaran'];
$alamat_pengiriman=$_POST['alamat_pengiriman'];

$ubah=$koneksi->query("update pembeli set tanggal_pembelian='$tanggal_pembelian', jumlah_barang='$jumlah_barang', jenis_barang='$jenis_barang', status_pembayaran='$status_pembayaran', alamat_pengiriman='$alamat_pengiriman' where pembeli_id='$id'");

if($ubah==true){

    header("location:tampil-pembeli.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>