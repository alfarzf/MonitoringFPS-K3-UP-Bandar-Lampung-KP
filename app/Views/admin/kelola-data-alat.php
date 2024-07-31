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

          <!-- <div class="btn-container">
            <button type="button" class="btn btn-primary btn-smaller" data-bs-toggle="modal" data-bs-target="#modalTambahAlat">
              Tambah Alat
            </button>
          </div> -->
        </div>
          
          <table class="tabel-kelola-alat">
            <tr class="header1">
              <td rowspan="2">No.</td>
              <td rowspan="2">Aspek</td>
              <th colspan="6">Jumlah Alat Fire Protection System (FPS) dan personil di UP Bandar Lampung</th>
              <td rowspan="2">Total</td>
              <td rowspan="2">Aksi</td>
            </tr>
            <tr class="header2">
              <th>Kantor UP</th>
              <th>PLTD/G Tarahan</th>
              <th>PLTD Teluk Betung</th>
              <th>PLTD Tegineneng</th>
              <th>PLTA Way Besai</th>
              <th>PLTA Batu Tegi</th>
            </tr>
            <tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Peralatan Sistem Fire Fighting</td>
            </tr>
            <tr>
              <td colspan="2">Peralatan Sistem Manual Fire Protection</td>
              <td colspan="22"></td>
            </tr>
            <?php $no=1; foreach($laporan as $lapor){ $jumlah=0; ?>
            <?php if($lapor[0]['nama']=="Jockey Pump"){
              echo '<tr><td colspan="2">Peralatan Sistem Fire Pump</td><td colspan="22"></td></tr>';
            }if($lapor[0]['nama']=="Sprinkle System"){
              echo '<tr>
              <td colspan="2">Automation Protection</td>
              <td colspan="22"></td>
            </tr>';
            }if($lapor[0]['nama']=="Panel Alarm System"){
              echo '<tr>
              <td colspan="2">Alarm and Detection System</td>
              <td colspan="22"></td>
            </tr>';
            }if($lapor[0]['nama']=="Pintu Kebakaran"){
              echo '<tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Sarana Penyelamatan Jiwa</td>
            </tr>';
            }if($lapor[0]['nama']=="Kesiapan Personil"){
              echo '<tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Kesiapan Personil Tanggap Darurat</td>
            </tr>';
            }
             ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $lapor[0]['nama'] ?></td>
              <?php for($i=0; $i < count($lapor); $i++){ ?>
              <td><?= $lapor[$i]['jumlah'] ?></td>
              <?php $jumlah+=$lapor[$i]['jumlah'];} ?>
              <td><?= $jumlah ?></td>
              <td>
                <button type="button" style="margin-bottom: 15px;" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"
                data-nama_alat="<?= $lapor[0]['nama'] ?>"><i class="fas fa-edit"></i></button>
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
              <form class="container-fluid">
                  <div class="col-md-15 mb-3">
                    <label for="nama_alat" class="form-label">Nama Alat</label>
                    <input type="text" class="form-control" id="inama_alat" placeholder="">
                  </div>

                      <div class="col-md-3 mb-3">
                        <label for="total_alat" class="form-label">Total Alat Keseluruhan</label>
                        <input type="text" class="form-control" id="total_alat">
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
    
                <div class="col-md-15 mb-3">
                  <label for="nama_alat" class="form-label">Nama Alat</label>
                  <input type="text" class="form-control" id="nama_alat" placeholder="" name="nama_alat">
                </div>

                  <div class="col-md-3 mb-3">
                    <label for="jumlah" class="form-label">Total Alat Keseluruhan</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                    <div id="jumlah_error" class="text-danger"></div>
                  </div>
    
                  <div class="col-md-15 mb-3">
                  <label for="lokasi" class="form-label">Unit Kerja</label>
                  <select class="form-control" id="lokasi" name="lokasi">
                    <option value="1">UP Bandar Lampung</option>
                    <option value="2">PLTD/G Tarahan</option>
                    <option value="3">PLTD Teluk Betung</option>
                    <option value="4">PLTD Tegineneng</option>
                    <option value="5">PLTA Way Besai</option>
                    <option value="6">PLTA Batu Tegi</option>
                  </select>
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
