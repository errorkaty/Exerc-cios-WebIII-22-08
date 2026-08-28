<?php

 $num1 = 3;
 $num2 = 0;
 $operacao = 'divisao';

switch ($operacao) {
    case 'soma':
        $resultado = $num1 + $num2;
        echo "Resultado da soma: " . $resultado;
        break;
    case 'subtracao':
        $resultado = $num1 - $num2;
        echo "Resultado da subtração: " . $resultado;
        break;
    case 'multiplicacao':
        $resultado = $num1 * $num2;
        echo "Resultado da multiplicação: " . $resultado;
        break;
    case 'divisao':
        if ($num2 == 0) {
            $resultado = "Erro: Divisão por zero!";
            echo $resultado;
        } else {
            $resultado = $num1 / $num2;
            echo "Resultado da divisão: " . $resultado;
        }
        break;
    default:
        $resultado = "Operação inválida!";
}