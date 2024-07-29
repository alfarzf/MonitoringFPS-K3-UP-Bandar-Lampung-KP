<?= $this->extend('template/template_admin')?>
<?= $this->section('content')?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Kelola Data Petugas</h1>
  </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
      
        <div class="card-table table">
          <h6>Petugas Pemeriksaan Alat Fire Protection System (FPS) dan Personil Tahun 2024 </h6>
              <div class="btn-container-petugas">
                <button type="button" class="btn btn-primary btn-smaller-petugas" data-bs-toggle="modal" data-bs-target="#modalTambahPetugas">
                  Tambah Petugas
                </button>
              </div>
          <table class="tabel-data-petugas">
            <tr>
              <th>No.</th>
              <th>Nama Petugas</th>
              <th>NID</th>
              <th>Unit Kerja</th>
              <th>Psssword</th>
              <th>Aksi</th>
            </tr>
            <?php $no=1 ;foreach($petugas as $tugas){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $tugas['nama'] ?></td>
              <td><?= $tugas['username'] ?></td>
              <td><?= $tugas['nama_lokasi'] ?></td>
              <td>************</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditPetugas"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusPetugas"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <?php } ?>
          </table>
        </div>
      
      </div>
    </section>


   <!-- Modal Tambah Petugas -->
   <div class="modal fade" id="modalTambahPetugas" tabindex="-1" aria-labelledby="modalTambahAlatPetugas" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahPetugas">Tambah Petugas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
    
          <div class="modal-body">
            <div class="form-input-data">
              <form class="container-fluid" action="<?= url_to('register') ?>" method="post">
              <?= csrf_field() ?>

              <input type="hidden" name="email" value="plnup@gmail.com">


                <div class="col-md-15 mb-3">
                  <label for="nama" class="form-label">Nama Petugas</label>
                  <input type="text" class="form-control" id="floatingNamaInput" name="nama" inputmode="text" autocomplete="nama" placeholder="Nama" value="<?= old('nama') ?>" required>
                </div>

                <div class="col-md-15 mb-3">
                  <label for="nid" class="form-label">NID</label>
                  <input type="text" class="form-control" id="floatingUsernameInput" name="username" inputmode="text" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required>
                </div>
                <div class="col-md-15 mb-3">
                  <label for="password" class="form-label">Kata Sandi</label>
                  <input type="password" class="form-control" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.password') ?>" required>
                </div>
                <div class="col-md-15 mb-3">
                  <label for="password" class="form-label">Masukan Ulang Kata Sandi</label>
                  <input type="password" class="form-control" id="floatingPasswordConfirmInput" name="password_confirm" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required>
                </div>

                <div class="col-md-15 mb-3">
                  <label for="unit_kerja" class="form-label">Unit Kerja</label>
                  <select class="form-control" id="unit_kerja" name="id_lokasi">
                    <option value="1">UP Bandar Lampung</option>
                    <option value="2">PLTD/G Tarahan</option>
                    <option value="3">PLTD Teluk Betung</option>
                    <option value="4">PLTD Tegineneng</option>
                    <option value="5">PLTA Way Besai</option>
                    <option value="6">PLTA Batu Tegi</option>
                  </select>
                </div>
                <div class="col-md-15 mb-3">
                  <label for="unit_kerja" class="form-label">Role</label>
                  <select class="form-control" id="unit_kerja" name="group">
                    <option value="admin">Admin</option>
                    <option value="tl">Team Leader</option>
                    <option value="user">Petugas Inspeksi</option>
                  </select>
                </div>
                <div class="btn-container btn-smaller">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal Edit Petugas -->
    <div class="modal fade" id="modalEditPetugas" tabindex="-1" aria-labelledby=modalEditPetugas" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditPetugas">Edit Data Petugas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
    
          <div class="modal-body">
            <div class="form-input-data">
                  <form class="container-fluid">
                    <div class="col-md-15 mb-3">
                      <label for="nama_petugas" class="form-label">Nama Petugas</label>
                      <input type="text" class="form-control" id="nama_petugas" placeholder="">
                    </div>
                  
                    <div class="col-md-15 mb-3">
                      <label for="nid" class="form-label">NID</label>
                      <input type="text" class="form-control" id="nid" placeholder="">
                    </div>
                  
                    <div class="col-md-15 mb-3">
                      <label for="unit_kerja" class="form-label">Unit Kerja</label>
                      <input type="text" class="form-control" id="unit_kerja" placeholder="">
                    </div>
                  
                    <div class="col-md-15 mb-3">
                      <label for="password" class="form-label">Kata Sandi</label>
                      <input type="text" class="form-control" id="password" placeholder="">
                    </div>
                    <div class="btn-container btn-smaller">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal Hapus Petugas -->
    <div class="modal fade" id="modalHapusPetugas" tabindex="-1" aria-labelledby="modalHapusPetugas" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalHapusPetugas">Hapus Data Petugas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body">
            <p>Anda yakin menghapus Petugas ini?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Iya</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          </div>
        </div>
    
      </div>
    </div>
<?= $this->endSection() ?>