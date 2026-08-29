<?php

$SalarioBase = 2000;
$PorcentualBonus = 10;
$Bonus = ($SalarioBase * $PorcentualBonus) / 100;

echo "O salário base é: R$" . $SalarioBase . " e o bônus é: R$" . $Bonus . "\n";

$SalarioFinal = $SalarioBase + $Bonus;

echo "O salário final do funcionário é: R$ " . $SalarioFinal;

?>