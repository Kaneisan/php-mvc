<div class="container mt-5">
    
    <div class="card" style="width: 25rem;">
      <div class="card-body">
        <h1>Detail Mahasiswa</h1>
        <h5 class="card-title">Nama : <?= $data['mhs']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">NRP : <?= $data['mhs']['nrp']; ?></h6>
        <p class="card-text">Email : <?= $data['mhs']['email']; ?></p>
        <p class="card-text">Jurusan : <?= $data['mhs']['jurusan']; ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      </div>
    </div>

</div>