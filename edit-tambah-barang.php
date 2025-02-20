<?php
require "koneksi.php";
require "barangmodel.php";

$barangmodel = new barangmodel($koneksi);

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $row = $barangmodel->find($id);
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST["nama"];
    $stok = $_POST["stok"];
    $status = $_POST["status"];
    $id = $_GET["id"];

    $barangmodel->update($nama, $stok, $status, $id);

}

require 'view/edit.view.php';
?>