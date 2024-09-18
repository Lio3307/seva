<?php
include "./conn.php";

$nama_perusahaan  = $_POST['id_supplier'];
$suplier          = mysqli_fetch_assoc(mysqli_query(
  $conn,
  "SELECT id_supplier FROM tb_supplier WHERE perusahaan = '$nama_perusahaan'"
));

$id_supplier  = $suplier['id_supplier'];
$nama_obat    = $_POST['nama_obat'];
$kategori_obat = $_POST['kategori_obat'];
$harga_jual   = $_POST['harga_jual'];
$harga_beli   = $_POST['harga_beli'];
$stok_obat    = $_POST['stok_obat'];
$keterangan   = $_POST['keterangan'];

$hasil = mysqli_query($conn, "INSERT INTO tb_obat VALUES ('', '$id_supplier', '$nama_obat', '$kategori_obat', '$harga_jual', '$harga_beli', '$stok_obat', '$keterangan')");

if (!$hasil) {
  echo "<script>alert('Data gagal ditambahkan');
    window.location.href='tambah_obat.php'; </script>";
} else {
  echo "<script>alert('Data Berhasilh ditambahkan');
    window.location.href='tampil_obat.php'; </script>";
};
