<html>
<head>
    <title>Edit Proyek</title>
</head>
<body>
    <h1>Edit Proyek</h1>
    <form method="post" action="../update/<?php echo $proyek->id; ?>">
        Nama Proyek: <input type="text" name="nama" value="<?php echo $proyek->nama; ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
