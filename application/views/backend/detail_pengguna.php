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
                            <h1>Detail Data Pengguna</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Pengguna</li>
                                <li class="breadcrumb-item active">Detail Data Pengguna</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <!-- /.card-header -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-danger card-outline">
                                <form action="" method="POST" role="form" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputNama1">Nama Ayah</label>
                                            <input name="nama_admin" value="<?php echo $data_user[0]->nama_ayah?>"
                                                type="nama" class="form-control" id="exampleInputNama1" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputNama1">Nama Ibu</label>
                                            <input name="nama_admin" value="<?php echo $data_user[0]->nama_ibu?>"
                                                type="nama" class="form-control" id="exampleInputNama1" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputNama1">Alamat Lengkap</label>
                                            <input name="nama_admin" value="<?php echo $data_user[0]->alamat_orangtua?>"
                                                type="nama" class="form-control" id="exampleInputNama1" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputNama1">Nomor Telepon</label>
                                            <input name="nama_admin" value="<?php echo $data_user[0]->no_hp_orangtua?>"
                                                type="nama" class="form-control" id="exampleInputNama1" readonly>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-warning card-outline">
                                <form action="" method="POST" role="form" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputNama1">Nama Balita</label>
                                            <input name="nama_admin" value="<?php echo $data_user[0]->nama_balita?>"
                                                type="nama" class="form-control" id="exampleInputNama1" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputNama1">Jenis Kelamin Balita</label>
                                            <input name="nama_admin" value="<?php echo $data_user[0]->jk_balita?>"
                                                type="nama" class="form-control" id="exampleInputNama1" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputNama1">Usia Balita</label>
                                            <input name="nama_admin" value="<?php echo $data_user[0]->usia_balita?>"
                                                type="nama" class="form-control" id="exampleInputNama1" readonly>
                                        </div>
                                    </div>

                                    <?php 
                                    $nilai_rawan = $data_cbr_rawan['0']->nilaicf / $data_cbr_total['0']->nilaicf * 100;
                                    $nilai_aman = $data_cbr_aman['0']->nilaicf / $data_cbr_total['0']->nilaicf * 100;
                                    if(round($nilai_rawan,2) > round($nilai_aman,2)){
                                    //echo "nilai Rawan";
                                    $id_penyakit = 1;
                                    $nilai_cbr = round($nilai_rawan,2);
                                    $nilai_cbr_aman = round($nilai_aman,2);
                                    }else{
                                    //echo "nilai Aman";
                                    $id_penyakit = 3;
                                    $nilai_cbr = round($nilai_aman,2);
                                    $nilai_cbr_aman = round($nilai_rawan,2);
                                    }
                                    ?>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <a
                                            href="<?= base_url('admin/Pengguna/hasil_pengguna/' . $id_penyakit . "/" . $nilai_cbr . "/" . $nilai_cbr_aman . "/" . $data_user[0]->id_user) ?>">
                                            <button type="button" class="btn btn-success float-right">
                                                Hasil Konsultasi</button></a>
                                        <a href="<?= base_url('admin/Pengguna/tampil_pengguna/') ?>"><button
                                                type="button" class="btn btn-primary">Kembali</button></a>
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
        <?php $this->load->view('backend/tamplate/footer')?>

    </div>
    <!-- ./wrapper -->

    <!-- js - menggabungkan file yg dipisah -->
    <?php $this->load->view('backend/tamplate/js')?>

</body>

</html>