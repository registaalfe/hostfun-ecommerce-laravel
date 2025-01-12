<?php

namespace App\Repositories;

use App\Models\PaymentUser;

class PaymentRepository implements PaymentRepositoryInterface
{
    public function createPayment(array $data)
    {
        return PaymentUser::create($data);
    }
}
