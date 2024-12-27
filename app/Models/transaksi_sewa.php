<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class transaksi_sewa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transaksi_sewa';

    protected $fillable = [
        'total_harga',
        'tanggal_mulai',
        'tanggal_selesai',
        'kamar__kost_id'
    ];

    public function kategoriKost()
    {
        return $this->belongsTo(KategoriKost::class);
    }
    public function kamar_Kost()
    {
        return $this->belongsTo(Kamar_Kost::class, 'kamar__kost_id'); // Adjust the foreign key if necessary
    }
}
