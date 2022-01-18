<?php
$salarioAtual = 3000;
$departamento = 2;

if($departamento == 1) {
    $salarioAtual = $salarioAtual * (1 + 0.15);
    echo("O salário  com aumento é:". $salarioAtual);
}
else {
    if ($salarioAtual< 1750) {
        $salarioAtual = $salarioAtual * (1 + 0.12);
        echo("O salário com aumento é:". $salarioAtual);

    } else if($salarioAtual >= 1750 && $salarioAtual <2000) {
        $salarioAtual = $salarioAtual * (1 + 0.10);
        echo("O salário com aumento é:". $salarioAtual);

    } else if($salarioAtual >= 2000 && $salarioAtual <3000) {
        $salarioAtual = $salarioAtual *  (1 + 0.07);
        echo("O salário com aumento é:". $salarioAtual);

    } else if ($salarioAtual >= 3000) {
        $salarioAtual = $salarioAtual * (1 + 0.05);
        echo("O salário com aumento é:". $salarioAtual);
    }
}
?>