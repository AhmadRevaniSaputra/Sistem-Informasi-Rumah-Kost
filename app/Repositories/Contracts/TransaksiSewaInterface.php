<?php

namespace App\Repositories\Contracts;

interface TransaksiSewaInterface
{
    public function createTransaction(array $data);
    public function getTransactionById(int $id);
    public function getAllTransactions();
}
