<?php
require_once __DIR__ . '/../../config/database.php';

class Mahasiswa {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM mahasiswa");
    }

    public function getById($id) {
        return $this->conn->query("SELECT * FROM mahasiswa WHERE id = $id")->fetch_assoc();
    }

    public function save($nama, $nim, $alamat) {
        return $this->conn->query("INSERT INTO mahasiswa (nama, nim, alamat) VALUES ('$nama', '$nim', '$alamat')");
    }

    public function update($id, $nama, $nim, $alamat) {
        return $this->conn->query("UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id=$id");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM mahasiswa WHERE id=$id");
    }
}
?>
