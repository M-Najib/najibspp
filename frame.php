<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylemenu.css">
    </head>
    
    <body>
  <p align="center"><a href="spp.php">SPP</a>
	<a href="kelas.php">KELAS</a> 
	<a href="petugas.php">PETUGAS</a> 
	<a href="siswa.php">SISWA</a> 
	<a href="transaksi.php">TRANSAKSI PEMBAYARAN</a> 
	<a href="laporan.php">LAPORAN</a>  
  <a href="logout.php">LOGOUT</a> </p>
<?php 
}

else if($_SESSION['level']=="petugas"){

   ?>
   <h1 align="center">DASHBOARD PETUGAS</h1>

	<p align="center"><h5 align="center">Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></h5></b></p>
	
	<div align="center">
    <a href="transaksi.php">TRANSAKSI PEMBAYARAN</a>
    <a href="laporan.php">LAPORAN</a> 
	  
	    <a href="logout.php">LOGOUT</a> 
	  </p>
	    <?php
	}
	
	
	?>
	
	</body>
	</html>