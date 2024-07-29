<?= $this->extend('template/template_admin')?>
<?= $this->section('content')?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    
<div class="container">
  <div class="card-table table">
    <h6> Laporan Monitoring Alat Keselamatan Bulan Ini</h6>
    <div id="filter_div">
      <label for="bulan-filter">Lokasi: </label>
      <select id="bulan-filter">
        <option value="">Kantor UPDK Bandar Lampung</option>
        <option value="Januari">PLTD/G Tarahan</option>
        <option value="Januari">PLTD Teluk Betung</option>
        <option value="Januari">PLTD Tegineneng</option>
        <option value="Januari">PLTA Way Besai</option>
        <option value="Januari">PLTA Batutegi</option>
      </select>
    </div>

    <table>
      <tr>
        <th>No.</th>
        <th>Aspek</th>
        <th>Jumlah Alat Baik</th>
        <th>Jumlah Alat Buruk</th>
        <th>Total Barang</th>
      </tr>
      <tr>
        <td>1</td>
        <td>APAR & APAB</td>
        <td>4</td>
        <td>4</td>
        <td>8</td>
      </tr>
      <tr>
        <td>1</td>
        <td>APAR & APAB</td>
        <td>4</td>
        <td>4</td>
        <td>8</td>
      </tr>
      <tr>
        <td>1</td>
        <td>APAR & APAB</td>
        <td>4</td>
        <td>4</td>
        <td>8</td>
      </tr>
      <tr>
        <td>1</td>
        <td>APAR & APAB</td>
        <td>4</td>
        <td>4</td>
        <td>8</td>
      </tr>
    </table>
  </div>

  <div class="card chart">
    <h6>Rata-Rata Kesiapan Alat Keselamatan UPDK Bandar Lampung Bulan Ini
    </h6>
    <canvas id="barchart"></canvas>
  </div>
</div>

<?= $this->endSection() ?>