<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    
  
    <title>Form Siswa</title>
</head>
<body>
    <div class="gold">
    <h1 class="text-white">Sistem Penilaian</h1>
    </div>

    <div class="container">
        <h2 class="nilai">Form Input Nilai Siswa</h2>
    </div>

    <div class="container">
      <form action="menampilkan.php" method="POST">
        <div class="row mb-3">
            <label for="recipient-name" class="col-sm-2 col-form-label">Nama Lengkap : </label>
            <div class="col-sm-10">
            <input type="text" name="nama" value="" class="form-control">
        </div>
        </div>
        <div class="row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIM : </label>
            <div class="col-sm-10">
            <input type="text" name="nim" value="" class="form-control">
        </div>
        </div>
        <div class="row mb-3">
            <label for="MataKuliah" class="col-sm-2 col-form-label">Mata Kuliah</label>
            <select name="matkul">
                  <option value="DDP">Dasar-Dasar Pemrograman</option>
                  <option value="BDI">Basis Data</option>
                  <option value="WEB">Pemrograman Web Lanjut</option>
              </select>
        </div>
        <div class="row mb-3">
            <label for="nilai_uts" class="col-sm-2 col-form-label">Nilai UTS : </label>
            <div class="col-sm-10">
            <input type="text" name="UTS" value="" class="form-control">
        </div>
        </div>
        <div class="row mb-3">
            <label for="nilai_uas" class="col-sm-2 col-form-label">Nilai UAS : </label>
            <div class="col-sm-10">
            <input type="text" name="UAS" value="" class="form-control">
        </div>
        </div>
        <div class="row mb-3">
            <label for="nilai_tugas" class="col-sm-2 col-form-label">Nilai Tugas Praktikum : </label>
            <div class="col-sm-10">
            <input type="text" name="nilai" value="" class="form-control">
        </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">simpan</button>
        </form>
    </div>
    
     <!-- Footer -->
     <footer class="bawah">
        <div class="container">
            <div class="row  pt-4">
                <div class="col">
                    <p>Develop By Rizky Febriana Akbar @STT-NF2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>