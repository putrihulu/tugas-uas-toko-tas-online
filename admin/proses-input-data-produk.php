<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama_barang=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];
$harga_barang=$_POST['harga_barang'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$email=$_POST['email'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into data_produk(nama_barang,jumlah,harga_barang,alamat,no_hp,email) 
                        values ('$nama_barang', '$jumlah', '$harga_barang', '$alamat', '$no_hp', '$email')");

if($simpan==true){

    header("location:tampil-data-produk.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>