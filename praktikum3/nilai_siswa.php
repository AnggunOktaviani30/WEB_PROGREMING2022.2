<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Form Nilai</title>
  </head>
  <body class="p-5">
    <h3>Form Nilai Siswa</h3>
    <hr />
<div class="container-fluid row">
        <div class="col-8">
  <body>
  <form method="POST" action="nilai_siswa.php">
    <div class="form-group row">
      <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
      <div class="col-8">
        <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
          <option value="DDP">Dasar-dasar Pemprograman</option>
          <option value="BD I">Basis Data I</option>
          <option value="Pemweb">Pemprograman Web</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
      <div class="col-8">
        <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
      <div class="col-8">
        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
      <div class="col-8">
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </body>
  <?php
    include_once ("libfungsi.php");
    $nama_lengkap = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
    $matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
    $nilai_uts= isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
    $nilai_uas= isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
    $nilai_tugas= isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

    echo 'Nama Lengkap : '.$nama_lengkap;
    echo '</br>Mata Kuliah : '.$matkul;
    echo '</br>Nilai UTS : '.$nilai_uts;
    echo '</br>Nilai UAS : '.$nilai_uas;
    echo '</br>Nilai Tugas : '.$nilai_tugas;
    $total_nilai = ((int)$nilai_uts+(int)$nilai_uas+(int)$nilai_tugas)/3;
    
    echo '<br/>Total Nilai : '.$total_nilai;
    $hasil = kelulusan($total_nilai);
    echo '<br/>Dinyatakan : '.$hasil;
  ?>
  </html>