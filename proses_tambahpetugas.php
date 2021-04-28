<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $idp       = $_POST['id_petugas'];
  $nama      = $_POST['nama'];
  $username  = $_POST['username'];
  $password  = $_POST['password'];
  $level     = $_POST['level'];
 


                  $query = "INSERT INTO petugas VALUES ('$idp','$password','$username','$nama','$level')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='spp.php';</script>";
                  }

            ?>