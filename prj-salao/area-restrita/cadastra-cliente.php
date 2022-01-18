<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Cadastro Cliente</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="shortcut icon" type="imagex/png" href="../area-restrita/img/boo.jpg">
        <style>
            * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        nav {
            background: #1c1c1f;
            height: 150px;
            width: 100%;
        }
        #logo {
            width: 160px;
            height: 150px;
            margin: 0 40px;
        }
        nav ul {
            float: right;
            margin-right: 5px;
        }
        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 2px;
            line-height: 160px;
        }
        nav ul li a {
            color: #fff;
            font-size: 15px;
            padding: 10px 20px;
            border-radius: 3px;
            text-transform: uppercase;
        }
        a.active, a:hover {
            background: #1c1c1f;
            transition: .5s;
           
        }
        body{
            font-family:  'Libre Baskerville', serif;
            justify-content: center;
            background: #1c1c1f;
        }

        h1{
          padding: 15px;
          width: 15px;
          justify-content: center;
          top: 150%;
          left: 50%;
        }
        
        .cliente{
          background-color:  #ecdcca ;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-20%);
          padding: 40px;
          border-radius: 15px;
          color:#1c1c1f;

        }
        input{
          padding: 5px;
          border: none;
          outline: none;
          font-size: 15px;
          position: center;
        }
        
        button{
          background-color: white;
          border: none;
          padding: 15px;
          width: 100%;
          border-radius: 5px;
          color: #1c1c1f;
          cursor: pointer;
        }
        button:houver{
          background-color: #1c1c1f ;
        }

    </style>
    </head>
    <body>

        <?php include_once('../controle.php'); ?>

        <nav>
  <img id="logo" src="../area-restrita/imagem2/boo.jpg" title="Boo Hair" alt="Boo Hair">
  <ul>
  <li><a class="active" href="">Início</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="servicos.php">Serviços</a></li>
        <li><a href="cadastra-cliente.php">Cliente</a></li>
        <li><a href="agendamento.php">Agendamento</a></li>
        <li><a href="../destroi-sessao.php">Sair</a></li>
  </ul>
</nav>
        <div class="cliente">
        <h2>Cadastro Cliente </h2>
        <form method="post" action="#">
				
				<label><h5>Digite o Nome:</h5></label><br>
				<input type="text" placeholder="Nome Cliente" name="txtNomeCli" id="txtNomeCli" size="21px" maxlength="90">
				<br><br>
				<label><h5>Digite o Ano de Nascimento:</h5></label><br>
				<input type="text" placeholder="Nascs Cliente" name="txtAnoCli" id="txtAnoCli" size="8px" maxlength="80">
				<br><br>
				<label><h5>Digite o telefone:</h5></label><br>
				<input type="text" placeholder="Telefone Cliente" name="txtFoneCli" id="txtFoneCli" size="19px" maxlength="80">
				<br><br>
				<label><h5>Digite o endereço:</h5></label><br>
				<input type="text" placeholder="Endereço Cliente" name="txtEndCli" id="txtEndCli" size="18px" maxlength="80">
				<br><br>
				<label><h5>Digite o RG:<h5></label>
				<input type="text" placeholder="RG Cliente" name="txtRgCli" id="txtRgCli" size="25px" maxlength="80">
				<br><br>
				<label><h5>Estado Civil:</h5></label><br>
				<input type="text" placeholder="Estado Civil" name="txtEsciCli" id="txtEsciCli" size="24px" maxlength="80">
				<br><br>
				<label><h5>Observação do Cliente:</h5></label><br>
				<input type="text" placeholder="Observação" name="txtAnotaCli" id="txtAnotaCli" size="14px" maxlength="80">
				<br><br>
				<br>
        <button><h8>Cadastrar</h8></button></div>
				
				
        </form>
 
    </body>
</html>