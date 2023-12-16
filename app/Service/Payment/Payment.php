<?php

namespace App\Service\Payment;

class Payment
{
    private $strategy;

    public function __construct (PaymentStrategyInterface $paymentStrategy)
    {
        $this->strategy = $paymentStrategy;
    }

    public function getBalance ()
    {
        return $this->strategy->getBalance();
    }

    public function withdraw ($amount)
    {
        return $this->strategy->withdraw($amount);
    }

    public function depsoit ()
    {
        return $this->strategy->depsoit();
    }
}
