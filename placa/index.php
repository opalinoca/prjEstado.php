<?php

$placa = 1020;
$finalPlaca = $placa % 10;

if($finalPlaca >= 1 && $finalPlaca <= 2) {
    echo("Final da sua placa é: ". $finalPlaca. "<br> então seu rodízio é segunda-feira");

} else if ($finalPlaca > 2 && $finalPlaca <= 4) {
    echo("Final da sua placa é: ". $finalPlaca. "<br> então seu rodízio é terça-feira");

} else if ($finalPlaca >4  && $finalPlaca <= 6) {
    echo("Final da sua placa é: ". $finalPlaca. "<br> então seu rodízio é quarta-feira");

} else if ($finalPlaca >6 && $finalPlaca <= 8) {
    echo("Final da sua placa é: ". $finalPlaca. "<br> então seu rodízio é quinta-feira");

} else {
    echo("Final da sua placa é: ". $finalPlaca. "<br> então seu rodízio é sexta-feira");
}
?>