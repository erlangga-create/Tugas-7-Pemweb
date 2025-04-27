<!DOCTYPE html>
<html>
<head>
    <title><?= isset($mahasiswa) ? 'Edit' : 'Tambah' ?> Mahasiswa</title>
</head>
<body>
    <h2><?= isset($mahasiswa) ? 'Edit' : 'Tambah' ?> Mahasiswa</h2>
    <form action="index.php?action=<?= isset($mahasiswa) ? 'update' : 'store' ?>" method="post">
        <?php if(isset($mahasiswa)): ?>
            <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
        <?php endif; ?>
        Nama: <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?? '' ?>"><br><br>
        NIM: <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?? '' ?>"><br><br>
        Alamat: <input type="text" name="alamat" value="<?= $mahasiswa['alamat'] ?? '' ?>"><br><br>
        <button type="submit"><?= isset($mahasiswa) ? 'Update' : 'Simpan' ?></button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
