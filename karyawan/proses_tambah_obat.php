<?php
include "../conn.php";

$nama    = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp   = $_POST['telp'];

$hasil = mysqli_query($conn, "INSERT INTO tb_karyawan VALUES ('', '$nama', '$alamat', '$telp')");

if (!$hasil) {
  echo "<script>alert('Data gagal ditambahkan');
    window.location.href='tambah_obat.php'; </script>";
} else {
  echo "<script>alert('Data Berhasilh ditambahkan');
    window.location.href='tampil_obat.php'; </script>";
};
