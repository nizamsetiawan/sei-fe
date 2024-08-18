<html>
<head>
    <title>Form Lokasi</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/sb-admin-2.min.css'); ?>">
</head>
<body id="page-top">
    <div id="wrapper">
        <?php $this->load->view('sidebar'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('topbar'); ?>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Tambah Lokasi</h1>
                    <form method="post" action="store">
                        <div class="form-group">
                            <label for="nama">Nama Lokasi</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
