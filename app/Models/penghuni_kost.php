<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class penghuni_kost extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'penghuni_kost';

    protected $fillable = [
        'Nama',
        'Nomor_Telepon',
        'email',
        'transaksi_sewa_id'
    ];

    public function transaksiSewa()
    {
        return $this->belongsTo(transaksi_sewa::class);
    }
};