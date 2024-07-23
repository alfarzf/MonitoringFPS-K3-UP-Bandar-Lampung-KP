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
          <h6>Tabel Data Petugas </h6>
          <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalTambahPetugas">
            Tambah Data Petugas
          </button>
          <table data-petugas>
            <tr>
              <th>No.</th>
              <th>Nama Petugas</th>
              <th>NID</th>
              <th>Unit Kerja</th>
              <th>Psssword</th>
              <th>Aksi</th>
            </tr>
            <tr>
              <td>1.</td>
              <td>Nama orang</td>
              <td>1234567890</td>
              <td>Kantor UP Bandar Lampung</td>
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
                <button type="submit" class="btn btn-primary">Tambah Petugas</button>
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
                    <button type="submit" class="btn btn-primary">Simpan</button>
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