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
    <?php $this->load->view('backend/tamplate/head') ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('backend/tamplate/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('backend/tamplate/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profil</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard') ?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Admin</li>
                                <li class="breadcrumb-item active">Edit Profil</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="<?php echo base_url() ?>assets/Gambar/foto_profil/<?php echo $user->foto_admin ?>"
                                            alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?php echo $user->nama_admin ?></h3>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">


                            <div class="card card-primary card-outline">
                                <?php $id_admin = $this->session->userdata('id_admin') ?>
                                <form action="<?php echo base_url('admin/Profil/edit/' . $id_admin) ?>" method="POST"
                                    role="form" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input name="id_admin" value="<?php echo $user->id_admin; ?>" type="hidden">
                                            <input name="password" type="hidden">
                                            <input name="username" value="<?php echo $user->username; ?>" type="hidden"
                                                class="form-control" id="exampleInputUsername1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNama1">Nama</label>
                                            <input name="nama_admin" value="<?php echo $user->nama_admin; ?>"
                                                type="nama" class="form-control" id="exampleInputNama1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNomorTelepon1">Nomor Telepon</label>
                                            <input value="<?php echo $user->no_hp_admin; ?>" name="no_hp_admin"
                                                type="text" class="form-control" minlength="9" min="9" maxlength="14"
                                                placeholder="Enter No HP (Harus Angka)"
                                                onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required
                                                oninvalid="this.setCustomValidity('No HP Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input name="email_admin" value="<?php echo $user->email_admin; ?>"
                                                type="email" class="form-control" id="exampleInputEmail1">
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input name="foto_admin" type="file" id="foto_admin">
                                            <input name="foto_admin2" type="hidden"
                                                value="<?php echo $user->foto_admin; ?>">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- /.col -->
                </div>


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        <?php $this->load->view('backend/tamplate/footer') ?>

    </div>
    <!-- ./wrapper -->

    <!-- js - menggabungkan file yg dipisah -->
    <?php $this->load->view('backend/tamplate/js') ?>

</body>

</html>