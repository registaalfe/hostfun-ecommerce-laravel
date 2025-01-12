<?php

namespace App\Repositories;

use App\Models\Transactions_Item;

class TransactionItemRepository implements TransactionItemRepositoryInterface
{
    public function createTransactionItem(array $data)
    {
        return Transactions_Item::create($data);
    }
}
