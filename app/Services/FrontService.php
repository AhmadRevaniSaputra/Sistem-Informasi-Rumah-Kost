<?php

namespace App\Services;

use App\Repositories\Contracts\KostRepositoryInterface;
use App\Repositories\Contracts\KategoriKostInterface;

class FrontService
{
    protected $kostRepository;
    protected $kategoriKostRepository;

    public function __construct(
        KostRepositoryInterface $kostRepository,
        KategoriKostInterface $kategoriKostRepository
    ) {
        $this->kostRepository = $kostRepository;
        $this->kategoriKostRepository = $kategoriKostRepository;
    }

    public function getFrontPageData()
    {
        // Mengambil semua kategori kost
        $categories = $this->kategoriKostRepository->getAllCategories();

        // Mengambil kost terbaru
        
        return compact('categories');
    }
}
