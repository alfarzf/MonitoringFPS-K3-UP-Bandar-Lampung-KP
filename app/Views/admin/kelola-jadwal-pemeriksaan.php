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
          <h6>Jadwal Pemeriksaan Alat Fire Protection System (FPS) dan Personil Tahun 2024</h6>

          <div class="container-filter-button">
            <div class="filter-container">
              <div id="filter_div">
              <form method="post" action="<?= base_url('/admin/jadwal')?>" style="margin-top: 0; margin-bottom:6px;">
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
          
            <!-- <div class="btn-container">
              <button type="button" class="btn btn-primary btn-smaller" data-bs-toggle="modal" data-bs-target="#modalTambahJadwal">
                Tambah Jadwal
              </button>
            </div> -->
          </div>
          <table class="tabel-jadwal">
            <tr class="header1">
              <th>No.</th>
              <th>Nama Alat</th>
              <th>Jadwal Pemeriksaan</th>
              <th>Aksi</th>
            </tr>
            <?php $no=1; ;foreach($jadwal as $jad){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $jad['nama'] ?></td>
              <td><?= $jad['jadwal_tanggal_periksa'] ?></td>
              <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditJadwal" data-nama_alat="<?= $jad['nama'] ?>"
              data-jadwal_id="<?= $jad['jadwal_id'] ?>"><i
                  class="fas fa-edit"></i></button>
              </button></td>
            </tr>
            <?php } ?>
            
          </table>
        </div>
      
      </div>
    </section>

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
              <form class="container-fluid" id="formLaporan" action="<?= base_url('/admin/jadwal/store') ?>" method="post">
                <input type="hidden" name="jadwal_id" id="jadwal_id">
                <div class="col-md-15 mb-3">
                  <label for="nama_petugas" class="form-label">Nama Alat</label>
                  <input type="text" class="form-control" id="nama_alat" placeholder="" name="nama_alat" required>
                </div>
    
                <div class="col-md-15 mb-3">
                  <label for="jadwal_pemeriksaan" class="form-label">Jadwal Pemeriksaan</label>
                  <input type="date" class="form-control" id="jadwal_pemeriksaan" placeholder="" name="jadwal_pemeriksaan" required>
                </div>
    
                <div class="btn-container btn-smaller">
                  <button type="submit" class="btn btn-primary" id="saveBtn">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script>
  $(document).ready(function() {
    $('#saveBtn').on('click', function(e) {
      e.preventDefault();
        
      var formData = $('#formLaporan').serialize();
      console.log(formData);

      $.ajax({
        url: '<?= base_url('/admin/jadwal/store') ?>', // URL to your controller method
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
          $('.text-danger').html(''); // Clear previous errors
          if (response.errors) {
            alert('Gagal');
          } else {
            // Success handling: close the modal, show a success message, etc.
            $('#modalEditJadwal').modal('hide');
            alert('Berhasil Menambahkan Jadwal');
            window.location.reload();
            // Optionally, reload the page or refresh the data
          }
        }
      });
    });
  });
</script> -->

<script>
  document.querySelectorAll('.btn-warning').forEach(button => {
  button.addEventListener('click', function() {
    document.getElementById('nama_alat').value = this.getAttribute('data-nama_alat');
    document.getElementById('jadwal_id').value = this.getAttribute('data-jadwal_id');
  });
});
</script>
<?= $this->endSection() ?>