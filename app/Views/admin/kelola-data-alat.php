<?= $this->extend('template/template_admin')?>
<?= $this->section('content')?>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Kelola Data Alat</h1>
  </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
      
        <div class="card-table table">
          <h6>Data Alat Kesiapan Fire Protection System</h6>
          
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
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahAlat">
            Tambah Alat
          </button>
          </div>
      
          <table>
            <tr class="header1">
              <td rowspan="3">No.</td>
              <td rowspan="3">Aspek</td>
              <th colspan="12">Kondisi Alat Kantor UP dan ULPL Mei 2024</th>
              <td rowspan="3">Total</td>
              <td rowspan="3">Aksi</td>
            </tr>
            <tr class="header2">
              <th colspan="2">Kantor UP</th>
              <th colspan="2">PLTD/G Tarahan</th>
              <th colspan="2">PLTD Teluk Betung</th>
              <th colspan="2">PLTD Tegineneng</th>
              <th colspan="2">PLTA Way Besai</th>
              <th colspan="2">PLTA Batu Tegi</th>
            </tr>
            <tr class="header3">
              <th>Baik</th>
              <th>Rusak</th>
              <th>Baik</th>
              <th>Rusak</th>
              <th>Baik</th>
              <th>Rusak</th>
              <th>Baik</th>
              <th>Rusak</th>
              <th>Baik</th>
              <th>Rusak</th>
              <th>Baik</th>
              <th>Rusak</th>
            </tr>
            <tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Peralatan Sistem Manual Fire Protection</td>
            </tr>
            <tr>
              <td>1.</td>
              <td>APAT</td>
              <td>0</td>
              <td>0</td>
              <td>4</td>
              <td>0</td>
              <td>2</td>
              <td>0</td>
              <td>6</td>
              <td>0</td>
              <td>2</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>14</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>APAR/APAB</td>
              <td>20</td>
              <td>0</td>
              <td>39</td>
              <td>0</td>
              <td>42</td>
              <td>0</td>
              <td>47</td>
              <td>0</td>
              <td>41</td>
              <td>8</td>
              <td>26</td>
              <td>0</td>
              <td>223</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Box Hydrant Outdoor</td>
              <td>3</td>
              <td>0</td>
              <td>7</td>
              <td>0</td>
              <td>7</td>
              <td>0</td>
              <td>6</td>
              <td>0</td>
              <td>3</td>
              <td>0</td>
              <td>5</td>
              <td>0</td>
              <td>31</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Box Hydrant Indoor</td>
              <td>2</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>2</td>
              <td>0</td>
              <td>11</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>15</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Peralatan Sistem Fire Pump</td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Jockey Pump</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>4</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>6.</td>
              <td>ELectric Pump</td>
              <td>0</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>4</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
          </table>
        </div>
      
      </div>
    </section>

<!-- Modal Tambah Alat -->
    <div class="modal fade" id="modalTambahAlat" tabindex="-1" aria-labelledby="modalTambahAlatLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahAlatLabel">Tambah Alat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="form-input-data">
              <form class="container-fluid">
                  <div class="col-md-15 mb-3">
                    <label for="nama_alat" class="form-label">Nama Alat</label>
                    <input type="text" class="form-control" id="inama_alat" placeholder="">
                  </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="kondisi_baik" class="form-label">Kondisi Baik</label>
                        <input type="text" class="form-control" id="kondisi_baik">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="kondisi_buruk" class="form-label">Kondisi Buruk</label>
                        <input type="text" class="form-control" id="kondisi_buruk">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="total_alat" class="form-label">Total Alat Keseluruhan</label>
                        <input type="text" class="form-control" id="total_alat">
                      </div>
                    </div>
                    
                  <div class="col-md-6 mb-3">
                    <label for="inputlokasi" class="form-label">Lokasi</label>
                    <select id="inputlokasi" class="form-control">
                      <option selected>Pilih</option>
                      <option value="">Kantor UP BL</option>
                      <option value="">PLTD/G Tarahan</option>
                      <option value="">PLTD Teluk Betung</option>
                      <option value="">PLTD Tegineneng</option>
                      <option value="">PLTA Way Besai</option>
                      <option value="">PLTA Batu Tegi</option>
                    </select>
                  </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Data yang dimasukan adalah benar 
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Alat</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit Alat -->
    <div class="modal fade" id="modalEditAlat" tabindex="-1" aria-labelledby="modalEditAlatLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditAlatLabel">Edit Data Alat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>    
    
          <div class="modal-body">
            <div class="form-input-data">
              <form class="container-fluid">
                <div class="col-md-15 mb-3">
                  <label for="nama_alat" class="form-label">Nama Alat</label>
                  <input type="text" class="form-control" id="inama_alat" placeholder="">
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="kondisi_baik" class="form-label">Kondisi Baik</label>
                    <input type="text" class="form-control" id="kondisi_baik">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="kondisi_buruk" class="form-label">Kondisi Buruk</label>
                    <input type="text" class="form-control" id="kondisi_buruk">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="total_alat" class="form-label">Total Alat Keseluruhan</label>
                    <input type="text" class="form-control" id="total_alat">
                  </div>
                </div>
    
                <div class="col-md-6 mb-3">
                  <label for="inputlokasi" class="form-label">Lokasi</label>
                  <select id="inputlokasi" class="form-control">
                    <option selected>Pilih</option>
                    <option value="">Kantor UP BL</option>
                    <option value="">PLTD/G Tarahan</option>
                    <option value="">PLTD Teluk Betung</option>
                    <option value="">PLTD Tegineneng</option>
                    <option value="">PLTA Way Besai</option>
                    <option value="">PLTA Batu Tegi</option>
                  </select>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Data yang dimasukan adalah benar
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Hapus Data Alat -->
    <div class="modal fade" id="modalHapusAlat" tabindex="-1" aria-labelledby="modalHapusAlatLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalHapusAlat">Hapus Data Alat</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        
                  <div class="modal-body">
                    <p>Anda yakin menghapus alat ini?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Iya</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                  </div>
                </div>
                
          </div>
    </div>
<?= $this->endSection() ?>
  <!-- </main>End #main -->
