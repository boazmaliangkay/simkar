<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexKaryawan(){
        return view('pages.admin.karyawan.karyawan');
    }

    public function indexJabatan(){
        return view('pages.admin.karyawan.jabatan');
    }

    public function indexPendidikan(){
        return view('pages.admin.karyawan.pendidikan');
    }

    public function indexStatus(){
        return view('pages.admin.karyawan.status');
    }
}
