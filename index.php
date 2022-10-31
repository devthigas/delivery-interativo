<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Thiago Henrique">
  <title>Delivery</title>
  <link rel="icon" type="image/x-icon" href="./img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
  <nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
          <img class="d-inline-block" src="./img/logo.png" width=" 30px">
          Delivery
      </a>
      <a class="text-dark" href="#popup1">
          <div class="d-flex carrinho">
            <big><span class="bi bi-cart-fill">
              <small><small><small><span class="position-absolute top-3 start-90 translate-middle badge rounded-pill bg-danger">
                3     
              </span></small></small></small></span>
            </big>
          </div>
        </a>
    </div>
  </nav>
  <main>
      <div class="row cards">
        <div class="card col-md-3 col-5 azul">
          <h3 class="card-title">PIZZAS</h3>
        </div>
        <div class="card col-md-3 col-5 rosa ">
          <h3 class="card-title">PASTÉIS</h3>
        </div>
        <div class="card col-md-3 col-5 azul-escuro">
          <h3 class="card-title">HOT DOGS</h3>
        </div>
        <div class="card col-md-3 col-5 verde">
          <h3 class="card-title">SANDUICHES</h3>
        </div>
        <div class="card col-md-3 col-5 roxo">
          <h3 class="card-title">BEBIDAS</h3>
        </div>
        <div class="card col-md-3 col-5 vermelho">
          <h3 class="card-title">SOBREMESAS</h3>
        </div>
      </div>
  </main>

<div id="popup1" class="overlay">
  <div class="popup">
    <div class="row">
      <div class="col-9">
        <h3 class="titulo-popup">3 Itens Adicionados</h3>
      </div>
      <div class="col-3">
        <a class="close" href="#">&times;</a>
      </div>
    </div>
    <hr class="linha">
    <div class="conteudo-popup">
      Aqui vamos colocar depois o conteúdo desse popup trazendo os itens que forem adicionados no carrinho
    </div>
  </div>
</div>
<footer class="rodape">
  <span>Rua Tal n 52 - </span>
  <span class><a class="text-success" href="">
    <i class="bi bi-whatsapp"></i>
    (19)9 74047622</a></span>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>