<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
        <script src="jquery/dist/jquery.min.js"></script>
        <script src="popper/dist/popper.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <style>
        /* Make the image fully responsive */
        .carousel-inner img {
          width: 100%;
          height: 400px;
        }
        .esq{
            height: 700px;
            float: left;
          }
          .dir{
              float: right;
              height: 700px;
          }
          #galeria:hover{
              opacity: 0.6;
          }
  </style>
    </head>
    <body>
        <div class="container-fluid mt-3">
            <img src="img/logo.png">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Empresa<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pacotes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galeria</a>
      </li>
        
        
      
    </ul>
      
      <form method="post" action="usuarios.php">
                                <input type="text" name="username" size="35" placeholder="  Login" />
                                <input type="password" name="password" size="15" placeholder="  Senha" />
                                <input type="submit" value="  Login  " />
                                <input type="button" onClick="javascript: location.href='http://cliente.core-webhosting.com.br/register.php';" value="  Registrar  " />
    
  </div>
</nav>
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="img/arraial.jpg"  >
                      </div>
                      <div class="carousel-item">
                          <img src="img/angra.jpg" >
                      </div>
                      <div class="carousel-item">
                          <img src="img/cabofrio.jpg" >
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
            </div>
            
            <section class="col-4 border mt-2 text-center esq">
                
                <h1 class="text-success">Hoteis</h1>
                <?php
                    for($i=0;$i<6;$i++){
                    echo "<a id='galeria' onmouseover="."document.getElementById('img').src='img/minas.jpg' href='#'><img class='rounded'src='img/arraial.jpg' style='width: 120px; height=120px; margin: 3px 12px;'></a>";
                }
                ?>
                <div class="mt-3  text-left">
                    <img id="img" src="img/caldasnovas.jpg" style="width: 100%; height:175px;" >
                </div>
                <section>
                    FELISSIMO EXCLUSIVE RESORT – DIAMOND LOFT
                    O Diamond Loft é totalmente exclusivo. Tem pé direito duplo e 
                    sala de banho privativa. Em um ambiente acolhedor e convidativo com 
                    todos os serviços do Felissimo Exclusive Hotel.
                </section>
            </section>
            <section class="col-8 border mt-2  dir h6">Viagens
                    <?php
                           include ('conexao.php');
                           $pacote = "select * from imagem"; 
                           $resultado = mysqli_query($con, $pacote);
                           $linha = mysqli_fetch_array($resultado);
                           if($resultado){                               
                               for($i=0;$i<20;$i++){
                                   echo "<a id='galeria' href='#'><img class='rounded'src='uploads/{$linha['nome_imagem']}' style='width: 250px; height=250px; margin: 3px 12px;'></a>";
                               }
                               
                           }
                           
                    ?> 
            </section>
               
        
        
        </div>
        
        <footer>
            <a href="upload.php">Enviar imagens para banco</a>
        </footer>
        
        <script type="text/javascript">
            function galeria(){
                document.getElementById('galeria');
                
            }
        </script>
    </body>
</html>
