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

    <?php
    $ranking = array();

    foreach ($nilai_cf as $k => $v) {
        array_push($ranking, $v);
    }

   //echo $jumlah_data_cf;

    if ($jumlah_data_cf == 1) {
        $a0 = $ranking[0]['total'];
        $cfcombine1 = $a0 * (1 - $a0);
        $hasil_cf = $cfcombine1 * 100;
        if ($hasil_cf > 0 and $hasil_cf <= 50) {
            //echo "Sedikit kemungkinan atau kemungkinan kecil";
            $nilai_keyakinan = "Sedikit kemungkinan atau kemungkinan kecil";
        } elseif ($hasil_cf >= 51 and $hasil_cf <= 79) {
            //echo "Kemungkinan";
            $nilai_keyakinan = "Kemungkinan";
        } elseif ($hasil_cf >= 80 and $hasil_cf <= 99) {
            //echo "Kemungkinan Besar";
            $nilai_keyakinan = "Kemungkinan Besar";
        } elseif ($hasil_cf >= 100) {
            //echo "Sangat Yakin";
            $nilai_keyakinan = "Sangat Yakin";
        } else {
            echo "Tidak ada persentase yang cocok";
            //$nilai_keyakinan = "Tidak ada persentase yang cocok";
        }
    ?>

    <?php
    } elseif ($jumlah_data_cf == 2) {
        $a0 = $ranking[0]['total'];
        $a1 = $ranking[1]['total'];
        $cfcombine1 = $a0 + $a1 * (1 - $a0);
        $hasil_cf = $cfcombine1 * 100;
        if ($hasil_cf > 0 and $hasil_cf <= 50) {
            //echo "Sedikit kemungkinan atau kemungkinan kecil";
            $nilai_keyakinan = "Sedikit kemungkinan atau kemungkinan kecil";
        } elseif ($hasil_cf >= 51 and $hasil_cf <= 79) {
            //echo "Kemungkinan";
            $nilai_keyakinan = "Kemungkinan";
        } elseif ($hasil_cf >= 80 and $hasil_cf <= 99) {
            //echo "Kemungkinan Besar";
            $nilai_keyakinan = "Kemungkinan Besar";
        } elseif ($hasil_cf >= 100) {
            //echo "Sangat Yakin";
            $nilai_keyakinan = "Sangat Yakin";
        } else {
            echo "Tidak ada persentase yang cocok";
            //$nilai_keyakinan = "Tidak ada persentase yang cocok";
        }
    ?>

    <?php
    } elseif ($jumlah_data_cf == 3) {
        $a0 = $ranking[0]['total'];
        $a1 = $ranking[1]['total'];
        $a2 = $ranking[2]['total'];

        $cfcombine1 = $a0 + $a1 * (1 - $a0);
        $cfcombine2 = $cfcombine1 + $a2 * (1 - $cfcombine1);

        $hasil_cf = $cfcombine2 * 100;
        

    } elseif ($jumlah_data_cf == 4) {
        $a0 = $ranking[0]['total'];
        $a1 = $ranking[1]['total'];
        $a2 = $ranking[2]['total'];
        $a3 = $ranking[3]['total'];

        $cfcombine1 = $a0 + $a1 * (1 - $a0);
        $cfcombine2 = $cfcombine1 + $a2 * (1 - $cfcombine1);
        $cfcombine3 = $cfcombine2 + $a3 * (1 - $cfcombine2);

        $hasil_cf = $cfcombine3 * 100;


    } elseif ($jumlah_data_cf == 5) {
        $a0 = $ranking[0]['total'];
        $a1 = $ranking[1]['total'];
        $a2 = $ranking[2]['total'];
        $a3 = $ranking[3]['total'];
        $a4 = $ranking[4]['total'];

        $cfcombine1 = $a0 + $a1 * (1 - $a0);
        $cfcombine2 = $cfcombine1 + $a2 * (1 - $cfcombine1);
        $cfcombine3 = $cfcombine2 + $a3 * (1 - $cfcombine2);
        $cfcombine4 = $cfcombine3 + $a4 * (1 - $cfcombine3);

        $hasil_cf = $cfcombine4 * 100;
    

    } elseif ($jumlah_data_cf == 6) {
        $a0 = $ranking[0]['total'];
        $a1 = $ranking[1]['total'];
        $a2 = $ranking[2]['total'];
        $a3 = $ranking[3]['total'];
        $a4 = $ranking[4]['total'];
        $a5 = $ranking[5]['total'];

        $cfcombine1 = $a0 + $a1 * (1 - $a0);
        $cfcombine2 = $cfcombine1 + $a2 * (1 - $cfcombine1);
        $cfcombine3 = $cfcombine2 + $a3 * (1 - $cfcombine2);
        $cfcombine4 = $cfcombine3 + $a4 * (1 - $cfcombine3);
        $cfcombine5 = $cfcombine4 + $a5 * (1 - $cfcombine4);

        $hasil_cf = $cfcombine5 * 100;


    } elseif ($jumlah_data_cf == 7) {
        echo "7";
    } elseif ($jumlah_data_cf == 8) {
        echo "8";
    } elseif ($jumlah_data_cf == 9) {
        echo "9";
    } elseif ($jumlah_data_cf == 10) {
        echo "10";
    } elseif ($jumlah_data_cf == 11) {
        echo "11";
    } elseif ($jumlah_data_cf == 12) {
        echo "12";
    }


