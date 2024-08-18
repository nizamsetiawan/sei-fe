<html>
<head>
    <title>List Proyek</title>
</head>
<body>
    <h1>List Proyek</h1>
    <a href="proyek/create">Tambah Proyek</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Proyek</th>
            <th>Action</th>
        </tr>
        <?php foreach ($proyek as $p): ?>
        <tr>
            <td><?php echo $p->id; ?></td>
            <td><?php echo $p->nama; ?></td>
            <td>
                <a href="proyek/edit/<?php echo $p->id; ?>">Edit</a> | 
                <a href="proyek/delete/<?php echo $p->id; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
