<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>FORMS</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen">
    </head>
        <body>
           <h1 id="title"><strong>Boutique d'Ali<strong></h1> 
              <form method="get" action="desconto.php">
              <fieldset class="group">
              <div class="camp">
              <br>
              <label for="nomedoproduto">Nome do produto:</label>
              <input type="text" id="txtProduto" name="txtProduto" placeholder="Ex: Livro.">
              </div>
              <br>
              <div class="camp">
              <label>Categoria:</label>
                <select name="pdtCategoria" id="pdtCategoria" required>
                    <option selected disable value="">Selecione a categoria</option>
                    <option value="1">Eletrônicos</option>
                    <option value="2">Livros</option>
                    <option value="3">Utilidades Domésticas</option>               
                </select>
                </div>
                <br>
                <div class="camp">
              <label for="valordoproduto">Valor do produto:</label>
              <input type="text" id="txtValor" name="txtValor" placeholder="R$" required>
              </div>
              <br> 
              <div class="camp">
              <label for="desconto">Desconto:</label>
              <input type="text" id="txtDesconto" name="txtDesconto" placeholder="%">
              </div>
              <br>
              <form>
              <div class="camp">
              <label for="comprador">Nome do comprador:</label>
              <input type="text" id="txtNomeComprador" name="txtNomeComprador">
              </div>
              <br>
              <form>
              <div class="camp">
              <label for="cpf">CPF do comprador:</label>
              <input type="text" id="txtCpfComprador" name="txtCpfComprador" placeholder="000.000.000-00" required>
              </div>
              <div class="col-12">
              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
              Aceite os termos e condições para finalizar
              </label>
              <br>
              <input class="button" type="submit" value="Finalizar Compra">  
              <br>
              </fieldset>
        </form>
    </body>
</html>