<?php

namespace JamesMowatt\Denarius;

class Currency
{
    public $currencyCode;

    /**
     * Currency constructor.
     * @param $currencyCode
     */
    public function __construct($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
}