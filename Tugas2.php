<?php
include 'koneksi.php';

$sql = "SELECT * FROM siswa";

$res = mysqli_query($koneksi,$sql);

$nilai = array();

while ($data = mysqli_fetch_assoc($res)) {
    $nilai[] = $data;
  }
include 'asset/header.php';

?>
<style>
thead{
  background-color: #808080;
  color: white;
}
tbody{
  background-color: #c0c0c0;
  color: white;
}
</style>
<div class="container">

    <div class="row-mt-2">
        <div class="col-md">
            <div class="card mt-4">
            <div class="card" style="background-color: #000000;">
                <div class="card-header text-white">
                    <h2><i class="fas fa-star-half-alt mr-2"></i>Nilai Siswa</h2>
                </div>

                <div class="card-body">
                <table class="table table-borderless table-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nilai Web</th>
                            <th scope="col">Nilai PBO</th>
                            <th scope="col">Nilai Basdat</th>
                            <th scope="col">Nilai Desain</th>
                            <th scope="col">Nilai Progdas</th>
                            <th scope="col">Nilai Rata-rata</th>
                            <th scope="col">Predikat Nilai</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($nilai as $s ) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $s['NIS'] ?></td>
                            <td><?= $s['Nama'] ?></td>
                            <td><?= $s['Jurusan'] ?></td>
                            <td><?= $s['Kelas'] ?></td>
                            <td><?= $s['Alamat'] ?></td>
                            <td><?= $s['Nilai_Web'] ?></td>
                            <td><?= $s['Nilai_PBO'] ?></td>
                            <td><?= $s['Nilai_Basdat'] ?></td>
                            <td><?= $s['Nilai_Desain'] ?></td>
                            <td><?= $s['Nilai_Progdas'] ?></td>
                            <td><?= $s['Rata-rata'] ?></td>
                            <td><?= $s['Predikat_nilai'] ?></td>
                            <td><?= $s['Keterangan'] ?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>

</div>

<?php
include 'asset/footer.php';
?>
