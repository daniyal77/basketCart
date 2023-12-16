<?php

namespace App\Service\Payment\Method;

use App\Service\Payment\PaymentStrategyInterface;

class Paypal implements PaymentStrategyInterface
{

    public function getBalance (): bool
    {
        return true;
        // TODO: Implement balance() method.
    }

    public function withdraw (int $amount): int
    {
        return $amount;
        // TODO: Implement withdraw() method.
    }

    public function depsoit (): bool
    {
        return true;

        // TODO: Implement depsoit() method.
    }
}
