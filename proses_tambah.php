<?php

include 'koneksi.php';

if(isset($_POST['save']))
{
  $nis = $_POST['NIS'];
  $nama = $_POST['Nama'];
  $jurusan = $_POST['Jurusan'];
  $kelas = $_POST['Kelas'];
  $alamat = $_POST['Alamat'];
  $web = $_POST['web'];
  $pbo = $_POST['pbo'];
  $basdat = $_POST['basdat'];
  $desain = $_POST['desain'];
  $progdas = $_POST['progdas'];
  $ratarata = $_POST['rata-rata'];

  $jumlah = $web + $pbo + $basdat + $desain + $progdas;
  $ratarata = $jumlah/5;

  if($ratarata >= 90) {
     $predikat = 'A';
     $ket = 'Excellent';
  } else if ($ratarata >= 80) {
     $predikat = 'B';
     $ket = 'Baik';
  } else if ($ratarata >= 70) {
      $predikat = 'C';
      $ket = 'Cukup';
   } else if ($ratarata >= 60) {
      $predikat = 'D';
      $ket = 'Kurang';
   } else if ($ratarata <= 50) {
      $predikat = 'E';
      $ket = 'Rendah';
   }

  $sql = "INSERT INTO siswa (NIS, Nama, Jurusan, Kelas, Alamat, Nilai_Web, Nilai_PBO, Nilai_Basdat, Nilai_Desain, Nilai_Progdas, Rata-rata, Predikat_Nilai, Keterangan)
          VALUES ('$nis', '$nama', '$jurusan', '$kelas', '$alamat', '$web', '$pbo','$basdat','$desain','$progdas', '$ratarata', '$predikat', '$ket')";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location:index.php");
}
else
{
   header("Location:tambah.php");
}

}
?>
