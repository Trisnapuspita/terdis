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

    public function subjects()
    {
        return $this->BelongstoMany('App\Subject', 'materi_subject');
    }
}
