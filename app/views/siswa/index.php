<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
      data-bs-target="#formModal">
      Tambah Data Siswa
    </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/siswa/cari" method="post">

            <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Siswa..." name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
      </div>

    </form>
    </div>
  </div>

            <div class="row">
            <div class="col-lg-6">
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
            <?php foreach($data ['sw'] as $sw) :?>
                 <li class="list-group-item" aria-disabled="true">
                    <?= $sw ['nama'];?>

                    <a href="<?= BASEURL;?>/siswa/hapus/<?= $sw ['id'];?>" class="badge text-bg-danger float-end me-1" onclick="return confirm('yakin?');">Hapus</a>
                    <a href="<?= BASEURL;?>/siswa/ubah/<?= $sw ['id'];?>" class="badge text-bg-primary float-end me-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $sw['id'];?>">Ubah</a>
                    <a href="<?= BASEURL;?>/siswa/detail/<?= $sw ['id'];?>" class="badge text-bg-info float-end me-1">Detail</a>

                </li>
            <?php endforeach;?>
            </ul> 
        </div>
    </div>
</div>


  <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASEURL;?>/siswa/tambah" method="post">

      <input type="hidden" name="id" id="id">

        <div class="mb-3">
          <label for="nama" class="form-label">Nama :</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
          <label for="nis" class="form-label">Nis :</label>
          <input type="number" class="form-control" id="nis" name="nis">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email :</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>


        <div class="mb-3">
          <label for="jurusan" class="form-label">Pilih Jurusan :</label>
          <select id="jurusan" class="form-select" name="jurusan">
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Animasi">Animasi</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="no_telp" class="form-label">No telp :</label>
          <input type="number" class="form-control" id="no_telp" name="no_telp">
        </div>
        
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat :</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

            