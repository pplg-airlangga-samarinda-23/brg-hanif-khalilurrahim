<?php
require "koneksi.php";
require "barangmodel.php";

$barangmodel = new barangmodel($koneksi);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $barangmodel->delete($id);

}
?>