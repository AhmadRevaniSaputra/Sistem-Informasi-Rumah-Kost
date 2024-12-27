<?php

namespace App\Providers;

use App\Models\KategoriKost;
use App\Repositories\Contracts\KategoriKostInterface;
use App\Repositories\Contracts\KostRepositoryInterface;
use App\Repositories\Contracts\TransaksiSewaInterface;
use App\Repositories\Kategori_Kost;
use App\Repositories\KostRepository;
use App\Repositories\Transaksi_Sewa;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Registrasi repository untuk Kost dan Transaksi Sewa
        $this->app->singleton(KategoriKostInterface::class, Kategori_Kost::class);
        $this->app->singleton(KostRepositoryInterface::class, KostRepository::class);
        $this->app->singleton(TransaksiSewaInterface::class, Transaksi_Sewa::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
