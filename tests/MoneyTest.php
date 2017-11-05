<?php

namespace JamesMowatt\Denarius;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     * @expectedException \JamesMowatt\Denarius\Exceptions\NotIntegerException
     * @dataProvider dataFormatProvider()
     *
     * @author James Mowatt <james@james-mowatt.com>
     */
    public function testMoneyDoesNotAcceptDoubleFloatOrString($data)
    {
        $money = new Money($data, new Currency('GBP'));
    }

    public function testMoneyInstantiatesWithInteger()
    {
        $money = new Money(3000, new Currency('GBP'));

        $this->assertEquals(3000, $money->getAmount());
    }

    public function dataFormatProvider()
    {
        return [
            [(double)3.00],
            [(float)3.0],
            ["3.00"],
        ];
    }
}