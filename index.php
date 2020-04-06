<?php
include 'asset/header.php';
?>
<div class="container">
    <div class="row mt-6">
    <div class="col-md-3"></div>
        <div class="col-md-9">
        <div class="card" style="background-color: #808080;">
                <div class="card-header">
                  <h2 class="card-title text-white"><font face = "Arial Black"><i class="fas fa-edit"></i>Add Data</h2></font>
                </div>
                <div class="card-body">
                  <form method="post" action="Tugas2.php">
                      <div class="form-group text-white">
                          <label for="NIS"><font face = "Agency FB">NIS</label></font>
                          <input type="text" class="form-control" name="NIS" id="NIS" placeholder="Masukkan NIS anda">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nama">Nama</label>
                          <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukkan Nama anda">
                      </div>
                      <div class="form-group text-white">
                        <label for="Jurusan">Jurusan</label>
                        <select name="Jurusan" class="form-control">
                        <option value="">Pilih Jurusan</option>
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="MM">MM</option>
                        </select>
                    </div>
                    <div class="form-group text-white">
                        <label for="Kelas">Kelas</label>
                        <select name="Kelas" class="form-control">
                        <option value="">Pilih Kelas</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                        </select>
                    </div>

                      <div class="form-group text-white">
                          <label for="Alamat">Alamat</label>
                          <input type="text-area" class="form-control" name="Alamat" id="Alamat" placeholder="Masukkan Alamat Anda">
                      </div>
                      <div class="form-group text-blue">
                          <label for="Nilai_Web">Nilai Web</label>
                          <input type="text" class="form-control" name="Nilai_Web" id="Nilai_Web" placeholder="Masukkan Nilai Web Anda">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_PBO">Nilai PBO</label>
                          <input type="text" class="form-control" name="Nilai_PBO" id="Nilai_PBO" placeholder="Masukkan Nilai PBO anda">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_Basdat">Nilai Basdat</label>
                          <input type="text" class="form-control" name="Nilai_Basdat" id="Nilai_Basdat" placeholder="Masukkan Nilai Basdat anda">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_Desain">Nilai Desain</label>
                          <input type="text" class="form-control" name="Nilai_Desain" id="Nilai_Desain" placeholder="Masukkan Nilai Desain">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_Progdas">Nilai Progdas</label>
                          <input type="text" class="form-control" name="Nilai_Progdas" id="Nilai_Progdas" placeholder="Masukkan Nilai Progdas">
                      </div>

                      <button type="submit" class="btn btn-secondary" name="save">Submit</button>
                  </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include 'asset/footer.php';
?>
