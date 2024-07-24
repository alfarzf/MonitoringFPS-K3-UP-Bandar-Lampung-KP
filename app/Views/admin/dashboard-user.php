<?= $this->extend('template/template_admin')?>
<?= $this->section('content')?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
</div><!-- End Page Title -->


<div class="container">
<div class="card-table table">
<h6> Monitoring Kesiapan Fire Protection System PT PLN NP UP Bandar Lampung Tahun 2024</h6>

<table>
  <tr>
    <th>No.</th>
    <th>Unit Pembangkit</th>
    <th>Januari (%)</th>
    <th>Februari (%)</th>
    <th>Maret (%)</th>
    <th>April (%)</th>
    <th>Mei (%)</th>
    <th>Juni (%)</th>
    <th>Juli (%)</th>
    <th>Agustus (%)</th>
    <th>September (%)</th>
    <th>Oktober (%)</th>
    <th>November (%)</th>
    <th>Desember (%)</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Kantor UP BL</td>
    <td>98.0</td>
    <td>98.0</td>
    <td>98.0</td>
    <td>98.7</td>
    <td>98.9</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
  </tr>
  <tr>
    <td>2</td>
    <td>PLTD/G Tarahan</td>
    <td>92.3</td>
    <td>92.3</td>
    <td>90.8</td>
    <td>98.7</td>
    <td>98.7</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
  </tr>
  <tr>
    <td>3</td>
    <td>PLTD Teluk Betung</td>
    <td>97.8</td>
    <td>97.0</td>
    <td>97.0</td>
    <td>97.8</td>
    <td>97.8</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
  </tr>
  <tr>
      <td>4</td>
      <td>PLTD Tegineneng</td>
      <td>100.0</td>
      <td>98.2</td>
      <td>98.2</td>
      <td>100.0</td>
      <td>100.0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
  </tr>
  <tr>
      <td>5</td>
      <td>PLTA Way Besai</td>
      <td>90.6</td>
      <td>90.6</td>
      <td>90.6</td>
      <td>96.9</td>
      <td>96.9</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
   </tr>
  <tr>
    <td>5</td>
    <td>PLTA Batu Tegi</td>
    <td>98.6</td>
    <td>98.6</td>
    <td>98.6</td>
    <td>98.9</td>
    <td>98.9</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
  </tr>
  <tr>
    <th colspan="2">Rata Kesiapan FPS&P3K</th>
    <th>96.2</th>
    <th>95.8</th>
    <th>95.5</th>
    <th>97.6</th>
    <th>97.6</th>
      <th>0</th>
      <th>0</th>
      <th>0</th>
      <th>0</th>
      <th>0</th>
      <th>0</th>
      <th>0</th>
  </tr>

</table>
</div>
</div>

<div class="card chart">
<h6>Persentase Monitoring Keseiapan Fire Protection System
</h6>
<canvas id="barchart"></canvas>
</div>

<br>
<br>

<div class="card chart">
  <h6>Rata-Rata Kesiapan Alat Keselamatan UPDK Bandar Lampung Bulan Ini
  </h6>
  <canvas id="barchart3"></canvas>
</div>
  <?= $this->endSection() ?>