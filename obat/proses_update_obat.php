<?php
include "./conn.php";

$nama_perusahaan = $_POST['id_supplier'];
$supplier       = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id_supplier FROM tb_supplier WHERE perusahaan = '$nama_perusahaan'"));
$id_supplier    = $supplier['id_supplier'];
$id_obat = $_POST['id_obat'];
$nama_obat      = $_POST['nama_obat'];
$kategori_obat  = $_POST['kategori_obat'];
$harga_jual     = $_POST['harga_jual'];
$harga_beli     = $_POST['harga_beli'];
$stok_obat      = $_POST['stok_obat'];
$keterangan     = $_POST['keterangan'];

$hasil = mysqli_query($conn, "UPDATE tb_obat 

                    SET id_supplier = '$id_supplier',
                        nama_obat = '$nama_obat',
                        kategori_obat = '$kategori_obat',
                        harga_jual = '$harga_jual',
                        harga_beli = '$harga_beli',
                        stok_obat = '$stok_obat',
                        keterangan = '$keterangan'
                    WHERE id_obat = '$id_obat'
                    ");


if (!$hasil) {
    echo "<script>alert('gagal Mengupdate data');window.location.href='update_obat.php'</script>";
} else {
    echo "<script>alert('Berhasil Mengupdate Data');window.location.href='tampil_obat.php'</script>";
}
