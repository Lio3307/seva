<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Obat</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: rgb(34, 193, 195);
      background: linear-gradient(120deg, rgba(34, 193, 195, 1) 0%, rgba(237, 45, 253, 1) 100%);
    }

    .container {
      padding: 30px;
      max-width: 1200px;
      width: 100%;
      background: rgba(255, 255, 255, 0.2);
      /* Semi-transparent white background */
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    h1 {
      color: #ffffff;
      margin: 0 0 20px;
      font-size: 28px;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #ffffff;
      /* Set table background to white */
      border-radius: 8px;
      overflow: hidden;
    }


    thead {
      background-color: #007bff;
      color: white;
    }

    th,
    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      font-weight: 600;
    }

    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tbody tr:hover {
      background-color: #f1f1f1;
    }

    a {
      color: #007bff;
      text-decoration: none;
      padding: 5px 10px;
    }

    a:hover {
      text-decoration: underline;
    }

    .actions {
      display: flex;
      gap: 10px;
      padding-top: 23px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Data Obat</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Perusahaan</th>
          <th scope="col">Telp</th>
          <th scope="col">Alamat</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "../conn.php";
        $no = 1;
        $data_obat = mysqli_query($conn, "SELECT * FROM tb_supplier ");
        while ($data = mysqli_fetch_assoc($data_obat)) {
        ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $data['perusahaan']; ?></td>
            <td><?= $data['telp']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['keterangan']; ?></td>
            <td class="actions">
              <a href="update.php?id_obat=<?= $data['id_supplier'] ?>">Update</a>
              <a href="delete_obat.php?id_obat=<?= $data['id_supplier'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
              <a href="tambah_obat.php">ADD</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>