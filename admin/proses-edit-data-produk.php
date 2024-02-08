<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['barang_id'];
$nama_barang=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];
$harga_barang=$_POST['harga_barang'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$email=$_POST['email'];

$ubah=$koneksi->query("update data_produk set nama_barang='$nama_barang', jumlah='$jumlah', harga_barang='$harga_barang', alamat='$alamat', no_hp='$no_hp', email='$email' where barang_id='$id'");


if($ubah==true){

    header("location:tampil-data-produk.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>