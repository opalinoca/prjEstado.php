<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boo Hair - Serviços</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="shortcut icon" type="imagex/png" href="../img/boo.jpg">
</head>

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

  a.active,
  a:hover {
    background: #1c1c1f;
    transition: .5s;

  }

  body {
    font-family: 'Libre Baskerville', serif;
    justify-content: center;
    background: #1c1c1f;
  }

  h1 {
    padding: 15px;
    width: 15px;
    justify-content: center;
    top: 150%;
    left: 50%;
  }

  h2 {
    color: #1c1c1f;
  }
</style>

<body>
  <nav>
    <h2>Serviços</h2>
    <img id="logo" src="../prj-salao/img/boo.jpg" title="Boo Hair" alt="Boo Hair">
    <ul>
      <li><a href="index.php">Início</a></li>
      <li><a href="produtos.php">Produtos</a></li>
      <li><a class="active" href="servicos.php">Serviços</a></li>
      <li><a href="galeria.php">Galeria</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>


</body>

</html>