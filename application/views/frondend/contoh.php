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
            <li class="breadcrumb-item active" aria-current="page">Proses Analisa</li>
        </ol>
    </div>
</div>
<!-- tutup jumbotron -->

<!-- Biodata -->
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo base_url()?>assets/Gambar/foto_frondend/medicine.svg" class="img-fluid mt-3 mb-5"
                width="500px">
        </div>
        <div class="col-md-6">
            <h2 class="text-center mt-5">Hai Bund, Klik Tombol Dibawah Ini Untuk Melanjutkan Diagnosa</h2>

            <!-- <p>Nilai CBR rawan</p>
            <h3><?php //echo $nilai_cbr_rawan['0']->nilaicf ?></h3>
            <h3><?php //echo $nilai_cbr_rawan['0']->nilaiuser ?></h3>
            <p>Nilai CBR aman</p>
            <h3><?php //echo $nilai_cbr_aman['0']->nilaicf ?></h3>
            <h3><?php //echo $nilai_cbr_aman['0']->nilaiuser ?></h3>
            <p>Nilai CBR total</p>
            <h3><?php //echo $nilai_cbr_total['0']->nilaicf ?></h3>
            <h3><?php //echo $nilai_cbr_total['0']->nilaiuser ?></h3>
            <p>Perhitungan Rawan</p> -->
            <h3><?php
            //$nilai = $nilai_cbr_rawan['0']->nilaicf / $nilai_cbr_total['0']->nilaicf * 100;
            //echo round($nilai,2) //?></h3>
            <!-- <p>Perhitungan Aman</p>
            <h3><?php 
            //$nilai_aman = $nilai_cbr_aman['0']->nilaicf / $nilai_cbr_total['0']->nilaicf * 100;
            //echo round($nilai_aman,2) ?>%</h3> -->

            <?php 
            $nilai_rawan = $nilai_cbr_rawan['0']->nilaicf / $nilai_cbr_total['0']->nilaicf * 100;
            $nilai_aman = $nilai_cbr_aman['0']->nilaicf / $nilai_cbr_total['0']->nilaicf * 100;

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
            <div style="display: flex; justify-content: center; align-items: center;">
                <a
                    href="<?= base_url('frondend/Frondend/contoh2/' . $id_penyakit . "/" . $nilai_cbr . "/" . $nilai_cbr_aman) ?>"><button
                        class="btn btn-warning mb-5 mt-1">Hasil Diagnosa</button></a>
            </div>



        </div>
    </div>

</div>
<!-- Biodata -->

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