<?= $this->extend('template/template_tl')?>
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
          </div>
      
          <table>
            <tr class="header1">
              <th>No.</th>
              <th>Nama Alat</th>
              <th>Jadwal Pemeriksaan</th>
              <th>Nama Petugas</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>1.</td>
              <td>APAT</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
            </tr>
            <tr>
              <td>2.</td>
              <td>APAR/APAB</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Box Hydrant Outdoor</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Box Hydrant Indoor</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Jockey Pump</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
            </tr>
            <tr>
              <td>6.</td>
              <td>ELectric Pump</td>
              <td>09/01/2024</td>
              <td>Tim Kantor UPDK</td>
              <td>Belum diperiksa</td>
            </tr>
          </table>
        </div>
      
      </div>
    </section>
<?= $this->endSection() ?>