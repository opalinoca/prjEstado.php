<?php
$numPrimo = 11;
$numDivisor = 0;

for ($i = 1; $i<= $numPrimo; $i++) {
    if ($numPrimo % $i == 0) {
        $numDivisor++;
    }
}
if($numDivisor == 2) {
    echo("O número digitado é primo.");

} else {
    echo("O número digitado não é primo.");
}
?>