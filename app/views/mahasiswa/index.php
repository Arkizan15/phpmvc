<div class="container mt-3">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
    Tambah Data Mahasiswa
</button>
<br> <br>
<h3>DAFTAR MAHASISWA</h3>
<ul class="list-group">
<?php foreach($data['mhs'] as $mhs) : ?>
  <li class="list-group-item">
    <?= $mhs['nama']; ?>
    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end">detail</a>
  </li>
<?php endforeach; ?>
</ul>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama">
  </div>

  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="number" class="form-control" name="nim" id="nim">
  </div>

  <div class="input-group mb-3">
    <label class="input-group-text" for="jurusan">Jurusan</label>
    <select class="form-select" id="jurusan" name="jurusan">
      <option value="PPLG">Pengembangan Perangkat Lunak & Gim (PPLG)</option>
      <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi (TJKT)</option>
      <option value="DKV">Desain Komunikasi Visual (DKV)</option>
      <option value="SeniTari">Seni Tari</option>
      <option value="AKL">Akuntansi Keuangan Lembaga (AKL)</option>
      <option value="ManPerkantoran">Manajemen Perkantoran & Layanan Bisnis</option>
      <option value="Perhotelan">Perhotelan</option>
      <option value="Pemasaran">Pemasaran</option>
      <option value="BCP">Broadcasting & Perfilman</option>
      <option value="Kuliner">Kuliner</option>
    </select>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </div>
</form>

      </div>
    </div>
  </div>
</div>