<?php
    $cpf = $_POST['txtCpf'];

    // echo($cpf . "<br> <br>");

    //removendo os pontos do cpf
    $cpf = str_replace(".","",$cpf);
    //removendo o traço do cpf
    $cpf = str_replace("-","",$cpf);

   

    // //criando um vetor
    $vetorCpf = array();

    //separando os dígitos do cpf um em cada posição do vetor
    
    //length = tamanho/elementos
    for($i = 0; $i < ( strlen($cpf) ); $i++){ 
        //substring = pega um pedaço da string
        $vetorCpf[$i] = substr($cpf,$i,1); 
        // echo("<br>vetor[".$i."] = ".$vetorCpf[$i]);
    }

    //cálculo do 1º dígito do CPF
    $contador = 10;
    $soma1 = 0;
    for($i = 0; $i < 9; $i++){
        $soma1 = $soma1 + ($vetorCpf[$i] * $contador);
        $contador--;
    }
    $digito1 = ($soma1 % 11);
    if ($digito1 < 2){
        $digito1 = 0;
    }
    else{
        $digito1 = 11 - $digito1;
    }

    $contador=11;
$soma2=0;

for($i=0; $i<9; $i++){
    $soma2 = $soma2 + ($vetorCpf[$i] * $contador);
    $contador--;
}

  $soma2 = $soma2+($digito1*$contador);
  $digito2 = ($soma2 % 11);

  if ($digito2<2)
  $digito2=0;    
    else 
    $digito2=11 - $digito2;


    if(($digito1 == $vetorCpf[9]) && ($digito2 == $vetorCpf[10]))
        echo("O CPF de números: " .$cpf. " é: <br><h1> VÁLIDO!<h1>");
    else  
        echo("O CPF de números: " .$cpf. " é: <br><h1> INVÁLIDO!<h1>");
?>