?>

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
                            <h1>Hasil Konsultasi Pengguna <a
                                    href="<?php echo base_url('admin/Pengguna/tampil_pengguna') ?>"> <button
                                        class="btn btn-info btn-sm rounded-pill"><span class="fa fa-arrow-left"></span>
                                        kembali </button></a></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Pengguna</li>
                                <li class="breadcrumb-item active">Detail Data Pengguna</li>
                                <li class="breadcrumb-item active">Konsultasi Pengguna</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <!-- Main content -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Score Analisa</h5>
                                    <br>
                                    <h1><?php echo round($hasil_cf,2); ?>%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Keterangan Analisa</h5> -->
                                    <p align="justify" class="card-title">Keterangan Analisa : Hasil konsultasi
                                        mengatakan bahwa balita
                                        tersebut
                                        <b><?php echo round($hasil_cf,2); ?>%</b> <b><?php if ($hasil_cf > 0 and $hasil_cf <= 50) {
                                        echo "Kemungkinan kecil";
                
                                            } elseif ($hasil_cf >= 51 and $hasil_cf <= 79) {
                                                echo "Kemungkinan";
                                                
                                            } elseif ($hasil_cf >= 80 and $hasil_cf <= 99) {
                                                echo "Kemungkinan Besar";
                                                
                                            } elseif ($hasil_cf >= 100) {
                                                echo "Sangat";
                                                
                                            } else {
                                                echo "Tidak ada persentase yang cocok";
                                                //$nilai_keyakinan = "Tidak ada persentase yang cocok";
                                            } ?></b> <?php if ($this->uri->segment('4') == 3) {
                                                    echo "Aman Stunting";
                                                }elseif ($this->uri->segment('4') == 1) {
                                                    echo "Rawan Stunting";
                                            } ?>. Kesimpulan nilai yang didapat adalah memiliki nilai kemiripan dengan
                                        kasus sebelum nya sebesar
                                        <b><?php echo round($this->uri->segment('5'),2); ?>%</b> dan memiliki nilai
                                        kepastian sebesar
                                        <b><?php echo round($hasil_cf,2); ?>%</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="mb-4">Faktor-Faktor yang Dipilih</h5>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-info">
                                                <th width="70px" scope="col" class="text-center">NO</th>
                                                <th width="150px" scope="col" class="text-center">Bobot Faktor</th>
                                                <th scope="col" class="text-center">Faktor</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                    $i = 1;
                                    foreach ($Data_cbr_all as $data_pertanyaan): ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-center"><?php echo $i++; ?></th>
                                                <td scope="row" class="text-center">
                                                    <?php echo $data_pertanyaan->bobot_faktor ?>
                                                </td>
                                                <td><?php echo $data_pertanyaan->faktor_penyebab ?></td>
                                            </tr>
                                        </tbody>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div>
                                        <h5 class="mb-4">Hasil Perhitungan Nilai Kemiripan</h5>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-info">
                                                <th width="70px" scope="col" class="text-center">NO</th>
                                                <th scope="col" class="text-center">Nama Penyakit</th>
                                                <th scope="col" class="text-center">Hasil (Dalam Persen)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-center">1</th>
                                                <td><?php if ($this->uri->segment('4') == 3) {
                                                    echo "Aman Stunting";
                                                }elseif ($this->uri->segment('4') == 1) {
                                                    echo "Rawan Stunting";
                                                } ?>

                                                </td>
                                                <td scope="row" class="text-center">
                                                    <?php echo $this->uri->segment('5'); ?>%</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">2</th>
                                                <td><?php if ($this->uri->segment('4') == 1) {
                                                    echo "Aman Stunting";
                                                }elseif ($this->uri->segment('4') == 3) {
                                                    echo "Rawan Stunting";
                                                } ?>

                                                </td>
                                                <td scope="row" class="text-center">
                                                    <?php echo $this->uri->segment('6'); ?>%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div>
                                        <h5 class="mb-4">Hasil Perhitungan Nilai Kepastian</h5>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-info">
                                                <th width="70px" scope="col" class="text-center">NO</th>
                                                <th width="1000px" scope="col" class="text-center">Faktor</th>
                                                <th width="150px" scope="col" class="text-center">Nilai Pakar</th>
                                                <th width="150px" scope="col" class="text-center">Kondisi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i=1;
                                                foreach ($nilai_cf_all as $data_cf): ?>
                                            <tr>
                                                <th scope="row" class="text-center"><?php echo $i++; ?></th>
                                                <td><?php echo $data_cf['faktor_penyebab'] ?></td>
                                                <td scope="row" class="text-center"><?php echo $data_cf['nilai_cf'] ?>
                                                </td>
                                                <td scope="row" class="text-center"><?php echo $data_cf['nilai_user'] ?>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                            <tr>
                                                <td colspan="3" class="text-center">Hasil Perhitungan Nilai Kepastian
                                                </td>
                                                <td scope="row" class="text-center"><?php echo round($hasil_cf,2); ?>%
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
            </section>

        </div>

        <!-- ./wrapper -->

        <!-- footer -->
        <?php $this->load->view('backend/tamplate/footer')?>

        <!-- js - menggabungkan file yg dipisah -->
        <?php $this->load->view('backend/tamplate/js')?>

</body>

</html>