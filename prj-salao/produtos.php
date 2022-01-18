<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Boo Hair - Produtos</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="shortcut icon" type="imagex/png" href="../prj-salao/img/boo.jpg">
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

  .btn {
    margin-top: 1rem;
    padding: 0.8rem;
    background: linear-gradient(to left, #1c1c1f);
    color: #1c1c1f;
    font-size: 0.9rem;
    font-weight: 300;
    border-radius: 9px;
    transition: all 0.3s ease;
    background-color: #f0beb4;
  }

  .card-title {
    color: white;
  }

  .card-text {
    color: white;
  }

  .card-body {
    background-color: #1c1c1f;
  }
</style>

<body>
  <nav>
    <img id="logo" src="../prj-salao/img/boo.jpg" title="Boo Hair" alt="Boo Hair">
    <ul>
      <li><a href="index.php">Início</a></li>
      <li><a class="active" href="produtos.php">Produtos</a></li>
      <li><a href="servicos.php">Serviços</a></li>
      <li><a href="galeria.php">Galeria</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <h2>Produtos</h2>
  <center>
    <div class='row'>
      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/shampooskala.png" title="Shampoo Skala" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                SHAMPOO SKALA <br> 325ml - R$ 11,90
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/cremeskala.png" title="Creme Skala" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                CREME SKALA <br> 1000g R$ 7,50
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/condicionadorskala.png" title="Condicionador Skala" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                CONDICIONADOR SKALA <br> 325ml - R$ 10,90
              </p>
              </p>
              </p>
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/kitskala1.png" title="Kit Skala" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                KIT SKALA <br> - R$ 49,00
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
  </center>


  <br>


  <center>
    <div class='row'>
      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/shampooseda.png" title="Shampoo Seda" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                SHAMPOO SEDA <br> 325ml - 16,80
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/cremeseda.png" title="Creme Seda" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                CREME SEDA <br> 300ml - R$ 9,55
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/condicionadorseda.png" title="Condicionador Seda" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                CONDICIONADOR SEDA <br> 325ml - R$ 17,99
              </p>
              </p>
              </p>
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/kitseda.png" title="Kit Seda Shampoo, creme & condicionador" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                KIT SEDA SHAMPOO, CREME & CONDICIONADOR - R$ 56,99
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
  </center>

  <br>

  <center>
    <div class='row'>
      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/cremesalonline2.png" title="Ativador de Cachos" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                ATIVADOR DE CACHOS FUNÇÃO MÁXIMA SALON LINE 400ml - R$ 19,99
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/cremesalonline3.png" title="Ativador de Cachos prolongada" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                ATIVADOR DE CACHOS DEFINIÇÃO PROLONGADA SALON LINE 400ml - R$ 21,00
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/cremesalonline4.png" title="Ativador de cachos day after" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                ATIVADOR DE CACHOS DAY AFTER SALON LINE 400ml - R$ 24,50
              </p>
              </p>
              </p>
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/kitsalonline1.jpg" title="Kit Salon Line" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                KIT SALON LINE <br> TODAS AS LINHAS - R$ 90,15
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
  </center>

  <br>

  <center>


    <div class='row'>
      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/shampooinoar.png" title="Shampoo Inoar" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                SHAMPOO INOAR 500ml - R$ 22,77
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/cremeloreal.png" title="Creme L'oreal" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                CREME L'OREAL 250ml - R$ 23,87
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/condicionadorinoar1.png" title="Condicionador Inoar" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                CONDICIONADOR INOAR 250ml - R$ 24,50
              </p>
              </p>
              </p>
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 17rem;">
          <img src="../prj-salao/img/kitinoar.png" title="Kit Inoar, shampoo & condicionador" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Categoria:</h5>
            <h6>
              <p class="card-text">
                KIT INOAR SHAMPOO & CONDICIONADOR - R$ 67,80
              </p>
            </h6>
            <a href="#" class="btn btn-dark">Comprar</a>
          </div>
        </div>
      </div>
  </center>
  <br>
  <h2> fim </h2>
  <br>


</body>

</html>