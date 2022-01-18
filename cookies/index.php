  <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Boutique d'Ali</title>
    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b65b2e;">
      <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../cookies/images/Boutique d'Ali.png" title="Boutique d'Ali" alt="Logo da Loja" width="200" height="100"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <h6>
            <a class="nav-link active" aria-current="page" href="#">Contato</a>
            </li>
              </h6>
            <h6>
            <a class="nav-link active" aria-current="page" href="#">Trocas e Devoluções</a>
            </li>
            </h6>
            <h6>
            <a class="nav-link active" aria-current="page" href="#">Sobre</a>
            </li>
            </li>
            </h6>
            </div>  
             </br> 
             <a class="nav-link active" aria-current="page" href="#" title="Entre ou Cadastre-se">👤</a>
                  <a class="nav-link active" aria-current="page" href="#" title="Seus favoritos">🤍</a> 
                  </form>   
            <form method="POST" action="criar-cookie.php">
              <select name='slcCategory'>
                <option selected disabled value="Selecione">Categorias:</option>
                <option value="1"> Blusas Tricot </option>
                <option value="2"> Cropped's </option>
                <option value="3"> Moda Inverno </option>
                <option value="4"> Conjuntinhos </option>
                <option value="5"> Vestidos </option>
                <input type="submit"  value="🔎 Procurar" class="btn btn-outline-brown"></button>
              </select>
             </form>
            </form>
           </li>
          </ul>
        </div>
      </nav>
    </header>
  <section>
        <?php
                  if(isset($_COOKIE['codCategoria'])){

                    if($_COOKIE['codCategoria'] == 1){
                      
                      echo("
               <div class='row'>
                <div class='col-sm-16 text-dark text-center my-1'>
                  <img src='../cookies/images/Produtos.jpg' title='Produtos' width='230' height='50'>
                </div>
               </div>
               </div>
               <div class='row'>
                 <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/blusa.jpg' title='Blusa Tricot Sobreposição Colorida' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
                 <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/blusa2.jpg' title='Blusa Tricot Pistache' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
                 <div class='col-sm-3'>
                 <div class='card' style='width: 17rem;'>
                    <img src='../cookies/images/blusa3.jpg' title='Blusa Tricot Princesa' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
                 <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/blusa4.jpg' title='Blusa Tricot Vicky' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='row'>
               <div class='col-sm-16 text-dark text-center my-1'>
                 <img src='../cookies/images/outros.jpg' title='Veja também! width=250' height='150'>
               </div>
              </div>
              </div>
             <div class='row'>
             <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido.jpg' title='Vestido Tricot Ciganinha Red' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/blusa.jpg' title='Blusa Tricot Sobreposição Colorida' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
        <div class='card' style='width: 15rem;'>
           <img src='../cookies/images/roupa1.jpg' title='Conjunto Tricot Luxo' class='card-img-top' alt='...'>
           <div class='card-body'>
             <h5 class='card-title'>Categoria:</h5>
             <h6><p class='card-text'>CONJUNTINHOS</p></h6>
             <a href='#' class='btn btn-dark'>Comprar</a>
           </div>
         </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno.jpg' title='Sobretudo Laura' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
     <div class='card' style='width: 15rem;'>
         <img src='../cookies/images/cropped.jpg' title='Cropped Tricot Bico' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>Categoria:</h5>
           <h6><p class='card-text'>CROPPED'S</p></h6>
           <a href='#' class='btn btn-dark'>Comprar</a>
         </div>
       </div>
   </div>
   <div class='col-sm-3'>
   <div class='card' style='width: 15rem;'>
       <img src='../cookies/images/cropped2.jpg' title='Cropped Tricot Algodão Doce Bico' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h5 class='card-title'>Categoria:</h5>
         <h6><p class='card-text'>CROPPED'S</p></h6>
         <a href='#' class='btn btn-dark'>Comprar</a>
       </div>
     </div>
     </div>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa2.jpg' title='Blusa Tricot Pistache' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido2.jpg' title='Vestido Tricot Fashion' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/inverno2.jpg' title='Cardigan Tricot Arco Íris' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>MODA INVERNO</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa2conjunto.jpg' title='Conjunto Tricot Yara' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido3.jpg' title='Vestido Tricot Ciganinha Lua' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
         <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/cropped3.jpg' title='Cropped Tricot Garrafinha' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>CROPPED'S</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa3.jpg' title='Blusa Tricot Princesa' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
             </div>
             <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                   <img src='../cookies/images/inverno3.jpg' title='Sobretudo Tricot Anne' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title'>Categoria:</h5>
                     <h6><p class='card-text'>MODA INVERNO</p></h6>
                     <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
         </div>
      <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa3.jpg' title='Conjunto Tricot Pérola Negra' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/blusa4.jpg' title='Blusa Tricot Vicky' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
         </div> <div class='col-sm-3'>
         <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/cropped4.jpg' title='Cropped Tricot Mousse' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>CROPPED'S</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno4.jpg' title='Poncho Tricot Lorena' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa4conjunto.jpg' title='Conjunto Tricot Helô' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/vestido4.jpg' title='Vestido Tricot Midi Bolsinho' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>VESTIDOS</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
               ");
                    }
                  else if($_COOKIE['codCategoria'] == 2){
                        echo("
                        <div class='row'>
                         <div class='col-sm-16 text-dark text-center my-1'>
                           <img src='../cookies/images/Produtos.jpg' title='Produtos' width='230' height='50'>
                         </div>
                        </div>
                        </div>
                        <div class='row'>
                      <div class='col-sm-3'>
                      <div class='card' style='width: 15rem;'>
                          <img src='../cookies/images/cropped.jpg' title='Cropped Tricot Bico' class='card-img-top' alt='...'>
                          <div class='card-body'>
                            <h5 class='card-title'>Categoria:</h5>
                            <h6><p class='card-text'>CROPPED'S</p></h6>
                            <a href='#' class='btn btn-dark'>Comprar</a>
                          </div>
                        </div>
                    </div>
                    <div class='col-sm-3'>
                    <div class='card' style='width: 15rem;'>
                        <img src='../cookies/images/cropped2.jpg' title='Cropped Tricot Algodão Doce Bico' class='card-img-top' alt='...'>
                        <div class='card-body'>
                          <h5 class='card-title'>Categoria:</h5>
                          <h6><p class='card-text'>CROPPED'S</p></h6>
                          <a href='#' class='btn btn-dark'>Comprar</a>
                        </div>
                      </div>
                      </div>
                     <div class='col-sm-3'>
                  <div class='card' style='width: 15rem;'>
                      <img src='../cookies/images/cropped3.jpg' title='Cropped Tricot Garrafinha' class='card-img-top' alt='...'>
                      <div class='card-body'>
                        <h5 class='card-title'>Categoria:</h5>
                        <h6><p class='card-text'>CROPPED'S</p></h6>
                        <a href='#' class='btn btn-dark'>Comprar</a>
                      </div>
                    </div>
                   </div>
                    <div class='col-sm-3'>
                    <div class='card' style='width: 15rem;'>
                        <img src='../cookies/images/cropped4.jpg' title='Cropped Tricot Mousse' class='card-img-top' alt='...'>
                        <div class='card-body'>
                          <h5 class='card-title'>Categoria:</h5>
                          <h6><p class='card-text'>CROPPED'S</p></h6>
                          <a href='#' class='btn btn-dark'>Comprar</a>
                        </div>
                      </div>
                  </div>
                  <div class='row'>
               <div class='col-sm-16 text-dark text-center my-1'>
                 <img src='../cookies/images/outros.jpg' title='Veja também! width=250' height='150'>
               </div>
              </div>
              </div>
             <div class='row'>
             <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido.jpg' title='Vestido Tricot Ciganinha Red' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/blusa.jpg' title='Blusa Tricot Sobreposição Colorida' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
        <div class='card' style='width: 15rem;'>
           <img src='../cookies/images/roupa1.jpg' title='Conjunto Tricot Luxo' class='card-img-top' alt='...'>
           <div class='card-body'>
             <h5 class='card-title'>Categoria:</h5>
             <h6><p class='card-text'>CONJUNTINHOS</p></h6>
             <a href='#' class='btn btn-dark'>Comprar</a>
           </div>
         </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno.jpg' title='Sobretudo Laura' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
     <div class='card' style='width: 15rem;'>
         <img src='../cookies/images/cropped.jpg' title='Cropped Tricot Bico' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>Categoria:</h5>
           <h6><p class='card-text'>CROPPED'S</p></h6>
           <a href='#' class='btn btn-dark'>Comprar</a>
         </div>
       </div>
   </div>
   <div class='col-sm-3'>
   <div class='card' style='width: 15rem;'>
       <img src='../cookies/images/cropped2.jpg' title='Cropped Tricot Algodão Doce Bico' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h5 class='card-title'>Categoria:</h5>
         <h6><p class='card-text'>CROPPED'S</p></h6>
         <a href='#' class='btn btn-dark'>Comprar</a>
       </div>
     </div>
     </div>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa2.jpg' title='Blusa Tricot Pistache' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido2.jpg' title='Vestido Tricot Fashion' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/inverno2.jpg' title='Cardigan Tricot Arco Íris' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>MODA INVERNO</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa2conjunto.jpg' title='Conjunto Tricot Yara' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido3.jpg' title='Vestido Tricot Ciganinha Lua' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
         <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/cropped3.jpg' title='Cropped Tricot Garrafinha' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>CROPPED'S</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa3.jpg' title='Blusa Tricot Princesa' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
             </div>
             <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                   <img src='../cookies/images/inverno3.jpg' title='Sobretudo Tricot Anne' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title'>Categoria:</h5>
                     <h6><p class='card-text'>MODA INVERNO</p></h6>
                     <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
         </div>
      <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa3.jpg' title='Conjunto Tricot Pérola Negra' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/blusa4.jpg' title='Blusa Tricot Vicky' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
         </div> <div class='col-sm-3'>
         <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/cropped4.jpg' title='Cropped Tricot Mousse' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>CROPPED'S</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno4.jpg' title='Poncho Tricot Lorena' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa4conjunto.jpg' title='Conjunto Tricot Helô' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/vestido4.jpg' title='Vestido Tricot Midi Bolsinho' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>VESTIDOS</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
              ");
                  }

                else if($_COOKIE['codCategoria'] == 3){
                  echo("
                  <div class='row'>
                   <div class='col-sm-16 text-dark text-center my-1'>
                     <img src='../cookies/images/Produtos.jpg' title='Produtos' width='230' height='50'>
                   </div>
                  </div>
                  </div>
                  <div class='row'>
                  <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/inverno.jpg' title='Sobretudo Laura' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>MODA INVERNO</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                  <img src='../cookies/images/inverno2.jpg' title='Cardigan Tricot Arco Íris' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>Categoria:</h5>
                    <h6><p class='card-text'>MODA INVERNO</p></h6>
                    <a href='#' class='btn btn-dark'>Comprar</a>
                  </div>
                </div>
             </div>
             <div class='col-sm-3'>
             <div class='card' style='width: 15rem;'>
                <img src='../cookies/images/inverno3.jpg' title='Sobretudo Tricot Anne' class='card-img-top' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>Categoria:</h5>
                  <h6><p class='card-text'>MODA INVERNO</p></h6>
                  <a href='#' class='btn btn-dark'>Comprar</a>
                </div>
              </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/inverno4.jpg' title='Poncho Tricot Lorena' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>MODA INVERNO</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
         <div class='row'>
               <div class='col-sm-16 text-dark text-center my-1'>
                 <img src='../cookies/images/outros.jpg' title='Veja também! width=250' height='150'>
               </div>
              </div>
              </div>
             <div class='row'>
             <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido.jpg' title='Vestido Tricot Ciganinha Red' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/blusa.jpg' title='Blusa Tricot Sobreposição Colorida' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
        <div class='card' style='width: 15rem;'>
           <img src='../cookies/images/roupa1.jpg' title='Conjunto Tricot Luxo' class='card-img-top' alt='...'>
           <div class='card-body'>
             <h5 class='card-title'>Categoria:</h5>
             <h6><p class='card-text'>CONJUNTINHOS</p></h6>
             <a href='#' class='btn btn-dark'>Comprar</a>
           </div>
         </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno.jpg' title='Sobretudo Laura' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
     <div class='card' style='width: 15rem;'>
         <img src='../cookies/images/cropped.jpg' title='Cropped Tricot Bico' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>Categoria:</h5>
           <h6><p class='card-text'>CROPPED'S</p></h6>
           <a href='#' class='btn btn-dark'>Comprar</a>
         </div>
       </div>
   </div>
   <div class='col-sm-3'>
   <div class='card' style='width: 15rem;'>
       <img src='../cookies/images/cropped2.jpg' title='Cropped Tricot Algodão Doce Bico' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h5 class='card-title'>Categoria:</h5>
         <h6><p class='card-text'>CROPPED'S</p></h6>
         <a href='#' class='btn btn-dark'>Comprar</a>
       </div>
     </div>
     </div>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa2.jpg' title='Blusa Tricot Pistache' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido2.jpg' title='Vestido Tricot Fashion' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/inverno2.jpg' title='Cardigan Tricot Arco Íris' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>MODA INVERNO</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa2conjunto.jpg' title='Conjunto Tricot Yara' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido3.jpg' title='Vestido Tricot Ciganinha Lua' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
         <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/cropped3.jpg' title='Cropped Tricot Garrafinha' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>CROPPED'S</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa3.jpg' title='Blusa Tricot Princesa' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
             </div>
             <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                   <img src='../cookies/images/inverno3.jpg' title='Sobretudo Tricot Anne' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title'>Categoria:</h5>
                     <h6><p class='card-text'>MODA INVERNO</p></h6>
                     <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
         </div>
      <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa3.jpg' title='Conjunto Tricot Pérola Negra' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/blusa4.jpg' title='Blusa Tricot Vicky' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
         </div> <div class='col-sm-3'>
         <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/cropped4.jpg' title='Cropped Tricot Mousse' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>CROPPED'S</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno4.jpg' title='Poncho Tricot Lorena' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa4conjunto.jpg' title='Conjunto Tricot Helô' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/vestido4.jpg' title='Vestido Tricot Midi Bolsinho' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>VESTIDOS</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
         ");
                }
              else if($_COOKIE['codCategoria'] == 4){
                  echo("
                  <div class='row'>
                   <div class='col-sm-16 text-dark text-center my-1'>
                     <img src='../cookies/images/Produtos.jpg' title='Produtos' width='230' height='50'>
                   </div>
                  </div>
                  <div class='row'>
                  <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/roupa1.jpg' title='Conjunto Tricot Luxo' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
                </div>
                <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/roupa2conjunto.jpg' title='Conjunto Tricot Yara' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
                </div>
                <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/roupa3.jpg' title='Conjunto Tricot Pérola Negra' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
                </div>
                <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/roupa4conjunto.jpg' title='Conjunto Tricot Helô' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
                </div>
                <div class='row'>
               <div class='col-sm-16 text-dark text-center my-1'>
                 <img src='../cookies/images/outros.jpg' title='Veja também! width=250' height='150'>
               </div>
              </div>
              </div>
             <div class='row'>
             <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido.jpg' title='Vestido Tricot Ciganinha Red' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/blusa.jpg' title='Blusa Tricot Sobreposição Colorida' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
        <div class='card' style='width: 15rem;'>
           <img src='../cookies/images/roupa1.jpg' title='Conjunto Tricot Luxo' class='card-img-top' alt='...'>
           <div class='card-body'>
             <h5 class='card-title'>Categoria:</h5>
             <h6><p class='card-text'>CONJUNTINHOS</p></h6>
             <a href='#' class='btn btn-dark'>Comprar</a>
           </div>
         </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno.jpg' title='Sobretudo Laura' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
     <div class='card' style='width: 15rem;'>
         <img src='../cookies/images/cropped.jpg' title='Cropped Tricot Bico' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>Categoria:</h5>
           <h6><p class='card-text'>CROPPED'S</p></h6>
           <a href='#' class='btn btn-dark'>Comprar</a>
         </div>
       </div>
   </div>
   <div class='col-sm-3'>
   <div class='card' style='width: 15rem;'>
       <img src='../cookies/images/cropped2.jpg' title='Cropped Tricot Algodão Doce Bico' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h5 class='card-title'>Categoria:</h5>
         <h6><p class='card-text'>CROPPED'S</p></h6>
         <a href='#' class='btn btn-dark'>Comprar</a>
       </div>
     </div>
     </div>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa2.jpg' title='Blusa Tricot Pistache' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido2.jpg' title='Vestido Tricot Fashion' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/inverno2.jpg' title='Cardigan Tricot Arco Íris' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>MODA INVERNO</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa2conjunto.jpg' title='Conjunto Tricot Yara' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido3.jpg' title='Vestido Tricot Ciganinha Lua' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
         <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/cropped3.jpg' title='Cropped Tricot Garrafinha' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>CROPPED'S</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa3.jpg' title='Blusa Tricot Princesa' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
             </div>
             <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                   <img src='../cookies/images/inverno3.jpg' title='Sobretudo Tricot Anne' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title'>Categoria:</h5>
                     <h6><p class='card-text'>MODA INVERNO</p></h6>
                     <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
         </div>
      <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa3.jpg' title='Conjunto Tricot Pérola Negra' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/blusa4.jpg' title='Blusa Tricot Vicky' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
         </div> <div class='col-sm-3'>
         <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/cropped4.jpg' title='Cropped Tricot Mousse' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>CROPPED'S</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno4.jpg' title='Poncho Tricot Lorena' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa4conjunto.jpg' title='Conjunto Tricot Helô' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/vestido4.jpg' title='Vestido Tricot Midi Bolsinho' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>VESTIDOS</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
                  ");
                }
              else if($_COOKIE['codCategoria'] == 5){
                  echo("
                  <div class='row'>
                   <div class='col-sm-16 text-dark text-center my-1'>
                     <img src='../cookies/images/Produtos.jpg' title='Produtos' width='230' height='50'>
                   </div>
                  </div>
                  <div class='row'>
                  <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/vestido.jpg' title='Vestido Tricot Ciganinha Red' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>VESTIDOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/vestido2.jpg' title='Vestido Tricot Fashion' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>VESTIDOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/vestido3.jpg' title='Vestido Tricot Ciganinha Lua' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>VESTIDOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/vestido4.jpg' title='Vestido Tricot Midi Bolsinho' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>VESTIDOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='row'>
               <div class='col-sm-16 text-dark text-center my-1'>
                 <img src='../cookies/images/outros.jpg' title='Veja também! width=250' height='150'>
               </div>
              </div>
              </div>
             <div class='row'>
             <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido.jpg' title='Vestido Tricot Ciganinha Red' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/blusa.jpg' title='Blusa Tricot Sobreposição Colorida' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
        <div class='card' style='width: 15rem;'>
           <img src='../cookies/images/roupa1.jpg' title='Conjunto Tricot Luxo' class='card-img-top' alt='...'>
           <div class='card-body'>
             <h5 class='card-title'>Categoria:</h5>
             <h6><p class='card-text'>CONJUNTINHOS</p></h6>
             <a href='#' class='btn btn-dark'>Comprar</a>
           </div>
         </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno.jpg' title='Sobretudo Laura' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
     <div class='card' style='width: 15rem;'>
         <img src='../cookies/images/cropped.jpg' title='Cropped Tricot Bico' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>Categoria:</h5>
           <h6><p class='card-text'>CROPPED'S</p></h6>
           <a href='#' class='btn btn-dark'>Comprar</a>
         </div>
       </div>
   </div>
   <div class='col-sm-3'>
   <div class='card' style='width: 15rem;'>
       <img src='../cookies/images/cropped2.jpg' title='Cropped Tricot Algodão Doce Bico' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h5 class='card-title'>Categoria:</h5>
         <h6><p class='card-text'>CROPPED'S</p></h6>
         <a href='#' class='btn btn-dark'>Comprar</a>
       </div>
     </div>
     </div>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa2.jpg' title='Blusa Tricot Pistache' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido2.jpg' title='Vestido Tricot Fashion' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/inverno2.jpg' title='Cardigan Tricot Arco Íris' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>MODA INVERNO</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
        </div>
        <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa2conjunto.jpg' title='Conjunto Tricot Yara' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/vestido3.jpg' title='Vestido Tricot Ciganinha Lua' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>VESTIDOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
         <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/cropped3.jpg' title='Cropped Tricot Garrafinha' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>CROPPED'S</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/blusa3.jpg' title='Blusa Tricot Princesa' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
             </div>
             <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                   <img src='../cookies/images/inverno3.jpg' title='Sobretudo Tricot Anne' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title'>Categoria:</h5>
                     <h6><p class='card-text'>MODA INVERNO</p></h6>
                     <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
         </div>
      <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa3.jpg' title='Conjunto Tricot Pérola Negra' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/blusa4.jpg' title='Blusa Tricot Vicky' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
         </div> <div class='col-sm-3'>
         <div class='card' style='width: 15rem;'>
             <img src='../cookies/images/cropped4.jpg' title='Cropped Tricot Mousse' class='card-img-top' alt='...'>
             <div class='card-body'>
               <h5 class='card-title'>Categoria:</h5>
               <h6><p class='card-text'>CROPPED'S</p></h6>
               <a href='#' class='btn btn-dark'>Comprar</a>
             </div>
           </div>
       </div>
       <div class='col-sm-3'>
       <div class='card' style='width: 15rem;'>
          <img src='../cookies/images/inverno4.jpg' title='Poncho Tricot Lorena' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Categoria:</h5>
            <h6><p class='card-text'>MODA INVERNO</p></h6>
            <a href='#' class='btn btn-dark'>Comprar</a>
          </div>
        </div>
     </div>
     <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/roupa4conjunto.jpg' title='Conjunto Tricot Helô' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
           </div>
           <div class='col-sm-3'>
           <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/vestido4.jpg' title='Vestido Tricot Midi Bolsinho' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>VESTIDOS</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
         </div>
               ");
                }
              }else{
                  echo("
                  <div class='row'>
                   <div class='col-sm-16 text-dark text-center my-1'>
                     <img src='../cookies/images/Produtos.jpg' title='Produtos' width='230' height='50'>
                   </div>
                  </div>
                  </div>
                  <div class='row'>
                  <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/vestido.jpg' title='Vestido Tricot Ciganinha Red' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>VESTIDOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                  <img src='../cookies/images/blusa.jpg' title='Blusa Tricot Sobreposição Colorida' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>Categoria:</h5>
                    <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                    <a href='#' class='btn btn-dark'>Comprar</a>
                  </div>
                </div>
             </div>
             <div class='col-sm-3'>
             <div class='card' style='width: 15rem;'>
                <img src='../cookies/images/roupa1.jpg' title='Conjunto Tricot Luxo' class='card-img-top' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>Categoria:</h5>
                  <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                  <a href='#' class='btn btn-dark'>Comprar</a>
                </div>
              </div>
            </div>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/inverno.jpg' title='Sobretudo Laura' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>MODA INVERNO</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width: 15rem;'>
              <img src='../cookies/images/cropped.jpg' title='Cropped Tricot Bico' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>Categoria:</h5>
                <h6><p class='card-text'>CROPPED'S</p></h6>
                <a href='#' class='btn btn-dark'>Comprar</a>
              </div>
            </div>
        </div>
        <div class='col-sm-3'>
        <div class='card' style='width: 15rem;'>
            <img src='../cookies/images/cropped2.jpg' title='Cropped Tricot Algodão Doce Bico' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Categoria:</h5>
              <h6><p class='card-text'>CROPPED'S</p></h6>
              <a href='#' class='btn btn-dark'>Comprar</a>
            </div>
          </div>
          </div>
                 <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/blusa2.jpg' title='Blusa Tricot Pistache' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/vestido2.jpg' title='Vestido Tricot Fashion' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>VESTIDOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
               <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                  <img src='../cookies/images/inverno2.jpg' title='Cardigan Tricot Arco Íris' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>Categoria:</h5>
                    <h6><p class='card-text'>MODA INVERNO</p></h6>
                    <a href='#' class='btn btn-dark'>Comprar</a>
                  </div>
                </div>
             </div>
             <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/roupa2conjunto.jpg' title='Conjunto Tricot Yara' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
                </div>
                <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/vestido3.jpg' title='Vestido Tricot Ciganinha Lua' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>VESTIDOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
               </div>
              <div class='col-sm-3'>
               <div class='card' style='width: 15rem;'>
                   <img src='../cookies/images/cropped3.jpg' title='Cropped Tricot Garrafinha' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title'>Categoria:</h5>
                     <h6><p class='card-text'>CROPPED'S</p></h6>
                     <a href='#' class='btn btn-dark'>Comprar</a>
                   </div>
                 </div>
                 </div>
                 <div class='row'>
                 <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/blusa3.jpg' title='Blusa Tricot Princesa' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class='card' style='width: 15rem;'>
                        <img src='../cookies/images/inverno3.jpg' title='Sobretudo Tricot Anne' class='card-img-top' alt='...'>
                        <div class='card-body'>
                          <h5 class='card-title'>Categoria:</h5>
                          <h6><p class='card-text'>MODA INVERNO</p></h6>
                          <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
              </div>
           <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/roupa3.jpg' title='Conjunto Tricot Pérola Negra' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
                </div>
                <div class='col-sm-3'>
                <div class='card' style='width: 15rem;'>
                   <img src='../cookies/images/blusa4.jpg' title='Blusa Tricot Vicky' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title'>Categoria:</h5>
                     <h6><p class='card-text'>BLUSAS TRICOT</p></h6>
                     <a href='#' class='btn btn-dark'>Comprar</a>
                   </div>
                 </div>
              </div>
              </div> <div class='col-sm-3'>
              <div class='card' style='width: 15rem;'>
                  <img src='../cookies/images/cropped4.jpg' title='Cropped Tricot Mousse' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>Categoria:</h5>
                    <h6><p class='card-text'>CROPPED'S</p></h6>
                    <a href='#' class='btn btn-dark'>Comprar</a>
                  </div>
                </div>
            </div>
            <div class='col-sm-3'>
            <div class='card' style='width: 15rem;'>
               <img src='../cookies/images/inverno4.jpg' title='Poncho Tricot Lorena' class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>Categoria:</h5>
                 <h6><p class='card-text'>MODA INVERNO</p></h6>
                 <a href='#' class='btn btn-dark'>Comprar</a>
               </div>
             </div>
          </div>
          <div class='col-sm-3'>
                 <div class='card' style='width: 15rem;'>
                    <img src='../cookies/images/roupa4conjunto.jpg' title='Conjunto Tricot Helô' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Categoria:</h5>
                      <h6><p class='card-text'>CONJUNTINHOS</p></h6>
                      <a href='#' class='btn btn-dark'>Comprar</a>
                    </div>
                  </div>
                </div>
                <div class='col-sm-3'>
                <div class='card' style='width: 15rem;'>
                   <img src='../cookies/images/vestido4.jpg' title='Vestido Tricot Midi Bolsinho' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title'>Categoria:</h5>
                     <h6><p class='card-text'>VESTIDOS</p></h6>
                     <a href='#' class='btn btn-dark'>Comprar</a>
                   </div>
                 </div>
              </div>
               ");
                }
                ?>
             </div>
        </section>
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b65b2e;">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../cookies/images/instagram.svg"> @daliboutique_ </a>
            <a class="navbar-brand" href="#"><img src="../cookies/images/whatsapp.svg"> Nos dê seu feedback via whatsapp: (00) 00000-0000 <img src="../cookies/images/emoji-heart-eyes.svg"></a>
          </div>
        </nav>
      </body>
 </html>