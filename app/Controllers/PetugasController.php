<?php

namespace App\Controllers;
use App\Models\LaporanModel;
use App\Models\AlatModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PetugasController extends BaseController
{
    public $laporanModel;
    public $alatModel;

    public function __construct(){
        $this->laporanModel = new LaporanModel();
        $this->alatModel = new AlatModel();
    }

    public function index()
    {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12];
        $data = [
            'title' => 'Dashboard',
            'UP' => [],
            'Tarahan' => [],
            'Teluk' => [],
            'Tegi' => [],
            'Way' => [],
            'Batu' => [],
        ];
        foreach ($items as $item) {
            $data['UP'][] = $this->alatModel->getTotalRasio($item, 1);
        }
        foreach ($items as $item) {
            $data['Tarahan'][] = $this->alatModel->getTotalRasio($item, 2);
        }
        foreach ($items as $item) {
            $data['Teluk'][] = $this->alatModel->getTotalRasio($item, 3);
        }
        foreach ($items as $item) {
            $data['Tegi'][] = $this->alatModel->getTotalRasio($item, 4);
        }
        foreach ($items as $item) {
            $data['Way'][] = $this->alatModel->getTotalRasio($item, 5);
        }
        foreach ($items as $item) {
            $data['Batu'][] = $this->alatModel->getTotalRasio($item, 6);
        }
        // for ($i = 1; $i <= 6; $i++) {
        //     // dd('hitung'.$i);
        //     $fungsi='hitung'.$i;
        //     $data[$fungsi]=$this->alatModel->$fungsi(1,1);
        // }
        // $data['laporan']=$this->alatModel->hitung2(1,1);
        // dd($data);
        return view('petugas/dashboard-user', $data);
    }

    public function laporan_create(){

        $data = [
            'title' => 'Laporan',
            'laporan' => $this->alatModel->getLaporan()
        ];
        // dd($data);
        return view('petugas/laporan-kondisi-alat', $data);
    }

    public function jadwal(){

        $data = [
            'title' => 'Jadwal Pemeriksaan',
            'jadwal' => $this->alatModel->getJadwal(null, $m=1, $lokasi=1)
        ];
        // dd($data);
        return view('petugas/jadwal-pemeriksaan', $data);
    }

    
}
