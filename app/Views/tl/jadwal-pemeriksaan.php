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
                    <h6>Jadwal Pemeriksaan Alat Fire Protection System (FPS) dan Personil Tahun 2024</h6>
                    <div class="filter-container">
                        <div id="filter_div">
                        <form method="post" action="<?= base_url('/tl/jadwal')?>" style="margin-top: 0; margin-bottom:6px;">
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
                <div id="filter_div">
                                <label for="lokasi-filter">Lokasi: </label>
                                <select id="lokasi-filter" name="lokasi">
                                    <option value="1">Kantor UP BL</option>
                                    <option value="2">PLTD/G Tarahan</option>
                                    <option value="3">PLTD Teluk Betung</option>
                                    <option value="4">PLTD Tegineneng</option>
                                    <option value="5">PLTA Way Besai</option>
                                    <option value="6">PLTA Batu Tegi</option>
                                </select>
                            </div>
                <button type="submit">Filter</button>
            </form>
                        </div>
                    </div>

                    <table class="tabel-jadwal">
                        <tr class="header1">
                            <th>No.</th>
                            <th>Nama Alat</th>
                            <th>Lokasi</th>
                            <th>Jadwal Pemeriksaan</th>
                            <th>Status</th>
                        </tr>
                        <?php $no=1; foreach($jadwal as $jad){ ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $jad['nama']?></td>
                                    <td><?= $jad['nama_lokasi']?></td>
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