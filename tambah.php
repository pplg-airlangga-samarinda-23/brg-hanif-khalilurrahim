<?php

require "koneksi.php";
require "barangmodel.php";
$barangmodel= new barangmodel($koneksi);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nama = $_POST["Nama"];
    $Stok = $_POST["Stok"];
    $Status = $_POST["Status"];
    $barangmodel->store($Nama, $Stok, $Status);
    
    //PHP 8.2
    //$row = $koneksi->execute_query($sql, [$nama, $stok, $status]);
    
    //untuk semua versi php
    }

    require "view/tambah.view.php";
?>