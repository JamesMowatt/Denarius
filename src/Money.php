<?php

namespace JamesMowatt\Denarius;

use JamesMowatt\Denarius\Exceptions\NotIntegerException;

class Money
{
    public $amount;

    public $currency;

    /**
     * Money constructor.
     * @param $amount
     * @param Currency $currency
     * @throws NotIntegerException
     */
    public function __construct($amount, Currency $currency)
    {
        if (gettype($amount) != 'integer') {
            throw new NotIntegerException;
        }

        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }
}