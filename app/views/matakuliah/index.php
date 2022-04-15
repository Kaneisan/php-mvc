<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Matakuliah
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/matakuliah/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari matakuliah.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- <div class="row"> -->
        <div>
          <h3>Daftar Matakuliah</h3>
          <table class="table">
          <thead>
            <tr>
                <th>#</th>
                <th>Nama Matakuliah</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach( $data['matkul'] as $matakuliah ) : ?>
                <td><?= $matakuliah['id']; ?></td>
                <td><?= $matakuliah['nama']; ?></td>
                <td>
                  <a href="<?= BASEURL; ?>/matakuliah/hapus/<?= $matakuliah['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/matakuliah/ubah/<?= $matakuliah['id']; ?>" class="badge badge-success tampilModalUbahMatakuliah" data-toggle="modal" data-target="#formModal" data-id="<?= $matakuliah['id']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/matakuliah/detail/<?= $matakuliah['id']; ?>" class="badge badge-primary">detail</a>
                </td>
              <?php endforeach; ?>
          </tbody>
          </table>
        </div>
    <!-- </div> -->
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Matakuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/matakuliah/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama Matakuliah</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>




