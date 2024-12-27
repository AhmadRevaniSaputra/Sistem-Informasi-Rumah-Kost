<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'profile';

    protected $fillable = [
        'nim',
        'kelas',
        'foto_profile',
        'apa_yang_dikerjakan'
    ];
}