<?php

namespace App\Repositories;

use App\Models\TransaksiSewa;
use App\Repositories\Contracts\TransaksiSewaInterface;

class Transaksi_Sewa implements TransaksiSewaInterface
{
    public function createTransaction(array $data)
    {
        return TransaksiSewa::create($data); // Membuat transaksi baru
    }

    public function getTransactionById(int $id)
    {
        return TransaksiSewa::find($id); // Mendapatkan transaksi berdasarkan ID
    }

    public function getAllTransactions()
    {
        return TransaksiSewa::all(); // Mengambil semua transaksi
    }
}
