<?= $this->extend('template/template_petugas')?>
<?= $this->section('content')?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Jadwal Pemeriksaan Alat</h1>
  </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
      
        <div class="card-table table">
          <h6>Jadwal Pemeriksaan Alat Fire Protection System (FPS) dan Personil <?= $jadwal[0]['nama_lokasi'] ?> Tahun 2024</h6>
          <div class="filter-container">
            <div id="filter_div">
            <form method="post" action="<?= base_url('/petugas/jadwal')?>" style="margin-top: 0; margin-bottom:6px;">
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
      
          <table class="tabel-jadwal">
            <tr class="header1">
              <th>No.</th>
              <th>Nama Alat</th>
              <th>Jadwal Pemeriksaan</th>
              <th>Status</th>
            </tr>
            <?php $no=1; foreach($jadwal as $jad){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $jad['nama']?></td>
              <td><?= $jad['jadwal_tanggal_periksa']?></td>
              <!-- <td><?php # $jad['nama_lokasi']?></td> -->
              <td><?= (is_null($jad['laporan_tanggal_periksa']) && is_null($jad['total_input'])) ? 'Belum Diperiksa' : 'Sudah Diperiksa'; ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      
      </div>
    </section>
    <?= $this->endSection() ?>