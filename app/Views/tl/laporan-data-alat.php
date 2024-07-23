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
                <td>0</td>
                <td>0</td>
                <td>4</td>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>6</td>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>14</td>
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
        </table>

        <div class="container-export">
            <button id="exportButton">Cetak</button>
        </div>
    </div>

</div>
<?= $this->endSection() ?>