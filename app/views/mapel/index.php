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
      Tambah Mata Pelajaran Siswa
    </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mapel/cari" method="post">

            <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Mapel..." name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
      </div>

    </form>
    </div>
  </div>

  <div class="row">
            <div class="col-lg-6">
            <h3>Daftar Mata Pelajaran</h3>
            <ul class="list-group">
            <?php foreach($data ['mpl'] as $mpl) :?>
                 <li class="list-group-item" aria-disabled="true">
                    <?= $mpl ['nama_mapel'];?>

                    <a href="<?= BASEURL;?>/mapel/hapus/<?= $mpl ['id'];?>" class="badge text-bg-danger float-end me-1" onclick="return confirm('yakin?');">Hapus</a>
                    <a href="<?= BASEURL;?>/mapel/ubah/<?= $mpl ['id'];?>" class="badge text-bg-primary float-end me-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mpl['id'];?>">Ubah</a>
                    <a href="<?= BASEURL;?>/mapel/detail/<?= $mpl ['id'];?>" class="badge text-bg-info float-end me-1">Detail</a>

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
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Mata Pelajaran Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASEURL;?>/mapel/tambah" method="post">

      <input type="hidden" name="id" id="id">

        <div class="mb-3">
          <label for="nama_mapel" class="form-label">Nama Mata Pelajaran :</label>
          <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
        </div>

        <div class="mb-3">
          <label for="jam_mulai" class="form-label">Jam Mulai :</label>
          <input type="time" class="form-control" id="jam_mulai" name="jam_mulai">
        </div>

        <div class="mb-3">
          <label for="jam_selesai" class="form-label">Jam Selesai :</label>
          <input type="time" class="form-control" id="jam_selesai" name="jam_selesai">
        </div>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Mapel</button>
        </form>
     </div>
    </div>
  </div>
</div>