<?php
include "./conn.php";


$perusahaan  = $suplier['perusahaan'];
$telp   = $_POST['telp'];
$alamat = $_POST['alamat'];
$keterangan   = $_POST['keterangan'];

$hasil = mysqli_query($conn, "INSERT INTO tb_supplier VALUES ('', '$perusahaan', '$telp', '$alamat', '$keterangan')");

if (!$hasil) {
  echo "<script>alert('Data gagal ditambahkan');
    window.location.href='tambah_obat.php'; </script>";
} else {
  echo "<script>alert('Data Berhasilh ditambahkan');
    window.location.href='tampil_obat.php'; </script>";
};
