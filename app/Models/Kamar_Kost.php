<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kamar_Kost extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kamar_kost';

    protected $fillable = [
        'gambar',
        'harga',
        'is_available',
        'description',
        'kategori_kost_id'
    ];

    public function fasilitasKost()
    {
        return $this->hasMany(FasilitasKost::class);
    }

    public function kategoriKost()
    {
        return $this->belongsTo(KategoriKost::class, 'kategori_kost_id');
    }
    public function kamar_Kost()
{
    return $this->belongsTo(Kamar_Kost::class, 'kamar__kost_id');
}

}