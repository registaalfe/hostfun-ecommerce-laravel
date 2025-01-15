<?php

namespace App\Repositories;

interface TransactionRepositoryInterface
{
    public function createTransaction(array $data);
    public function findTransactionById($id);
}
