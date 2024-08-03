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
<form method="post" action="<?= base_url('/tl/laporan')?>" style="margin-top: 0;">
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

<div class="btn-container">
<a href="<?= base_url('/tl/laporan/export/' . $no_bulan) ?>" class="btn btn-primary btn-smaller">
    Cetak Laporan
</a>
</div>
</div>
<table class="tabel-alat-tl">
<tr class="header1">
    <td rowspan="3">No.</td>
    <td rowspan="3">Aspek</td>
    <th colspan="12">Kondisi Alat Kantor UP dan ULPL <?= $bulan ?> 2024</th>
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
    <?php foreach($alat1 as $al1){ ?>
    <th colspan="2"><?= $al1[0]['rasio'].'%' ?></th>
    <?php } ?>
</tr>
<?php $no=1; for($j=0; $j < 35; $j++){ ?>
    <?php if($alat[$j][0]['nama']=="Jockey Pump"){
              echo '<tr>
                <th colspan="2">Peralatan Sistem Fire Pump</th>';
                foreach($alat2 as $al2){ ?>
                    <th colspan="2"><?= $al2[0]['rasio'].'%' ?></th>
                    <?php } ?>
                <?php echo '</tr>';
            }if($alat[$j][0]['nama']=="Sprinkle System"){
              echo '<tr>
            <th colspan="2">Automation Protection</th>';
            foreach($alat3 as $al3){ ?>
                    <th colspan="2"><?= $al3[0]['rasio'].'%' ?></th>
                    <?php } ?>
                <?php echo '</tr>';
            }if($alat[$j][0]['nama']=="Panel Alarm System"){
              echo '<tr>
            <th colspan="2">Alarm and Detection System</th>';
            foreach($alat4 as $al4){ ?>
                    <th colspan="2"><?= $al4[0]['rasio'].'%' ?></th>
                    <?php } ?>
                <?php echo '</tr>';
            }if($alat[$j][0]['nama']=="Pintu Kebakaran"){
              echo '<tr>
            <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Sarana Penyelamatan Jiwa</td>
        </tr>
        <tr style="background-color: darkgrey;">
            <th></th>
            <th></th>';
            foreach($alat5 as $al5){ ?>
                    <th colspan="2"><?= $al5[0]['rasio'].'%' ?></th>
                    <?php } ?>
                <?php
                echo '<th></th>'; 
                echo '</tr>';

            }if($alat[$j][0]['nama']=="Kesiapan Personil"){
              echo '<tr>
            <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Kesiapan Personil Tanggap Darurat</td>
        </tr>
        <tr style="background-color: darkgrey;">
            <th></th>
            <th></th>';
            foreach($alat6 as $al6){ ?>
                    <th colspan="2"><?= $al6[0]['rasio'].'%' ?></th>
                    <?php } ?>
                <?php
                echo '<th></th>'; 
                echo '</tr>';
            }
             ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $alat[$j][0]['nama'] ?? "Kosong" ?></td>
        <?php $jumlah=0; for($i=0; $i < 6; $i++){ ?>
            <td><?= $alat[$j][$i]['jumlah_baik'] ?? 0 ?></td>
            <td><?= $alat[$j][$i]['jumlah_buruk'] ?? 0; $jumlah += ($alat[$j][$i]['jumlah_baik'] ?? 0) + ($alat[$j][$i]['jumlah_buruk'] ?? 0) ?></td>
        <?php } ?>
        <td><?= $jumlah ?? 0 ?></td>
    </tr>
    <?php } ?>
    </tr>
            <th colspan="2">Total Kesiapan</th>
            <th colspan="2"><?= ($UP ?? 0) . '%' ?></th>
            <th colspan="2"><?= ($Tarahan ?? 0) . '%' ?></th>
            <th colspan="2"><?= ($Teluk ?? 0) . '%' ?></th>
            <th colspan="2"><?= ($Tegi ?? 0) . '%' ?></th>
            <th colspan="2"><?= ($Way ?? 0) . '%' ?></th>
            <th colspan="2"><?= ($Batu ?? 0) . '%' ?></th>
            <th>%</th>
            </tr>
        </table>
    </div>

</div>

<?= $this->endSection() ?>