<?= $this->extend('template/template_tl')?>
<?= $this->section('content')?>

<main id="main" class="main">

<div class="pagetitle">
    <h1>Rekap Laporan</h1>
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
<h6>Rekap Laporan Pemeriksaan Alat Fire Protection System (FPS) dan Personil Tahun 2024</h6>

<div class="container-filter-button">
<div id="filter_div">
<form method="post" action="<?= base_url('/tl/laporan')?>">
                <label for="bulan-filter">Waktu: </label>
                <select id="bulan-filter" name="bulan">
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
                <button type="submit">Filter</button>
            </form>
</div>

<div class="btn-container">
<a href="<?= base_url('/tl/laporan/export/' . $bulan) ?>" class="btn btn-primary btn-smaller">
    Cetak Laporan
</a>
</div>
</div>
<table class="tabel-alat-tl">
<tr class="header1">
    <td rowspan="3">No.</td>
    <td rowspan="3">Aspek</td>
    <th colspan="12">Kondisi Alat Kantor UP dan ULPL Mei 2024</th>
    <th rowspan="3">Total</th>
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
    <th style="background-color: #99E6B3;">Baik</th>
    <th style="background-color: #ffdd66;">Rusak</th>
    <th style="background-color: #99E6B3;">Baik</th>
    <th style="background-color: #ffdd66;">Rusak</th>
    <th style="background-color: #99E6B3;">Baik</th>
    <th style="background-color: #ffdd66;">Rusak</th>
    <th style="background-color: #99E6B3;">Baik</th>
    <th style="background-color: #ffdd66;">Rusak</th>
    <th style="background-color: #99E6B3;">Baik</th>
    <th style="background-color: #ffdd66;">Rusak</th>
    <th style="background-color: #99E6B3;">Baik</th>
    <th style="background-color: #ffdd66;">Rusak</th>
</tr>
<tr>
    <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Peralatan Sistem Fire Fighting</td>
</tr>
<tr style="background-color: darkgrey;">
    <th></th>
    <th></th>
    <th colspan="2">75%</th>
    <th colspan="2">75%</th>
    <th colspan="2">75%</th>
    <th colspan="2">75%</th>
    <th colspan="2">75%</th>
    <th colspan="2">75%</th>
    <th></th>
</tr>
<tr>
    <th colspan="2">Peralatan Sistem Manual Fire Protection</th>
    <th colspan="2">15%</th>
    <th colspan="2">15%</th>
    <th colspan="2">15%</th>
    <th colspan="2">15%</th>
    <th colspan="2">15%</th>
    <th colspan="2">15%</th>
    <th></th>
</tr>
            <tr>
        <td>1.</td>
        <td><?= $alat[0][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[0] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
    </tr>
    <tr>
    <td>2.</td>
    <td><?= $alat[1][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[1] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>3.</td>
                <td><?= $alat[2][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[2] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>4.</td>
                <td><?= $alat[3][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[3] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <th colspan="2">Peralatan Sistem Fire Pump</th>
                <th colspan="2">35%</th>
                <th colspan="2">35%</th>
                <th colspan="2">35%</th>
                <th colspan="2">35%</th>
                <th colspan="2">35%</th>
                <th colspan="2">35%</th>
                <th></th>
            </tr>
            <tr>
                <td>5.</td>
                <td><?= $alat[4][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[4] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>6.</td>
                <td><?= $alat[5][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[5] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>7.</td>
                <td><?= $alat[6][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[6] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>8.</td>
                <td><?= $alat[7][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[7] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>9.</td>
                <td><?= $alat[8][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[8] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
            <th colspan="2">Automation Protection</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th></th>
        </tr>
            <tr>
                <td>10.</td>
                <td><?= $alat[9][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[9] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>11.</td>
                <td><?= $alat[10][0]['nama'] ?></td>
        <?php $jumlah=0; foreach($alat[10] as $lapor){ ?>
            <td><?= $lapor['jumlah_baik'] ?></td>
            <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
        <?php } ?>
        <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>12.</td>
                <td><?= $alat[11][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[11] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>13.</td>
                <td><?= $alat[12][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[12] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>14.</td>
                <td><?= $alat[13][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[13] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>15.</td>
                <td><?= $alat[14][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[14] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
            <th colspan="2">Alarm and Detection System</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th></th>
        </tr>
            <tr>
                <td>16.</td>
                <td><?= $alat[15][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[15] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>17.</td>
                <td><?= $alat[16][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[16] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>18.</td>
                <td><?= $alat[17][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[17] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>19.</td>
                <td><?= $alat[18][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[18] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>20.</td>
                <td><?= $alat[19][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[19] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>21.</td>
                <td><?= $alat[20][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[20] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>22.</td>
                <td><?= $alat[21][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[21] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>23.</td>
                <td><?= $alat[22][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[22] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>24.</td>
                <td><?= $alat[23][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[23] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>25.</td>
                <td><?= $alat[24][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[24] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
            <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Sarana Penyelamatan Jiwa</td>
        </tr>
        <tr style="background-color: darkgrey;">
            <th></th>
            <th></th>
            <th colspan="2">10%</th>
            <th colspan="2">10%</th>
            <th colspan="2">10%</th>
            <th colspan="2">10%</th>
            <th colspan="2">10%</th>
            <th colspan="2">10%</th>
            <th></th>
        </tr>
            
            <tr>
                <td>26.</td>
                <td><?= $alat[25][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[25] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>27.</td>
                <td><?= $alat[26][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[26] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>28.</td>
                <td><?= $alat[27][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[27] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>29.</td>
                <td><?= $alat[28][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[28] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>30.</td>
                <td><?= $alat[29][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[29] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>31.</td>
                <td><?= $alat[30][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[30] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>32.</td>
                <td><?= $alat[31][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[31] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>33.</td>
                <td><?= $alat[32][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[32] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
                <td>34.</td>
                <td><?= $alat[33][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[33] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
            <tr>
            <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Kesiapan Personil Tanggap Darurat</td>
        </tr>
        <tr style="background-color: darkgrey;">
            <th></th>
            <th></th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th colspan="2">15%</th>
            <th></th>
        </tr>
            <tr>
                <td>35.</td>
                <td><?= $alat[34][0]['nama'] ?></td>
                <?php $jumlah=0; foreach($alat[34] as $lapor){ ?>
                <td><?= $lapor['jumlah_baik'] ?></td>
                <td><?= $lapor['jumlah_buruk']; $jumlah += $lapor['jumlah_baik'] + $lapor['jumlah_buruk']?></td>
                    <?php } ?>
                <td><?= $jumlah ?></td>
            </tr>
        </table>
    </div>

</div>

<?= $this->endSection() ?>