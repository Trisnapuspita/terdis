<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = [
        'nm_soal'
    ];


    public function pilihans()
    {
        return $this->hasMany('App\Pilihan');
    }

    public function kelas()
    {
        return $this->belongsToMany('App\Kelas');
    }

    public function subjects()
    {
        return $this->BelongstoMany('App\Subject', 'soal_subject');
    }
}
