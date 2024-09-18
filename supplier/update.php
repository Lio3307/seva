<?php
include "../conn.php";

if (isset($_GET['id_obat'])) {
  $id_supplier = $_GET['id_obat'];
  $query = mysqli_query($conn, "SELECT * FROM tb_supplier WHERE id_supplier = '$id_supplier'");
  $data = mysqli_fetch_assoc($query);
}

if (isset($_POST['update'])) {
  $id_obat = $_POST['id_supplier'];
  $perusahaan = $_POST['perusahaan'];
  $nama_obat = $_POST['telp'];
  $kategori_obat = $_POST['alamat'];
  $keterangan = $_POST['keterangan'];

  $update_query = "UPDATE tb_supplier SET perusahaan='$perusahaan', telp='$nama_obat', alamat='$kategori_obat',  keterangan='$keterangan' WHERE id_supplier='$id_obat'";

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
  <title>Update Data Obat</title>
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
      <input type="hidden" name="id_supplier" value="<?= $data['id_supplier'] ?>">
      <label>NamaPerusahaan</label>
      <input type="text" name="perusahaan" value="<?= $data['perusahaan'] ?>" required>
      <label>Telepon</label>
      <input type="number" name="telp" value="<?= $data['telp'] ?>" required>
      <label>alamat</label>
      <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required>

      <label>Keterangan</label>
      <textarea name="keterangan" rows="4" required><?= $data['keterangan'] ?></textarea>
      <input type="submit" name="update" value="Update Data">
    </form>
  </div>
</body>

</html>