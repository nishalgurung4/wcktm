<?php
namespace Nishal\OOP\Abstraction;

/**
 * Abstraction using Class
 */
class Customer
{
    private string $accountNumber;
    private float $amount;
    private string $name;

    public function balanceInquiry()
    {
        //To do a balance query, only an account number is necessary, 
        //meaning that the other properties are hidden for the balance inquiry method. 
    }

    public function fundTransfer()
    {
        //To transfer the fund, account number and balance are required, 
        //while the remaining attributes for the fund transfer method are hidden.

    }
}