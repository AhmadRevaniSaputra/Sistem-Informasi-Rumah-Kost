<?php

namespace App\Repositories\Contracts;

interface KostRepositoryInterface
{
    public function getAllKosts();
    public function findKostById(int $id);
    public function getAvailableKosts();
}