<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soal_user extends Model
{
    protected $table = 'soal_user';

    protected $fillable = ['user_id', 'soal_id', 'nilai'];
}
