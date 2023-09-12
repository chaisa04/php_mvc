<div class="container">

<form action="<?= BASEURL;?>/pilih_mapel/tambah" method="post">
  <fieldset>
    <legend>Pilih Mata Pelajaran :</legend>

    <div class="mb-3">
      <label for="siswa_id" class="form-label">Siswa :</label>
      <select id="siswa_id" class="form-select" name="siswa_id">
        <?php foreach($data['siswa'] as $sw) :?>
          <option value="<?= $sw['id'] ?>"><?= $sw['nama'] ?></option>
        <?php endforeach;?>
      </select>
    </div>

    <div class="mb-3">
      <label for="mata_pelajaran_id" class="form-label">Mata Pelajaran :</label>
      <select id="mata_pelajaran_id" class="form-select" name="mata_pelajaran_id[]">
      <?php foreach($data['mpl'] as $sw) :?>
          <option value="<?= $sw['id'] ?>"><?= $sw['nama_mapel'] ?></option>
        <?php endforeach;?>
      </select>
    </div>

    <div class="mb-3">
      <label for="mata_pelajaran_id" class="form-label">Mata Pelajaran :</label>
      <select id="mata_pelajaran_id" class="form-select" name="mata_pelajaran_id[]">
      <?php foreach($data['mpl'] as $sw) :?>
          <option value="<?= $sw['id'] ?>"><?= $sw['nama_mapel'] ?></option>
        <?php endforeach;?>
      </select>
      </select>
    </div>

    <div class="mb-3">
      <label for="mata_pelajaran_id" class="form-label">Mata Pelajaran :</label>
      <select id="mata_pelajaran_id" class="form-select" name="mata_pelajaran_id[]">
      <?php foreach($data['mpl'] as $sw) :?>
          <option value="<?= $sw['id'] ?>"><?= $sw['nama_mapel'] ?></option>
        <?php endforeach;?>
      </select>
      </select>
    </div>

    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
      </div>
    </div>

    <div>
    <button type="submit" class="btn btn-primary">Pilih Mata Pelajaran</button>
    </div>

  </fieldset>
</form>
</div>