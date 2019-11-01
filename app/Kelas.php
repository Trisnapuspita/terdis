<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//#TODO buat model pivot sama relation di model kelas dan materi + soalnya

class Kelas extends Model
{
    protected $table = 'kelass';
    protected $guarded = [];

    public function materis()
    {
        return $this->BelongsToMany('App\Materi', 'kelas_materi');
    }

    public function soals()
    {
        return $this->BelongstoMany('App\Soal', 'kelas_soal');
    }

    public function pendaftarans()
    {
        return $this->hasMany('App\Pendaftaran');
    }
}
