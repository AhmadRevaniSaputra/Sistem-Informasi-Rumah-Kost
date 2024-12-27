<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Keuntungan_Kost extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'keuntungan_kost';

    protected $fillable = [
        'Dapat_Diskon',
        'description',
        'kategori_kost_id'
    ];
}
