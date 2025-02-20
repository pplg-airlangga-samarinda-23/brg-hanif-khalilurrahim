<!DOCTYPE html>
<html lang="en">
<head>
    <title>Barang</title>
    <link rel="stylesheet" href="form.css">
    <style>
    table {
    background-color: black;
    }

    tr {
        background-color: gray;
    }

    th  {
        background-color: light gray;
    }

    td  {
        background-color: gray;
    }   
    </style>

</head>
<body>
    <a href="tambah.php">Tambah</a>
<div class="tabel">
        <table >
            <thead>
                <tr>
                    <th>No.</th>
                    <th>nama barang</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            <thead>
            
            <tbody>
                
            <?php
                $no = 1;
                //foreach ($barang as $item) 
                // while ($item = mysqli_fetch_assoc($rows)){
                foreach ($rows as $item) :
            ?>
                                
            <tr>
                <td> <?= $no; ?></td>
                <td> <?= $item["nama_barang"] ?></td>
                <td> <?= $item["stok"] ?></td>
                <td> <?= $item["status"] ?></td>
                <td> 
                    <a href="edit-tambah-barang.php?id=<?=$item['id']?>">Edit</a>
                    <a href="hapus-data.php?id=<?=$item['id']?>">Hapus</a> 
                </td>
            </tr>
                
            <?php
            $no += 1;
            endforeach;
            ?>
            <?php foreach ($rows as $row) : ?>

            <?php endforeach; ?>
            <tbody>

        </table>
</div>
</body>
</html>