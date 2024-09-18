<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Obat</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 800px;
            margin: 0;
            background: linear-gradient(120deg, rgba(34, 193, 195, 1) 0%, rgba(237, 45, 253, 1) 100%);
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
        }

        label {
            color: #ffffff;
            font-weight: 500;
            display: block;
            margin-bottom: 8px;
        }

        .form-floating input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            background: rgba(255, 255, 255, 0.5);
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
    <form action="proses_tambah_obat.php" method="post">
        <div class="container">
            <div class="form-floating mb-3">
                <label for="floatingInput">Nama Supplier</label>
                <input type="text" id="floatingInput" name="perusahaan" list="id_supplier">
            </div>
            <div class="form-floating mb-3">
                <label for="floatingInput">Telepon</label>
                <input type="text" id="floatingInput" name="telp" list="nama_obat">
            </div>
            <div class="form-floating mb-3">
                <label for="floatingInput">Alamat</label>
                <input type="text" id="floatingInput" name="alamat" list="kategori_obat">
            </div>
            <div class="form-floating mb-3">
                <label for="floatingInput">Keterangan</label>
                <input type="text" id="floatingInput" name="keterangan" list="harga_beli">
            </div>
            <input type="submit" class="btn btn-primary" value="Tambah Data Obat">
        </div>
    </form>
</body>

</html>