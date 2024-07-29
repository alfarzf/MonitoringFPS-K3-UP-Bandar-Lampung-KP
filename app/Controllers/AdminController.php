<?php

namespace App\Controllers;
use App\Models\LaporanModel;
use App\Models\AlatModel;
use App\Models\PetugasModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\Shield\Entities\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public $laporanModel;
    public $alatModel;
    public $petugasModel;

    public function __construct(){
        $this->laporanModel = new LaporanModel();
        $this->alatModel = new AlatModel();
        $this->petugasModel = new PetugasModel();
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
        return view('admin/dashboard-user', $data);
    }

    public function alat()
    {
        $data = [
            'title' => 'Dashboard',
            // 'laporan' => $this->alatModel->getLaporan()
        ];
        return view('admin/kelola-data-alat', $data);
    }

    public function petugas()
    {
        

        $user = auth()->user();
        $userId = $user->id;
        // dd($userId);
        $data = [
            'title' => 'Dashboard',
            'petugas' => $this->petugasModel->getPetugas()
        ];
        return view('admin/kelola-data-petugas', $data);
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Dashboard',
            // 'laporan' => $this->alatModel->getLaporan()
        ];
        return view('admin/kelola-jadwal-pemeriksaan', $data);
    }
}
