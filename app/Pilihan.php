<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilihan extends Model
{
    protected $guarded = [];
    protected $fillable = ['soal', 'gambar', 'opsiA', 'opsiB', 'opsiC', 'opsiD', 'opsiBenar', 'pembahasan', 'soal_id', 'gambar_pembahasan'];

    public function soal()
    {
        return $this->belongsTo('App\Soal');
    }
}
