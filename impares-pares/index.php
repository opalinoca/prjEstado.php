<?php
$num;
$numImpares = 0;
$numPares = 0;
$multip = 1;
$soma = 0;

for($i = 1; $i <= 20; $i++){
    $num = $i % 2;
    if($num == 0) {
        $numPares = $i;
        $multip = $numPares*$multip;
    } else if ($num == 1) {
        $numImpares = $i;
        $soma = $numImpares+$soma;
     }
}
echo("A soma de todos os números ímpares é: ". $soma ."<br> A multiplicação de todos os números pares é: ". $multip .".");
?>
    