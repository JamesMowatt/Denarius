<?php

namespace JamesMowatt\Denarius;

use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    public function testCurrencyCodeIsSetOnInstantiation(): void
    {
        $currency = new Currency('GBP');

        $this->assertEquals('GBP', $currency->getCurrencyCode());
    }
}