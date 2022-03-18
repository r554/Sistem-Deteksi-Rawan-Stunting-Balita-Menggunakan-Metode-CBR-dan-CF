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
            <li class="breadcrumb-item active" aria-current="page">Biodata</li>
        </ol>
    </div>
</div>
<!-- tutup jumbotron -->

<!-- Biodata -->
<div class="container">
    <!-- POST = mengirim data GET = menampilkana data-->
    <form method="POST" action="<?= base_url('frondend/Frondend/tambah_data_biodata/' . $get_no_user) ?>">
        <input type="hidden" name="id_user" value="<?php echo $get_no_user; ?>">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputAyah">Nama Ayah</label>
                <input type="input" name="nama_ayah" class="form-control" id="inputAyah"
                    placeholder="Masukkan Nama Ayah" required
                    oninvalid="this.setCustomValidity('Nama Ayah tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>
            <div class="col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputBalita">Nama Balita</label>
                <input type="input" name="nama_balita" class="form-control" id="inputBalita"
                    placeholder="Masukkan Nama Balita" required
                    oninvalid="this.setCustomValidity('Nama Balita tidak boleh kosong')"
                    oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputIbu">Nama Ibu</label>
                <input type="input" name="nama_ibu" class="form-control" id="inputIbu" placeholder="Masukkan Nama Ibu"
                    required oninvalid="this.setCustomValidity('Nama Ibu tidak boleh kosong')"
                    oninput="setCustomValidity('')">
            </div>
            <div class="col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputUsia">Usia Balita / Bulan</label>
                <input type="number" name="usia_balita" class="form-control" id="inputUsia"
                    placeholder="Masukkan Usia Dalam Satuan Bulan"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" min="0"
                    max="24" required
                    oninvalid="this.setCustomValidity('Usia Balita tidak boleh kosong dan Maksimal usia 24 Bulan')"
                    oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputNoTelopon">No Telepon</label>
                <input type="input" name="no_hp_orangtua" class="form-control" id="inputNoTelopon"
                    placeholder="Masukkan No Telepon"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="13"
                    required oninvalid="this.setCustomValidity('Nomor Telepon tidak boleh kosong')"
                    oninput="setCustomValidity('')">
            </div>
            <div class="col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputState">Jenis Kelamin Balita</label>
                <select name="jk_balita" id="inputJkBalita" class="form-control" required
                    oninvalid="this.setCustomValidity('Jenis Kelamin tidak boleh kosong')"
                    oninput="setCustomValidity('')">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputAlamat">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat_orangtua" id="inputAlamat" rows="3"
                    placeholder="Masukkan Alamat Lengkap" required
                    oninvalid="this.setCustomValidity('Alamat tidak boleh kosong')"
                    oninput="setCustomValidity('')"></textarea>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary me-md-2 mt-5 float-right">Mulai Konsultasi</button>
            </div>
        </div>
    </form>
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