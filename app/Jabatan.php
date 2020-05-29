<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jabatan extends Model
{
    use SoftDeletes;
    protected $table = "nama_jabatan";
    protected $fillable = ['nama_jabatan'];

    public function karyawan(){
        return $this->hasMany(Karyawan::class,"posisi_id", "id");
    }
}
