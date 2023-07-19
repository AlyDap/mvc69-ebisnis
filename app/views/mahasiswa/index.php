<div class="container mt-1">
  <!-- <div class="row"> -->
  <!-- <div class="col-lg-6"> -->
  <?php Flasher::flash(); ?>
  <!-- </div> -->
  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-dark my-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>

      <!-- Modal -->
      <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL   ?>/mahasiswa/tambah" method="post" id="form_ganti">
              <!-- nama nim email prodi -->
              <input type="hidden" name="id" id="id">
              <div class="modal-body">
                <div class="mb-3 row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input required type="text" class="form-control" id="nama" name="nama">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                  <div class="col-sm-10">
                    <input required type="text" class="form-control" id="nim" name="nim">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input required type="email" class="form-control" id="email" name="email">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="jurusan" class="col-sm-4 col-form-label">Program Studi</label>
                  <div class="col-sm-8">
                    <select class="form-select " aria-label="Program Studi" id="jurusan" name="jurusan">
                      <option selected value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Sistem Informasi">Sistem Informasi</option>
                      <option value="Manajemen Informatika">Manajemen Informatika</option>
                      <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-outline-dark">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end Modal -->
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h1 class="display-5">Daftar Mahasiswa</h1> <br>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <?= $mhs['nama']; ?>
              <!-- <span class="me-auto "><?= $mhs['nama'] ?></span> -->
            </div>
            <div>
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-dark rounded-pill" style="text-decoration: none;">detail</a>

              <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-warning rounded-pill tampilModalUbah" data-bs-toggle='modal' data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>" style="text-decoration: none;">edit</a>
              <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger rounded-pill" onclick="return confirm('Yakin?')" style="text-decoration: none;">hapus</a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
<!-- </div> -->