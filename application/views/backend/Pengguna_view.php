<?php if (!$this->session->userdata('username')) {
			redirect(base_url("admin/Login"));
		}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar Penyakit Stunting</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('backend/tamplate/navbar')?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('backend/tamplate/sidebar')?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Pengguna</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Pengguna</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <?php
                                // Cek apakah terdapat session nama message
                                if ($this->session->flashdata('hapus')) { ?>
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Data Berhasil Di Hapus</h5>
                                </div>
                                <?php }
                                 ?>
                                <!-- alert -->
                                <div class="card-header">
                                    <h3 class="card-title">Data Pengguna</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>ID User</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                                <th>Nama Balita</th>
                                                <th>Umur Balita</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //  $no = "1";
                                            foreach ($get_data_user as $data) {
                                            ?>
                                            <tr>
                                                <td><?php echo $data['id_user']?></td>
                                                <td><?php echo $data['nama_ayah']?></td>
                                                <td><?php echo $data['nama_ibu']?></td>
                                                <td><?php echo $data['nama_balita']?></td>
                                                <td><?php echo $data['usia_balita']?></td>
                                                <td><?php echo $data['alamat_orangtua']?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo base_url("admin/Pengguna/detail_pengguna/" . $data['id_user']) ?>"><button
                                                            type="button"
                                                            class="btn btn-info btn-xs ml-4">Detail</button>
                                                    </a>
                                                    <a
                                                        href="<?php echo base_url("admin/Pengguna/delete_pengguna/" . $data['id_user']) ?>"><button
                                                            type="button" class="btn btn-danger btn-xs"
                                                            onclick="return confirm('Apakah Anda Yakin Menghapus Data Pengguna Ini?')">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="text-center">
                                                <th>ID User</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                                <th>Nama Balita</th>
                                                <th>Umur Balita</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="https://www.instagram.com/kiranaywt">KY</a></strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>assets/AdminLTE/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>