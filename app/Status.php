<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama_status'];

    public function karyawan(){
        return $this->hasMany(Karyawan::class,"statud_id", "id");
    }
}
