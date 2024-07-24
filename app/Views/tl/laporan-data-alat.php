<?= $this->extend('template/template_tl')?>
<?= $this->section('content')?>

<main id="main" class="main">

<div class="pagetitle">
    <h1>Data Alat</h1>
</div><!-- End Page Title -->

<div class="container">

<ul>
    <li>
        <h6>Perangkat dinyatakan siap jika dari hasil inspeksi terakhir menyatakan siap</h6>
    </li>
    <li>
        <h6>Perangkat dinyatakan tidak siap jika dari hasil inspeksi terakhir menyatakan tidak siap atau lebih
            dari (2 + frekuensi pengecekan) minggu perangkat tersebut tidak pernah melakukan inspeksi</h6>
    </li>
</ul>
</div>


<div class="container">

<div class="card-table table">
<h6>Laporan Hasil Monitoring Kesiapan Fire Protection System</h6>
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

<div class="container-export">
<button id="exportButton">Cetak</button>
</div>

<table>
    <tr class="header1">
        <td rowspan="3">No.</td>
        <td rowspan="3">Aspek</td>
        <th colspan="12">Kondisi Alat Kantor UP dan ULPL Mei 2024</th>
        <td rowspan="3">Total</td>
    </tr>
    <tr class="header2">
        <th colspan="2">Kantor UP</th>
        <th colspan="2">PLTD/G Tarahan</th>
        <th colspan="2">PLTD Teluk Betung</th>
        <th colspan="2">PLTD Tegineneng</th>
        <th colspan="2">PLTA Way Besai</th>
        <th colspan="2">PLTA Batu Tegi</th>
    </tr>
    <tr class="header3">
        <th>Baik</th>
        <th>Rusak</th>
        <th>Baik</th>
        <th>Rusak</th>
        <th>Baik</th>
        <th>Rusak</th>
        <th>Baik</th>
        <th>Rusak</th>
        <th>Baik</th>
        <th>Rusak</th>
        <th>Baik</th>
        <th>Rusak</th>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Peralatan Sistem Manual Fire Protection</td>
    </tr>
    <tr>
        <td>1.</td>
        <td>APAT</td>
        <?php $jumlah=0; foreach($laporan as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>APAR/APAB</td>
        <td>20</td>
        <td>0</td>
        <td>39</td>
        <td>0</td>
        <td>42</td>
        <td>0</td>
        <td>47</td>
        <td>0</td>
        <td>41</td>
        <td>8</td>
        <td>26</td>
        <td>0</td>
        <td>223</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Box Hydrant Outdoor</td>
        <td>3</td>
        <td>0</td>
        <td>7</td>
        <td>0</td>
        <td>7</td>
        <td>0</td>
        <td>6</td>
        <td>0</td>
        <td>3</td>
        <td>0</td>
        <td>5</td>
        <td>0</td>
        <td>31</td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Box Hydrant Indoor</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>2</td>
        <td>0</td>
        <td>11</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>15</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Peralatan Sistem Fire Pump</td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Jockey Pump</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>4</td>
    </tr>
    <tr>
        <td>6.</td>
        <td>ELectric Pump</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>4</td>
    </tr>
    <tr>
        <td>7.</td>
        <td>Emergency Diesel Pump</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>5</td>
    </tr>
    <tr>
        <td>8.</td>
        <td>Emergency Sea Water Pump</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>9.</td>
        <td>Portable Pump</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Automation Protection</td>
    </tr>
    <tr>
        <td>10.</td>
        <td>Sprinkle System</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>11.</td>
        <td>Gas Sppression system (CO2/Clean Agent)</td>
        <td>1</td>
        <td>2</td>
        <td>11</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>59</td>
        <td>2</td>
        <td>6</td>
        <td>4</td>
        <td>87</td>
    </tr>
    <tr>
        <td>12.</td>
        <td>Foam System</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>3</td>
        <td>0</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>5</td>
    </tr>
    <tr>
        <td>13.</td>
        <td>Water Spray/Water Mist</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>3</td>
        <td>0</td>
        <td>2</td>
        <td>0</td>
        <td>87</td>
        <td>0</td>
        <td>87</td>
    </tr>
    <tr>
        <td>14.</td>
        <td>Chemical Dust Suppression</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>6</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>6</td>
    </tr>
    <tr>
        <td>15.</td>
        <td>Fire Prevention System (Sergi)</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Alarm and Detection System</td>
    </tr>
    <tr>
        <td>16.</td>
        <td>Panel Alarm System</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>2</td>
        <td>1</td>
        <td>0</td>
        <td>2</td>
        <td>0</td>
        <td>4</td>
        <td>1</td>
        <td>2</td>
        <td>0</td>
        <td>14</td>
    </tr>
    <tr>
        <td>17.</td>
        <td>Heat Detector</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>18.</td>
        <td>Smoke Detector</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>19.</td>
        <td>Flame Detector</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>20.</td>
        <td>Gas Detector</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Vaccum Dust Collector</td>
    </tr>
    <tr>
        <td>21.</td>
        <td>Vaccum Dust Collector</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Vaccum Truck</td>
    </tr>
    <tr>
        <td>22.</td>
        <td>Vaccum Truck</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Fire Truck (Mobil Damkar)</td>
    </tr>
    <tr>
        <td>23.</td>
        <td>Fire Truck (Mobil Damkar)</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Self-Contain Breathing Apparatus (SCBA)</td>
    </tr>
    <tr>
        <td>24.</td>
        <td>Self-Contain Breathing Apparatus (SCBA)</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Ambulance</td>
    </tr>
    <tr>
        <td>25.</td>
        <td>Ambulance</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Pintu Kebakaran</td>
    </tr>
    <tr>
        <td>26.</td>
        <td>Pintu Kebakaran</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Tangga Kebakaran</td>
    </tr>
    <tr>
        <td>27.</td>
        <td>Tangga Kebakaran</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Tempat Berhimpun/ Assembly Point</td>
    </tr>
    <tr>
        <td>28.</td>
        <td>Tempat Berhimpun/ Assembly Point</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Lampu Penerangan Darurat</td>
    </tr>
    <tr>
        <td>29.</td>
        <td>Lampu Penerangan Darurat</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Tanda Petunjuk Arah Jalan Keluar</td>
    </tr>
    <tr>
        <td>30.</td>
        <td>Tanda Petunjuk Arah Jalan Keluar</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Pressurized fan</td>
    </tr>
    <tr>
        <td>31.</td>
        <td>Pressurized Fan</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Smoke Extract Fan dan Intake Fan</td>
    </tr>
    <tr>
        <td>32.</td>
        <td>Smoke Extract Fan dan Intake Fan</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Air Handling Unit (AHU)</td>
    </tr>
    <tr>
        <td>33.</td>
        <td>Air Handling Unit (AHU)</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Fire Damper</td>
    </tr>
    <tr>
        <td>34.</td>
        <td>Fire Damper</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Kesiapan Personil Tanggap Darurat</td>
    </tr>
    <tr>
        <td>35.</td>
        <td>Kesiapan Personil</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
</table>
</div>

</div>

<?= $this->endSection() ?>