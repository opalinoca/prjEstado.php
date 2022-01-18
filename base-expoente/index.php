<?php
$numero = 2;
$expoente = 6;

for ($i = 1; $i < $expoente; $i++) {
    if  ($i == 1) {
        $potencia = $numero;
    }
    $potencia = $potencia * $numero;
   
}
echo("A potência do valor digitado é:". $potencia);
?>