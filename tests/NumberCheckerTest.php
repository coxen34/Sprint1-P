<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {
        $esPar = new NumberChecker(2);

        $this->assertEquals('true', $esPar->isEven());
    }
    public function testIsPositive()
    {
        $esPositive = new NumberChecker(4);

        $this->assertEquals('true', $esPositive->isPositive());
    }
}
