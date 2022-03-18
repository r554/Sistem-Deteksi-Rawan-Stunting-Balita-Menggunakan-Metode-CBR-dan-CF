<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-white" href="<?php echo base_url("Frondend/frondend/index")?>"><img
                src="<?php echo base_url() ?>assets/Gambar/foto_frondend/logo.png" width="60" height="30"
                alt="Sistem Pakar Stunting">Sistem Pakar Stunting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active text-white"
                    href="<?php echo base_url("Frondend/frondend/index")?>">Beranda <span
                        class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active text-white"
                    href="<?php echo base_url("Frondend/frondend/informasi_penyakit")?>">Informasi
                    Penyakit</a>
                <a class="nav-item nav-link active text-white"
                    href="<?php echo base_url("Frondend/frondend/biodata")?>">Konsultasi</a>
            </div>
        </div>
    </div>
    <a href="<?php echo base_url("admin/login")?>" class="btn btn-danger mr-2">Login Admin</a>
</nav>
<!-- tutup navbar -->