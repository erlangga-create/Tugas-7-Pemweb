<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="index.php?action=create">Tambah Data</a><br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while($row = $data->fetch_assoc()): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $row['id'] ?>">Edit</a> | 
                <a href="index.php?action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
