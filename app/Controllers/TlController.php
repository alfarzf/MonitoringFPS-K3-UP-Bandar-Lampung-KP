<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanModel;
use App\Models\AlatModel;
use CodeIgniter\HTTP\ResponseInterface;

class TlController extends BaseController
{
    public $laporanModel;
    public $alatModel;

    public function __construct(){
        $this->laporanModel = new LaporanModel();
        $this->alatModel = new AlatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            // 'laporan' => $this->alatModel->getLaporan()
        ];
        return view('tl/dashboard-user', $data);
    }
    public function laporan(){

        $data = [
            'title' => 'Laporan',
            'laporan' => $this->alatModel->getDataLaporan($nama='APAT', $m=1)
        ];
        // dd($data['laporan']);
        return view('tl/laporan-data-alat', $data);
    }

    public function jadwal(){

        $data = [
            'title' => 'Jadwal Pemeriksaan',
            // 'laporan' => $this->alatModel->getLaporan()
        ];
        // dd($data);
        return view('tl/jadwal-pemeriksaan', $data);
    }

    public function petugas(){

        $data = [
            'title' => 'Daftar Petugas',
            // 'laporan' => $this->alatModel->getLaporan()
        ];
        // dd($data);
        return view('tl/jadwal-pemeriksaan', $data);
    }

    public function insert_data_alat(){
        $alat=['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor', 'Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump', 'Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)', 'Panel Alarm System', 'Heat Detector' , 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance', 'Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper', 'Kesiapan Personil'];
        // dd($alat);
        $no=1;
        for ($i = 1; $i <= 6; $i++) {
            foreach ($alat as $al) {
            $data=[
                'id' => $no++,
                'nama' => $al,
                'jumlah' => rand(10, 30),
                'lokasi' => $i
            ];
            // dd($al);
            $this->alatModel->saveAlat($data);
            }
        }
        $judul=[
            'title' => 'Jadwal'
        ];
        return view('tl/jadwal-pemeriksaan', $judul);
    }

    public function insert_data_laporan(){
        $alat=['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor', 'Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump', 'Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)', 'Panel Alarm System', 'Heat Detector' , 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance', 'Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper', 'Kesiapan Personil'];
        // dd($alat);
        $no=1;
        // $data_alat=$this->alatModel->getAlat(null, null, 1);

        // dd($data_alat);
        for ($i = 1; $i <= 6; $i++) {
            $data_alat=$this->alatModel->getAlat(null, null, $i);
            foreach ($data_alat as $da) {
            $data=[
                'id_alat' => $da['id'],
                'NID' => 123,
                'tanggal_periksa' => '2024-01-09',
                'jumlah_baik' => $da['jumlah'],
                'jumlah_buruk' => 0,
                'catatan' => 'OKE Semua'
            ];
            // dd($al);
            $this->laporanModel->saveLaporan($data);
            }
        }


        $judul=[
            'title' => 'Jadwal'
        ];
        return view('tl/jadwal-pemeriksaan', $judul);
    }

}
