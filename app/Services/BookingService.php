<?php

namespace App\Services;

use App\Models\PenghuniKost;
use App\Models\TransaksiSewa;
use App\Repositories\Contracts\KostRepositoryInterface;
use App\Repositories\Contracts\TransaksiSewaInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookingService
{
    protected $kostRepository;
    protected $transaksiSewaRepository;

    public function __construct(
        KostRepositoryInterface $kostRepository,
        TransaksiSewaInterface $transaksiSewaRepository
    ) {
        $this->kostRepository = $kostRepository;
        $this->transaksiSewaRepository = $transaksiSewaRepository;
    }

    public function storeBooking(array $validatedData)
    {
        DB::beginTransaction();

        try {
            $booking = TransaksiSewa::create([
                'nama_penyewa' => $validatedData['nama_penyewa'],
                'telepon_penyewa' => $validatedData['telepon_penyewa'],
                'total_bayar' => $validatedData['total_bayar'],
                'kamar_id' => $validatedData['kamar_id'],
                'lunas' => $validatedData['lunas'] ?? false,
            ]);

            PenghuniKost::create([
                'nama_penghuni' => $validatedData['nama_penghuni'],
                'transaksi_id' => $booking->id,
            ]);

            DB::commit();

            return $booking;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Booking creation failed: " . $e->getMessage());
            throw $e;
        }
    }

    public function getBookingDetails(int $bookingId)
    {
        return $this->transaksiSewaRepository->findBookingWithDetails($bookingId);
    }

    public function finalizePayment(array $paymentData)
    {
        $booking = $this->transaksiSewaRepository->find($paymentData['transaksi_id']);

        if (!$booking) {
            throw new \Exception('Transaksi tidak ditemukan');
        }

        DB::beginTransaction();

        try {
            $booking->update([
                'bukti_pembayaran' => $paymentData['bukti_pembayaran'],
                'lunas' => true,
            ]);

            DB::commit();
            return $booking;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Payment processing failed: " . $e->getMessage());
            throw $e;
        }
    }

    public function getMyBookingDetails(array $validated)
    {
        return $this->transaksiSewaRepository->findByTrxIdAndPhoneNumber(
            $validated['transaksi_id'],
            $validated['telepon_penyewa']
        );
    }
}
