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
    <!-- head -->
    <?php $this->load->view('backend/tamplate/head')?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
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
                            <h1>Data Penyakit</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Penyakit</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- alert -->
                    <?php
                        // Cek apakah terdapat session nama message
                        if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Tambahkan</h5>
                    </div>
                    <?php }
                        ?>

                    <?php
                        // Cek apakah terdapat session nama message
                        if ($this->session->flashdata('edit')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Ubah</h5>
                    </div>
                    <?php }
                        ?>

                    <?php
                        // Cek apakah terdapat session nama message
                        if ($this->session->flashdata('hapus')) { ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Hapus</h5>
                    </div>
                    <?php }
                        ?>
                    <!-- alert -->

                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"></h3>

                                    <div class="navbar-buttons mbr-section-btn float-left">
                                        <a href="<?= base_url('admin/Penyakit/tambah_penyakit') ?>"> <button
                                                type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modal-default">
                                                Tambah Data
                                            </button></a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px" class="text-center">Nomor</th>
                                                <th style="width: 200px" class="text-center">Penyakit</th>
                                                <th class="text-center">Detail</th>
                                                <th class="text-center">Solusi</th>
                                                <th style="width: 150px" class="text-center">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                $no = 1;
                                foreach($penyakit as $penyakit){
                                    ?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td>
                                                    <p><?php echo $penyakit->nama_penyakit; ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo $penyakit->detail_penyakit; ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo $penyakit->solusi_penyakit; ?></p>
                                                </td>
                                                <td>
                                                    <a
                                                        href="<?php echo base_url("admin/Penyakit/edit_penyakit/" . $penyakit->id_penyakit) ?>"><button
                                                            type="button"
                                                            class="btn btn-info btn-xs ml-4">Edit</button></a>
                                                    <a
                                                        href="<?php echo base_url("admin/Penyakit/delete_penyakit/" . $penyakit->id_penyakit) ?>"><button
                                                            type="button" class="btn btn-danger btn-xs"
                                                            onclick="return confirm('Apakah Anda Yakin Menghapus Data Penyakit Ini?')">Hapus</button></a>
                                                </td>
                                            </tr>
                                            <?php  
                                    }
                                ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        <?php $this->load->view('backend/tamplate/footer')?>

    </div>
    <!-- ./wrapper -->

    <!-- js - menggabungkan file yg dipisah -->
    <?php $this->load->view('backend/tamplate/js')?>

</body>

</html>