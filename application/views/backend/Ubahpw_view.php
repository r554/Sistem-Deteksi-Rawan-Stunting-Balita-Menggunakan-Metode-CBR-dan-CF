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
                            <h1>Ubah Password</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Admin</li>
                                <li class="breadcrumb-item active">Ubah Password</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-2"> </div>
                        <div class="col-8">
                            <div class="card card-primary">
                                <?php $id_admin = $this->session->userdata('id_admin') ?>
                                <form action="<?php echo base_url('admin/Profil/simpan_ubahpw/' . $id_admin) ?>"
                                    method="POST" role="form" class="form-horizontal">
                                    <input name="id_admin" value="<?php echo $user['id_admin']; ?>" type="hidden">
                                    <input name="nama_admin" value="<?php echo $user['nama_admin']; ?>" type="hidden">
                                    <input name="no_hp_admin" value="<?php echo $user['no_hp_admin']; ?>" type="hidden">
                                    <input name="email_admin" value="<?php echo $user['email_admin']; ?>" type="hidden">
                                    <input name="foto_admin" value="<?php echo $user['foto_admin']; ?>" type="hidden">
                                    <input name="username" value="<?php echo $user['username']; ?>" type="hidden">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputpasswordbaru1" class="col-sm-2 col-form-label">Password
                                                Baru</label>
                                            <div class="col-sm-10">
                                                <input name="password" type="password" class="form-control"
                                                    id="inputpasswordbaru1">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>
                                        <!-- /.card-footer -->
                                </form>
                            </div>
                        </div>
                        <div class="col-2"> </div>
                    </div>
                </div>
                <!-- /.content -->
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