<?php

namespace App\Repositories;

use App\Models\Transactions;

class TransactionRepository implements TransactionRepositoryInterface
{
    public function createTransaction(array $data)
    {
        return Transactions::create($data);
    }

    public function findTransactionById($id)
    {
        return Transactions::find($id);
    }
}
