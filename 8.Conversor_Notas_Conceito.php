<?php

$ConceitoEscolar = 'A';

$mensagem = match ($ConceitoEscolar) {
    'A' => 'Excelente',
    'B' => 'Muito Bom',
    'C' => 'Bom',
    'D' => 'Regular',
    'E' => 'Ruim',
    'F' => 'Muito Ruim',
    default => 'Conceito: Inválido',
};

 echo $mensagem;

?>
