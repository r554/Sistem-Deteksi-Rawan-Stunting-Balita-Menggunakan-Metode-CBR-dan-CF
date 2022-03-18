<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sistem Pakar Stunting</title>
</head>

<!-- tutup my css -->

<!-- navbar -->
<?php $this->load->view("frondend/tamplate/navbar");?>
<!-- tutup navbar -->

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2>Konsultasi</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url("Frondend/frondend/index")?>">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url("Frondend/frondend/biodata")?>">Biodata</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url("Frondend/frondend/konsultasi")?>">Konsultasi</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"> Hasil Konsultasi</li>
        </ol>
    </div>
</div>
<!-- tutup jumbotron -->

<!-- konsultasi -->
<div class="container mb-4">
    <h5>Hasil Keadaan yang Dihasilkan</h5>
</div>

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

<div class="container">
    <div class="row mb-4">
        <div class="col-md-3 text-center">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Score Analisa</h5>
                    <h1><?php echo round($hasil_cf,2); ?>%</h1>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Keterangan Analisa</h5>
                    <p align="justify" class="card-title">Hasil konsultasi mengatakan bahwa balita tersebut
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
                } ?>. Kesimpulan nilai yang didapat adalah memiliki nilai kemiripan dengan kasus sebelum nya sebesar
                        <b><?php echo round($this->uri->segment('5'),2); ?>%</b> dan memiliki nilai kepastian sebesar
                        <b><?php echo round($hasil_cf,2); ?>%</b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Solusi Yang Didapat</h5>
                    <p align="justify"> <?php echo $solusi->solusi_penyakit ?> </p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h5 class="mb-4">Faktor-Faktor yang Dipilih</h5>
    </div>
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
                <td scope="row" class="text-center"><?php echo $data_pertanyaan->bobot_faktor ?></td>
                <td><?php echo $data_pertanyaan->faktor_penyebab ?></td>
            </tr>
        </tbody>
        <?php endforeach ?>
    </table>

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
                <td scope="row" class="text-center"><?php echo $this->uri->segment('5'); ?>%</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">2</th>
                <td><?php if ($this->uri->segment('4') == 1) {
                    echo "Aman Stunting";
                }elseif ($this->uri->segment('4') == 3) {
                    echo "Rawan Stunting";
                } ?>

                </td>
                <td scope="row" class="text-center"><?php echo $this->uri->segment('6'); ?>%</td>
            </tr>
        </tbody>
    </table>

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
                <td scope="row" class="text-center"><?php echo $data_cf['nilai_cf'] ?></td>
                <td scope="row" class="text-center"><?php echo $data_cf['nilai_user'] ?></td>
            </tr>
            <?php endforeach ?>
            <tr>
                <td colspan="3" class="text-center">Hasil Perhitungan Nilai Kepastian</td>
                <td scope="row" class="text-center"><?php echo round($hasil_cf,2); ?>%</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- konsultasi -->

<!-- footer -->
<?php $this->load->view("frondend/tamplate/footer");?>
<!-- footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>