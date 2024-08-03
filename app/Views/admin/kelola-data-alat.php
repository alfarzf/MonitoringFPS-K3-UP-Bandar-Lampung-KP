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
          <h6>Data Alat Fire Protection System (FPS) dan Personil di UP Bandar Lampung Tahun 2024</h6>
          <div class="container-filter-button">
          <div class="filter-container">
            <!-- <div id="filter_div">
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
            </div> -->
          </div>

          <div class="btn-container">
            <button type="button" class="btn btn-primary btn-smaller" data-bs-toggle="modal" data-bs-target="#modalTambahAlat">
              Tambah Alat
            </button>
          </div>
        </div>
          
          <table class="tabel-kelola-alat">
          <tr class="header1">
              <th class="width-kolom1">No.</th>
              <th class="width-kolom2">Nama Alat</th>
              <th class="width-kolom3">Aksi</th>
            </tr>
            <tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Peralatan Sistem Fire Fighting</td>
            </tr>
            <tr>
              <td colspan="2">Peralatan Sistem Manual Fire Protection</td>
              <td colspan="22"></td>
            </tr>
            <?php $no=1; foreach($laporan as $lapor){ $jumlah=0; ?>
            <?php if($lapor['nama']=="Jockey Pump"){
              echo '<tr><td colspan="2">Peralatan Sistem Fire Pump</td><td colspan="22"></td></tr>';
            }if($lapor['nama']=="Sprinkle System"){
              echo '<tr>
              <td colspan="2">Automation Protection</td>
              <td colspan="22"></td>
            </tr>';
            }if($lapor['nama']=="Panel Alarm System"){
              echo '<tr>
              <td colspan="2">Alarm and Detection System</td>
              <td colspan="22"></td>
            </tr>';
            }if($lapor['nama']=="Pintu Kebakaran"){
              echo '<tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Sarana Penyelamatan Jiwa</td>
            </tr>';
            }if($lapor['nama']=="Kesiapan Personil"){
              echo '<tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Kesiapan Personil Tanggap Darurat</td>
            </tr>';
            }
             ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $lapor['nama'] ?></td>
              
              <td>
                <button type="button" style="margin-bottom: 15px;" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"
                data-nama_alat="<?= $lapor['nama'] ?>" data-id_alat="<?= $lapor['id'] ?>"><i class="fas fa-edit"></i></button>
                </button>
              </td>
            </tr>
            <?php $no++; } ?>
          </table>
        </div>
      
      </div>
    </section>

    <!-- <footer class="text-center"> -->
      <!-- Section: Social media -->
      <!-- <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      </section> -->

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
              <form class="container-fluid" action="<?= base_url('/admin/alat/insert') ?>" method="post">
                  <div class="col-md-15 mb-3">
                    <label for="nama_alat" class="form-label">Nama Alat</label>
                    <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="" required>
                  </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
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
              <form class="container-fluid" action="<?= base_url('admin/alat/update') ?>" method="post" id="formLaporanEdit">
                <input type="hidden" name="id_alat" id="id_alat">
                <div class="col-md-15 mb-3">
                  <label for="nama_alat" class="form-label">Nama Alat</label>
                  <input type="text" class="form-control" id="nama_alat" placeholder="" name="nama_alat">
                </div>

                <div class="btn-container btn-smaller">
                <button type="submit" id="saveBtnEdit" class="btn">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  document.querySelectorAll('.btn-warning').forEach(button => {
  button.addEventListener('click', function() {
    document.getElementById('nama_alat').value = this.getAttribute('data-nama_alat');
    document.getElementById('id_alat').value = this.getAttribute('data-id_alat');
  });
});
</script>
<script>
  $(document).ready(function() {
    $('#saveBtnEdit').on('click', function(e) {
      e.preventDefault();
        // Check if the sum of Kondisi Baik and Kondisi Buruk equals Total Alat
      var formData = $('#formLaporanEdit').serialize();
      console.log(formData);

      $.ajax({
        url: '<?= base_url('admin/alat/update') ?>', // URL to your controller method
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
          $('.text-danger').html(''); // Clear previous errors
          if (response.errors) {
            if (response.errors.jumlah) {
              $('#jumlah_error').html(response.errors.jumlah);
            }
          }else {
            // Success handling: close the modal, show a success message, etc.
            $('#modalEditAlat').modal('hide');
            alert('Form submitted successfully');
            window.location.reload();
            // Optionally, reload the page or refresh the data
          }
        }
      });
    });
  });
</script>
<?= $this->endSection() ?>
  <!-- </main>End #main -->
