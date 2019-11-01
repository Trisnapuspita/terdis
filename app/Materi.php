<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsToMany('App\Kelas');
    }
}
