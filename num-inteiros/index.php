<?php
$num1 = 1;
$num2 = 2;
$num3 = 3;
 
if($num1 > $num2 && $num1 > $num3) {
    echo("O número 1 é o maior número = ". $num1);

} else  if($num2 > $num3) {
    echo("O número 2 é o maior número = ". $num2);

} else {
    echo("O número 3 é o maior número = ". $num3);
}
if($num1 < $num2 && $num1 < $num3) {
    echo("<br><br> O número 1 é o menor número = ". $num1);

} else if($num2 < $num3) {
    echo("<br><br> O número 2 é o menor número = ". $num2);

} else {
    echo("<br> O número 3 é o menor número = ". $num3);
}
?>