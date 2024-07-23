<?= $this->extend('template/template_admin')?>
<?= $this->section('content')?>

  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Jadwal Pemeriksaan Alat</h1>
  </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
      
        <div class="card-table table">
          <h6>Jadwal Monitoring Kesiapan Fire Protection System</h6>
          <div class="filter-container">
            <div id="filter_div">
              <label for="bulan-filter">Waktu: </label>
              <select id="bulan-filter">
                <option value="">Januari</option>
                <option value="">Februari</option>
                <option value="">Maret</option>
                <option value="">April</option>
                <option value="">Mei</option>
                <option value="">Juni</option>
                <option value="">Juli</option>
                <option value="">Agustus</option>
                <option value="">September</option>
                <option value="">Oktober</option>
                <option value="">November</option>
                <option value="">Desember</option>
              </select>
            
              <div id="filter_div">
                <label for="lokasi-filter">Lokasi: </label>
                <select id="lokasi-filter">
                  <option value="">Kantor UP BL</option>
                  <option value="">PLTD/G Tarahan</option>
                  <option value="">PLTD Teluk Betung</option>
                  <option value="">PLTD Tegineneng</option>
                  <option value="">PLTA Way Besai</option>
                  <option value="">PLTA Batu Tegi</option>
                </select>
              </div>
          </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahJadwal">
              Tambah Jadwal Pemeriksaan
            </button>
          </div>
      
          <table>
            <tr class="header1">
              <th>No.</th>
              <th>Nama Alat</th>
              <th>Jadwal Pemeriksaan</th>
              <th>Nama Petugas</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            <tr>
              <td>1.</td>
              <td>APAT</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
              <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditJadwal"><i
                  class="fas fa-edit"></i></button>
              </button></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>APAR/APAB</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
              <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditJadwal"><i
                    class="fas fa-edit"></i></button>
                </button></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Box Hydrant Outdoor</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
              <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditJadwal"><i
                    class="fas fa-edit"></i></button>
                </button></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Box Hydrant Indoor</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
              <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditJadwal"><i
                    class="fas fa-edit"></i></button>
                </button></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Jockey Pump</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
              <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditJadwal"><i
                    class="fas fa-edit"></i></button>
                </button></td>
            </tr>
            <tr>
              <td>6.</td>
              <td>ELectric Pump</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
              <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditJadwal"><i
                    class="fas fa-edit"></i></button>
                </button></td>
            </tr>
          </table>
        </div>
      
      </div>
    </section>

    <!-- Modal Edit Jadwal -->
    <div class="modal fade" id="modalTambahJadwal" tabindex="-1" aria-labelledby="modalTambahJadwal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahJadwal">Tambah Jadwal Pemeriksaan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body">
            <div class="form-input-data">
              <form class="container-fluid">
                <div class="col-md-15 mb-3">
                  <label for="nama_petugas" class="form-label">Nama Alat</label>
                  <input type="text" class="form-control" id="nama_petugas" placeholder="">
                </div>
    
                <div class="col-md-15 mb-3">
                  <label for="jadwal_pemeriksaan" class="form-label">Jadwal Pemeriksaan</label>
                  <input type="date" class="form-control" id="jadwal_pemeriksaan" placeholder="">
                </div>
    
                <div class="col-md-15 mb-3">
                  <label for="nama_petugas" class="form-label">Nama Petugas</label>
                  <input type="text" class="form-control" id="nama_petugas" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit Jadwal -->
    <div class="modal fade" id="modalEditJadwal" tabindex="-1" aria-labelledby="modalEditJadwal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditJadwal">Edit Jadwal Pemeriksaan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body">
            <div class="form-input-data">
              <form class="container-fluid">
                <div class="col-md-15 mb-3">
                  <label for="nama_petugas" class="form-label">Nama Alat</label>
                  <input type="text" class="form-control" id="nama_petugas" placeholder="">
                </div>
    
                <div class="col-md-15 mb-3">
                  <label for="jadwal_pemeriksaan" class="form-label">Jadwal Pemeriksaan</label>
                  <input type="date" class="form-control" id="jadwal_pemeriksaan" placeholder="">
                </div>
    
                <div class="col-md-15 mb-3">
                  <label for="nama_petugas" class="form-label">Nama Petugas</label>
                  <input type="text" class="form-control" id="nama_petugas" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?= $this->endSection() ?>