<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $guarded = [];


    public function pilihans()
    {
        return $this->hasMany('App\Pilihan');
    }

    public function kelas()
    {
        return $this->belongsToMany('App\Kelas');
    } 
}
