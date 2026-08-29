<?php

$date = date('20');

switch (true) {
    case ($date >= 0 && $date < 12):
        echo "Bom dia!";
        break;
    case ($date >= 12 && $date < 18):
        echo "Boa tarde!";
        break;
    default:
        echo "Boa noite!";
        break;
}

?>