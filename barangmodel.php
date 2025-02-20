<?php

class barangmodel {
    private $koneksi;

    public function __construct(mysqli $koneksi) {
        $this->koneksi = $koneksi;
    }

    //ambil semua barang //punya barang
    public function getall() {
        $sql = "select * from barang";
        $rows = $this->koneksi->execute_query($sql, [])->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }
    //punya tambah
    public function store($Nama, $Stok, $Status) {
        $sql = "INSERT INTO barang (nama_barang, stok, status) values (?, ?, ?)";
        $row = $this->koneksi->execute_query($sql, [$Nama, $Stok, $Status]);
        header("location:barang.php");
    }
    //punya edit
    public function find($id) {
        $sql = "SELECT * FROM barang WHERE id=?";
        $row = $this->koneksi->execute_query($sql, [$id])->fetch_assoc();
        return $row;
    }

    public function update($Nama, $Stok, $Status, $id) {
        $sql = "UPDATE barang SET nama_barang=?, stok=?, status=? where id=?";
        $row = $this->koneksi->execute_query($sql, [$Nama, $Stok, $Status, $id]);
        header("location:barang.php");
    }
    //punya hapus
    public function delete($id) {
        $sql = "DELETE FROM barang WHERE id=?";
        $row = $this->koneksi->execute_query($sql, [$id]);
        header("location:barang.php");
    }
}

?>