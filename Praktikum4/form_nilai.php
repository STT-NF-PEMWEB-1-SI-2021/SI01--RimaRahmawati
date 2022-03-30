<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>form nilai</title>
  </head>
  <body>


  <!--navbar -->
  <nav class="navbar navbar-lighy bg-light">
    <a class="navbar-brand" href="#">PENILAIAN</a>
  </nav>

  <!--header-->
  <h4>Form Nilai Mahasiswa</h4>
  <hr>

  <div class="container">
    <form action="POST">
      <div class="form-group row">
        <label for="nama_lengkap" class="col-4 col-form-label">Nama Mahasiswa</label>
        <div class="col-8">
          <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control">
        </div>
      </div>
      <div class="form-group row">
      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
        <div class="col-8">
          <select name="matkul" id="matkul" class="custom-select">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BD">Basis Data</option>
            <option value="WB">Pemrograma Web</option>
          </select>
      </div>
  </div>
  <div class="form-group row">
    <label for="UTS" class="col-4 col-form-label">Nilai UTS</label>
    <div class="col-8">
      <input type="text" id="UTS" name="nilai_uts" placeholder="Nilai UTS" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="UAS" class="col-4 col-form-label">Nilai UAS</label>
    <div calss="col-8">
      <input type="text" id="UAS" name="nilai_uas" placeholder="Nilai UAS" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Lihat</button>
    </div>
  </div>
</form>
  
</body>
</html>


<?php
include_once("libfungsi.php");
$nama_lengkap = isset ($_POST['nama']) ? $_POST['nama'] : '';
$matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
$nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
$nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';


echo 'Nama Mahasiswa : '.$nama_lengkap;
echo '<br/>Mata Kuliah : '.$matkul;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/> Nilai UAS '.$nilai_uas;

$nilai_total = ((int)$nilai_uts+(int)$nilai_uas)/3;
echo '<br/>Total Nilai : '.$nilai_total;
$grade = grade($nilai_total);
$predikat = predikat($grade);
echo '<br/>Nilai : '.$grade. " ".$predikat;
$hasil = kelulusan($nilai_total);
echo '<br/. Dinyatakan : '.$hasil;

?>



