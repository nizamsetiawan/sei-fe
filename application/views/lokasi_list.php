<html>
<head>
    <title>List Lokasi</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/sb-admin-2.min.css'); ?>">
</head>
<body id="page-top">
    <div id="wrapper">
        <?php $this->load->view('sidebar'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('topbar'); ?>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">List Lokasi</h1>
                    <a href="lokasi/create" class="btn btn-primary mb-3">Tambah Lokasi</a>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Lokasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Lokasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($lokasi as $l): ?>
                                        <tr>
                                            <td><?php echo $l->id; ?></td>
                                            <td><?php echo $l->nama; ?></td>
                                            <td>
                                                <a href="lokasi/edit/<?php echo $l->id; ?>" class="btn btn-warning btn-sm">Edit</a> 
                                                <a href="lokasi/delete/<?php echo $l->id; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
