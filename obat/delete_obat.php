<?php
mysqli_report(MYSQLI_REPORT_OFF);  // Disable exception mode
include "../conn.php";

$id_obat = $_GET['id_obat'];
$hasil = mysqli_query($conn, "DELETE FROM tb_obat WHERE id_obat='$id_obat'");

if (!$hasil) {
  if (mysqli_errno($conn) == 1451) {
    echo "
        <script>alert('Data gagal di hapus karena terkait dengan data lain');
        window.location.href='tampil_obat.php';
        </script>";
  } else {
    echo "
        <script>alert('Data gagal di hapus karena kesalahan lain');
        window.location.href='tampil_obat.php';
        </script>";
  }
} else {
  echo "
    <script>alert('Data Berhasil di hapus');
    window.location.href='tampil_obat.php';
    </script>";
}
