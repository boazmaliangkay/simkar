<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes;
    protected $table ="data_karyawan";
    protected $fillable=["nama","alamat","umur","jenis_kelamin","jenis_kelamin","email","no_telp","tgl_lahir","posisi_id","tgl_masuk","status_id","pendidikan_id"];

    public function status(){
        return $this->belongsTo(Status::class, "status_id", "id");
    }

    public function pendidikan(){
        return $this->belongsTo(Pendidikan::class, "pendidikan_id", "id");
    }

    public function posisi(){
        return $this->belongsTo(Jabatan::class, "posisi_id", "id");
    }




}
