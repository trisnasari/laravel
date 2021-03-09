<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Data Mahasiswa";
        $data['mahasiswa'] = array(
            'nim' => '1905021018',
            'nama' => 'Trisna Sari'
        );

        $data['user'] = '';
        return view('admin.beranda', compact('title', 'data'));
    }

    public function dashboard()
    {
        $title = "Data Mahasiswa";

        return view('admin.dashboard', compact('title'));
    }
}
