<?php

$cliente = "Bronze";

echo "Você é: " . $cliente . "\n";

$desconto = match ($cliente) {
    "Bronze" => 5,
    "Prata" => 10,
    "Ouro" => 15,
    "VIP" => 20,
    default => 0,
};

echo "O seu desconto é de: " . $desconto . "%\n";

?>