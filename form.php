<!DOCTYPE HTML>
<html>
  <head>
    <title>Jawab Soal UTS no.1</title>
  </head>
  <body>
  <!--Membuat form untuk file yang akan dimasukan dan disimpan di data.txt    -->
  <!--   data yang tersimpan akan langsung di tampilkan di index.php -->

    <form name="form1" method="post" action="proses.php"> 
    <table width="500" border="0" align="center">
      <tr>
        <td colspan="2"><h3>Form Data Pasien Covid19</h3></td>
      </tr>
      <tr>
        <td>Nama Wilayah</td>
        <td>
        <select name="area">
			<?php $options = array('DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah');
			foreach ($options as $area) {
				$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
				echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
			}?>
		</select>
        </td>
      </tr>
      <tr>
        <td>Jumlah Positif</td>
        <td><input size="40" name="positif" type="text" id="positif" value=""></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td><input size="40" name="rawat" type="text" id="rawat"></td>
      </tr>
      <tr>
        <td>Sembuh</td>
        <td><input size="40" name="sembuh" type="text" id="sembuh"></td>
      </tr>
      <tr>
        <td>Jumlah Meninggal</td>
        <td><input size="40" name="meninggal" type="text" id="meninggal"></td>
      </tr>
      <tr>
        <td>Nama Operator</td>
        <td><input size="40" name="operator" type="text" id="operator"></td>
      </tr>
      <tr>
        <td>NIM Mahasiswa</td>
        <td><input size="40" name="nim" type="text" id="nim"></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><input name="Submit" type="submit" value="Simpan">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="index.php">Lihat Data >></a></td>
      </tr>
    </table>
    </form>

  </body>
</html>