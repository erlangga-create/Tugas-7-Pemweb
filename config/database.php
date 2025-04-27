<?php
class Database {
    public static function connect() {
        $conn = new mysqli('localhost', 'root', '', 'datamahasiswa', 4306);
        if ($conn->connect_error) {
            die("Koneksi Gagal: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>