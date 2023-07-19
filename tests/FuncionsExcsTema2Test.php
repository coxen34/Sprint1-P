<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FuncionsExcsTema2Test extends TestCase
{
    public function testVerificaGrau()
    {
        $instancia = new FuncionsExcsTema2();

        $this->assertEquals("Primera divisió", $instancia->verificaGrau( 10.0));
        $this->assertEquals("Segona Divisió", $instancia->verificaGrau(4.5));
        $this->assertEquals("Tercera divisió",$instancia->verificaGrau(3.4));
        $this->assertEquals("Reprovarà", $instancia->verificaGrau(1.0));
    }
}
