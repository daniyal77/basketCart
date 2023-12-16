<?php

namespace App\Http\Controllers;

use App\Service\Payment\Method\Paypal;
use App\Service\Payment\Payment;

class FileImportController extends Controller
{

    public function index ()
    {
        $payment = new Payment(new Paypal());
        dd([
            'Balance'  => $payment->getBalance(),
            'withdraw' => $payment->withdraw(15000),
            'depsoit'  => $payment->depsoit(),
        ]);
    }
}
