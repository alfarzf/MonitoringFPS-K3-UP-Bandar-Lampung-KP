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
        $data = [
            'title' => 'Dashboard',
            // 'laporan' => $this->alatModel->getLaporan()
        ];
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
            // 'laporan' => $this->alatModel->getLaporan()
        ];
        // dd($data);
        return view('petugas/jadwal-pemeriksaan', $data);
    }
}
