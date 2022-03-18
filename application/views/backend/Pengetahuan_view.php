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
                            <h1>Basis Pengetahuan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Basis Pengetahuan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <!-- Default box -->
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px" class="text-center">Nomor</th>
                                                <th style="width: 100px" class="text-center">Nama Penyakit</th>
                                                <th style="width: 150px" class="text-center">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                $no = 1;
                                foreach($penyakit as $penyakit){
                                    ?>
                                            <tr>
                                                <td>
                                                    <p class="text-center"><?php echo $no++?>
                                                </td>
                                                </p>
                                                <td>
                                                    <p class="text-center"><?php echo $penyakit->nama_penyakit; ?></p>
                                                </td>
                                                <td>
                                                    <a
                                                        href="<?php echo base_url("admin/Pengetahuan/detail_pengetahuan/" . $penyakit->id_penyakit) ?>"><button
                                                            type="button"
                                                            class="btn btn-info btn-sm ml-4">Detail</button></a>
                                                    <!-- <a
                                                        href="<?php echo base_url("admin/Pengetahuan/delete_pengetahuan/" . $penyakit->id_penyakit) ?>"><button
                                                            type="button" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda Yakin Menghapus Data Basis Pengetahuan Ini?')">Hapus</button></a> -->
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