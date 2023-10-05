<?php

use Trabalho\Calculadora;

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{

    private Calculadora $instance;
    private float $valor1 = 4.0;
    private float $valor2 = 2.0;

    public function setUp(): void
    {
        $this->instance = new Calculadora();
    }

    public function testSomar()
    {
        $resultado = $this->instance->somar(
            $this->valor1,
            $this->valor2
        );

        $expect = 6.0;

        $this->assertEquals($resultado, $expect);
    }

    public function testSubtrair()
    {
        $resultado = $this->instance->subtrair(
            $this->valor1,
            $this->valor2
        );

        $expect = 2.0;

        $this->assertEquals($resultado, $expect);
    }

    public function testDivisao()
    {
        $resultado = $this->instance->dividir(
            $this->valor1,
            $this->valor2
        );

        $expect = 2.0;

        $this->assertEquals($resultado, $expect);

    }

    public function testMultiplicacao()
    {
        $resultado = $this->instance->multiplicar(
            $this->valor1,
            $this->valor2
        );

        $expect = 8.0;

        $this->assertEquals($resultado, $expect);

    }
}
