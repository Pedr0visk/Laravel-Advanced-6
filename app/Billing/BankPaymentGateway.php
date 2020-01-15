<?php

namespace App\Billing;

class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        // Charge the babk
        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => '1212',
            'currency' => $this->currency,
            'discount' => $this->discount
        ];
    }
}
