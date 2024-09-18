<?php
include "../conn.php";

if (isset($_GET['id_obat'])) {
  $id_obat = $_GET['id_obat'];
  $query = mysqli_query($conn, "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id_obat'");
  $data = mysqli_fetch_assoc($query);
}

if (isset($_POST['update'])) {
  $id_obat = $_POST['id_obat'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];

  $update_query = "UPDATE tb_karyawan SET nama_karyawan='$nama', alamat='$alamat', telp='$telp' WHERE id_karyawan='$id_obat'";

  if (mysqli_query($conn, $update_query)) {
    echo "
        <script>alert('Data berhasil diupdate');
        window.location.href='tampil_obat.php';
        </script>";
  } else {
    echo "
        <script>alert('Data gagal diupdate');
        window.location.href='update.php?id_obat=$id_obat';
        </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data Karyawan</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 800px;
      margin: 0;
      background: rgb(34, 193, 195);
      background: linear-gradient(120deg, rgba(34, 193, 195, 1) 0%, rgba(237, 45, 253, 1) 100%);
      padding: 20px;
      /* Add padding to avoid cutting off content on small screens */
    }

    .container {
      padding: 30px;
      max-width: 600px;
      width: 100%;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-sizing: border-box;
      /* Ensure padding and borders are included in the width */
      overflow-x: hidden;
      /* Prevent horizontal scrolling */
    }

    h1 {
      color: #ffffff;
      margin: 0 0 20px;
      font-size: 24px;
      text-align: center;
      word-wrap: break-word;
      /* Ensure long titles don't overflow */
    }

    form {
      width: 100%;
    }

    label {
      color: #ffffff;
      font-weight: 500;
      display: block;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    input[type="submit"]:active {
      transform: scale(0.98);
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Update Data Obat</h1>
    <form action="update.php" method="post">
      <input type="hidden" name="id_obat" value="<?= $data['id_karyawan'] ?>">
      <label>Nama </label>
      <input type="text" name="nama" value="<?= $data['nama_karyawan'] ?>" required>
      <label>Kategori Obat</label>
      <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required>
      <label>Telp</label>
      <input type="text" name="telp" value="<?= $data['telp'] ?>" required>
      <input type="submit" name="update" value="Update Data">
    </form>
  </div>
</body>

</html>