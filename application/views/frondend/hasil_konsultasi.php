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
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <div class="card bg-light" style="width:100%; height:400px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">DIAGNOSA PENYAKIT :</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5><b>cob a</b></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">NILAI ANALISA KEMIRIPAN :</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5><b>cob b</b></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">NILAI ANALISA KEPASTIAN :</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5><b>cob c</b></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">SOLUSI PENYAKIT :</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>coba d</p>
                        </div>
                    </div>

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
                <th width="150px" scope="col" class="text-center">ID Faktor</th>
                <th scope="col" class="text-center">Faktor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">1</th>
                <td>ID nya</td>
                <td>Faktor</td>
            </tr>
        </tbody>
    </table>

    <div>
        <h5 class="mb-4">Hasil Perhitungan Nilai Kemiripan</h5>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr class="table-info">
                <th width="70px" scope="col" class="text-center">NO</th>
                <th width="150px" scope="col" class="text-center">ID Penyakit</th>
                <th scope="col" class="text-center">Nama Penyakit</th>
                <th scope="col" class="text-center">Hasil (Dalam Persen)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">1</th>
                <td>ID nya</td>
                <td>Penyakitnya</td>
                <td>Hasilnya</td>
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
                <th width="150px" scope="col" class="text-center">ID Faktor</th>
                <th width="500px" scope="col" class="text-center">Faktor</th>
                <th width="150px" scope="col" class="text-center">Nilai Pakar</th>
                <th width="150px" scope="col" class="text-center">Kondisi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">1</th>
                <td>ID nya</td>
                <td>Faktor</td>
                <td>Bobot Pakar</td>
                <td>Kondisi</td>
            </tr>
            <tr>
                <td colspan="4" class="text-center">Hasil Perhitungan Nilai Kepastian</td>
                <td>Hasil</td>
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