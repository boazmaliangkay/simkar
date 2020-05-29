<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendidikan extends Model
{
    use SoftDeletes;
    protected $table = "pendidikan";
    protected $fillable = ['pendidikan_terakhir'];

    public function karyawan(){
        return $this->hasMany(Karyawan::class,"pendidikan_id", "id");
    }
}
