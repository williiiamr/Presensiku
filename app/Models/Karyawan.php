<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Karyawan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'karyawan';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'nama',
        'jabatan',
        'no_hp',
        'foto',
        'password'
    ];

    protected $hidden = [
        'password',
        'token',
    ];

    public $timestamps = false;
    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
