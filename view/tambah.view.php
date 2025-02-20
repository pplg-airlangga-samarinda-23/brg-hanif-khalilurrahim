<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah barang</title>
</head>
<body>
    <h1 stayle="font-size:large">Tambah barang</h1>
    <form action="" method="POST">
        <div class="form-item">
            <label for="nama">Nama barang</label>
            <input type="text" name="Nama" id="nama">
        </div>
        <div class="form-item">
            <label for="stok">Stok</label>
            <input type="number" name="Stok" id="stok">
        </div>
        <div class="form-item">
            <label for="status">Status</label>
            <select name="Status" id="status">
                <option values="" disable selected>Pilih status barang</option>
                <option values="baik">Baik</option>
                <option values="rusak">Rusak</option>
            </select>
        </div>
        <button type="submit">Submit<button>
    </from>
    <a href="barang.php">Kembali</a>
</body>
</html>