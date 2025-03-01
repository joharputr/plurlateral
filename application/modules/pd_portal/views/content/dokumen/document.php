<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $title ?></title>
  <link href="<?php echo base_url() ?>assets/css/css/sb-admin.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-primary static-top">

    <a class="navbar-brand mr-1" href="<?php echo base_url() ?>portal/document"><?php echo $title ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- navbar -->
       <ul class="navbar-nav ml-auto ">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-2x"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item disabled">Hai, Admin!</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>portal">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Document</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Document types:</h6>
          <a class="dropdown-item active" href="<?php echo base_url() ?>portal/document">Paper or Journal</a>

          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Press types:</h6>
          <a class="dropdown-item" href="<?php echo base_url() ?>portal/document/press">National Initiative or <br> Workshop</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>pd_portal/Kegiatan">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Events</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>portal/message">
          <i class="fas fa-fw fa-table"></i>
          <span>Messages</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo base_url() ?>portal">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Paper or Journal</li>
        </ol>

        <!-- DataTables Example -->
        <!--  <pre>
          <?php print_r($show) ?>
        </pre> -->

        <h3 class="box-title">
          <a href="<?php echo base_url(); ?>portal/login/logout" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
        </h3>

        <div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-table"></i>
            Document Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Dokumen</th>
                    <th>Event</th>
                    <th>Type</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  $id = 1;
                  if (!empty($show)) {
                    foreach ($show as $lihat) {
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                          <div style="width: 150px;"> <?php echo ucwords($lihat->judul) ?>
                        </td>
            </div>
            <td>
              <div style="width: 250px;"> <a href="<?php echo base_url($lihat->dokumen) ?>" width="64"> <?php echo base_url('upload/files/' . $lihat->dokumen) ?> </a>
            </td>

            <td>
              <div style="width: 150px;"><?php echo ucwords($lihat->nama) ?>
            </td>
            <td><div style="width: 100px;"><?php echo ucwords($lihat->tipe_dokumen) ?></td>
            <td align="center">
              <div class="btn-group" role="group" style="width: 200px;">
                <a href="<?php echo base_url(); ?>portal/document/edit/<?php echo $lihat->dokumen_id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                <a href="<?php echo base_url(); ?>portal/document/hapus/<?php echo $lihat->dokumen_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
            </td>
            </tr>
        <?php }
        } ?>
        </tbody>
        </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright ©Plurilateral 2019</span>
        </div>
      </div>
    </footer>

  </div>
  <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih tombol "Logout" dibawah ini jika anda yakin ingin keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/plugins/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>assets/js/datatables-demo.js"></script>
</body>

</html>