<?php

namespace Trabalho;

use Exception;

class Calculadora
{
    public function somar(float $valor1, float $valor2): float
    {
        return $valor1 + $valor2;
    }

    public function subtrair(float $valor1, float $valor2): float
    {
        return $valor1 - $valor2;
    }

    public function multiplicar(float $valor1, float $valor2): float
    {
        return $valor1 * $valor2;
    }

    /**
     * @throws Exception
     */
    public function dividir(float $valor1, float $valor2): float
    {
        return $valor1 / $valor2;
    }
}
