<?php

  // Menangkap isi variabel dari file yang telah kita isi pada form.php

  $wilayah = @$_POST['area'];
  $positif = $_POST['positif'];
  $rawat = $_POST['rawat'];
  $sembuh = $_POST['sembuh'];
  $meninggal = $_POST['meninggal'];
  $operator = $_POST['operator'];
  $nim = $_POST['nim'];
  // Format data yang akan diparsing, adan tersimpan di data.txt
  $data = "\n $wilayah|$positif|$rawat|$sembuh|$meninggal|$operator|$nim";

  // Buka file data.txt, 
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keterangan bila data berhasil di input
  print "Data Telah Tersimpan.</br><a href='index.php'>Kembali ke Index >></a>";

?>