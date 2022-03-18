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
            <div class="content-header">
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
                        if ($this->session->flashdata('hapus')) { ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Hapus</h5>
                    </div>
                    <?php }
                        ?>
                    <!-- alert -->
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Detail Basis Pengetahuan <a
                                    href="<?php echo base_url('admin/Pengetahuan/tampil_pengetahuan') ?>"> <button
                                        class="btn btn-info btn-sm rounded-pill"><span class="fa fa-arrow-left"></span>
                                        kembali </button></a></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Basis Pengetahuan</li>
                                <li class="breadcrumb-item active">Detail Basis Pengetahuan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Ini Bagian Konten -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-light">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Data Faktor Penyakit</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo base_url('admin/Pengetahuan/save_pengetahuan')?>"
                                    method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Penyakit</label>
                                            <input class="form-control" readonly
                                                value="<?php echo $penyakit[0]['nama_penyakit']?>"></input>
                                            <input class="form-control" type="hidden"
                                                value="<?php echo $penyakit[0]['id_penyakit']?>"
                                                name="id_penyakit"></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Data Faktor Penyakit</label>
                                            <select name="faktor" class="form-control select2 select2-danger"
                                                data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option selected="selected">--- Pilih Faktor Penyakit ---</option>
                                                <?php foreach ($faktor as $faktor) { ?>
                                                <option value="<?= $faktor->id_faktor ?>">
                                                    <?= $faktor->faktor_penyebab ?>
                                                </option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                        <!-- /.card-body -->
                                        <div>
                                            <button type="submit" class="btn btn-success float-right">
                                                Tambah</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--col-->
                    </div>
                    <!--Row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Faktor Penyakit</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th style="width: 50px">No</th>
                                                <th style="width: 700px">Faktor Penyakit</th>
                                                <th style="width: 150px">Bobot</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tampil_detail as $tampil_detail) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $tampil_detail['faktor_penyebab']; ?></td>
                                                <td><?php echo $tampil_detail['bobot_faktor']; ?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo base_url("admin/Pengetahuan/delete_pengetahuan/" . $tampil_detail['id_pengetahuan']) ?>"><button
                                                            type="button" class="btn btn-danger btn-xs text-center"
                                                            onclick="return confirm('Apakah Anda Yakin Menghapus Data Faktor Penyakit Ini?')">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->

                </div> <!-- /Ini Akhir Konten /wrapper -->
            </section>
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