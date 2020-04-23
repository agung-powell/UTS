<!DOCTYPE HTML>
<html>
  <head>
    <title>SOAL UTS NO.1 </title>
  </head>
  <body>
<!-- Jawab Soal UTS No. 1  -->
<!-- Agung Hermawan        -->
<!-- 2016141990            -->
<!-- 06TPLM009             -->
  <?php
  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);
  $i=1;

  foreach($rows as $row => $data)
  

  // bagian bagan tabel disisipkan disini agar setiap data yang terinput terupdate
  // output yang dihasilkan sesuai data yang ditambahkan

  echo "<table width ='500' align='center' border='1'>";
  echo "<tr>
  <td><p align=center>POSITIF</td>
  <td><p align=center>DIRAWAT</td>
  <td><p align=center>SEMBUH</td>
  <td><p align=center>MENINGGAL</td>
  </tr>";
  {

    // Explode digunakan untuk memisahkan Item Data dari pemisah |, array pada PHP dimulai pada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['wilayah']           = $row_data[0];
        $info[$row]['positif']           = $row_data[1];
        $info[$row]['rawat']         = $row_data[2];
        $info[$row]['sembuh']          = $row_data[3];
        $info[$row]['meninggal']      = $row_data[4];
        $info[$row]['operator']       = $row_data[5];
        $info[$row]['nim']       = $row_data[6];

        // output yang tampilkan :

        echo"<center>";
        echo "<h3>Data Pemantauan Covid19 Wilayah " . $info[$row]['wilayah'] . ""; //memberikan isi data.txt terhadap label
        echo "<br/>";
        // membuat penyesuaian waktu 
        function tgl_ind($tgl){
          $bln = array (
          1 =>'Januari',
              'Februari',
              'Maret',
              'April',
              'Mei',
              'Juni',
              'Juli',
              'Agustus',
              'September',
              'Oktober',
              'November',
              'Desember'
          );
          $pemisah = explode('-', $tgl);
          
          // variabel pecahkan 0 = tanggal
          // variabel pecahkan 1 = bulan
          // variabel pecahkan 2 = tahun
       
          return $pemisah[2] . ' ' . $bln[ (int)$pemisah[1] ] . ' ' . $pemisah[0];
      }
      date_default_timezone_set('Asia/Jakarta');   //ditetapkan waktu
      echo "Per ";echo tgl_ind(date('Y-m-d'));echo " - "; echo date('h:i:sa');
      echo "<br/>";
      echo "" . $info[$row]['operator'] . " &emsp;/&emsp;" . $info[$row]['nim'] . "";
      echo "<br/>";
      echo "<br/>";
        echo '<a href="form.php">Tambah data pasien </a></br></br>'; 
      


        echo"<tr align='center'>";
        echo "<td>" . $info[$row]['positif'] . "</td>";
        echo "<td>".$info[$row]['rawat']."</td>";
        echo "<td>".$info[$row]['sembuh']."</td>";
        echo "<td>".$info[$row]['meninggal']."</td>";
        echo"</tr>";
        echo"</table>";

  }
  ?>

</body>
</html>