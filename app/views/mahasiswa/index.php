<ul class="list-group">
<?php foreach($data['mhs'] as $mhs) : ?>
  <li class="list-group-item">
    <?= $mhs['nama']; ?>
    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end">detail</a>
  </li>
<?php endforeach; ?>
</ul>
