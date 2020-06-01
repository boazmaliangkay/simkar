<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;
    protected $table    = "status";
    protected $fillable = ['nama_status'];

    public function karyawan(){
        return $this->hasMany(Karyawan::class,"posisi_id", "id");
    }
}
