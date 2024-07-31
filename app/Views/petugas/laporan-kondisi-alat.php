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
          <div class="filter-container" style="margin-bottom: 0;">
            <div id="filter_div">
            <form method="post" action="<?= base_url('/petugas/laporan')?>" style="margin-top: 0;">
                <label for="bulan-filter">Waktu: </label>
                <select id="bulan-filter" name="bulan" onchange="this.form.submit();">
                    <option value="">Pilih Bulan</option>
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
                <button type="submit" style="display:none;">Filter</button>
            </form>
            </div>
          </div>
        
          <table class="tabel-laporan-kondisi-alat" style="margin-top: 0;">
            <thead>
            <tr class="header1">
              <th>No.</th>
              <th>Lokasi</th>
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
              <td><?= $lapor['jumlah']?></td>
              <td><?php if($lapor['total_input']==null){
                echo 'Belum Diisi';
              }
                else echo $lapor['catatan'] ?></td>
              <td><?php if($lapor['total_input']==null){
                echo 'Belum Diperiksa';
              }
                else echo "Sudah Diperiksa" ?></td>
              <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalLaporan" data-nama_petugas="<?= $lapor['nama_lokasi'] ?>"
                    data-nama_alat="<?= $lapor['nama'] ?>"
                    data-jadwal_periksa="<?= $lapor['tanggal_periksa'] ?>"
                    data-jumlah_baik="<?= $lapor['jumlah_baik'] ?>"
                    data-jumlah_buruk="<?= $lapor['jumlah_buruk'] ?>"
                    data-total_alat="<?= $lapor['jumlah'] ?>"
                    data-keterangan="<?= $lapor['catatan'] ?>"
                    data-id_laporan="<?= $lapor['ID Laporan'] ?>"
                    data-id_alat="<?= $lapor['ID Alat'] ?>">
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

<!-- Modal HTML -->
<div class="modal fade" id="modalLaporan" tabindex="-1" aria-labelledby="modalLaporanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLaporanLabel">Laporan Kondisi Alat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-input-data">
          <form id="formLaporan" class="container-fluid" action="<?= base_url('/petugas/laporan/update') ?>" method="post">
          <?= csrf_field() ?>
          <!-- <input type="hidden" name="_method" value='PUT'> -->
          <input type="hidden" name="id_laporan" id="id_laporan">
          <input type="hidden" name="id_alat" id="id_alat">
          <input type="hidden" name="NID" id="NID" value="<?= $user[0]['username'] ?>">
            <div class="col-md-15 mb-3">
              <label for="nama_petugas" class="form-label">Lokasi</label>
              <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" disabled>
            </div>
            <div class="col-md-15 mb-3">
              <label for="nama_alat" class="form-label">Nama Alat</label>
              <input type="text" class="form-control" id="nama_alat" name="nama_alat" disabled>
            </div>
            <div class="col-md-15 mb-3">
              <label for="jadwal_periksa" class="form-label">Tanggal Pemeriksaan</label>
              <input type="text" class="form-control" id="jadwal_periksa" name="jadwal_periksa">
              <div id="jadwal_periksa_error" class="text-danger"></div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="jumlah_baik" class="form-label">Kondisi Baik</label>
                <input type="text" class="form-control" id="jumlah_baik" name="jumlah_baik">
                <div id="jumlah_baik_error" class="text-danger"></div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="jumlah_buruk" class="form-label">Kondisi Rusak</label>
                <input type="text" class="form-control" id="jumlah_buruk" name="jumlah_buruk">
                <div id="jumlah_buruk_error" class="text-danger"></div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="total_alat" class="form-label">Total Alat Keseluruhan</label>
                <input type="text" class="form-control" id="total_alat" name="total_alat" disabled>
              </div>
            </div>
            <div class="col-md-15 mb-3">
              <label for="keterangan" class="form-label">Keterangan</label>
              <textarea id="keterangan" name="keterangan" class="large-textarea" placeholder="Maksimal 500 karakter"></textarea>
              <div id="keterangan_error" class="text-danger"></div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                  Data yang dimasukan adalah benar
                </label>
                <div id="gridCheck_error" class="text-danger"></div>
              </div>
            </div>
            <div class="btn-container btn-smaller">
              <button type="submit" id="saveBtn" class="btn">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('#saveBtn').on('click', function(e) {
      e.preventDefault();
        var jumlahBaik = parseInt($('#jumlah_baik').val()) || 0;
        var jumlahBuruk = parseInt($('#jumlah_buruk').val()) || 0;
        var totalAlat = parseInt($('#total_alat').val()) || 0;
        
        // Check if the sum of Kondisi Baik and Kondisi Buruk equals Total Alat
        if (jumlahBaik + jumlahBuruk !== totalAlat) {
            alert('Jumlah Kondisi Baik dan Kondisi Buruk harus sama dengan Total Alat.');
            return false;
        }
      var formData = $('#formLaporan').serialize();
      console.log(formData);

      $.ajax({
        url: '<?= base_url('/petugas/laporan/update') ?>', // URL to your controller method
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
          $('.text-danger').html(''); // Clear previous errors
          if (response.errors) {
            if (response.errors.jadwal_periksa) {
              $('#jadwal_periksa_error').html(response.errors.jadwal_periksa);
            }
            if (response.errors.jumlah_baik) {
              $('#jumlah_baik_error').html(response.errors.jumlah_baik);
            }
            if (response.errors.jumlah_buruk) {
              $('#jumlah_buruk_error').html(response.errors.jumlah_buruk);
            }
            if (response.errors.keterangan) {
              $('#keterangan_error').html(response.errors.keterangan);
            }
            if (response.errors.gridCheck) {
              $('#gridCheck_error').html(response.errors.gridCheck);
            }
          } else {
            // Success handling: close the modal, show a success message, etc.
            $('#modalLaporan').modal('hide');
            alert('Form submitted successfully');
            window.location.reload();
            // Optionally, reload the page or refresh the data
          }
        }
      });
    });
  });
</script>


<script>
  document.querySelectorAll('.btn-primary').forEach(button => {
  button.addEventListener('click', function() {
    document.getElementById('nama_petugas').value = this.getAttribute('data-nama_petugas');
    document.getElementById('id_laporan').value = this.getAttribute('data-id_laporan');
    document.getElementById('id_alat').value = this.getAttribute('data-id_alat');
    document.getElementById('nama_alat').value = this.getAttribute('data-nama_alat');
    document.getElementById('jadwal_periksa').value = this.getAttribute('data-jadwal_periksa');
    document.getElementById('jumlah_baik').value = this.getAttribute('data-jumlah_baik');
    document.getElementById('jumlah_buruk').value = this.getAttribute('data-jumlah_buruk');
    document.getElementById('total_alat').value = this.getAttribute('data-total_alat');
    document.getElementById('keterangan').value = this.getAttribute('data-keterangan');
  });
});
</script>

<?= $this->endSection() ?>