<?php

namespace App\Controllers;
use CodeIgniter\Shield\Entities\User;

class Home extends BaseController
{
    public function index()
    {

        $auth = service('auth');
        $user = $auth->user();
        
        if ($user->inGroup('admin')) {
            return redirect()->to('/admin');
        } elseif ($user->inGroup('tl')) {
            return redirect()->to('/tl');
        } else {
            return redirect()->to('/petugas');
        }
    }
    public function login() {
        return view('pages-login');
    }
}
