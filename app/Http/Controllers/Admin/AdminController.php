<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jabatan;
use App\Karyawan;
use App\Pendidikan;
use App\Status;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexKaryawan(){
//        mengambil semua data dari table jabatan
        $jabatan    = Jabatan::all();
        $status     = Status::all();
        $pendidikan = Pendidikan::all();
        return view('pages.admin.karyawan.karyawan', compact(
            [
                'jabatan',
                'status',
                'pendidikan'
            ]
        ));
    }

    public function postKaryawan(Request $request){
//        create karyawan
        $data = $request->all();
        $jabatan        = Jabatan::with('karyawan')->where('nama_jabatan', $request->jabatan)->first();
        $jabatan_id     = $jabatan['id'];
        $status         = Status::with('karyawan')->where('nama_status', $request->status)->first();
        $status_id      = $status['id'];
        $pendidikan     = Pendidikan::with('karyawan')->where('pendidikan_terakhir', $request->pendidikan)->first();
        $pendidikan_id   = $pendidikan['id'];
        $dataKaryawan   = new Karyawan();
        $dataKaryawan->nama = $request->nama;
        $dataKaryawan->email = $request->email;
        $dataKaryawan->alamat = $request->alamat;
        $dataKaryawan->umur = $request->umur;
        $dataKaryawan->jenis_kelamin = $request->jenis_kelamin;
        $dataKaryawan->email = $request->email;
        $dataKaryawan->tgl_lahir = $request->tgl_lahir;
        $dataKaryawan->tgl_masuk = $request->tgl_masuk;
        $dataKaryawan->no_telp = $request->nomor_telepon;
        $dataKaryawan->posisi_id = $jabatan_id;
        $dataKaryawan->status_id = $status_id;
        $dataKaryawan->pendidikan_id = $pendidikan_id;
        $dataKaryawan->save();
        return redirect(route('karyawan'));
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
