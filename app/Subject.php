<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable = [
        'name'
    ];

    public function soals()
    {
        return $this->belongsToMany('App\Soal', 'soal_subject');
    }

    public function materis()
    {
        return $this->belongsToMany('App\Materi', 'materi_subject');
    }

}
