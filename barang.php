<?php

require "koneksi.php";

require "barangmodel.php";
$barangmodel = new barangmodel($koneksi);
$rows = $barangmodel->getall();

require "view/barang.view.php";

//$rows = $koneksi ->execute_query($sql, [])->fetch_all(mysqli_assoc); <- versi lama 

//cara oop di versi lama

//cara prosedural nanti

//var_dump($rows);

//foreach ($rows as $row)
//{
//    echo "{$row['id']}: {$Row['nama_barang']}\n";
//}
?>