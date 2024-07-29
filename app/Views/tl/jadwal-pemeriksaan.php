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