<?= $this->extend('template/template_petugas')?>
<?= $this->section('content')?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Laporan Kondisi Alat</h1>
  </div>
    <!-- </div>End Page Title -->

    <section class="section">
        <div class="card-table table">
          <h6>Monitoring Kesiapan Fire Protection System Kantor <?= $laporan[0]['nama_lokasi'] ?> Tahun 2024</h6>
          <div class="filter-container">
            <div id="filter_div">
            <form method="post" action="<?= base_url('/petugas/laporan')?>">
                <label for="bulan-filter">Waktu: </label>
                <select id="bulan-filter" name="bulan">
                  
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
                <button type="submit">Filter</button>
            </form>
            </div>
          </div>
        
          <table class="tabel-laporan-kondisi-alat">
            <thead>
            <tr class="header1">
              <th>No.</th>
              <th>Nama Petugas</th>
              <th>Nama Alat</th>
              <th>Jadwal Pemeriksaan</th>
              <th>Kondisi Baik</th>
              <th>Kondisi Rusak</th>
              <th>Total Alat Keseluruhan</th>
              <th>Keterangan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($laporan as $lapor){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $lapor['nama_lokasi'] ?></td>
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
              <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalLaporan" data-nama_petugas="<?= $lapor['nama_lokasi'] ?>"
                    data-nama_alat="<?= $lapor['nama'] ?>"
                    data-jadwal_periksa="<?= $lapor['tanggal_periksa'] ?>"
                    data-kondisi_baik="<?= $lapor['jumlah_baik'] ?>"
                    data-kondisi_buruk="<?= $lapor['jumlah_buruk'] ?>"
                    data-total_alat="<?= $lapor['total_input'] ?>"
                    data-keterangan="<?= $lapor['catatan'] ?>">
                <i class='fas fa-file-upload'></i> Isi Laporan </button>
              </button></td>
            </tr>
            </tbody>
            <?php } ?>
            </table>
          <br>
</section>
<!-- <div class="card chart">
  <h6>Rata-Rata Kesiapan Alat Keselamatan UP Bandar Lampung Bulan Ini
  </h6>
  <canvas id="barchart3"></canvas>
</div> -->

<div class="modal fade" id="modalLaporan" tabindex="-1" aria-labelledby=modalLaporan" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLaporan">Laporan Kondisi Alat</h5>
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
                        <input type="text" class="form-control" id="nama_alat" placeholder="">
                      </div>
                      <div class="col-md-15 mb-3">
                        <label for="jadwal_periksa" class="form-label">Tanggal Pemeriksaan</label>
                        <input type="text" class="form-control" id="jadwal_periksa" placeholder="">
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="kondisi_baik" class="form-label">Kondisi Baik</label>
                          <input type="text" class="form-control" id="kondisi_baik">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="kondisi_buruk" class="form-label">Kondisi Rusak</label>
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
                        <textarea id="keterangan" name="keterangan" class="large-textarea"  placeholder="Maksimal 500 karakter"></textarea>
                      </div>
                              <div class="mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                  <label class="form-check-label" for="gridCheck">
                                    Data yang dimasukan adalah benar
                                  </label>
                                </div>
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

<script>
  document.querySelectorAll('.btn-primary').forEach(button => {
  button.addEventListener('click', function() {
    document.getElementById('nama_petugas').value = this.getAttribute('data-nama_petugas');
    document.getElementById('nama_alat').value = this.getAttribute('data-nama_alat');
    document.getElementById('jadwal_periksa').value = this.getAttribute('data-jadwal_periksa');
    document.getElementById('kondisi_baik').value = this.getAttribute('data-kondisi_baik');
    document.getElementById('kondisi_buruk').value = this.getAttribute('data-kondisi_buruk');
    document.getElementById('total_alat').value = this.getAttribute('data-total_alat');
    document.getElementById('keterangan').value = this.getAttribute('data-keterangan');
  });
});
</script>
<?= $this->endSection() ?>