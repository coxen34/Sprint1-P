<?php

declare(strict_types=1);

final class FuncionsExcsTema2
{

    public static function verificaGrau(float $num1): string
    {

        $resultat = ($num1 * 100) / 10;
        if ($resultat >= 60) {
            $resultat = "Primera divisió";
        } elseif ($resultat >= 45) {
            $resultat = "Segona Divisió";
        } elseif ($resultat >= 33) {
            $resultat = "Tercera divisió";
        } else {
            $resultat = "Reprovarà";
        }
        return $resultat;
    }
}
