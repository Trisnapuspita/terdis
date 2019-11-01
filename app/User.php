<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'kelas_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        if ($this->role == 2) return true;
        return false;
    }

    public function isPengajar()
    {
        if ($this->role == 3) return true;
        return false;
    }

    public function soals()
    {
        return $this->belongsToMany('App\Soal')->withTimeStamps()->withPivot('nilai');
    }

    public function kelas() {
        return $this->belongsTo('App\Kelas');
    }

    public function kelasid ()
    {
        return $this->kelas_id;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = \Hash::make($password);
    // }
}
