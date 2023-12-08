<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bukutamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  

    <div class="container">
        <h1>Aplikasi Buku Tamu</h1>
        <div>Program aplikasi Buku tamu siswa</div><br>
        <form method="POST">
         <div class="form-group">
           <label>Nama</label>
           <input name="nama" class="form-control">
         </div>
         <div class="form-group">
           <label>Kelas</label>
           <input name="kelas" class="form-control">
         </div>
         <div class="form-group">
           <label>NoTelp</label>
           <input name="nt" class="form-control" >
         </div>
        
         <button type="submit" name="hitung" class="btn btn-dark">kirim</button>
    </form>
    <hr>
    </div>
</body>
</html>

<?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nt = $_POST['nt'];
 

        echo"
    <div class='container'>
    <h3>Nama : $nama</h3>
    <h3>Kelas : $kelas</h3>
    <br>
    <table class='table'>
     <thead class='thead-dark'>
       <tr>
       <th scope='col'>No</th>
       <th scope='col'>Nama</th>
       <th scope='col'>Kelas</th>
       <th scope='col'>Notelp</th>
       
       </tr>
    </thead>
    <tbody>
       <tr>
         <th scope='row'>1</th>
         <td>$nama</td>
         <td>$kelas</td>
         <td>$nt</td>
        
       </tr>
    </tbody>
    </table>
    </div>
    </div>
    ";
    }
?>