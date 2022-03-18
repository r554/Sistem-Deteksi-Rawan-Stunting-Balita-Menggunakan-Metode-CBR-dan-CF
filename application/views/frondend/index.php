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

<body class="mt-5">
    <!-- navbar -->
    <?php $this->load->view("frondend/tamplate/navbar");?>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="<?php echo base_url() ?>assets/Gambar/foto_frondend/dokter.png" class="img-fluid rounded"
                width="25%" alt="Responsive image">
            <!-- <style type="text/css">
				.jumbotron {
					position: relative;
					background: url(img/bg3.png) center center;
					color: currentColor;
					width: 100%;
					height: 100%;
					background-size: cover;
					overflow: hidden;
				}
			</style> -->
            <h1 class="display-7 mt-4" height="100%" width="30%">DETEKSI RAWAN STUNTING PADA BALITA</h1>
            <p>Selamat Datang, Website ini dapat membantu orang tua dalam mengevaluasi atau memonitoring pertumbuhan
                anak usia 0 - 24 bulan dalam kasus stunting</p>
            <!-- <button class="btn btn-danger me-md-2 mt-5" type="button">Mulai Konsultasi</button> -->
        </div>
    </div>
    <!-- tutup jumbotron -->

    <!-- menu -->
    <section id="menu" class="menu">
        <div class="container">
            <div class="row mb-5">
                <!-- <div class="col text-center">
                    <h2>Menu Utama</h2>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <!-- <img class="card-img-top" src="img/aboutus.jpeg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Tentang</h5>
                            <p class="card-text">Sistem Pakar Deteksi Rawan Stunting.</p>
                            <a href="#tentang">
                                <button type="button" class="btn btn-outline-primary">Tekan Disini</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <!-- <img class="card-img-top" src="img/info.jpg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Informasi Penyakit</h5>
                            <p class="card-text">Informasi Penyakit Stunting.</p>
                            <a href="<?php echo base_url("Frondend/frondend/informasi_penyakit")?>">
                                <button type="button" class="btn btn-outline-primary">Tekan Disini</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <!-- <img class="card-img-top" src="img/dokter.jpg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi</h5>
                            <p class="card-text">Mulai untuk Konsultasi.</p>
                            <a href="<?php echo base_url("Frondend/frondend/biodata")?>">
                                <button type="button" class="btn btn-outline-primary">Tekan Disini</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tutup menu -->

    <!-- tentang -->
    <section id="tentang" class="tentang">
        <div class="container">
            <div class="row mb-5"></div>
            <div class="row mb-6">
                <div class="col text-center">
                    <h2>Tentang</h2>
                    <p class="text-justify">Sistem Pakar Deteksi Rawan Stunting pada Balita Usia 0 - 24 Bulan
                        merupakan sistem yang dapat membantu orang tua dalam mengevaluasi dan mengontrol pertumbuhan
                        Balita dalam kasus penyakit Stunting. Jika stunting tidak terdeteksi secara dini pada usia
                        kurang
                        dari 24 bulan maka akan mengalami keterlambatan perbaikan gizi di masa mendatang. Oleh karena
                        itu peran orang tua sangat penting terutama seorang ibu, sebesar 90%
                        otak anak berkembang di usia emas atau 1.000 Hari Pertama Kehidupan (1.000 HPK). Di masa depan
                        anak yang stunting akan kesulitan dalam
                        mencapai perkembangan fisik dan kognitif secara optimal. Merujuk pada pola pikir UNICEF (United
                        Nations Children’s Fund) stunting terkait dengan pola asuh, kualitas layanan kesehatan,
                        lingkungan, dan ketahanan pangan. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- tutup tentang-->

    <!-- WHO -->
    <section id="tentang" class="tentang">
        <div class="container">
            <div class="row mb-5"></div>
            <div class="row mb-6">
                <div class="col text-center">
                    <h2>Keadaan Stunting Di Dunia</h2>
                    <p class="text-justify">Di bawah ini akan menampilkan keadaan stunting di dunia menurut WHO (World
                        Health Organization) :</p>
                    <iframe src="https://apps.who.int/gho/data/node.sdg.2-2-viz-1?lang=en#content" width="100%"
                        height="400px"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- WHO -->

    <!-- KKRI -->
    <!-- <section id="tentang" class="tentang">
        <div class="container">
            <div class="row mb-5"></div>
            <div class="row mb-7">
                <div class="col text-center">
                    <h2>Prevalensi Stunting</h2>
                    <p class="text-justify">Di bawah ini akan menampilkan keadaan atau prevalensi stunting di Indonesia
                        menurut Kementerian Kesehatan Republik Indonesia :</p>
                    <iframe src="https://sigiziterpadu.kemkes.go.id/ppgbm/index.php/Dashboard/stunting" width="100%"
                        height="400px"></iframe>
                </div>
            </div>
        </div>
    </section> -->
    <!-- KKRI -->

    <!-- status gizi -->
    <!-- <section id="tentang" class="tentang">
        <div class="container">
            <div class="row mb-5"></div>
            <div class="row mb-7">
                <div class="col text-center">
                    <h2>Status Gizi</h2>
                    <p class="text-justify">Di bawah ini akan menampilkan keadaan status gizi di Indonesia
                        menurut Kementerian Kesehatan Republik Indonesia :</p>
                    <iframe src="https://sigiziterpadu.kemkes.go.id/ppgbm/index.php/Dashboard/" width="100%"
                        height="400px"></iframe>
                </div>
            </div>
        </div>
    </section> -->
    <!-- status gizi -->

    <!-- Informasi Penyakit -->

    <section id="informasi_penyakit" class="informasi_penyakit">
        <div class="container">
            <div class="row mb-5"></div>
            <h2 id="Informasi_Penyakit" class="text-center mb-5">Informasi Penyakit</h2>
            <div class="row mb-5">
                <div class="col-5">
                    <img src="<?php echo base_url() ?>assets/Gambar/foto_frondend/awal.jpg" class="img-thumbnail">
                </div>

                <div class="col-7">
                    <p class="text-justify">Stunting (kerdil) adalah kondisi dimana balita memiliki panjang atau tinggi
                        badan yang kurang jika dibandingkan dengan umur. Kondisi ini diukur dengan panjang atau tinggi
                        badan yang lebih
                        dari minus dua standar deviasi median standar pertumbuhan anak dari WHO. Terdapat dampak gejala
                        stunting jangka pendek meliputi hambatan perkembangan, penurunan fungsi kekebalan, penurunan
                        fungsi kognitif, dan gangguan sistem pembakaran. Sedangkan dampak gejala jangka panjang meliputi
                        obesitas, penurunan toleransi glukosa, penyakit jantung koroner, hipertensi, dan osteoporosis.
                        Pada kasus seperti ini orang tua sangat berperan penting pada pola asuh anak.</p>
                    <div class="row mb-3">
                        <div class="col-12">
                            <a href="<?php echo base_url("Frondend/frondend/informasi_penyakit")?>"><button
                                    type="button" class="btn btn-primary btn-sm float-right">Selengkapnya
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi Penyakit-->


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