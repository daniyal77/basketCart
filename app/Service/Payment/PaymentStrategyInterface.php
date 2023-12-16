<?php

namespace App\Service\Payment;

interface PaymentStrategyInterface
{
    public function getBalance ();

    public function withdraw (int $amount);

    public function depsoit ();
}
