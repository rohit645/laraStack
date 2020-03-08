<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(PaymentGateway $paymentgateway){
        dd($paymentgateway->charge(2500));   
    }
}
