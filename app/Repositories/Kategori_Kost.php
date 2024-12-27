<?php

namespace App\Repositories;

use App\Models\KategoriKost;
use App\Repositories\Contracts\KategoriKostInterface;

class Kategori_Kost implements KategoriKostInterface
{
    public function getAllCategories()
    {
        return KategoriKost::all(); // Mengambil semua kategori dari tabel 'kategori_kost'
    }
}
