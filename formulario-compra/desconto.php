<!DOCTYPE html>
<head>
   <title>Cadastro da Compras</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="estilo.css" media="screen">
</head>

  <body>
     <?php
     $Produto = $_GET["txtProduto"];
     $categoria = $_GET["pdtCategoria"];
     $valor = $_GET["txtValor"];
     $NomeComprador = $_GET["txtNomeComprador"];
     $CpfComprador = $_GET["txtCpfComprador"];
     $Desconto = $_GET["txtDesconto"];

     $vFinal=$valor-$valor*$Desconto/100;
?>

     <div id="title">
             <h1><strong> CADASTRO <strong></h1>
     </div>

     <div class="principal">
         <?php
         echo("<h3> COMPRA REALIZADA COM SUCESSO! <br> Olá, cliente ". $NomeComprador ."<br> O preço do seu produto com desconto foi: R$". $vFinal ."<br> O produto comprado foi: ". $Produto .". <br><br> A seguir confira os números do seu CPF ;) <br> ". $CpfComprador .".");
        ?>
    </div>

  </body>
</html>


