<?= $this->extend('template/template_petugas')?>
<?= $this->section('content')?>

  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Laporan Kondisi Alat</h1>
  </div>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card-table table">
          <h6>Monitoring Kesiapan Fire Protection System Kantor UP Bandar Lampung</h6>
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
            </div>
          </div>
        
          <table>
            <tr class="header1">
              <th>No.</th>
              <th>Nama Petugas</th>
              <th>Nama Alat</th>
              <th>Jadwal Pemeriksaan</th>
              <th>Kondisi Baik</th>
              <th>Kondisi Buruk</th>
              <th>Total Alat Keseluruhan</th>
              <th>Keterangan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            <?php $no=1; foreach($laporan as $lapor){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td>Tim Kantor UPDK</td>
              <td><?= $lapor['nama']?></td>
              <td><?= $lapor['tanggal_periksa']?></td>
              <td><?= $lapor['jumlah_baik']?></td>
              <td><?= $lapor['jumlah_buruk']?></td>
              <td><?= $lapor['total_input']?></td>
              <td><?php if($lapor['total_input']==null){
                echo 'Belum Diisi';
              }
                else echo $lapor['catatan'] ?></td>
              <td>Ambil aksi dari radio button</td>
              <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalLaporan">
                <i class='fas fa-file-upload'></i> Isi Laporan </button>
              </button></td>
            </tr>
            <?php } ?>
          </table>
          <br>
</section>
<div class="card chart">
  <h6>Rata-Rata Kesiapan Alat Keselamatan UPDK Bandar Lampung Bulan Ini
  </h6>
  <canvas id="barchart3"></canvas>
</div>

<div class="modal fade" id="modalLaporan" tabindex="-1" aria-labelledby=modalLaporan" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLaporan">Laporan Hasil Monitoring Alat</h5>
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
                        <label for="nama_alat" class="form-label">Nama Alat</label>
                        <input type="text" class="form-control" id="inama_alat" placeholder="">
                      </div>
                      <div class="col-md-15 mb-3">
                        <label for="jadwal_periksa" class="form-label">Jadwal Pemeriksaan</label>
                        <input type="text" class="form-control" id="jadwal_periksa" placeholder="">
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
                      <div class="col-md-15 mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <br>
                        <textarea id="keterangan" name="keterangan" class="large-textarea"></textarea>
                      </div>
                      <div class="mb-3">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="belum_periksa" id="belum_periksa" value="belum_periksa">
                          <label class="form-check-label" for="belum_periksa">Belum Diperiksa</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sudah_periksa" id="sudah_periksa" value="sudah_periksa">
                          <label class="form-check-label" for="sudah_periksa">Sudah Diperiksa</label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                  </div>
                </div>
                </div>
  </div>
</div>
<?= $this->endSection() ?>