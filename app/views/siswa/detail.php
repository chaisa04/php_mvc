<div class="container mt-5" >
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['sw']['nama'];?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['sw']['nis'];?></h6>
    <p class="card-text"><?= $data['sw']['email'];?></p>
    <p class="card-text"><?= $data['sw']['jurusan'];?></p>
    <p class="card-text"><?= $data['sw']['alamat'];?></p>
    <p class="card-text"><?= $data['sw']['no_telp'];?></p>

    <a href="<?= BASEURL;?>/siswa/pilih_mapel" class="card-link">Kembali</a>
  </div>
</div>
</div>