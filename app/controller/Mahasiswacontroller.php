<?php
require_once __DIR__ . '/../models/Mahasiswa.php';

class MahasiswaController {
    private $model;

    public function __construct() {
        $this->model = new Mahasiswa();
    }

    public function index() {
        $data = $this->model->getAll();
        include __DIR__ . '/../view/index.php';
    }

    public function create() {
        include __DIR__ . '/../view/form.php';
    }

    public function store() {
        $this->model->save($_POST['nama'], $_POST['nim'], $_POST['alamat']);
        header('Location: index.php');
    }

    public function edit($id) {
        $mahasiswa = $this->model->getById($id);
        include __DIR__ . '/../view/form.php';
    }

    public function update() {
        $this->model->update($_POST['id'], $_POST['nama'], $_POST['nim'], $_POST['alamat']);
        header('Location: index.php');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php');
    }
}
?>
