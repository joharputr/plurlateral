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

  <?php $this->load->view('../componen/navigation')?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('../componen/sidebar')?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo base_url() ?>portal">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Press</li>
        </ol>

        <!-- DataTables Example -->
        <!--  <pre>
          <?php print_r($show) ?>
        </pre> -->

        <h3 class="box-title">
          <a href="<?php echo base_url(); ?>portal/press/tambah_press" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
        </h3>

        <div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-table"></i>
            Article Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>

                    <th>Judul</th>
                    <th>Tempat</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Tipe</th>
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
                          <div style="width: 150px;"> <?php echo ucwords($lihat->judul) ?></div>
                        </td>
                        <td>
                          <div style="width: 150px;"> <?php echo ucwords($lihat->tempat) ?></div>
                        </td>
                        <td>
                          <div style="width: 150px;"> <?php echo ucwords($lihat->tanggal) ?></div>
                        </td>
                        <td>
                          <div style="width: 150px;"> <?php echo ucwords($lihat->deskripsi) ?></div>
                        </td>
                        <td>
                          <div style="width: 150px;"> <?php echo ucwords($lihat->tipe_artikel) ?></div>
                        </td>

                        <td align="center">
                        <div class="btn-group" role="group" style="width: 200px;">
                            <a href="<?php echo base_url(); ?>portal/press/tambah_gambar/<?php echo $lihat->artikel_id ?>" class="btn btn-sm btn-success btn-flat"><i class="fa fa-file-image"></i> Tambah Gambar</a>
                          </div>
                          <div class="btn-group" role="group" style="width: 200px;">
                            <a href="<?php echo base_url(); ?>portal/press/edit_press/<?php echo $lihat->artikel_id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>portal/press/hapus_press/<?php echo $lihat->artikel_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                          </div>
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