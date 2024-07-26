<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            // 'laporan' => $this->alatModel->getLaporan()
        ];
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
        $data = [
            'title' => 'Dashboard',
            // 'laporan' => $this->alatModel->getLaporan()
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
