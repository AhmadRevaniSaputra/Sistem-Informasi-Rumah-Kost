<?php

namespace App\Repositories;

use App\Models\KamarKost;
use App\Repositories\Contracts\KostRepositoryInterface;

class KostRepository implements KostRepositoryInterface
{
    public function getAllKosts()
    {
        return KamarKost::all(); // Mengambil semua kost dari tabel 'kamar_kost'
    }

    public function findKostById(int $id)
    {
        return KamarKost::find($id); // Mencari kost berdasarkan ID
    }

    public function getAvailableKosts()
    {
        return KamarKost::where('availability', '>', 0)->get(); // Kost yang masih tersedia
    }
}