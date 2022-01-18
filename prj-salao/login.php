<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../prj-salao/img/boo.jpg">
  <link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href= "https: //fonts.googleapis.com/css2? family= Libre + Baskerville: wght @ 700 & display="swap" rel ="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title>Boo Hair - Login</title>
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
        div{
            background-image: linear-gradient(#f0beb4, #ffe8f8);
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
            
        }
        input{
            padding: 17px;
            border: none;
            outline: none;
            font-size: 15px;
            align-items: center;
            justify-content: center;
        }

        form input[type="submit"]{
        margin-top: 1rem;
        padding: 0.8rem;
        background: linear-gradient(to left, #1c1c1f) ;
        color: #1c1c1f;
        font-size: 0.9rem;
        font-weight: 300;
        border-radius: 9px;
        transition: all 0.3s ease;
        background-color: #f0beb4;
        }
        .acessar{
            background-color: #f0beb4;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 15px;
            color: white;
            font-size: 15px;
            
        }
        acessar:hover{
            background-color: #f0beb4;
            cursor: pointer;
        }
        h1{
          padding: 15px;
          width: 15px;
          transform: translate(160%,-20%);
          top: 150%;
          left: 50%;
        }
          a.active, a:hover {
          background: #1c1c1f;
          transition: .5s;
          text-decoration: underline;
        }
    </style>
</head>
<body>
  <nav>
    </label>
     <img id="logo" src="../img/boo.jpg" title="Boo Hair" alt="Boo Hair">
         <ul>
      <li><a href="index.php">Início</a></li>
      <li><a href="produtos.php">Produtos</a></li>
      <li><a href="servicos.php">Serviços</a></li>
      <li><a href="galeria.php">Galeria</a></li>
      <li><a class="active" href="login.php">Login</a></li>
    </ul>
  </nav>
    <div>
    <h1>Login</h1>
    <?php
            if(isset($_GET['msg'])){
                echo("<h1>".$_GET['msg']."</h1>");
            }
        ?>
  <form action="verifica-login.php" method="post">
          <input type="text" name="txtlogin" id="txtlogin" placeholder="Informe seu usuário">
          <br> </br>
          <input type="password" name="txtsenha" id="txtsenha" placeholder="Senha">
      <br> </br>
      <input type="submit" value="Acessar Conta">
      </div>
      </div>
</body>
</html>