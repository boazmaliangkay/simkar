<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jabatan;
use App\Karyawan;
use App\Status;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexKaryawan(){
//        mengambil semua data dari table jabatan
        $jabatan = Jabatan::all();
        $status = Status::all();
        return view('pages.admin.karyawan.karyawan', compact(
            [
                'jabatan',
                'status'
            ]
        ));
    }

    public function postKaryawan(Request $request){
        $dataKaryawan = new Karyawan();
        $dataKaryawan['name'] = $request->nama;
        $dataKaryawan['alamat'] = $request->alamat;
        dd($request->all());
    }

    public function indexJabatan(){
        $jabatan = Jabatan::all();
        return view('pages.admin.karyawan.jabatan', compact('jabatan'));
    }

    public function postJabatan(Request $request){
        $jabatan = new Jabatan();
        $jabatan->nama_jabatan = $request->jabatan;
        $jabatan->save();
        return redirect(route('jabatan'));
    }

    public function editJabatan(Request $request, $id){
        $jabatan = Jabatan::find($id);
        $jabatan->nama_jabatan = $request->jabatan;
        $jabatan->save();
        return redirect(route('jabatan'));
    }

    public function deleteJabatan($id){
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect(route('jabatan'));
    }

    public function indexPendidikan(){
        return view('pages.admin.karyawan.pendidikan');
    }

    public function indexStatus(){
        return view('pages.admin.karyawan.status');
    }
}
