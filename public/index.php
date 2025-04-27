<?php
require_once __DIR__ . '/../app/controller/MahasiswaController.php';

$controller = new MahasiswaController();
$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    if(isset($_GET['id'])) {
        $controller->$action($_GET['id']);
    } else {
        $controller->$action();
    }
} else {
    echo "Halaman tidak ditemukan!";
}
?>
