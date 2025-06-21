<div class="container mt-5">
    <div class="row">
        <div class="col-6">
             <h3>DAFTAR MAHASISWA</h3>   
               <ul class="list-group d-flex justify-content-between align-items-start">
                <?php foreach($data['mhs'] as $mhs) : ?>
                 <li class="list-group-item"><?= $mhs['nama']; ?>
                <a href="<?=BASEURL;?> /mahasiswa/detail <?= $mhs['nama']; ?>" class="badge text-bg-primary">detail</a>
                </li>
                 <?php endforeach ?>     
                </ul>

        
        </div>   
    </div>
</div>








