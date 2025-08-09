<?php

interface PaymentInterface
{
    public function payNow();
    public function paymentProcess();
}

interface LoginInterface
{
    public function loginFirst();

}


class PayPal implements PaymentInterface, LoginInterface
{
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() 
    {
        $this->loginFirst();
        $this->payNow();
    }
    
}
class BankTransfer implements PaymentInterface, LoginInterface
{
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() 
    {
        $this->payNow();
    }
}
class Cash implements PaymentInterface, LoginInterface
{
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() 
    {
        $this->payNow();
    }
}


class BuyProduct
{
    public function pay(PaymentInterface $paymentTypeInterface)
    {   
        $paymentTypeInterface->paymentProcess();
    }

    public function onlinePay(PaymentInterface $paymenTypetInterface)
    {
        $paymenTypetInterface->paymentProcess();
    }
}

$paymentType = new Cash();
$buyProdcut = new BuyProduct();

$buyProdcut->pay($paymentType);
