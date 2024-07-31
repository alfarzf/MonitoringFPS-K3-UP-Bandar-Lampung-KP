<?php

namespace App\Controllers;
use App\Models\LaporanModel;
use App\Models\AlatModel;
use App\Models\PetugasModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PetugasController extends BaseController
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
        return view('petugas/dashboard-user', $data);
    }

    public function laporan_create(){
        $user = auth()->user();
        $userId = $user->id;
        $petugas = $this->petugasModel->getPetugas($userId);
        // dd($petugas[0]['id_lokasi']);
        $data = [
            'title' => 'Laporan',
            'laporan' => $this->alatModel->getLaporan(null, 1 , $petugas[0]['id_lokasi']),
            'user' => $petugas
        ];
        
        if($this->request->getPost()){
            $m = $this->request->getPost('bulan');
            // dd($m);
            $data['laporan'] = $this->alatModel->getLaporan(null, $m , $petugas[0]['id_lokasi']);
        }
        // $data = [
        //     'title' => 'Laporan',
        //     'laporan' => $this->alatModel->getLaporan(null, 1 , 1)
        // ];
        // dd($data['laporan']);
        return view('petugas/laporan-kondisi-alat', $data);
    }

    public function laporan_update(){
        $validation = \Config\Services::validation();

    $validation->setRules([
        'jadwal_periksa' => 'required',
        'jumlah_baik' => 'required|numeric',
        'jumlah_buruk' => 'required|numeric',
        'keterangan' => 'required|max_length[500]',
        'gridCheck' => 'required'
    ]);
    if ($validation->withRequest($this->request)->run()) {
        // Form is valid, handle data processing
        // For example, save data to the database
        // Return a success message
        if($this->request->getVar('id_laporan')==null){
            $data=[
                'id_alat' => $this->request->getVar('id_alat'),
                'NID' => $this->request->getVar('NID'),
                'tanggal_periksa' => $this->request->getVar('jadwal_periksa'),
                'jumlah_baik' => $this->request->getVar('jumlah_baik'),
                'jumlah_buruk' => $this->request->getVar('jumlah_buruk'),
                'catatan' => $this->request->getVar('keterangan'),
            ];
            $this->laporanModel->saveLaporan($data);
        }else{
            $data=[
                'jumlah_baik' => $this->request->getVar('jumlah_baik'),
                'jumlah_buruk' => $this->request->getVar('jumlah_buruk'),
                'catatan' => $this->request->getVar('keterangan'),
            ];
            $this->laporanModel->updateLaporan($data, $this->request->getVar('id_laporan'));
        }
        return $this->response->setJSON(['success' => true]);
    } else {
        // Validation failed, return errors
        return $this->response->setJSON(['errors' => $validation->getErrors()]);
    }
    }

    public function jadwal(){
        $user = auth()->user();
        $userId = $user->id;
        $petugas = $this->petugasModel->getPetugas($userId);

        $data = [
            'title' => 'Jadwal Pemeriksaan',
            'jadwal' => $this->alatModel->getJadwal(null, $m=1, $petugas[0]['id_lokasi'])
        ];
        if($this->request->getPost()){
            $m = $this->request->getPost('bulan');
            // dd($m);
            $data['jadwal'] = $this->alatModel->getJadwal(null, $m , $petugas[0]['id_lokasi']);
        }
        // dd($data['jadwal']);
        // dd($data);
        return view('petugas/jadwal-pemeriksaan', $data);
    }

    
}
